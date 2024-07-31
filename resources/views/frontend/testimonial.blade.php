@extends('frontend.master')
@push('content')
<div class="card" style="width:400px">
    <img class="card-img-top" src="{{asset('asset/banner1.jpg')}}" alt="Card image">
    <div class="card-body">
      <h4 class="card-title">John Doe</h4>
      <p class="card-text">Some example text.</p>
      <a href="#" class="btn btn-primary">See Profile</a>
    </div>
  </div>
@endpush
