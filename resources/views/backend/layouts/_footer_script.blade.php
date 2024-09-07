{{-- BEGIN: Vendor JS --}}
<script src="{{ asset('') }}app-assets/vendors/js/vendors.min.js"></script>
<script src="{{ asset('') }}app-assets/fonts/LivIconsEvo/js/LivIconsEvo.tools.js"></script>
<script src="{{ asset('') }}app-assets/fonts/LivIconsEvo/js/LivIconsEvo.defaults.js"></script>
<script src="{{ asset('') }}app-assets/fonts/LivIconsEvo/js/LivIconsEvo.min.js"></script>

<!-- BEGIN: Page Vendor JS-->
@yield('pageVendorJS')

{{-- BEGIN: Theme JS --}}
<script src="{{ asset('') }}app-assets/js/core/app-menu.js"></script>
<script src="{{ asset('') }}app-assets/js/core/app.js"></script>
<script src="{{ asset('') }}app-assets/js/scripts/components.js"></script>
<script src="{{ asset('') }}app-assets/js/scripts/footer.js"></script>
{{-- BEGIN: Page JS --}}
@yield('pageJS')

