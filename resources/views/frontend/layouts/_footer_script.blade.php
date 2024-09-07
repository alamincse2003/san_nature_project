<!--<script src="{{asset('frontend')}}/js/jquery-3.6.0.min.js"></script>-->
<!--<script src="{{asset('frontend')}}/js/jquery-migrate-3.3.2.min.js"></script>-->
<!--<script src="{{asset('frontend')}}/js/bootstrap.min.js"></script>-->
<!--<script src="{{asset('frontend')}}/js/jquery.easing.js"></script>-->
<!--<script src="{{asset('frontend')}}/js/jquery-waypoints.js"></script>-->
<!--<script src="{{asset('frontend')}}/js/jquery-validate.js"></script>-->
<!--<script src="{{asset('frontend')}}/js/jquery.prettyPhoto.js"></script>-->
<!--<script src="{{asset('frontend')}}/js/slick.min.js"></script>-->
<!--<script src="{{asset('frontend')}}/js/numinate.min.js"></script>-->
<!--<script src="{{asset('frontend')}}/js/imagesloaded.min.js"></script>-->
<!--<script src="{{asset('frontend')}}/js/jquery-isotope.js"></script>-->
<!--<script src="{{asset('frontend')}}/js/main.js"></script>-->

<!-- modernizr js -->
<script src="{{asset('frontend')}}/assets/js/modernizr-2.8.3.min.js"></script>
<!-- jquery latest version -->
<script src="{{asset('frontend')}}/assets/js/jquery.min.js"></script>
<!-- Bootstrap v4.4.1 js -->
<script src="{{asset('frontend')}}/assets/js/bootstrap.min.js"></script>
<!-- op nav js -->
<script src="{{asset('frontend')}}/assets/js/jquery.nav.js"></script>
<!-- owl.carousel js -->
<script src="{{asset('frontend')}}/assets/js/owl.carousel.min.js"></script>
<!-- isotope.pkgd.min js -->
<script src="{{asset('frontend')}}/assets/js/isotope.pkgd.min.js"></script>
<!-- wow js -->
<script src="{{asset('frontend')}}/assets/js/wow.min.js"></script>
<!-- Skill bar js -->
<script src="{{asset('frontend')}}/assets/js/skill.bars.jquery.js"></script>
<!-- imagesloaded js -->
<script src="{{asset('frontend')}}/assets/js/imagesloaded.pkgd.min.js"></script>
<!-- Slick js -->
<script src="{{asset('frontend')}}/assets/js/slick.min.js"></script>
<!-- waypoints.min js -->
<script src="{{asset('frontend')}}/assets/js/waypoints.min.js"></script>
<!-- magnific popup js -->
<script src="{{asset('frontend')}}/assets/js/jquery.magnific-popup.min.js"></script>
<!-- counterup.min js -->
<script src="{{asset('frontend')}}/assets/js/jquery.counterup.min.js"></script>
<!-- Nivo slider js -->
<script src="{{asset('frontend')}}/assets/inc/custom-slider/js/jquery.nivo.slider.js"></script>
<!-- contact form js -->
<script src="{{asset('frontend')}}/assets/js/contact.form.js"></script>
<!-- main js -->
<script src="{{asset('frontend')}}/assets/js/main.js"></script>
   {{--  sweetAlert  --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
    @if(Session::has('success'))
    Swal.fire({
        position: 'center',
        icon: 'success',
        title: "{{ session('success') }}",
        showConfirmButton: false,
        timer: 1500
    })
    @elseif(Session::has('error'))
    Swal.fire({
    icon: 'error',
    title: 'Oops...',
    text: 'Something went wrong!',
})
@endif
</script>
@stack('mainJs')
