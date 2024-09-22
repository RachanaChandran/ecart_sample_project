<?php

namespace App\Http\Controllers;

use App\Http\Requests\addProductRequest;
use App\Models\Admin;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
   
    public function Login()
    {
        return view('login');
    }
    public function Dashboard(){
        return view('index');
    }
    public function doLogin(){
        $inputs = ['username'=>request('username'),'password'=> request('password')];
        if(Auth::guard('admin')->attempt($inputs))
        {
            return redirect()->route('dashboard');
        }
        else{
            return redirect()->route('login')->with('error','Username or password is incorrect');
        }
    }
    public function addProduct(addProductRequest $request)
    {
        $input = $request->validated();
        if($request->hasFile('image'))
        {
            $file = request('image');
            $extension = $file->extension();
            $filename = "Product_".rand().".".$extension;
            $request->image->storeAs('images',$filename);
            $input['image'] = $filename;
        }
        // return $input;
        Product::create($input);
        return redirect()->route('dashboard')->with('message','Product Added successfully');
    }
    public function productList(){
        $products = Product::latest()->paginate(6);
        return view('product_list',compact('products'));
    }
    public function editProduct($id)
    {
        
        $product = Product::find($id);
        return view('edit_product',compact('product'));
    }
    public function updateProduct(Request $request,$id)
    {
        $input = $request->all();
        $product = Product::find($id);
        if($request->hasFile('image'))
        {
            $file = request('image');
            $extension = $file->extension();
            $filename = "Product_".rand().".".$extension;
            $request->image->storeAs('images',$filename);
            $input['image'] = $filename;
        }
        $product->update($input);
        return redirect()->route('product.list')->with('message','Product updated successfully');
    }
    public function viewProduct($id)
    {
        $product = Product::find($id);
        return view('view_product',compact('product'));
    }
    public function Logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('login');
    }

}
