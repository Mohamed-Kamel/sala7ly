@extends('layouts.app')

@section('content')
<!-- /.Fixed navbar  -->
<div class="container main-container headerOffset">
    <div class="row">
        <div class="col-sm-12 header-ann">
            <img src="{{ asset('images/footer-ann.jpg') }}">
        </div>
    </div>
    <!-- Main component call to action -->
    <div class="row">
        <div class="breadcrumbDiv col-lg-12">
            <ul class="breadcrumb">
                <li><a href="#"><i class="ti-home"></i> الرئيسية</a></li>
                <li><a href="index.php?page=question"> الاسألة</a></li>
                <li class="active">مشكله في شاشة لاب سوني</li>
            </ul>
        </div>
    </div>
    <!-- /.row  -->
    <div class="row">
        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
            <div class="row">
                <div class="col-sm-10">
                    <div class="question-user-img">
                        <img src="{{ asset('images/user.png') }}">
                        <a href="#">مروة محمد احمد عوض</a>
                    </div>
                </div>
                <div class="col-sm-2">
                    <label>
                        <input type="checkbox" name="tour" value="0"/>
                       تم حلها 
                    </label>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="question-title">مشكله في شاشة لاب بي اتش بي </h1>
                    <a href="#" class="qustion-user">
                        <i class="ti-tag"></i>
                        السوفتوير
                    </a>
                </div>
                <div class="col-sm-12">
                    <div class="question-header">
                        <span class="qustion-user">
                            <i class="fa fa-eye"></i>
                            30
                        </span>
                        <span class="qustion-user">
                            <i class="ti-thought"></i>
                            14
                        </span>
                        <span class="qustion-user">
                            <i class="ti-info-alt"></i>
                            مفتوح
                        </span> 
                        <span class="qustion-user">
                            <i class="ti-timer"></i>
                            3-12-2017 3:15 PM
                        </span>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="problem-description">
                    <p>
                        وريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور

                        أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد

                        أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات . ديواس

                        أيوتي أريري دولار إن ريبريهينديرأيت فوليوبتاتي فيلايت أيسسي كايلليوم دولار أيو فيجايت

                        نيولا باراياتيور. أيكسسيبتيور ساينت أوككايكات كيوبايداتات نون بروايدينت ,سيونت ان كيولبا

                        كيو أوفيسيا ديسيريونتموليت انيم أيدي ايست لابوريوم."

                        "سيت يتبيرسبايكياتيس يوندي أومنيس أستي ناتيس أيررور سيت فوليبتاتيم أكيسأنتييوم

                        دولاريمكيو لايودانتيوم,توتام ريم أبيرأم,أيكيو أبسا كيواي أب أللو أنفينتوري فيرأتاتيس
                    </p>
                    <img src="{{ asset('images/problem.png') }}">
                </div>

            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="widget-area no-padding blank leave-comment">
                        <div class="status-upload">
                            <form>
                                <textarea placeholder="اترك عرضك " ></textarea>
                                <button type="submit" class="btn btn-success green"><i class="fa fa-share"></i> اترك عرضك</button>
                            </form>
                        </div><!-- Status Upload  -->
                    </div><!-- Widget Area -->

                </div>
            </div>
            <div class="comments-container">

                <ul id="comments-list" class="comments-list">
                    <li>
                        <div class="comment-main-level">
                            <!-- Avatar -->
                            <div class="comment-avatar"><img src="http://i9.photobucket.com/albums/a88/creaticode/avatar_1_zps8e1c80cd.jpg" alt=""></div>
                            <!-- Contenedor del Comentario -->
                            <div class="comment-box">
                                <div class="comment-head">
                                    <h6 class="comment-name by-author"><a href="{{ url('/company') }}">اسم الشركة</a></h6>
                                    <div class="replay-desc">
                                        <span><i class="ti-timer"></i> منذ ساعتين</span>
                                        <a href="#"><i class="fa fa-reply"></i>  تواصل</a>

                                    </div>
                                </div>
                                <div class="comment-content">
                                    المشكله فعلا في الشاشه ممكن اغيرهالك بسعر ممتاز
                                </div>
                            </div>
                        </div>
                        <!-- Respuestas de los comentarios -->
                        <ul class="comments-list reply-list">
                            <li>
                                <!-- Avatar -->
                                <div class="comment-avatar"><img src="http://i9.photobucket.com/albums/a88/creaticode/avatar_2_zps7de12f8b.jpg" alt=""></div>
                                <!-- Contenedor del Comentario -->
                                <div class="comment-box">
                                    <div class="comment-head">
                                        <h6 class="comment-name by-author"><a href="{{ url('/company') }}">اسم الشركة</a></h6>
                                        <div class="replay-desc">
                                            <span><i class="ti-timer"></i> منذ ساعتين</span>
                                            <a href="#"><i class="fa fa-reply"></i>  تواصل</a>

                                        </div>
                                    </div>
                                    <div class="comment-content">
                                        المشكله فعلا في الشاشه ممكن اغيرهالك بسعر ممتاز
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </li>

                    <li>
                        <div class="comment-main-level">
                            <!-- Avatar -->
                            <div class="comment-avatar"><img src="http://i9.photobucket.com/albums/a88/creaticode/avatar_2_zps7de12f8b.jpg" alt=""></div>
                            <!-- Contenedor del Comentario -->
                            <div class="comment-box">
                                <div class="comment-head">
                                    <h6 class="comment-name by-author"><a href="{{ url('/company') }}">اسم الشركة</a></h6>
                                    <div class="replay-desc">
                                        <span><i class="ti-timer"></i> منذ ساعتين</span>
                                        <a href="#"><i class="fa fa-reply"></i>  تواصل</a>

                                    </div>
                                </div>
                                <div class="comment-content">
                                    المشكله فعلا في الشاشه ممكن اغيرهالك بسعر ممتاز
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="anouncment-sidebar">
                <img src="{{ asset('images/sidebar-ann.jpg') }}">
            </div>
            <div class="most-rated-comp">
                <h2>
                    اسالة ذات صلة تم حلها    
                </h2>
                <div class="related-questions-block">
                    <a href="index.php?page=question" class="related-question"><i class="fa fa-angle-left" aria-hidden="true"></i> مشكلة في بطارية لاب بي اتش بي</a>
                    <a href="index.php?page=question" class="related-question"><i class="fa fa-angle-left" aria-hidden="true"></i> مشكلة في بطارية لاب بي اتش بي</a>
                    <a href="index.php?page=question" class="related-question"><i class="fa fa-angle-left" aria-hidden="true"></i> مشكلة في بطارية لاب بي اتش بي</a>
                    <a href="index.php?page=question" class="related-question"><i class="fa fa-angle-left" aria-hidden="true"></i> مشكلة في بطارية لاب بي اتش بي</a>
                    <a href="index.php?page=question" class="related-question"><i class="fa fa-angle-left" aria-hidden="true"></i> مشكلة في بطارية لاب بي اتش بي</a>
                    <a href="index.php?page=question" class="related-question"><i class="fa fa-angle-left" aria-hidden="true"></i> مشكلة في بطارية لاب بي اتش بي</a>
                    <a href="index.php?page=question" class="related-question"><i class="fa fa-angle-left" aria-hidden="true"></i> مشكلة في بطارية لاب بي اتش بي</a>
                    <a href="index.php?page=question" class="related-question"><i class="fa fa-angle-left" aria-hidden="true"></i> مشكلة في بطارية لاب بي اتش بي</a>
                    <a href="index.php?page=question" class="related-question"><i class="fa fa-angle-left" aria-hidden="true"></i> مشكلة في بطارية لاب بي اتش بي</a>
                    <a href="index.php?page=question" class="related-question"><i class="fa fa-angle-left" aria-hidden="true"></i> مشكلة في بطارية لاب بي اتش بي</a>
                    <a href="index.php?page=question" class="related-question"><i class="fa fa-angle-left" aria-hidden="true"></i> مشكلة في بطارية لاب بي اتش بي</a>
                    <a href="index.php?page=question" class="related-question"><i class="fa fa-angle-left" aria-hidden="true"></i> مشكلة في بطارية لاب بي اتش بي</a>
                    <a href="index.php?page=question" class="related-question"><i class="fa fa-angle-left" aria-hidden="true"></i> مشكلة في بطارية لاب بي اتش بي</a>
                    <a href="index.php?page=question" class="related-question"><i class="fa fa-angle-left" aria-hidden="true"></i> مشكلة في بطارية لاب بي اتش بي</a>
                    <a href="index.php?page=question" class="related-question"><i class="fa fa-angle-left" aria-hidden="true"></i> مشكلة في بطارية لاب بي اتش بي</a>

                </div>
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
    <!-- /.row  -->
</div>
<!-- /main container -->
@endsection