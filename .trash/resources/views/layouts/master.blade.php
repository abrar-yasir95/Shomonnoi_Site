<!--
=========================================================
Material Kit - v2.0.7
=========================================================

Product Page: https://www.creative-tim.com/product/material-kit
Copyright 2020 Creative Tim (https://www.creative-tim.com/)

Coded by Creative Tim

=========================================================

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="en">

<head>
{{--    <meta charset="utf-8" />--}}
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('img/apple-icon.png')}}">
    <link rel="icon" type="image/png" href="{{asset('img/favicon.png')}}">
{{--    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />--}}
    <title>
        ShomonnoiBD
    </title>
{{--    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />--}}

{{--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">--}}
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- CSS Files -->
    <link href="{{asset('assets/css/material-kit.css?v=2.0.7')}}" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{asset('assets/demo/demo.css')}}" rel="stylesheet" />
{{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">--}}
    <link
        href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet"  type='text/css'>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-163972268-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-163972268-1');
    </script>

    {!! SEOMeta::generate() !!}
    {!! OpenGraph::generate() !!}
    {!! Twitter::generate() !!}
    {!! JsonLd::generate() !!}

</head>

<body class="index-page sidebar-collapse">
<nav class="navbar bg-dark navbar-color-on-scroll fixed-top navbar-expand-lg" color-on-scroll="100" id="sectionsNav">
    <div class="container">
        <div class="navbar-translate">
            <a class="navbar-brand" href="/">
                <img src="{{asset('img/shomonnoi-logo.png')}}" alt="" height="35px">
                ShomonnoiBD
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="sr-only">Toggle navigation</span>
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/" onclick="scrollToDownload()">
                        <i class="material-icons">home</i> Home
                    </a>
                </li>
                <li class="dropdown nav-item">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                        <i class="material-icons">widgets</i> Organizations
                    </a>
                    <div class="dropdown-menu dropdown-with-icons">
                        <a href="/organizations" class="dropdown-item" target="_blank">
                            <i class="fas fa-angle-double-right"></i> &nbsp; &nbsp;All Organizations
                        </a>
                        @forelse($divisions as $division)
                        <a href="/organizations/{{$division->name}}" class="dropdown-item" target="_blank">
                            <i class="fas fa-map-marker-alt"></i> &nbsp; &nbsp;{{$division->name}}
                        </a>
                        @empty
                        @endforelse

                    </div>
                </li>
                <li class="dropdown nav-item">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                        <i class="material-icons">timeline</i> Emergency
                    </a>
                    <div class="dropdown-menu dropdown-with-icons">
                        <a class="dropdown-item" href="/emergency" target="_blank">
                            <i class="fas fa-angle-double-right"></i> &nbsp; &nbsp;All Emergency Service
                        </a>
                        <a class="dropdown-item" href="/emergencies/medicine" target="_blank">
                            <i class="fas fa-briefcase-medical"></i> &nbsp; &nbsp;Medicine
                        </a>
                        <a class="dropdown-item" href="/emergencies/ppe" target="_blank">
                            <i class="fas fa-user-nurse"></i> &nbsp; &nbsp;PPE
                        </a>
                        <a class="dropdown-item" href="/emergencies/ambulance" target="_blank">
                            <i class="fas fa-ambulance"></i> &nbsp; &nbsp;Ambulance
                        </a>
                        <a class="dropdown-item" href="/emergencies/food" target="_blank">
                            <i class="fas fa-fish"></i> &nbsp; &nbsp;Food
                        </a>
                        <a class="dropdown-item" href="/emergencies/sanitizer" target="_blank">
                            <i class="fas fa-pump-soap"></i> &nbsp; &nbsp;Sanitizer
                        </a>
                        <a class="dropdown-item" href="/emergencies/cash" target="_blank">
                            <i class="fas fa-hand-holding-usd"></i> &nbsp; &nbsp;Cash
                        </a>
                        <a class="dropdown-item" href="/emergencies/spray" target="_blank">
                            <i class="fas fa-spray-can"></i> &nbsp; &nbsp;Disinfecting Spray
                        </a>
                        <a class="dropdown-item" href="/emergencies/grave" target="_blank">
                            <i class="fas fa-head-side-cough-slash"></i> &nbsp; &nbsp;Grave Excavation
                        </a>
                    </div>
                </li>

                <li class="dropdown nav-item">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                        <i class="material-icons">notes</i> Updates
                    </a>
                    <div class="dropdown-menu dropdown-with-icons">
                        <a class="dropdown-item" href="/news" target="_blank">
                            <i class="fas fa-newspaper"></i> &nbsp; &nbsp;News
                        </a>

                        <a class="dropdown-item" href="/research" target="_blank">
                            <i class="fas fa-angle-double-right"></i> &nbsp; &nbsp;Research
                        </a>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/about" target="_blank">
                        <i class="material-icons">group</i> About
                    </a>
                </li>

            </ul>
        </div>
    </div>
</nav>

 @yield('content')


<footer class="footer" data-background-color="black">
    <div class="container">
        <nav class="float-left">
            <ul>
                <li>
                    <a href="/policy">
                        Privacy Policy
                    </a>
                </li>
                <li>
                    <a href="/about">
                        About Us
                    </a>
                </li>
                <li>
                    <a href="/organizations">
                        Organizations
                    </a>
                </li>
                <li>
                    <a href="/emergency">
                        Emergency
                    </a>
                </li>
            </ul>
        </nav>
{{--        <div class="copyright float-right" style="font-size: small">--}}

        <div class="copyright float-right" style="font-size: small">
            Copyright &copy;
            <script>
                document.write(new Date().getFullYear())
            </script>,  All rights reserved | by
            <a href="/" target="_blank">ShomonnoiBD</a>.
{{--            Coded by <a href="https://facebook.com/hridoy100" target="_blank">Raihanul Alam Hridoy</a>.--}}
        </div>
        <div><span class="btn btn-outline-primary align-middle">VISITORS: {{$analyticsData}}</span></div>

    </div>
</footer>
<!--   Core JS Files   -->
<script src="{{asset('assets/js/core/jquery.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/core/popper.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/core/bootstrap-material-design.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/plugins/moment.min.js')}}"></script>
<!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
<script src="{{asset('assets/js/plugins/bootstrap-datetimepicker.js')}}" type="text/javascript"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="{{asset('assets/js/plugins/nouislider.min.js')}}" type="text/javascript"></script>
<!--  Google Maps Plugin    -->
<!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
<script src="{{asset('assets/js/material-kit.js?v=2.0.7')}}" type="text/javascript"></script>
{{--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>--}}
{{--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>--}}

<script>
    $(document).ready(function() {
        //init DateTimePickers
        materialKit.initFormExtendedDatetimepickers();

        // Sliders Init
        materialKit.initSliders();
    });


    function scrollToDownload() {
        if ($('.section-download').length != 0) {
            $("html, body").animate({
                scrollTop: $('.section-download').offset().top
            }, 1000);
        }
    }
</script>

<script src="{{asset('js/main.js')}}"></script>


</body>

</html>
