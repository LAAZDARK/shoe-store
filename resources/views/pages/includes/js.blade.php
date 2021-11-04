

{{-- frameworks --}}
<script src="https://unpkg.com/vue@next"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>





{{-- Plugins --}}
<script src="{{ asset('assets/js/vendor/jquery-1.12.0.min.js')}}"></script>
<script src="{{ asset('assets/js/popper.js')}}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{ asset('assets/js/isotope.pkgd.min.js')}}"></script>
<script src="{{ asset('assets/js/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{ asset('assets/js/jquery.counterup.min.js')}}"></script>
<script src="{{ asset('assets/js/waypoints.min.js')}}"></script>
<script src="{{ asset('assets/js/owl.carousel.min.js')}}"></script>
<script src="{{ asset('assets/js/plugins.js')}}"></script>
<script src="{{ asset('assets/js/main.js')}}"></script>

@stack('js-lib')

{{-- <script src="{{asset('js/archivo.js')}}"></script> --}}
<script src="{{asset('assets/js/shopping-cart.js')}}"></script>
<script src="{{asset('assets/js/cart.js')}}"></script>
<script src="{{asset('assets/js/cart-dashboard.js')}}"></script>
@stack('js-script')
</body>

