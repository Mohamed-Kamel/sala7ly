<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->

    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css')}}">
    <link href="{{ asset('css/themify-icons.css')}}" rel="stylesheet">
    <link href="{{ asset('css/style.css')}}" rel="stylesheet">
    <link href="{{ asset('css/custom-style.css')}}" rel="stylesheet">


    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>

<!-- Fixed navbar start -->
<div class="navbar navbar-tshop navbar-fixed-top megamenu" role="navigation">
    <div class="navbar-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-12 col-xs-12 col-md-6">
                    <div class="text-right">
                        <ul class="userMenu ">
                            <li>
                                <a href="#"> من نحن</a>
                                <a href="#"> اتصل بنا</a>
                                <a href="#"> سياسة الخصوصية</a>
                                <a href="#"> مساعدة</a>
                                <a href="#">الاسألة الشائعة</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12 col-xs-12 col-md-6">
                    <div class="text-left">
                        <ul>
                            <li class="phone-number">
                                <a href="callto:+0111232656">
                                    <i class="glyphicon glyphicon-phone-alt "></i>
                                    88 01680 53 1352
                                </a>
                            </li>
                            <li class="phone-number">
                                <a href="mailto:admin@admin.com">
                                    <i class="fa fa-envelope-o"></i>
                                    88 01680 53 1352
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/.navbar-top-->

    <div class="container">
        <div class="navbar-header">


            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span
                        class="sr-only"> Toggle navigation </span> <span class="icon-bar"> </span> <span
                        class="icon-bar"> </span> <span class="icon-bar"> </span></button>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-cart"><i
                        class="fa fa-shopping-cart colorWhite"> </i> <span
                        class="cartRespons colorWhite">  </span></button>


            <a class="navbar-brand " href="index.php"> <img src="" alt="TSHOP"> </a>
            <!-- this part for mobile -->
            <div class="search-box pull-right hidden-lg hidden-md hidden-sm">
                <div class="input-group">
                    <button class="btn btn-nobg getFullSearch" type="button"><i class="fa fa-search"> </i></button>
                </div>
                <!-- /input-group -->
            </div>
        </div>

        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="{{ url('/') }}"> الرئيسية </a></li>
                <li><a href="{{ url('/questions') }}"> الاسئلة </a></li>
                <li><a href="{{ url('/companies') }}"> شركات الصيانة </a></li>
            </ul>
        </div>

        <div class="user-header">
            @if (Auth::guest())
                <ul class="userMenu">

                    <li><a href="{{ route('login') }}"> <span class="hidden-xs">تسجيل الدخول</span>
                            <i class="glyphicon glyphicon-log-in hide visible-xs "></i> </a></li>
                    <li class="hidden-xs"><a href="{{ route('register') }}"> مستخدم جديد </a></li>
                </ul>
            @else
                <a href="#"> <img src="assets/images/user.png"> {{ Auth::user()->name }}</a>
                <ul class="dropdown-menu" role="menu">
                    <li>
                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
            @endif
        </div>


        <!--/.nav-collapse -->
    </div>
    <!--/.container -->

    <div class="search-full text-right"><a class="pull-right search-close"> <i class=" fa fa-times-circle"> </i> </a>
        <div class="searchInputBox pull-right">
            <input type="search" data-searchurl="search?=" name="q" placeholder="start typing and hit enter to search"
                   class="search-input">
            <button class="btn-nobg search-btn" type="submit"><i class="fa fa-search"> </i></button>
        </div>
    </div>
    <!--/.search-full-->

</div>


<div class="page-container">
    @yield('content')
</div>
<footer>
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4  col-md-4 col-sm-6 col-xs-6">
                    <h3> مساعدة </h3>
                    <ul>
                        <li class="supportLi">
                            <p> اذا اردت الاستفسار عن شيئ ما قم بالاتصال بنا </p>
                            <h4><a class="inline" href="callto:+88016000000"> <strong> <i class="fa fa-phone"> </i> 88
                                        0160 000 000</strong> </a></h4>
                            <h4><a class="inline" href="mailto:help@tshopweb.com"> <i class="fa fa-envelope-o"> </i>
                                    help@tshopweb.com </a></h4>
                        </li>
                    </ul>
                </div>

                <div style="clear:both" class="hide visible-xs"></div>

                <div class="col-lg-4  col-md-4 col-sm-6 col-xs-6">
                    <h3> My Account </h3>
                    <ul>
                        <li><a href="#"> من نحن </a></li>
                        <li><a href="#"> اتصل بنا </a></li>
                        <li><a href="#"> مساعدة </a></li>
                        <li><a href="#"> رابط ثان </a></li>
                        <li><a href="#"> رابط ثالث </a></li>
                    </ul>
                </div>

                <div style="clear:both" class="hide visible-xs"></div>

                <div class="col-lg-4  col-md-4 col-sm-6 col-xs-6">
                    <h3> كن على اتصال </h3>
                    <ul>
                        <li>
                            <div class="input-append newsLatterBox text-center">
                                <input type="text" class="full text-center" placeholder="Email ">
                                <button class="btn  bg-gray" type="button"> تابعنا <i
                                            class="fa fa-long-arrow-right"> </i></button>
                            </div>
                        </li>
                    </ul>
                    <ul class="social">
                        <li><a href="http://facebook.com"> <i class=" fa fa-facebook"> &nbsp; </i> </a></li>
                        <li><a href="http://twitter.com"> <i class="fa fa-twitter"> &nbsp; </i> </a></li>
                        <li><a href="https://plus.google.com"> <i class="fa fa-google-plus"> &nbsp; </i> </a></li>
                        <li><a href="http://youtube.com"> <i class="fa fa-pinterest"> &nbsp; </i> </a></li>
                        <li><a href="http://youtube.com"> <i class="fa fa-youtube"> &nbsp; </i> </a></li>
                    </ul>
                </div>
            </div>
            <!--/.row-->
        </div>
        <!--/.container-->
    </div>
    <!--/.footer-->

    <div class="footer-bottom">
        <div class="container">
            <p class="text-center"> &copy; Salahly 2014. All right reserved. </p>

        </div>
    </div>
</footer>
<!-- Latest compiled and minified JavaScript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/ion-checkRadio/ion.checkRadio.min.js') }}"></script>
<script src="{{ asset('js/script.js') }}"></script>

<script>

    $(document).ready(function () {
        $('#option').change(function () {
            $('.next').css({"display": ""})
        });

    });
</script>


</body>
</html>
