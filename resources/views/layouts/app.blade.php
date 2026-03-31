<!doctype html>
<html class="no-js">
<head>
    <title>Zingumah</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="stylesheet" href="/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/css/animations.css" />
    <link rel="stylesheet" href="/css/font-awesome5.css" />
    <link rel="stylesheet" href="/css/icomoon.css" />
    <link rel="stylesheet" href="/css/main.css" />
    <link rel="stylesheet" href="/css/shop.css" />
    <link rel="stylesheet" href="/css/override.css" />
</head>

<body>

<div id="canvas">
<div id="box_wrapper">

    <!-- HEADER -->
    <header class="page_header header-1 ds bg-transparent s-py-xl-20 s-py-10">
        <div class="container-fluid">
            <div class="row align-items-center justify-content-center">

                <div class="col-xl-3 col-md-4 text-center">
                    <a href="{{ route('home') }}" class="logo">
                        <img src="/images/logo.png" alt="">
                        <span class="d-flex flex-column">
                            <span class="logo-text">zingumah</span>
                            <span class="logo-subtext">resources limited</span>
                        </span>
                    </a>
                </div>

                <div class="col-xl-6 text-right">
                    <nav class="top-nav">
                        <ul class="nav sf-menu">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><a href="#">Overview</a></li>
                            <li><a href="#">Project</a></li>
                            <li><a href="#">Investors</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </nav>
                </div>

                <div class="col-xl-3 text-right">
                    <a href="#">+233 24 911 9686</a>
                </div>

            </div>
        </div>
    </header>


    <!-- PAGE CONTENT -->
    @yield('content')


    <!-- FOOTER -->
    <footer class="page_footer text-center ds">
        <div class="container">

            <h5>Zingumah Resources Limited</h5>
            <p>Gold Development Company • Ghana</p>

            <p><i class="fas fa-phone"></i> +233 24 911 9686</p>
            <p><i class="fas fa-envelope"></i> bubune.kofi@gmail.com</p>
            <p><i class="fas fa-map-marker-alt"></i> Accra, Ghana</p>

            <p>&copy; {{ date('Y') }}</p>

        </div>
    </footer>

</div>
</div>

<script src="/js/compressed.js"></script>
<script src="/js/main.js"></script>

</body>
</html>