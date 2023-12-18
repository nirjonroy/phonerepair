@extends('frontend.app')
@section('title', 'Your Product Detail')
@push('css')

<style>
    .banner {
      display: flex;
      position: relative;
      width: 100%;
      height: 400px; /* Set your desired height */
      background:  rgb(118 182 239 / 50%) !important; /* Adjust the alpha value for transparency */
      color: #fff; /* Text color */
      overflow: hidden;
    }

    .banner img {
      width: 50%;
      height: 100%;
      object-fit: cover;
    }

    .text-container {
      flex: 1;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      padding: 20px;
    }

    .text {
      font-size: 24px;
      font-weight: bold;
      margin-bottom: 10px;
    }
</style>

@endpush
@section('content')

<div class="container-fluid p-0">
    <div class="banner">
      <!-- Replace 'your-image.jpg' with the path to your image -->
      <img src="{{ asset('storage/' . $services->serviceImage) }}" alt="Banner Image">

      <div class="text-container">
        <div class="text">{{$services->serviceName}}</div>
        <div class="text">{{$services->serviceNumber}}</div>
        <a href="{{route('contact.us')}}" class="btn btn-danger">Book Appoinment Now</a>

      </div>
    </div>
</div>



<!-- Your other content goes here -->

@endsection
