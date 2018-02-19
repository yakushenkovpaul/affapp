<!-- FOOTER -->
<footer class="copyRightDashboard">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <p>Copyright © 2016. All Rights Reserved</p>
            </div>
        </div>
    </div>
</footer>
</div>

</div>

<!--
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            @include('partials.errors')
            @include('partials.message')
        </div>
    </div>
</div>
-->

<script type="text/javascript">
    var _token = '{!! Session::token() !!}';
    var _url = '{!! url("/") !!}';
</script>

<!-- JAVASCRIPTS -->

<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('plugins/smoothscroll/SmoothScroll.min.js') }}"></script>
<script src="{{ asset('plugins/waypoints/waypoints.min.js') }}"></script>
<script src="{{ asset('plugins/counter-up/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('plugins/datepicker/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('plugins/selectbox/jquery.selectbox-0.1.3.min.js') }}"></script>
<script src="{{ asset('plugins/rwdtable/js/rwd-table.min.js') }}"></script>
<script src="{{ asset('plugins/owl-carousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('plugins/isotope/isotope.min.js') }}"></script>
<script src="{{ asset('plugins/fancybox/jquery.fancybox.pack.js') }}"></script>
<script src="{{ asset('plugins/isotope/isotope-triger.min.js') }}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBEDfNcQRmKQEyulDN8nGWjLYPm8s4YB58"></script>
<script src="{{ asset('js/map.js') }}"></script>
<script src="{{ asset('js/_searchmap.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>

@if (isset($graphs))
    <!-- Flot -->
    <script src="{{ asset('plugins/flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('plugins/flot/jquery.flot.time.js') }}"></script>
    <script src="{{ asset('js/chart.js') }}"></script>
@endif


</body>

</html>
