 <!-- Footer Sec Start -->
 <footer class="footer">
    <!-- Footer Top -->
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Footer About -->
                    <div class="single-widget footer-about widget">
                        <div class="logo">
                            <h3 class="widget-title">About Us</h3>
                        </div>
                        <div class="footer-widget-about-description">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown book.</p>
                        </div>
                        <div class="social">
                            <!-- Social Icons -->
                            <ul class="social-icons">
                                <li><a class="facebook" href="javascript:void(0)" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a class="twitter" href="javascript:void(0)" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                <li><a class="linkedin" href="javascript:void(0)" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                <li><a class="pinterest" href="javascript:void(0)" target="_blank"><i class="fa fa-pinterest-p"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!--/ End Footer About -->
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <!-- Footer Links -->
                    <div class="single-widget f-link widget">
                        <h3 class="widget-title">Company</h3>
                        <ul>
                            <li><a href="{{route('aboutPage')}}">About Us</a></li>
                            <li><a href="">Our Services</a></li>
                            <li><a href="">Gallery</a></li>

                            <li><a href="{{route('contact.us')}}">Contact us</a></li>
                        </ul>
                    </div>
                    <!--/ End Footer Links -->
                </div>

                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Footer Contact -->
                    <div class="single-widget footer_contact widget">
                        <h3 class="widget-title">Contact</h3>
                        <p>Beatae vitae dicta sunt explicabo nemo enim ipsam voluptatem</p>
                        <ul class="address-widget-list">
                            <li class="footer-mobile-number"><i class="fa fa-phone"></i>+(010) 125-4985-214</li>
                            <li class="footer-mobile-number"><i class="fa fa-envelope"></i>info@yoursite.com</li>
                            <li class="footer-mobile-number"><i class="fa fa-map-marker"></i> 158 Main road, San Francisco, USA 102</li>
                        </ul>
                    </div>
                    <!--/ End Footer Contact -->
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="copyright-content">
                        <!-- Copyright Text -->
                        <p>&copy; <span id="year"></span> Nirjon . Designed By Nirjon Roy</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ End Copyright -->
</footer>
<!-- Footer Sec End -->
@include('frontend.partials.js')
</body>
</html>
