@extends('layouts.master')
@section('content')
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header border-0">
                <h3 class="card-title">Products</h3>
              </div>
              <div class="card-body table-responsive p-0">
                <table class="table table-striped table-valign-middle">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Amount</th>
                    <th>Image</th>
                    <th>Actions</th>
                  </tr>
                  </thead>
                  <tbody>
                   @foreach ($products as $product)
                      <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$product->name}}</td>
                        <td>{{$product->amount}}</td>
                        <td><img src="{{asset('storage/images/'.$product->image)}}" alt="image" width="50px" height="50px"></td>
                        <td>
                          <a href="{{route('product.edit',$product->id)}}" type="button" class="btn btn-primary">Edit</a>
                          <a href="{{route('product.view',$product->id)}}" type="button" class="btn btn-secondary">View</a>
                        </td>
                      </tr>
                   @endforeach
                  </tbody>
                </table>
              </div>
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col-md-6 -->
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid --> 
    </div>
{{$products->links()}}
    @endsection