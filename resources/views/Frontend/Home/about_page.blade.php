@extends('frontend.app')
@section('title', 'About Us')
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
            <h4>About Us</h4>
        </div>
    </div>
</div>

<div class="container">
    <div class="row product-container">
        <!-- Replace the placeholder data with your actual product data -->

        <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="about-txt">
                {!!$about->description!!}
            </div>
        </div>

        <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="about-img">
                <img src="{{ asset('storage/' . $about->image) }}" class="img-fluid" alt="">
            </div>
        </div>

    </div>
</div>

@endsection
