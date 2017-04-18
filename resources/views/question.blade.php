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
        <!--START RIGHT SIDE-->
        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
            <div class="row">
                <div class="col-sm-8">
                    <div class="question-user-img">
                        <img src="@if( $question->user->img){{ url($question->user->img) }}@endif">
                        <a href="{{url('/userProfile')}}/{{$question->user->id}}">
                            {{$question->user->name}}
                        </a>
                    </div>
                </div>
                <!--********** check status *********-->      
                @if(Auth::id() && Auth::id() == $question->user_id)
                <div class="col-sm-4">
                    <form method="post" id="my_form" class="colsed-question">
                        @if($question->status === 'closed')
                        <label>
                            <input type="checkbox"  name="tour" value="closed" checked>
                            <input type="hidden" id="hidden" value="{{ csrf_token() }}">
                            تم حلها
                        </label>
                        @else
                        <label id="chkbtn">
                            <input type="checkbox" class="check" name="tour" value="open" >
                            <input type="hidden" id="hidden" value="{{ csrf_token() }}">
                            تم حلها
                        </label>
                        @endif
                    </form>
                </div>
                @endif
                @if($question->status === 'closed' && Auth::id() != $question->user_id )
                <div class="col-sm-4">
                    <span class="colsed-question"><i class="ti-lock"></i> تم حل السؤال واغلاقه من قبل المستخدم</span>
                </div>
                @endif
                <!--************* end check status **********-->
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <h1 class="question-title">{{$question->title}}</h1>
                    <a href="{{url('/questions')}}" class="qustion-user">
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
                            تم النشر بتاريخ: 
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
                    <img @if($question->img) src="{{ url($question->img) }}" @endif>
                </div>
            </div>

            <!-- START LEAVE COMMET-->
            @if(Auth::id() && $question->status=='open')
            <div class="row">
                <div class="col-sm-12">
                    <div class="widget-area no-padding blank leave-comment">
                        <div class="status-upload">
                            <form class="postcomment" action="" method="post">
                                {{ csrf_field() }}
                                <textarea placeholder="اترك عرضك " name="comment" ></textarea>
                                <input type="hidden" name="question_id" value="{{$question->id}}" placeholder="{{$question->id}}">
                                <input type="hidden" name="parent_id" value="0" placeholder="">
                                <button type="submit"  class="btn btn-success">
                                    <i class="fa fa-share"></i>
                                    اترك عرضك
                                </button>
                            </form>
                        </div><!-- Status Upload  -->
                    </div><!-- Widget Area -->
                </div>
            </div>
            @endif
            <!-- /END LEAVE COMMET-->

            <!--START QUESTIONS COMMENTS-->
            <div class="comments-container">
                <ul id="comments-list" class="comments-list">
                    @if($question->comments)
                    @foreach($question->comments->reverse() as $comment)
                    @if(count($comment->reply()))
                    <li>
                        <div class="comment-main-level">
                            <div class="comment-avatar">
                                @if($comment->users->group_id == '2' )
                                <a href="{{ url('/company') }}/{{ $comment->users->id }}">
                                    <img @if($comment->users->img) src="{{ url($comment->users->img)}}"@endif  alt="{{$comment->users->name}}">
                                </a>
                                @endif
                                @if($comment->users->group_id == '1' )
                                <a href="{{ url('/userProfile') }}/{{ $comment->users->id }}">
                                    <img @if($comment->users->img) src="{{ url($comment->users->img)}}"@endif  alt="{{$comment->users->name}}">
                                </a>
                                @endif
                            </div>
                            <div class="comment-box">
                                <div class="comment-head">
                                     @if($comment->users->group_id == '2' )
                                    <h6 class="comment-name by-author"><a href="{{ url('/company') }}/{{ $comment->users->id }}">{{$comment->users->name}}</a></h6>
                                    @endif
                                     @if($comment->users->group_id == '1' )
                                    <h6 class="comment-name by-author"><a href="{{ url('/userProfile') }}/{{ $comment->users->id }}">{{$comment->users->name}}</a></h6>
                                    @endif
                                    
                                    
                                    <div class="replay-desc">
                                         <span><i class="ti-timer"></i>  {{$comment->created}}</span>
                                        @if($question->user_id==Auth::id() && $question->status=='open'  && $comment->users->group_id=='2')
                                        <input type="hidden" value="{{$comment->users->group_id}}">
                                        <form  method="post" action="" class="mail">
                                            {{ csrf_field() }}
                                            <input type="hidden" name="company_id" value="{{$comment->user_id}}">
                                             <input type="hidden" name="question_id" value="{{$question->id}}" >
                                            <input type="hidden" name="stars" value="0">
                                            <input type="hidden" name="review" value=" ">
                                            <input type="hidden" name="status" value="0">
                                            <input type="hidden" value="">
                                            <button type="submit" class="btn btn-success"><i class="fa fa-handshake-o"></i> تواصل</button>
                                        </form>  
                                        @endif 
                                    </div>
                                </div>
                                <div class="comment-content">
                                    {{$comment->comment}}
                                </div>
                            </div>
                        </div>
                        <!--START REPLIES-->
                        <ul class="comments-list reply-list">
                            @foreach($comment->reply() as $reply)
                            <li>
                                <div class="comment-avatar">
                                    @if($comment->users->group_id == '2' )
                                    <a href="{{ url('/company') }}/{{ $comment->users->id }}">
                                        <img @if($comment->users->img) src="{{ url($comment->users->img)}}"@endif  alt="{{$comment->users->name}}">
                                    </a>
                                    @endif
                                    @if($comment->users->group_id == '1' )
                                    <a href="{{ url('/userProfile') }}/{{ $comment->users->id }}">
                                        <img @if($comment->users->img) src="{{ url($comment->users->img)}}"@endif  alt="{{$comment->users->name}}">
                                    </a>
                                    @endif
                                </div>
                                <div class="comment-box">
                                    <div class="comment-head">
                                    @if($comment->users->group_id == '2' )
                                    <h6 class="comment-name by-author"><a href="{{ url('/company') }}/{{ $comment->users->id }}">{{$comment->users->name}}</a></h6>
                                    @endif
                                    @if($comment->users->group_id == '1' )
                                    <h6 class="comment-name by-author"><a href="{{ url('/userProfile') }}/{{ $comment->users->id }}">{{$comment->users->name}}</a></h6>
                                    @endif
                                    </div>
                                    <div class="comment-content">
                                        {{$reply->comment}}
                                    </div>
                                </div>
                            </li>
                            @endforeach 

                            @if(Auth::id() && $question->status=='open')
                            <li class="auther-leave-comment">
                                <div class="comment-avatar">
                                    <img @if(Auth::user()->img) src="{{ url(Auth::user()->img) }}" @endif alt="{{Auth::user()->name }}">
                                </div>
                                <div class="comment-box">
                                    <div class="comment-head {{$comment->id}}">
                                        <form class="postcomment" action="" method="post">
                                            {{ csrf_field() }}
                                            <textarea rows="4" cols="50" name="comment" ></textarea>

                                            <input type="hidden" name="parent_id" value="{{$comment->id}}" placeholder="{{$comment->id}}">

                                            <input type="hidden" name="question_id" value="{{$question->id}}" placeholder="{{$question->id}}">

                                            <button type="submit" class="btn btn-success">
                                                <i class="ti-thought"></i>
                                                اكتب تعليق
                                            </button>
                                        </form>
                                    </div>

                                </div> 
                            </li>
                            @endif
                        </ul>
                        <!-- /END REPLIES-->
                    </li>
                    @else
                    <li>
                        <div class="comment-main-level">
                            <div class="comment-avatar">
                                @if($comment->users->group_id == '2' )
                                <a href="{{ url('/company') }}/{{ $comment->users->id }}">
                                    <img @if($comment->users->img) src="{{ url($comment->users->img)}}"@endif  alt="{{$comment->users->name}}">
                                </a>
                                @endif
                                @if($comment->users->group_id == '1' )
                                <a href="{{ url('/userProfile') }}/{{ $comment->users->id }}">
                                    <img @if($comment->users->img) src="{{ url($comment->users->img)}}"@endif  alt="{{$comment->users->name}}">
                                </a>
                                @endif
                            </div>
                            <div class="comment-box">
                                <div class="comment-head">
                                     @if($comment->users->group_id == '2' )
                                    <h6 class="comment-name by-author"><a href="{{ url('/company') }}/{{ $comment->users->id }}">{{$comment->users->name}}</a></h6>
                                    @endif
                                    @if($comment->users->group_id == '1' )
                                    <h6 class="comment-name by-author"><a href="{{ url('/userProfile') }}/{{ $comment->users->id }}">{{$comment->users->name}}</a></h6>
                                    @endif
                                    <div class="replay-desc">
                                        <span><i class="ti-timer"></i>  {{$comment->created}}</span>
                                        @if($question->user_id==Auth::id() && $question->status=='open' && $comment->users->group_id=='2')

                                        <!-- user_id`, `company_id`, `stars`, `review`, `status` -->
                                        <form  method="post" action="" class="mail">
                                            {{ csrf_field() }}
                                            <input type="hidden" name="company_id" value="{{$comment->user_id}}" >
                                             <input type="hidden" name="question_id" value="{{$question->id}}" >
                                         <!--    <input type="hidden" name="stars" value="0">
                                            <input type="hidden" name="review" value=" ">
                                            <input type="hidden" name="status" value="0"> -->
                                            <input type="hidden" value="">
                                            <button type="submit" class="btn btn-success"><i class="fa fa-handshake-o"></i> تواصل</button>
                                        </form> 
                                        @endif  
                                    </div>
                                </div>
                                <div class="comment-content">
                                    {{$comment->comment}}
                                </div>
                            </div>
                        </div>
                        <!--START REPLIES-->
                        <ul class="comments-list reply-list">
                             @if(Auth::id() && $question->status=='open')
                            <li class="auther-leave-comment">
                                <div class="comment-avatar">
                                    <img @if(Auth::user()->img) src="{{ url(Auth::user()->img) }}" @endif alt="{{Auth::user()->name }}">
                                </div>
                                <div class="comment-box">
                                    <div class="comment-head {{$comment->id}}">
                                        <form class="postcomment" action="" method="post">
                                            {{ csrf_field() }}
                                            <textarea rows="4" cols="50" name="comment" ></textarea>

                                            <input type="hidden" name="parent_id" value="{{$comment->id}}" placeholder="{{$comment->id}}">

                                            <input type="hidden" name="question_id" value="{{$question->id}}" placeholder="{{$question->id}}">

                                            <button type="submit" class="btn btn-success">
                                                <i class="ti-thought"></i>
                                                اكتب تعليق
                                            </button>
                                        </form>
                                    </div>

                                </div> 
                            </li>
                            @endif
                        </ul>
                        <!-- /END REPLIES-->
                    </li> 
                    @endif
                    @endforeach
                    @endif
                </ul>
            </div>
            <!--/END QUESTIONS COMMENTS-->
        </div>
        <!-- /END RIGHT SIDE  -->

        <!-- START LEFT SIDE -->
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="anouncment-sidebar">
                <img src="{{ asset('images/sidebar-ann.jpg') }}">
            </div>
            <div class="most-rated-comp">
                <h2>
                    اسالة ذات صلة تم حلها    
                </h2>
                @foreach($results as $result)
                <div class="related-questions-block">
                    <a href="{{ URL('question') }}/{{ $result->id}}" class="related-question">
                        <i class="fa fa-angle-left" aria-hidden="true"></i>
                        {{ $result->title }}
                    </a>
                </div>
                @endforeach
            </div>
            <div class="most-rated-comp">
                <h2>
                    <i class="ti-cup">    
                    </i>
                    اعلى الشركات تقيماً
                </h2>
                 <div class="main-comp-block-top">
                        @if(isset($top_rated))
                        @foreach($top_rated as $top)
                        <div Class="company-rate-block">
                              <a href="{{ URL('company') }}/{{ $top->user->id }}">
                                <img @if(isset($top->user->img)) src="{{ url($top->user->img)}}" @endif  alt="{{ $top->user->name }}">
                              </a>
                            <div class="copmnyrate">
                                <a href="{{ URL('company') }}/{{ $top->user->id }}" class="comp-title">{{ $top->user->name }}</a>
                                <ul id="stars">
                                    @for($i=0; $i<round($top->rating); $i++)
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        @endfor
                                        @for($i=5; $i>round($top->rating); $i--)
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                        @endfor
                                </ul>
                            </div>
                        </div>
                        @endforeach 
                        @endif
                    </div>
            </div>
        </div>
        <!-- /END LEFT SIDE  -->
    </div>
</div>

<!-- /main container -->

 @endsection

    @section("scripts")
    <script>
        $('document').ready(function(){


        $(".rep").on("click", function(event){
        event.preventDefault();
        var comment = $(this).find("span").attr("class");
        console.log(comment);
        $(".replay").find("." + comment).parent("div").toggle();
        });
        $('.postcomment').on('submit', function(event){

        event.preventDefault();
        // console.log($(this).find(".h").val());

        $.ajax({
        // url:'{{$question->id}}',
        data: $(this).serialize(),
                type: 'POST',
                success: function(response) {

                window.location.reload();
                }

        });
        });
        $('.mail').on("submit", function(event){
        event.preventDefault();
        $.ajax({
        url:  {{$question->user_id}} + '/mail',
                data: $(this).serialize(),
                type: "post",
                success: function(response) {
                alert("message send to company successfully")
                        
                }
        });
        });
        });



        $(function() {
        $('#icr-1').click(function(event) {
        event.preventDefault();
        var checked = $('.check').val();
        var csrf = $("#hidden").val();
        console.log(checked);
        $.ajax({
        method: "post",
                url:{{ $question->id }} + '/done',
                data: {
                "status": checked,
                        "_token": csrf
                },
                success: function(response) {
                window.location.reload();
                }
        });
        });
        });
    </script>
    @endsection





