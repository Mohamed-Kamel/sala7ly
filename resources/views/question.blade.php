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
                <li><a href="{{url('/')}}"><i class="ti-home"></i> الرئيسية</a></li>
                <li><a href="{{url('/questions')}}"> الاسألة</a></li>
                <li class="active">{{$question->title}}</li>
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
                        <a href="{{url('/user')}}/{{$question->user->id}}">{{$question->user->name}}</a>
                    </div>
                </div>
                @if(Auth::id())
                <div class="col-sm-2">
                    @if($question->status === 'closed')
                    <label>
                        <input type="checkbox" name="tour" value="0" checked/>
                       تم حلها
                    </label>
                    @else
                    <label>
                        <input type="checkbox" name="tour" value="0"/>
                        تم حلها
                    </label>
                    @endif
                </div>
                @endif
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="question-title">{{$question->title}} </h1>
                    <a href="#" class="qustion-user">
                        <i class="ti-tag"></i>
                        {{$question->cat->title}}
                    </a>
                </div>
                <div class="col-sm-12">
                    <div class="question-header">
                        <span class="qustion-user">
                            <i class="fa fa-eye"></i>
                            {{$question->visited}}
                        </span>
                        <span class="qustion-user">
                            <i class="ti-thought"></i>
                            {{$question->allComments->count()}}
                        </span>
                        @if($question->status === 'open')
                        <span class="qustion-user">
                            <i class="ti-info-alt"></i>
                            مفتوح
                        </span>
                        @else
                        <span class="qustion-user">
                        <i class="ti-info-alt"></i>
                            مغلق
                        </span>
                        @endif
                        <span class="qustion-user">
                            <i class="ti-timer"></i>
                            {{$question->created}}
                        </span>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="problem-description">
                    <p>
                        {{$question->desc}}
                    </p>
                    <img src="{{ asset('images/problem.png') }}">
                </div>

            </div>
            @if(Auth::id())
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
            @endif

            <div class="comments-container">
                <ul id="comments-list" class="comments-list">
                    @foreach($question->comments as $comment)
                        @if(count($comment->reply()))

                            <li>
                                <div class="comment-main-level">
                                    <!-- Avatar -->
                                    <div class="comment-avatar">
                                    <img src="http://i9.photobucket.com/albums/a88/creaticode/avatar_1_zps8e1c80cd.jpg" alt=""></div>
                                    <!-- Contenedor del Comentario -->
                                    <div class="comment-box">
                                        <div class="comment-head">
                                            <h6 class="comment-name by-author"><a href="{{ url('/company') }}">اسم الشركة</a></h6>
                                            <div class="replay-desc">
                                                <span><i class="ti-timer"></i> {{$comment->created}}</span>
                                                <a href="#"><i class="fa fa-reply"></i>  تواصل</a>
                                            </div>
                                        </div>
                                        <div class="comment-content">
                                            {{$comment->comment}}
                                        </div>
                                    </div>
                                </div>

                                <!-- Replies -->
                                <ul class="comments-list reply-list">
                                
                                {{-- {{ $replies = $comment->reply()}} --}}
                                @foreach($comment->reply() as $reply)
                                    <li>
                                        <!-- Avatar -->
                                        <div class="comment-avatar"><img src="http://i9.photobucket.com/albums/a88/creaticode/avatar_2_zps7de12f8b.jpg" alt=""></div>
                                        <!-- Contenedor del Comentario -->
                                        <div class="comment-box">
                                            <div class="comment-head">
                                                <h6 class="comment-name by-author"><a href="{{ url('/company') }}">اسم الشركة</a></h6>
                                                <div class="replay-desc">
                                                    <span><i class="ti-timer"></i> {{$reply->created}}</span>
                                                    <a href="#"><i class="fa fa-reply"></i>  تواصل</a>

                                                </div>
                                            </div>
                                            <div class="comment-content">
                                                {{$reply->comment}}
                                            </div>
                                        </div>
                                    </li>
                                @endforeach 

                                </ul>
                            </li>

                    @else
                        <li>
                        <div class="comment-main-level">
                            <!-- Avatar -->
                            <div class="comment-avatar"><img src="http://i9.photobucket.com/albums/a88/creaticode/avatar_1_zps8e1c80cd.jpg" alt=""></div>
                            <!-- Contenedor del Comentario -->
                            <div class="comment-box">
                                <div class="comment-head">
                                    <h6 class="comment-name by-author">
                                    <a href="{{ url('/company') }}">اسم الشركة</a></h6>
                                    <div class="replay-desc">
                                        <span><i class="ti-timer"></i> {{$comment->created}}</span>
                                        <a href="#">
                                        <i class="fa fa-reply"></i>  تواصل</a>
                                    </div>
                                </div>
                                <div class="comment-content">
                                    {{$comment->comment}}
                                </div>
                            </div>
                        </div>
                    </li>

                    @endif

                    @endforeach

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