@extends('layouts.master')
@section('content')
<section style="background-color: #eee;">

    <div class="container py-5">
      <div class="row justify-content-center">
        <div class="col-md-6 col-lg-6 col-xl-4">
          <div class="card text-black">
            <img src="{{asset('storage/images/'.$product->image)}}"
              class="card-img-top" alt="image" height="300px" width="10px" />
            <div class="card-body">
              <div class="text-center">
                {{-- <h5 class="card-title">Believing is seeing</h5> --}}
                <p class="mb-4"><h3>{{$product->name}}</h3></p>
              </div>
              <div>
                <div class="d-flex justify-content-between">
                  <span>Details:</span><span>{{$product->description}}</span>
                </div>
                <div class="d-flex justify-content-between">
                  <span>Amount</span><span>{{$product->amount}}</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  @endsection