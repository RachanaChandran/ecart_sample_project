@extends('layouts.master')
@section('content')
  <div class="container">
    @if(session()->has('message'))
      <p class="alert alert-info " id="success_message">{{session()->get('message')}}</p>
    @endif
    <div class="row centered-form">
      <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
        <div class="panel panel-default">
        	<div class="panel-heading">
			    <h4 class="panel-title">Edit Product</h4>
		    </div>
			<div class="panel-body">
			    <form role="form" action="{{route('product.update',$product->id)}}" method="post" enctype="multipart/form-data">
				@csrf
                <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" value="{{$product->name}}"class="form-control input-sm" placeholder="Name">
                </div>
            
                <div class="form-group">
                    <label for="price">Amount</label>
                    <input type="text" name="amount" id="amount" value="{{$product->amount}}" class="form-control input-sm" placeholder="&#8377">
                </div>
                <div class="form-group">
                <label for="price">Description</label>
                    <input type="textarea" name="description" value="{{$product->description}}" rows="50" cols="50" class="form-control input-sm" placeholder="Description">
                </div>
                <div class="input-group custom-file-button">
                    <label for="image">Image</label>
                    <div class="col-md-12">
                        <img src="{{asset('storage/images/'.$product->image)}}" width="50px" height="50px">
                    </div>
                    <input type="file" class="form-control"  name="image" id="inputGroupFile">
                </div>
                <div class="form-group">
                    <input type="submit" value="update" class="btn btn-info btn-block">
                </div>
			    
			    </form>
		        </div>
	        </div>
        </div>
    </div>
</div>
@endsection
