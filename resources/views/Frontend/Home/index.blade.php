@extends('frontend.app')
@section('title', 'Nirjon Phone Repir')
@push('css')

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
    <div class="home-slider owl-carousel owl-theme">
        <div class="single-slider single-slider-bg-1">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-12 text-center">
                                <div class="slider-tittle one">
                                    <h3> Computor Repair Services </h3>
                                    <h1>Repair your Computer <br> laptop &amp; Mobile. </h1>
                                </div>
                                <div class="slider-btn bnt1 text-center"> <a href="services.html" class="box-btn">Services</a> <a href="contact.html" class="border-btn">Contact Us </a> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-slider single-slider-bg-2">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-12 text-center">
                                <div class="slider-tittle one">
                                    <h3> Computor Repair Services </h3>
                                    <h1>Repair your Computer <br> laptop &amp; Mobile. </h1>
                                </div>
                                <div class="slider-btn bnt1 text-center"> <a href="services.html" class="box-btn">Services</a> <a href="contact.html" class="border-btn">Contact Us </a> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Slider End -->

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
            <div class="col-lg-3 col-md-6">
                <!-- Single Service Sec -->
                <div class="single-services-sec">
                    <div class="services-icon">
                        <img src="https://picsum.photos/200" class="img-rounded" alt="Cinque Terre" width="290" height="236">
                    </div>
                    <div class="single-services-content">
                        <h5>Computer Repair</h5>
                        <div class="slider-btn bnt1 text-center"> <a href="services.html" class="box-btn">Repair Now</a>  </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <!-- Single Service Sec -->
                <div class="single-services-sec">
                    <div class="services-icon">
                        <img src="https://picsum.photos/200" class="img-rounded" alt="Cinque Terre" width="290" height="236">
                    </div>
                    <div class="single-services-content">
                        <h5>Computer Repair</h5>
                        <div class="slider-btn bnt1 text-center"> <a href="services.html" class="box-btn">Repair Now</a>  </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <!-- Single Service Sec -->
                <div class="single-services-sec">
                    <div class="services-icon">
                        <img src="https://picsum.photos/200" class="img-rounded" alt="Cinque Terre" width="290" height="236">
                    </div>
                    <div class="single-services-content">
                        <h5>Computer Repair</h5>
                        <div class="slider-btn bnt1 text-center"> <a href="services.html" class="box-btn">Repair Now</a>  </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <!-- Single Service Sec -->
                <div class="single-services-sec">
                    <div class="services-icon">
                        <img src="https://picsum.photos/200" class="img-rounded" alt="Cinque Terre" width="290" height="236">
                    </div>
                    <div class="single-services-content">
                        <h5>Computer Repair</h5>
                        <div class="slider-btn bnt1 text-center"> <a href="services.html" class="box-btn">Repair Now</a>  </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <!-- Single Service Sec -->
                <div class="single-services-sec">
                    <div class="services-icon">
                        <img src="https://picsum.photos/200" class="img-rounded" alt="Cinque Terre" width="290" height="236">
                    </div>
                    <div class="single-services-content">
                        <h5>Computer Repair</h5>
                        <div class="slider-btn bnt1 text-center"> <a href="services.html" class="box-btn">Repair Now</a>  </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <!-- Single Service Sec -->
                <div class="single-services-sec">
                    <div class="services-icon">
                        <img src="https://picsum.photos/200" class="img-rounded" alt="Cinque Terre" width="290" height="236">
                    </div>
                    <div class="single-services-content">
                        <h5>Computer Repair</h5>
                        <div class="slider-btn bnt1 text-center"> <a href="services.html" class="box-btn">Repair Now</a>  </div>
                    </div>
                </div>
            </div>
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
                    <h3>Work With Our Teams</h3>
                    <p>Mauris mattis auctor cursus. Phasellus tellus tellus, imperdiet ut imperdiet eu, iaculis a sem. Donec vehicula luctus nunc in laoreet. Aliquam erat volutpat. Suspendisse vulputate porttitor condimentum. Proin viverra orci a leo
                        suscipit placerat. Sed feugiat posuere semper. Cras vitae mi erat</p>
                    <ul class="list-style-one mt-4">
                        <li>Computer Repair</li>
                        <li>Data Recovery</li>
                        <li>Hardware Update</li>
                        <li>Electronics Repair</li>
                        <li>Mac Repair</li>
                        <li>Efficient Cost</li>
                        <li>Best Materials</li>
                        <li>Quality Support</li>
                    </ul>
                    <a href="about-us.html" class="btn mt-3">Read More</a>
                </div>
            </div>

            <div class="col-sm-12 col-md-12 col-lg-6">
                <div class="about-img">
                    <img src="{{asset('frontend/images/about-img.jpg')}}" class="img-fluid" alt="">
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
            <div class="col-lg-4 col-md-6">
                <div class="single-feature-sec text-center">
                    <div class="service-icon"> <i class="icon mbri-mobile"></i> </div>
                    <div class="service-content">
                        <h2>Mobile Service</h2>
                        <p>Lorem ipsum dolor sit amet csectetur adipiscing elit sed do eiusmod tem incididunt</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-feature-sec text-center">
                    <div class="service-icon"> <i class="icon mbri-laptop"></i> </div>
                    <div class="service-content">
                        <h2>Computer Service</h2>
                        <p>Lorem ipsum dolor sit amet csectetur adipiscing elit sed do eiusmod tem incididunt</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-feature-sec text-center sst-10">
                    <div class="service-icon"> <i class="icon mbri-desktop"></i> </div>
                    <div class="service-content">
                        <h2>Television Service</h2>
                        <p>Lorem ipsum dolor sit amet csectetur adipiscing elit sed do eiusmod tem incididunt</p>
                    </div>
                </div>
            </div>
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
            <div class="single-testimonial-slide">
                <div class="testimonial-item">
                    <div class="testimonial-content"> <span>Lorem ipsum dolor sit amet, coning ctetur adipisicing elit, sed do it on eiusmod tempor incididunt me ut labore et dolore.</span> </div>
                    <div class="testimonial-author">
                        <div class="author-image"> <img src="images/testimonials-img1.png" alt=""> </div>
                        <div class="author-name">
                            <h6 class="title">Les Williams</h6>
                            <span>CEO</span> </div>
                    </div>
                </div>
            </div>
            <div class="single-testimonial-slide">
                <div class="testimonial-item">
                    <div class="testimonial-content"> <span>Lorem ipsum dolor sit amet, coning ctetur adipisicing elit, sed do it on eiusmod tempor incididunt me ut labore et dolore.</span> </div>
                    <div class="testimonial-author">
                        <div class="author-image"> <img src="images/testimonials-img2.png" alt=""> </div>
                        <div class="author-name">
                            <h6 class="title">Jessica Jeni</h6>
                            <span>CEO</span> </div>
                    </div>
                </div>
            </div>
            <div class="single-testimonial-slide">
                <div class="testimonial-item">
                    <div class="testimonial-content"> <span>Lorem ipsum dolor sit amet, coning ctetur adipisicing elit, sed do it on eiusmod tempor incididunt me ut labore et dolore.</span> </div>
                    <div class="testimonial-author">
                        <div class="author-image"> <img src="images/testimonials-img3.png" alt=""> </div>
                        <div class="author-name">
                            <h6 class="title">Jeni Blake</h6>
                            <span>CEO</span> </div>
                    </div>
                </div>
            </div>
            <div class="single-testimonial-slide">
                <div class="testimonial-item">
                    <div class="testimonial-content"> <span>Lorem ipsum dolor sit amet, coning ctetur adipisicing elit, sed do it on eiusmod tempor incididunt me ut labore et dolore.</span> </div>
                    <div class="testimonial-author">
                        <div class="author-image"> <img src="images/testimonials-img2.png" alt=""> </div>
                        <div class="author-name">
                            <h6 class="title">Halim Dawn</h6>
                            <span>CEO</span> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Teatimonials Sec End -->
<!-- Our Team Sec Start -->
<section class="our-team-sec">
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
</section>
<!-- Our Team Sec End -->
<!-- Pricing Table Sec Start -->
<section class="pricing-sec">
    <div class="container">
        <div class="sec-title mb-0">
            <h2>Pricing <span>Table</span></h2>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <!-- Single Pricing Table Sec -->
                <div class="single-ticket">
                    <div class="inner-box">
                        <div class="plan-header">
                            <h2 class="plan-price">$30</h2>
                            <div class="plan-duration">regular pass</div>
                        </div>
                        <ul class="plan-stats">
                            <li>18000 visits per month</li>
                            <li>Free installation </li>
                            <li>All Operating Supported</li>
                            <li>Unlimited Email Addresses</li>
                            <li>24/7 Support</li>
                        </ul>
                        <a href="javascript:void(0)" class="btn">Buy Now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <!-- Single Pricing Table Sec -->
                <div class="single-ticket">
                    <div class="inner-box">
                        <div class="plan-header">
                            <h2 class="plan-price">$60</h2>
                            <div class="plan-duration">regular pass</div>
                        </div>
                        <ul class="plan-stats">
                            <li>18000 visits per month</li>
                            <li>Free installation </li>
                            <li>All Operating Supported</li>
                            <li>Unlimited Email Addresses</li>
                            <li>24/7 Support</li>
                        </ul>
                        <a href="javascript:void(0)" class="btn">Buy Now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <!-- Single Pricing Table Sec -->
                <div class="single-ticket">
                    <div class="inner-box">
                        <div class="plan-header">
                            <h2 class="plan-price">$99</h2>
                            <div class="plan-duration">regular pass</div>
                        </div>
                        <ul class="plan-stats">
                            <li>18000 visits per month</li>
                            <li>Free installation </li>
                            <li>All Operating Supported</li>
                            <li>Unlimited Email Addresses</li>
                            <li>24/7 Support</li>
                        </ul>
                        <a href="javascript:void(0)" class="btn">Buy Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Pricing Table Sec End -->
<!-- Blog Sec Start -->
<section class="blog-sec">
    <div class="container">
        <div class="sec-title mb-0">
            <h2>Our <span>Blog</span></h2>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <!-- Single Blog Sec -->
                <div class="single-blog-post">
                    <div class="post-image"> <a href="javascript:void(0)"> <img src="images/blog-img1.jpg" alt="" title=""> </a> </div>
                    <div class="post-content">
                        <div class="date"> <i class="fa fa-calendar"></i> <span>19 Jul 2020</span> </div>
                        <h3> <a href="blog-details.html">Why do we use it?</a> </h3>
                        <p>Lorem ipsum dolor sit amet csectetur adipiscing elit sed do eiusmod tem incididunt</p>
                        <a href="blog-details.html" class="btn">Read More</a> </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <!-- Single Blog Sec -->
                <div class="single-blog-post">
                    <div class="post-image"> <a href="blog-details.html"> <img src="images/blog-img2.jpg" alt="" title=""> </a> </div>
                    <div class="post-content">
                        <div class="date"> <i class="fa fa-calendar"></i> <span>19 Jul 2020</span> </div>
                        <h3> <a href="blog-details.html">What is Lorem Ipsum?</a> </h3>
                        <p>Lorem ipsum dolor sit amet csectetur adipiscing elit sed do eiusmod tem incididunt</p>
                        <a href="blog-details.html" class="btn">Read More</a> </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <!-- Single Blog Sec -->
                <div class="single-blog-post">
                    <div class="post-image"> <a href="blog-details.html"> <img src="images/blog-img3.jpg" alt="" title=""> </a> </div>
                    <div class="post-content">
                        <div class="date"> <i class="fa fa-calendar"></i> <span>19 Jul 2020</span> </div>
                        <h3> <a href="blog-details.html">Where does it come from?</a> </h3>
                        <p>Lorem ipsum dolor sit amet csectetur adipiscing elit sed do eiusmod tem incididunt</p>
                        <a href="blog-details.html" class="btn">Read More</a> </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog Sec End -->
@endsection
