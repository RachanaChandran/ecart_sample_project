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
			<h4 class="panel-title">Add New Product</h4>
			</div>
			<div class="panel-body">
			    <form role="form" action="{{route('product.add')}}" method="post" enctype="multipart/form-data">
					@csrf
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12">
							<div class="form-group">
								<label for="name">Name</label>
					<input type="text" name="name" id="name" class="form-control input-sm" placeholder="Name">
							</div>
						</div>
					</div>
					<div class="form-group">
						<label for="price">Amount</label>
						<input type="text" name="amount" id="amount" class="form-control input-sm" placeholder="&#8377">
					</div>
					<div class="form-group">
						<label for="price">Description</label>
						<input type="textarea" name="description" rows="50" cols="50" class="form-control input-sm" placeholder="Description">
					</div>
					<div class="input-group custom-file-button" >
						<label for="image">Image</label>
						<input type="file" class="form-control"  name="image" id="inputGroupFile">
					</div>
					<div class="form-group">
						<input type="submit" value="Add" class="btn btn-info btn-block">
					</div>
					
			    	</form>
			    </div>
	    	</div>
    	</div>
    </div>
  </div>
@endsection
