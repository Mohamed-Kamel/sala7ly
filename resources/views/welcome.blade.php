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









