@if (!\Request::is('register') && !\Request::is('login') && !\Request::is('password/*'))
    @include('modals.login')
@endif


<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<!-- JAVASCRIPTS -->
<script src="{{ asset('plugins/jquery/jquery.min.js?rnd=12') }}"></script>
<script src="{{ asset('plugins/jquery-ui/jquery-ui.min.js?rnd=12') }}"></script>
<script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js?rnd=12') }}"></script>
<script src="{{ asset('plugins/smoothscroll/SmoothScroll.min.js?rnd=12') }}"></script>
<script src="{{ asset('plugins/waypoints/waypoints.min.js?rnd=12') }}"></script>
<script src="{{ asset('plugins/counter-up/jquery.counterup.min.js?rnd=12') }}"></script>
<script src="{{ asset('plugins/datepicker/bootstrap-datepicker.min.js?rnd=12') }}"></script>
<script src="{{ asset('plugins/selectbox/jquery.selectbox-0.1.3.min.js?rnd=12') }}"></script>
<script src="{{ asset('plugins/owl-carousel/owl.carousel.min.js?rnd=12') }}"></script>
<script src="{{ asset('plugins/isotope/isotope.min.js?rnd=12') }}"></script>
<script src="{{ asset('plugins/fancybox/jquery.fancybox.pack.js?rnd=12') }}"></script>
<script src="{{ asset('plugins/isotope/isotope-triger.min.js?rnd=12') }}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBEDfNcQRmKQEyulDN8nGWjLYPm8s4YB58"></script>
<script src="{{ asset('plugins/map/js/rich-marker.js?rnd=12') }}"></script>
<script src="{{ asset('plugins/map/js/infobox_packed.js?rnd=12') }}"></script>
<script src="{{ asset('js/single-map.js?rnd=12') }}"></script>
<script src="{{ asset('js/map.js?rnd=12') }}"></script>
<script src="{{ asset('js/notify.min.js?rnd=12') }}"></script>
<script src="{{ asset('js/custom.js?rnd=12') }}"></script>
<script src="{{ asset('js/frontend.js?rnd=12') }}"></script>
</body>
</html>