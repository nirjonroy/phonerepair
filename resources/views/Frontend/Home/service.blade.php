@extends('frontend.app')
@section('title', 'Nirjon Phone Repair')
@push('css')

<style>
    /* Customize the banner style */
    .banner {
        position: relative;
        text-align: center;
        color: #fff; /* Text color */
    }

    /* Style for the image */
    .banner img {
        width: 100%;
        height: 300px;
    }

    /* Style for the centered text */
    .banner-text {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    /* Style for the product section */
    .product-container {
        margin-top: 20px;
    }

    .product {
        margin-bottom: 20px;
    }

    .product img {
        width: 100%;
        height: auto;
    }
</style>

@endpush
@section('content')
<div class="container-fluid p-0">
    <div class="banner">
        <img src="{{ asset('frontend/images/service_page_banner.jpg') }}" alt="Banner Image">
        <div class="banner-text">
            <h4>{{ $service->name }}</h4>
        </div>
    </div>
</div>

<div class="container">
    <div class="row product-container">
        <!-- Replace the placeholder data with your actual product data -->
        @foreach($services as $product)
        <div class="col-md-3 product">
            <img src="{{ asset('storage/' . $product->serviceImage) }}" alt="{{ $product->serviceName }}">
            <h5>{{ $product->serviceName }}</h5>
            <a href="{{route('serviceDetails', $product->serviceSlug)}}" class="btn btn-primary">Repair</a>
        </div>
        @endforeach
    </div>
</div>

@endsection
