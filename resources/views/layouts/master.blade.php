
@include('includes.head')
    <!-- Navigation bar -->
    @include('includes.nav')

    @yield('content')


    <!-- Site footer -->
    @include('includes.footer')
    <!-- END Site footer -->
    <!-- Back to top button -->
    <a id="scroll-up" href="#"><i class="ti-angle-up"></i></a>
    <!-- END Back to top button -->
    <!-- Scripts -->
    <script src="{{ asset('assets/js/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <script src="{{ asset('assets/js/snackbar.js') }}"></script>
    <script src="{{ asset('assets/js/mmenu.min.js') }}"></script>

    </body>
</html>
