<script src="{{asset('frontend/js/jquery-min.js')}}"></script>
    <script src="{{asset('frontend/js/popper.min.js')}}"></script>
    <!--jquery js -->
    <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
    <!--jquery js -->
    <script src="{{asset('frontend/js/plugins.js')}}"></script>
    <!--Fontawesome js -->
    <script src="{{asset('frontend/js/fontawesome.js')}}"></script>
    <!--Owl js -->
    <script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
    <!-- MagnificPopup JS -->
    <script src="{{asset('frontend/js/jquery.magnific-popup.min.js')}}"></script>
    <!--Meanmenu js -->
    <script src="{{asset('frontend/js/jquery.meanmenu.min.js')}}"></script>
    <!--Slick js -->
    <script src="{{asset('frontend/js/slick.min.js')}}"></script>
    <!--jquery js -->
    <script src="{{asset('frontend/js/custom.js')}}"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        window.onload = function() {
            @if(session('success'))
                Swal.fire({
                    icon: 'success',
                    title: '{{ session('success') }}',
                    showConfirmButton: false,
                    timer: 1500
                });
            @endif
        }
    </script>
