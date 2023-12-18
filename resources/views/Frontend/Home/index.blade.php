@extends('frontend.app')
@section('title', 'Nirjon Phone Repir')
@push('css')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
<style>
.owl-next{

}
.owl-carousel .owl-nav button.owl-next{
    background: #ffffff !important;
}
.owl-carousel .owl-nav button.owl-prev{
    background: #ffffff !important;
}
</style>
@endpush
@section('content')

<!-- Quote Section -->
<div class="quote-part mfp-hide" id="quote-popup">
    <div class="container">
        <div class="section-title"> <span class="section-span">Get A Quote</span> </div>
        <div class="row">
            <div class="col-lg-12">
                <form class="quote-form">
                    <div class="row">
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="Name" required>
                        </div>
                        <div class="col-md">
                            <input type="text" class="form-control" placeholder="Email" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <input type="text" class="form-control" placeholder="Subject" required>
                        </div>
                        <div class="col-md">
                            <input type="text" class="form-control" placeholder="Job Tittle" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" placeholder="Message" rows="4" required></textarea>
                    </div>
                    <button type="submit" class="btn">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Slider area Start -->
<section class="slider-area">
    <div class="home-slider owl-carousel owl-theme" data-autoplay="true" data-autoplay-speed="1000" data-loop="true">
        @foreach($sliders as $slider)
            <div class="single-slider single-slider-bg-{{$loop->iteration}}" style="background: url('{{ asset('storage/' . $slider->image) }}'); background-size: cover; background-position: center;">
                <div class="d-table">
                    <div class="d-table-cell">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-12 text-center">
                                    <div class="slider-tittle one" style="color: #000000;">
                                        <p>{{ $slider->title }}</p>
                                        <h5>{{ $slider->paragraph }}</h5>
                                    </div>
                                    <div class="slider-btn bnt1 text-center">
                                        <a href="" class="box-btn">Services</a>
                                        <a href="" class="border-btn">Contact Us</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>



<!-- CTA Sec Start -->
<section class="cta-section">
    <div class="container">
        <div class="row">
            <div class="column col-xl-12  col-md-12">
                <h1>What Can We Fix For You Today? </h1>
            </div>

        </div>
    </div>
</section>
<!-- CTA Sec End -->
<!-- Service Sec Start -->
<section class="service-sec">
    <div class="container-fluid">
        {{-- <div class="sec-title mb-0">
            <h2>Our <span>Services</span></h2>
        </div> --}}
        <div class="row">
            @foreach($services as $service)
            <div class="col-lg-3 col-md-6">
                <!-- Single Service Sec -->
                <div class="single-services-sec">
                    <div class="services-icon">
                        <img src="{{ asset('storage/' . $service->serviceImage) }}" class="img-rounded" alt="Cinque Terre" width="290" height="236">
                    </div>
                    <div class="single-services-content">
                        <h5>{{$service->serviceName}}</h5>
                        <div class="slider-btn bnt1 text-center"> <a href="{{route('serviceDetails', $service->serviceSlug)}}" class="box-btn">Repair Now</a>  </div>
                    </div>
                </div>
            </div>
            @endforeach


        </div>
    </div>
</section>
<!--  Service Sec End -->
<!-- About Area area Start -->
<section class="about-sec">
    <div class="container">
        <div class="row">

            <div class="col-sm-12 col-md-12 col-lg-6">
                <div class="about-txt">
                    {!!$about->description!!}
                    <a href="{{route('aboutPage')}}" class="btn mt-3">Read More</a>
                </div>
            </div>

            <div class="col-sm-12 col-md-12 col-lg-6">
                <div class="about-img">
                    <img src="{{ asset('storage/' . $about->image) }}" class="img-fluid" alt="">
                </div>
            </div>

        </div>
    </div>
</section>
<!-- About Area area End -->



<!-- Service area Start -->
<section class="feature-area">
    <div class="container">
        <div class="sec-title">
            <h2>WHY  <span>CHOOSE US</span></h2>
        </div>
        <div class="row">
            @foreach($why_choose as $choose)
            <div class="col-lg-4 col-md-6">
                <div class="single-feature-sec text-center">
                    <div class="service-icon">
                        <img src="{{ asset('storage/' . $choose->logo) }}" alt="" srcset="" style="width:50px; height:50px; border-radius:50px ">
                    </div>
                    <div class="service-content">
                        <h2>{{$choose->title}}</h2>
                        <p>{{$choose->text}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- Service Area End -->

<!-- Teatimonials Sec Start -->
<section class="testimonial-sec">
    <div class="container">
        <div class="sec-title">
            <h2>Client <span>Testimonials</span></h2>
        </div>
        <div class="indurance-testimonial-slider">
            @foreach($testimonials as $testimonial)
            <div class="single-testimonial-slide">
                <div class="testimonial-item">
                    <div class="testimonial-content"> <span>{{$testimonial->message}}</span> </div>
                    <div class="testimonial-author">
                        <div class="author-image"> <img src="{{ asset('storage/' . $testimonial->image) }}" alt="" style="width:50px; height:50px; border-radius:50px"> </div>
                        <div class="author-name">
                            <h6 class="title">{{$testimonial->name}}</h6>
                            <span>{{$testimonial->designation}}</span> </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>
<!-- Teatimonials Sec End -->
<!-- Our Team Sec Start -->
{{-- <section class="our-team-sec">
    <div class="container">
        <div class="sec-title mb-0">
            <h2>Our <span>Team</span></h2>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <!-- Single Our Team Sec -->
                <div class="team">
                    <div class="team-image"> <img src="images/our-team1.jpg" alt="">
                        <ul>
                            <li><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="javascript:void(0)"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="javascript:void(0)"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                    <div class="team-info">
                        <h5><a href="javascript:void(0)">Les Williams</a></h5>
                        <span>Our Staff</span> </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <!-- Single Our Team Sec -->
                <div class="team">
                    <div class="team-image"> <img src="images/our-team2.jpg" alt="">
                        <ul>
                            <li><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="javascript:void(0)"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="javascript:void(0)"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                    <div class="team-info">
                        <h5><a href="javascript:void(0)">James Rocky</a></h5>
                        <span>Our Staff</span> </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <!-- Single Our Team Sec -->
                <div class="team">
                    <div class="team-image"> <img src="images/our-team3.jpg" alt="">
                        <ul>
                            <li><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="javascript:void(0)"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="javascript:void(0)"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                    <div class="team-info">
                        <h5><a href="javascript:void(0)">John Smith</a></h5>
                        <span>Our Staff</span> </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <!-- Single Our Team Sec -->
                <div class="team">
                    <div class="team-image"> <img src="images/our-team4.jpg" alt="">
                        <ul>
                            <li><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="javascript:void(0)"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="javascript:void(0)"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                    <div class="team-info">
                        <h5><a href="javascript:void(0)">Halim Dawn</a></h5>
                        <span>Our Staff</span> </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<!-- Our Team Sec End -->
<!-- Pricing Table Sec Start -->
<section class="pricing-sec">
    <div class="container">
        <div class="sec-title mb-0">
            <h2>Get <span>in Touch</span></h2>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <!-- Single Pricing Table Sec -->
                <div class="single-ticket">
                    <div class="inner-box">
                        <form action="{{route('submit.contact')}}" method="post">
                            @csrf
                            <div class="container">
                             <div class="row">

                                <div class="col-md-6">
                                <label for="name"><b>Name</b></label>
                                <input type="text" placeholder="Enter name" name="name" id="" required class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label for="name"><b>E-mail</b></label>
                                    <input type="email" placeholder="Enter Email" name="email" id="" required class="form-control">
                                </div>
                                <div class="col-md-12">
                                    <label for="name"><b>Phone</b></label>
                                    <input type="number" placeholder="Enter Phone" name="phone" id="" required class="form-control">
                                </div>
                                <div class="col-md-12">
                                    <label for="name"><b>Address</b></label>
                                    <input type="text" placeholder="Enter Address" name="address" id="" required class="form-control">
                                </div>
                                <div class="col-md-12">
                                    <label for="name"><b>Subject</b></label>
                                    <input type="text" placeholder="Enter Subject" name="subject" id="" required class="form-control">
                                </div>
                                <div class="col-md-12">
                                    <label for="name"><b>Message</b></label>
                                    <textarea name="message" id="" cols="100" rows="10"></textarea>
                                </div>
                                <div class="col-md-12"></div>




                                <div class="float-right">
                                    <input type="submit" value="submit" class="btn btn-success">

                                </div>

                              </div>
                             </div>

                          </form>

                    </div>
                </div>
            </div>


        </div>
    </div>
</section>
<!-- Pricing Table Sec End -->


@push('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<!-- Initialize Owl Carousel -->
<script>
    $(document).ready(function(){
        $(".owl-carousel").owlCarousel();
    });
</script>

@endpush
@endsection
