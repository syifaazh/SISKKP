@include('layouts.koordinator.navbar')
@include('layouts.koordinator.sidebar')
<div id="layoutSidenav_content">
    <main>
        <div class="pcoded-content">
            <div class="pcoded-inner-content">
                <div class="page-wrapper">
                    <div class="page-body">
                        <div class="row">
                            @yield('content')

                            <!--- yield ini adalah mendeklarasian yang akan diisi konten ketika yieldnya dipanggil
                        didalam konten masing-masing, contoh yield yang diatas menggunakan value content-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>


<!-- Required Jquery -->
<script type="text/javascript" src="{{asset('assets/js/jquery/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/jquery-ui/jquery-ui.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/popper.js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/bootstrap/js/bootstrap.min.js')}}"></script> <!--
                        jquery slimscroll js -->
<script type="text/javascript" src="{{asset('assets/js/jquery-slimscroll/jquery.slimscroll.js')}}"></script>
<!-- modernizr js -->
<script type="text/javascript" src="{{asset('assets/js/modernizr/modernizr.js')}}"></script> <!-- am chart -->
<script src="{{asset('assets/pages/widget/amchart/amcharts.min.js')}}"></script>
<script src="{{asset('assets/pages/widget/amchart/serial.min.js')}}"></script> <!-- Todo js -->
<script type="text/javascript " src="{{asset('assets/pages/todo/todo.js')}}"></script>
<!-- Custom js -->
<script type="text/javascript" src="{{asset('assets/pages/dashboard/custom-dashboard.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/script.js')}}"></script>
<script type="text/javascript " src="{{asset('assets/js/SmoothScroll.js')}}"></script>
<script src="{{asset('assets/js/pcoded.min.js')}}"></script>
<script src="{{asset('assets/js/demo-12.js')}}"></script>
<script src="{{asset('assets/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script> var
        $window = $(window); var nav = $('.fixed-button'); $window.scroll(function () {
            if
                ($window.scrollTop() >= 200) {
                nav.addClass('active ');
            }
            else {
                nav.removeClass('active ');
            }
        });
</script>
</body>

</html>