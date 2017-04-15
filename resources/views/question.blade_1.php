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
                     <img src="
                        @if( $question->user->img)
                                       {{ url($question->user->img) }}
                                   @endif
                       ">
                    <a href="{{url('/user')}}/{{$question->user->id}}">
                        {{$question->user->name}}
                    </a>
                 </div>
            </div>

            <!--********** check status *********-->
            @if(Auth::id() && Auth::id() == $question->user_id)
            <div class="col-sm-2">
                   @if($question->status === 'closed')
                   <form method="post" id="my_form">
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

                       @else
                       <span><i class="ti-lock"></i> تم حل السؤال واغلاقه من قبل المستخدم</span>
                   </form>
                   @endif
            </div>
            <!--************* end check status **********-->
        </div>
        
     

    <!-- *********************** -->
                <div class="row ques">
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
                                تم النشر بتاريخ  {{$question->created}}
                            </span>
                            <div class="problem-description">

                                <span> {{$question->desc}}</span>

                                @if ($question->img !== null)

                                <img class="img-responsive" src="{{$question->img}}">
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
      <!-- ********************** -->
<!--****************** main class container************  -->
                <div class="comments-container">


                    <ul id="comments-list" class="comments-list">

                        @foreach($question->comments as $comment)
                        @if(count($comment->reply()))
                        <li>
                            <div class="comment-main-level">
                                <!-- Avatar -->
                                <div class="comment-avatar">
                                    <img src="{{$comment->users->img}}" alt="">
                                </div>
                                <!-- Contenedor del Comentario -->
                                <div class="comment-box">
                                    <div class="comment-head">
                                        <h6 class="comment-name by-author"><a href="{{ url('/company') }}">
                                                {{$comment->users->name}}
                                            </a>
                                        </h6>
                                        <div class="replay-desc">
                                            <span><i class="ti-timer"></i>
                                                {{$comment->created}}
                                            </span>

                                            @if($question->user_id==Auth::id() && $question->status=='open'  && $comment->users->group_id=='2')
                                            {{$comment->users->group_id}}
                                            <form  method="post" action="" class="mail">
                                                {{ csrf_field() }}
                                                <input type="hidden" name="company_id" value="{{$comment->user_id}}" >
                                                <input type="hidden" name="stars" value="0">
                                                <input type="hidden" name="review" value=" ">
                                                <input type="hidden" name="status" value="0">
                                                <input type="hidden" value="">
                                                <button type="submit">تواصل</button>
                                            </form>  
                                            @endif 

                                        </div>
                                    </div>

                                    <div class="comment-content">
                                        {{$comment->comment}}
                                    </div>
                                    @if(Auth::id() && $question->status=='open')
                                    <button type="button"  class="rep btn btn-info">
                                        <span class="{{$comment->id}}">
                                            تعليق 
                                        </span>  
                                    </button>
                                    @endif
                                    <!-- start leave comment -->
                                    <div class="row replay" style="display: none">
                                        <div class="{{$comment->id}}">
                                            <div class="col-sm-12">
                                                <div class="widget-area no-padding blank leave-comment">
                                                    <div class="status-upload">

                                                        <form class="postcomment" action="" method="post">

                                                            {{ csrf_field() }}
                                                            <textarea rows="4" cols="50" name="comment" ></textarea>

                                                            <input type="hidden" name="parent_id" value="{{$comment->id}}" placeholder="{{$comment->id}}">

                                                            <input type="hidden" name="question_id" value="{{$question->id}}" placeholder="{{$question->id}}">

                                                            <button type="submit"  class="btn btn-success green">
                                                                <i class="fa fa-share"></i>
                                                                اكتب تعليق
                                                            </button>

                                                        </form>

                                                    </div><!-- Status Upload  -->
                                                </div><!-- Widget Area -->

                                            </div> 
                                        </div>
                                    </div>

                                    <!-- Replies -->
                                    <ul class="comments-list reply-list">

                                        @foreach($comment->reply() as $reply)
                                        <li>
                                            <!-- Avatar -->
                                            <div class="comment-avatar">
                                                <img src="{{$comment->users->img}}" alt=""></div>
                                            <!-- Contenedor del Comentario -->
                                            <div class="comment-box">
                                                <div class="comment-head">
                                                    <h6 class="comment-name by-author">
                                                        <a href="{{ url('/company') }}">
                                                            {{$comment->users->name}}
                                                        </a>
                                                    </h6>
                                                    <div class="replay-desc">

                                                        <div class="comment-content">
                                                            {{$reply->comment}}
                                                        </div>




                                                    </div>
                                                </div>

                                            </div>
                                        </li>
                                        @endforeach 

                                    </ul>
                                </div>
                            </div>
                        </li>

                        @else

                        <li>
                            <div class="comment-main-level">
                                <!-- Avatar -->
                                <div class="comment-avatar">
                                    <img src="{{$comment->users->img}}" alt="">
                                </div>

                                <!-- comment body -->

                                <div class="comment-box">
                                    <div class="comment-head">
                                        <h6 class="comment-name by-author">
                                            <a href="{{ url('/company') }}">{{$comment->users->name}}</a></h6>
                                        <div class="replay-desc">


                                            <div class="comment-content">
                                                {{$comment->comment}}
                                            </div>
                                            <span>
                                                <i class="ti-timer"></i>
                                                {{$comment->created}}
                                            </span>

                                            @if($question->user_id==Auth::id() && $question->status=='open' && $comment->users->group_id=='2')

                                            <!-- user_id`, `company_id`, `stars`, `review`, `status` -->
                                            <form  method="post" action="" class="mail">
                                                {{ csrf_field() }}
                                                <input type="hidden" name="company_id" value="{{$comment->user_id}}" >
                                             <!--    <input type="hidden" name="stars" value="0">
                                                <input type="hidden" name="review" value=" ">
                                                <input type="hidden" name="status" value="0"> -->
                                                <input type="hidden" value="">
                                                <button type="submit">تواصل</button>
                                            </form> 
                                            @endif    

                                            @if(Auth::id() && $question->status=='open')
                                            <button type="button"  class="rep btn btn-info">
                                                <span class="{{$comment->id}}">تعليق</span>
                                            </button>
                                            @endif
                                            <!-- start leave comment -->


                                            <div class="row replay" style="display: none">
                                                <div class="{{$comment->id}}">
                                                    <div class="col-sm-12">
                                                        <div class="widget-area no-padding blank leave-comment">
                                                            <div class="status-upload">


                                                                <form class="postcomment" action="" method="post">

                                                                    {{ csrf_field() }}
                                                                    <textarea rows="4" cols="50" class="h" name="comment"></textarea>

                                                                    <input type="hidden" name="parent_id" value="{{$comment->id}}" placeholder="{{$comment->id}}">

                                                                    <input type="hidden" name="question_id" value="{{$question->id}}" placeholder="{{$question->id}}">

                                                                    <button type="submit"  class="btn btn-success green">
                                                                        <i class="fa fa-share"></i>
                                                                        اكتب تعليق 
                                                                    </button>

                                                                </form>

                                                            </div><!-- Status Upload  -->
                                                        </div><!-- Widget Area -->

                                                    </div>
                                                </div>
                                            </div>

                                            <!-- end leave replay-->


                                        </div>
                                    </div>

                                </div>
                            </div>

                        </li>

                        @endif

                        @endforeach

                    </ul>
                </div>
<!--******************** main class container***************** -->
<!--****************** new comment  **********************-->
   
                    @if(Auth::id() && $question->status=='open')
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="widget-area no-padding blank leave-comment">
                                <div class="status-upload">
                                    <form class="postcomment" action="" method="post">

                                        {{ csrf_field() }}
                                        <textarea placeholder="اترك عرضك " name="comment" ></textarea>

                                        <input type="hidden" name="question_id" value="{{$question->id}}" placeholder="{{$question->id}}">

                                        <input type="hidden" name="parent_id" value="0" placeholder="{{$comment->id}}">

                                        <button type="submit"  class="btn btn-success green">
                                            <i class="fa fa-share"></i>
                                            اترك عرضك
                                        </button>

                                    </form>
                                </div><!-- Status Upload  -->
                            </div><!-- Widget Area -->

                        </div>
                    </div>
                    @endif
<!-- ********************8end leave comment*********************** --> 
      
     
    <!-- public content -->
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
                    <a href="{{ $result->id}}" class="related-question">
                    <i class="fa fa-angle-left" aria-hidden="true">
                    </i>
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
                            <a href="#">
                                <img src="{{ asset('images/company.png') }}" alt=""></a>
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
     <!-- /.row  -->

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
        url:{{$comment -> user_id}} + '/mail',
                data: $(this).serialize(),
                type: "post",
                success: function(response) {
                alert("message send to company successfully")
                        window.location.reload();
                }
        });
        });
        });
            </script>

    <!-- abdallatif -->

    <script>
        $(function() {
        $('#icr-1').click(function(event) {
        event.preventDefault();
        var checked = $('.check').val();
        var csrf = $("#hidden").val();
        console.log(checked);
        $.ajax({
        method: "post",
                url:{{ $question -> id }} + '/done',
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


