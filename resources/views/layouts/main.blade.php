<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Amiri&display=swap" rel="stylesheet">
    </link>

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body style="background-color: #dee2e6">
    <nav class="navbar px-md-0 navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" dir="rtl"
        id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="index.html"><img src="images/favicon2.ico"
                    style="width: 100px; height: 100px; "></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> القائمة
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">

                <ul class="navbar-nav ">

                    <li class="nav-item active"><a href="{{ route('main') }}" class="nav-link">الصفحة الرئيسة</a></li>
                    <li class="nav-item"><a href="#about" class="nav-link">من نحن؟</a></li>

                    <li class="nav-item"><a href="{{ route('services.index') }}" class="nav-link">خدماتنا</a></li>

                    <li class="nav-item cta"><a href="#whatsapp" class="nav-link">احجز موعداً الآن</a></li>

                </ul>
                <ul class="text-left" style="float: left;">
                    <li class="navbar mr-3">المملكة العربية السعودية - جدة</li>

                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->


    @yield('content')



    <footer class="ftco-footer ftco-bg-dark ftco-section" dir="rtl">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-4 col-md">
                    <div class="ftco-footer-widget mb-4" dir="rtl">
                        <h2 class="logo text-right"><a href="#">ميثاق التشريع <br><br><span>للمحاماة والاستشارات
                                    القانونية</span></a></h2>
                        <p class="text-right">فريقنا المتخصص بالمحاماة مستعد للإجابة عن استفساراتكم لا تترددوا بالاتصال
                            لحجز موعدكم اليوم، شكراً لثقتكم بنا، نحن بانتظاركم</p>
                        <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                            <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 col-md" dir="rtl">
                    <center>
                        <div class="ftco-footer-widget mb-4">
                            <h2 class="ftco-heading-2 text-center">زرنا أو اتصل بنا</h2>
                            <div class="block-23 mb-3">
                                <ul>
                                    <li><img src="images/saudi-arabia.png"
                                            style="height: 30px; width: 30px; margin-left: 10%;"><span
                                            class="text-center">المملكة العربية السعودية - جدة</span></li>
                                    <li><a href="#"><img src="images/whatsapp.ec57a4a3.png"
                                                style="height: 25px; width: 25px; "><span class="text-center mr-5">+23
                                                77646533</span></a></li>

                                </ul>
                            </div>
                        </div>
                    </center>
                </div>
                <div class="col-lg-4 col-md">
                    <div class="ftco-footer-widget mb-4" dir="rtl">
                        <h2 class="ftco-heading-2 text-right">ساعات العمل:</h2>
                        <div class="opening-hours">
                            <h4 class="text-right">أيام الدوام:</h4>
                            <p class="pl-3 text-right">
                                <span> - من الأحد إلى الخميس: من الساعة التاسعة صباحاً حتى الثالثة ظهراً</span><br>
                                <span> - السبت: من الساعة التاسعة صباحاً حتى الثانية ظهراً</span>
                            </p>
                            <h4 class="text-right">العطل:</h4>
                            <p class="pl-3 text-right">
                                <span> - أيام الجمعة</span><br>
                                <span> - العطل الرسمية</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </footer>



    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#F96D00" />
        </svg></div>

    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false">
    </script>
    <script src="js/google-map.js"></script>
    <script src="js/main.js"></script>

</body>