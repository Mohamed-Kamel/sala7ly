<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>

@extends('layouts.app')
@section('content')
<!--START BANNER HOME-->
<section class="banner-home">
    <img src="{{ asset('images/banner.jpg') }}">
</section>
<!--END BANNER HOME-->

<!--START HOW TO SECTI HOME-->
<section class="about-features">
    <div class="container">
        <div class="row">
            <div class="super-title">
                <h2>كيف التعامل مع الموقع</h2>
                <div class="seperator"></div>
                <p>حبه كلام هيتكتب هنا باختصال شديد</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="iconbox-center">
                    <div class="icon">
                        <span class="ti-user"></span>
                    </div>
                    <h4>سجل بالموقع</h4>
                    <p>حبه كلام هيتكتب هنا باختصال شديد</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="iconbox-center">
                    <div class="icon">
                        <span class="ti-pencil-alt"></span>
                    </div>
                    <h4>اسأل سؤالك</h4>
                    <p>حبه كلام هيتكتب هنا باختصال شديد</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="iconbox-center">
                    <div class="icon">
                        <span class="ti-thumb-up"></span>
                    </div>
                    <h4>كن ع اتصال مع شركتك</h4>
                    <p>حبه كلام هيتكتب هنا باختصال شديد</p>
                </div>
            </div>
        </div>
    </div><!-- End Container -->
</section><!-- End Section -->
<!--END START HOW TO SECTI HOME-->


<!--START QUESTION IN HOME-->
<section class="questions-home">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#category-1"> اسم القسم</a></li>
                    <li><a data-toggle="tab" href="#category-2">اسم القسم</a></li>
                </ul>
                <h1 class="subtitles">احدث الاسألة</h1>
                <div class="tab-content">
                    <div id="category-1" class="tab-pane fade in active">
                        <div class="question-block">
                            <div class="row">
                                <div class="col-sm-2">
                                    <div class="row">
                                        <span class="data-icons col-sm-4">
                                            30
                                            <i class="fa fa-eye"></i>
                                        </span>
                                        <span class="data-icons col-sm-4">
                                            14
                                            <i class="ti-thought"></i>
                                        </span>
                                        <span class="data-icons col-sm-4">
                                            مفتوح
                                            <i class="ti-info-alt"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-sm-10 question-desc">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h2 class="question-title-block"><a href="{{ url('/question') }}">مشكله في مروجة لاب توب سوني</a></h2>
                                        </div>
                                        <div class="col-sm-12">
                                            <a href="#" class="qustion-user">
                                                <i class="ti-user"></i>
                                                محمد احمد عوض
                                            </a>

                                            <a href="#" class="qustion-user">
                                                <i class="ti-tag"></i>
                                                السوفتوير
                                            </a>
                                            <span class="qustion-user">
                                                <i class="ti-timer"></i>
                                                3-12-2017 3:15 PM
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="question-block">
                            <div class="row">
                                <div class="col-sm-2">
                                    <div class="row">
                                        <span class="data-icons col-sm-4">
                                            30
                                            <i class="fa fa-eye"></i>
                                        </span>
                                        <span class="data-icons col-sm-4">
                                            14
                                            <i class="ti-thought"></i>
                                        </span>
                                        <span class="data-icons col-sm-4">
                                            مفتوح
                                            <i class="ti-info-alt"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-sm-10 question-desc">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h2 class="question-title-block"><a href="{{ url('/question') }}">مشكله في مروجة لاب توب سوني</a></h2>
                                        </div>
                                        <div class="col-sm-12">
                                            <a href="#" class="qustion-user">
                                                <i class="ti-user"></i>
                                                محمد احمد عوض
                                            </a>

                                            <a href="#" class="qustion-user">
                                                <i class="ti-tag"></i>
                                                السوفتوير
                                            </a>
                                            <span class="qustion-user">
                                                <i class="ti-timer"></i>
                                                3-12-2017 3:15 PM
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="question-block">
                            <div class="row">
                                <div class="col-sm-2">
                                    <div class="row">
                                        <span class="data-icons col-sm-4">
                                            30
                                            <i class="fa fa-eye"></i>
                                        </span>
                                        <span class="data-icons col-sm-4">
                                            14
                                            <i class="ti-thought"></i>
                                        </span>
                                        <span class="data-icons col-sm-4">
                                            مفتوح
                                            <i class="ti-info-alt"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-sm-10 question-desc">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h2 class="question-title-block"><a href="{{ url('/question') }}">مشكله في مروجة لاب توب سوني</a></h2>
                                        </div>
                                        <div class="col-sm-12">
                                            <a href="#" class="qustion-user">
                                                <i class="ti-user"></i>
                                                محمد احمد عوض
                                            </a>

                                            <a href="#" class="qustion-user">
                                                <i class="ti-tag"></i>
                                                السوفتوير
                                            </a>
                                            <span class="qustion-user">
                                                <i class="ti-timer"></i>
                                                3-12-2017 3:15 PM
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="question-block">
                            <div class="row">
                                <div class="col-sm-2">
                                    <div class="row">
                                        <span class="data-icons col-sm-4">
                                            30
                                            <i class="fa fa-eye"></i>
                                        </span>
                                        <span class="data-icons col-sm-4">
                                            14
                                            <i class="ti-thought"></i>
                                        </span>
                                        <span class="data-icons col-sm-4">
                                            مفتوح
                                            <i class="ti-info-alt"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-sm-10 question-desc">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h2 class="question-title-block"><a href="{{ url('/question') }}">مشكله في مروجة لاب توب سوني</a></h2>
                                        </div>
                                        <div class="col-sm-12">
                                            <a href="#" class="qustion-user">
                                                <i class="ti-user"></i>
                                                محمد احمد عوض
                                            </a>

                                            <a href="#" class="qustion-user">
                                                <i class="ti-tag"></i>
                                                السوفتوير
                                            </a>
                                            <span class="qustion-user">
                                                <i class="ti-timer"></i>
                                                3-12-2017 3:15 PM
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="question-block">
                            <div class="row">
                                <div class="col-sm-2">
                                    <div class="row">
                                        <span class="data-icons col-sm-4">
                                            30
                                            <i class="fa fa-eye"></i>
                                        </span>
                                        <span class="data-icons col-sm-4">
                                            14
                                            <i class="ti-thought"></i>
                                        </span>
                                        <span class="data-icons col-sm-4">
                                            مفتوح
                                            <i class="ti-info-alt"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-sm-10 question-desc">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h2 class="question-title-block"><a href="{{ url('/question') }}">مشكله في مروجة لاب توب سوني</a></h2>
                                        </div>
                                        <div class="col-sm-12">
                                            <a href="#" class="qustion-user">
                                                <i class="ti-user"></i>
                                                محمد احمد عوض
                                            </a>

                                            <a href="#" class="qustion-user">
                                                <i class="ti-tag"></i>
                                                السوفتوير
                                            </a>
                                            <span class="qustion-user">
                                                <i class="ti-timer"></i>
                                                3-12-2017 3:15 PM
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="question-block">
                            <div class="row">
                                <div class="col-sm-2">
                                    <div class="row">
                                        <span class="data-icons col-sm-4">
                                            30
                                            <i class="fa fa-eye"></i>
                                        </span>
                                        <span class="data-icons col-sm-4">
                                            14
                                            <i class="ti-thought"></i>
                                        </span>
                                        <span class="data-icons col-sm-4">
                                            مفتوح
                                            <i class="ti-info-alt"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-sm-10 question-desc">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h2 class="question-title-block"><a href="{{ url('/question') }}">مشكله في مروجة لاب توب سوني</a></h2>
                                        </div>
                                        <div class="col-sm-12">
                                            <a href="#" class="qustion-user">
                                                <i class="ti-user"></i>
                                                محمد احمد عوض
                                            </a>

                                            <a href="#" class="qustion-user">
                                                <i class="ti-tag"></i>
                                                السوفتوير
                                            </a>
                                            <span class="qustion-user">
                                                <i class="ti-timer"></i>
                                                3-12-2017 3:15 PM
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="question-block">
                            <div class="row">
                                <div class="col-sm-2">
                                    <div class="row">
                                        <span class="data-icons col-sm-4">
                                            30
                                            <i class="fa fa-eye"></i>
                                        </span>
                                        <span class="data-icons col-sm-4">
                                            14
                                            <i class="ti-thought"></i>
                                        </span>
                                        <span class="data-icons col-sm-4">
                                            مفتوح
                                            <i class="ti-info-alt"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-sm-10 question-desc">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h2 class="question-title-block"><a href="{{ url('/question') }}">مشكله في مروجة لاب توب سوني</a></h2>
                                        </div>
                                        <div class="col-sm-12">
                                            <a href="#" class="qustion-user">
                                                <i class="ti-user"></i>
                                                محمد احمد عوض
                                            </a>

                                            <a href="#" class="qustion-user">
                                                <i class="ti-tag"></i>
                                                السوفتوير
                                            </a>
                                            <span class="qustion-user">
                                                <i class="ti-timer"></i>
                                                3-12-2017 3:15 PM
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="question-block">
                            <div class="row">
                                <div class="col-sm-2">
                                    <div class="row">
                                        <span class="data-icons col-sm-4">
                                            30
                                            <i class="fa fa-eye"></i>
                                        </span>
                                        <span class="data-icons col-sm-4">
                                            14
                                            <i class="ti-thought"></i>
                                        </span>
                                        <span class="data-icons col-sm-4">
                                            مفتوح
                                            <i class="ti-info-alt"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-sm-10 question-desc">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h2 class="question-title-block"><a href="{{ url('/question') }}">مشكله في مروجة لاب توب سوني</a></h2>
                                        </div>
                                        <div class="col-sm-12">
                                            <a href="#" class="qustion-user">
                                                <i class="ti-user"></i>
                                                محمد احمد عوض
                                            </a>

                                            <a href="#" class="qustion-user">
                                                <i class="ti-tag"></i>
                                                السوفتوير
                                            </a>
                                            <span class="qustion-user">
                                                <i class="ti-timer"></i>
                                                3-12-2017 3:15 PM
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="question-block">
                            <div class="row">
                                <div class="col-sm-2">
                                    <div class="row">
                                        <span class="data-icons col-sm-4">
                                            30
                                            <i class="fa fa-eye"></i>
                                        </span>
                                        <span class="data-icons col-sm-4">
                                            14
                                            <i class="ti-thought"></i>
                                        </span>
                                        <span class="data-icons col-sm-4">
                                            مفتوح
                                            <i class="ti-info-alt"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-sm-10 question-desc">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h2 class="question-title-block"><a href="{{ url('/question') }}">مشكله في مروجة لاب توب سوني</a></h2>
                                        </div>
                                        <div class="col-sm-12">
                                            <a href="#" class="qustion-user">
                                                <i class="ti-user"></i>
                                                محمد احمد عوض
                                            </a>

                                            <a href="#" class="qustion-user">
                                                <i class="ti-tag"></i>
                                                السوفتوير
                                            </a>
                                            <span class="qustion-user">
                                                <i class="ti-timer"></i>
                                                3-12-2017 3:15 PM
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="question-block">
                            <div class="row">
                                <div class="col-sm-2">
                                    <div class="row">
                                        <span class="data-icons col-sm-4">
                                            30
                                            <i class="fa fa-eye"></i>
                                        </span>
                                        <span class="data-icons col-sm-4">
                                            14
                                            <i class="ti-thought"></i>
                                        </span>
                                        <span class="data-icons col-sm-4">
                                            مفتوح
                                            <i class="ti-info-alt"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-sm-10 question-desc">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h2 class="question-title-block"><a href="{{ url('/question') }}">مشكله في مروجة لاب توب سوني</a></h2>
                                        </div>
                                        <div class="col-sm-12">
                                            <a href="#" class="qustion-user">
                                                <i class="ti-user"></i>
                                                محمد احمد عوض
                                            </a>

                                            <a href="#" class="qustion-user">
                                                <i class="ti-tag"></i>
                                                السوفتوير
                                            </a>
                                            <span class="qustion-user">
                                                <i class="ti-timer"></i>
                                                3-12-2017 3:15 PM
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="question-block">
                            <div class="row">
                                <div class="col-sm-2">
                                    <div class="row">
                                        <span class="data-icons col-sm-4">
                                            30
                                            <i class="fa fa-eye"></i>
                                        </span>
                                        <span class="data-icons col-sm-4">
                                            14
                                            <i class="ti-thought"></i>
                                        </span>
                                        <span class="data-icons col-sm-4">
                                            مفتوح
                                            <i class="ti-info-alt"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-sm-10 question-desc">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h2 class="question-title-block"><a href="{{ url('/question') }}">مشكله في مروجة لاب توب سوني</a></h2>
                                        </div>
                                        <div class="col-sm-12">
                                            <a href="#" class="qustion-user">
                                                <i class="ti-user"></i>
                                                محمد احمد عوض
                                            </a>

                                            <a href="#" class="qustion-user">
                                                <i class="ti-tag"></i>
                                                السوفتوير
                                            </a>
                                            <span class="qustion-user">
                                                <i class="ti-timer"></i>
                                                3-12-2017 3:15 PM
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="category-2" class="tab-pane fade">
                        <div class="question-block">
                            <div class="row">
                                <div class="col-sm-2">
                                    <div class="row">
                                        <span class="data-icons col-sm-4">
                                            30
                                            <i class="fa fa-eye"></i>
                                        </span>
                                        <span class="data-icons col-sm-4">
                                            14
                                            <i class="ti-thought"></i>
                                        </span>
                                        <span class="data-icons col-sm-4">
                                            مفتوح
                                            <i class="ti-info-alt"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-sm-10 question-desc">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h2 class="question-title-block"><a href="{{ url('/question') }}">مشكله في مروجة لاب توب سوني</a></h2>
                                        </div>
                                        <div class="col-sm-12">
                                            <a href="#" class="qustion-user">
                                                <i class="ti-user"></i>
                                                محمد احمد عوض
                                            </a>

                                            <a href="#" class="qustion-user">
                                                <i class="ti-tag"></i>
                                                السوفتوير
                                            </a>
                                            <span class="qustion-user">
                                                <i class="ti-timer"></i>
                                                3-12-2017 3:15 PM
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="question-block">
                            <div class="row">
                                <div class="col-sm-2">
                                    <div class="row">
                                        <span class="data-icons col-sm-4">
                                            30
                                            <i class="fa fa-eye"></i>
                                        </span>
                                        <span class="data-icons col-sm-4">
                                            14
                                            <i class="ti-thought"></i>
                                        </span>
                                        <span class="data-icons col-sm-4">
                                            مفتوح
                                            <i class="ti-info-alt"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-sm-10 question-desc">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h2 class="question-title-block"><a href="{{ url('/question') }}">مشكله في مروجة لاب توب سوني</a></h2>
                                        </div>
                                        <div class="col-sm-12">
                                            <a href="#" class="qustion-user">
                                                <i class="ti-user"></i>
                                                محمد احمد عوض
                                            </a>

                                            <a href="#" class="qustion-user">
                                                <i class="ti-tag"></i>
                                                السوفتوير
                                            </a>
                                            <span class="qustion-user">
                                                <i class="ti-timer"></i>
                                                3-12-2017 3:15 PM
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="question-block">
                            <div class="row">
                                <div class="col-sm-2">
                                    <div class="row">
                                        <span class="data-icons col-sm-4">
                                            30
                                            <i class="fa fa-eye"></i>
                                        </span>
                                        <span class="data-icons col-sm-4">
                                            14
                                            <i class="ti-thought"></i>
                                        </span>
                                        <span class="data-icons col-sm-4">
                                            مفتوح
                                            <i class="ti-info-alt"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-sm-10 question-desc">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h2 class="question-title-block"><a href="{{ url('/question') }}">مشكله في مروجة لاب توب سوني</a></h2>
                                        </div>
                                        <div class="col-sm-12">
                                            <a href="#" class="qustion-user">
                                                <i class="ti-user"></i>
                                                محمد احمد عوض
                                            </a>

                                            <a href="#" class="qustion-user">
                                                <i class="ti-tag"></i>
                                                السوفتوير
                                            </a>
                                            <span class="qustion-user">
                                                <i class="ti-timer"></i>
                                                3-12-2017 3:15 PM
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="question-block">
                            <div class="row">
                                <div class="col-sm-2">
                                    <div class="row">
                                        <span class="data-icons col-sm-4">
                                            30
                                            <i class="fa fa-eye"></i>
                                        </span>
                                        <span class="data-icons col-sm-4">
                                            14
                                            <i class="ti-thought"></i>
                                        </span>
                                        <span class="data-icons col-sm-4">
                                            مفتوح
                                            <i class="ti-info-alt"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-sm-10 question-desc">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h2 class="question-title-block"><a href="{{ url('/question') }}">مشكله في مروجة لاب توب سوني</a></h2>
                                        </div>
                                        <div class="col-sm-12">
                                            <a href="#" class="qustion-user">
                                                <i class="ti-user"></i>
                                                محمد احمد عوض
                                            </a>

                                            <a href="#" class="qustion-user">
                                                <i class="ti-tag"></i>
                                                السوفتوير
                                            </a>
                                            <span class="qustion-user">
                                                <i class="ti-timer"></i>
                                                3-12-2017 3:15 PM
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="question-block">
                            <div class="row">
                                <div class="col-sm-2">
                                    <div class="row">
                                        <span class="data-icons col-sm-4">
                                            30
                                            <i class="fa fa-eye"></i>
                                        </span>
                                        <span class="data-icons col-sm-4">
                                            14
                                            <i class="ti-thought"></i>
                                        </span>
                                        <span class="data-icons col-sm-4">
                                            مفتوح
                                            <i class="ti-info-alt"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-sm-10 question-desc">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h2 class="question-title-block"><a href="{{ url('/question') }}">مشكله في مروجة لاب توب سوني</a></h2>
                                        </div>
                                        <div class="col-sm-12">
                                            <a href="#" class="qustion-user">
                                                <i class="ti-user"></i>
                                                محمد احمد عوض
                                            </a>

                                            <a href="#" class="qustion-user">
                                                <i class="ti-tag"></i>
                                                السوفتوير
                                            </a>
                                            <span class="qustion-user">
                                                <i class="ti-timer"></i>
                                                3-12-2017 3:15 PM
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="question-block">
                            <div class="row">
                                <div class="col-sm-2">
                                    <div class="row">
                                        <span class="data-icons col-sm-4">
                                            30
                                            <i class="fa fa-eye"></i>
                                        </span>
                                        <span class="data-icons col-sm-4">
                                            14
                                            <i class="ti-thought"></i>
                                        </span>
                                        <span class="data-icons col-sm-4">
                                            مفتوح
                                            <i class="ti-info-alt"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-sm-10 question-desc">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h2 class="question-title-block"><a href="{{ url('/question') }}">مشكله في مروجة لاب توب سوني</a></h2>
                                        </div>
                                        <div class="col-sm-12">
                                            <a href="#" class="qustion-user">
                                                <i class="ti-user"></i>
                                                محمد احمد عوض
                                            </a>

                                            <a href="#" class="qustion-user">
                                                <i class="ti-tag"></i>
                                                السوفتوير
                                            </a>
                                            <span class="qustion-user">
                                                <i class="ti-timer"></i>
                                                3-12-2017 3:15 PM
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="question-block">
                            <div class="row">
                                <div class="col-sm-2">
                                    <div class="row">
                                        <span class="data-icons col-sm-4">
                                            30
                                            <i class="fa fa-eye"></i>
                                        </span>
                                        <span class="data-icons col-sm-4">
                                            14
                                            <i class="ti-thought"></i>
                                        </span>
                                        <span class="data-icons col-sm-4">
                                            مفتوح
                                            <i class="ti-info-alt"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-sm-10 question-desc">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h2 class="question-title-block"><a href="{{ url('/question') }}">مشكله في مروجة لاب توب سوني</a></h2>
                                        </div>
                                        <div class="col-sm-12">
                                            <a href="#" class="qustion-user">
                                                <i class="ti-user"></i>
                                                محمد احمد عوض
                                            </a>

                                            <a href="#" class="qustion-user">
                                                <i class="ti-tag"></i>
                                                السوفتوير
                                            </a>
                                            <span class="qustion-user">
                                                <i class="ti-timer"></i>
                                                3-12-2017 3:15 PM
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="question-block">
                            <div class="row">
                                <div class="col-sm-2">
                                    <div class="row">
                                        <span class="data-icons col-sm-4">
                                            30
                                            <i class="fa fa-eye"></i>
                                        </span>
                                        <span class="data-icons col-sm-4">
                                            14
                                            <i class="ti-thought"></i>
                                        </span>
                                        <span class="data-icons col-sm-4">
                                            مفتوح
                                            <i class="ti-info-alt"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-sm-10 question-desc">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h2 class="question-title-block"><a href="{{ url('/question') }}">مشكله في مروجة لاب توب سوني</a></h2>
                                        </div>
                                        <div class="col-sm-12">
                                            <a href="#" class="qustion-user">
                                                <i class="ti-user"></i>
                                                محمد احمد عوض
                                            </a>

                                            <a href="#" class="qustion-user">
                                                <i class="ti-tag"></i>
                                                السوفتوير
                                            </a>
                                            <span class="qustion-user">
                                                <i class="ti-timer"></i>
                                                3-12-2017 3:15 PM
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <div class="anouncment-sidebar">
                    <img src="{{ asset('images/sidebar-ann.jpg') }}">
                </div>
                <div class="most-rated-comp">
                    <h2>
                        <i class="ti-cup"></i>
                        اعلى الشركات تقيماً
                    </h2>
                    <div class="main-comp-block-top">
                        <div Class="company-rate-block">
                            <a href="#"><img src="{{ asset('images/company.png') }}" alt=""></a>
                            <div class="copmnyrate">
                                <a href="#" class="comp-title">اسم الشركة</a>
                                <ul>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                        <div Class="company-rate-block">
                            <a href="#"><img src="{{ asset('images/company.png') }}" alt=""></a>
                            <div class="copmnyrate">
                                <a href="#" class="comp-title">اسم الشركة</a>
                                <ul>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                        <div Class="company-rate-block">
                            <a href="#"><img src="{{ asset('images/company.png') }}" alt=""></a>
                            <div class="copmnyrate">
                                <a href="#" class="comp-title">اسم الشركة</a>
                                <ul>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                        <div Class="company-rate-block">
                            <a href="#"><img src="{{ asset('images/company.png') }}" alt=""></a>
                            <div class="copmnyrate">
                                <a href="#" class="comp-title">اسم الشركة</a>
                                <ul>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                        <div Class="company-rate-block">
                            <a href="#"><img src="{{ asset('images/company.png') }}" alt=""></a>
                            <div class="copmnyrate">
                                <a href="#" class="comp-title">اسم الشركة</a>
                                <ul>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                        <div Class="company-rate-block">
                            <a href="#"><img src="{{ asset('images/company.png') }}" alt=""></a>
                            <div class="copmnyrate">
                                <a href="#" class="comp-title">اسم الشركة</a>
                                <ul>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                        <div Class="company-rate-block">
                            <a href="#"><img src="{{ asset('images/company.png') }}" alt=""></a>
                            <div class="copmnyrate">
                                <a href="#" class="comp-title">اسم الشركة</a>
                                <ul>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                        <div Class="company-rate-block">
                            <a href="#"><img src="{{ asset('images/company.png') }}" alt=""></a>
                            <div class="copmnyrate">
                                <a href="#" class="comp-title">اسم الشركة</a>
                                <ul>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 footer-ann">
                <img src="{{ asset('images/footer-ann.jpg') }}">
            </div>
        </div>
    </div>
</section>
<!--END QUESTION IN HOME-->

@endsection
