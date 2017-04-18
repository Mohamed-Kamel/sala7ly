<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Sala7ly</title>
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
                                <a href="{{ URL('/page') }}/1"> من نحن</a>
                                <a href="{{ URL('/page') }}/2"> مساعدة </a>
                                <a href="{{ URL('/page') }}/3"> سياسة الخصوصية </a>
                                <a href="{{ url('/contactus') }}"> اتصل بنا</a>
                                <a href="{{ url('/faq') }}">الاسألة الشائعة</a>
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
            <a class="navbar-brand" href="{{ url('/') }}"> <img style="height:40px;" src="{{ asset('images/logo.png') }}" alt="Salahly"> </a>
            <!-- this part for mobile -->


        </div>

        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="{{ url('/') }}"> الرئيسية </a></li>
                <li><a href="{{ url('questions') }}"> الاسئلة </a></li>
                <li><a href="{{ url('/companies') }}"> شركات الصيانة </a></li>
            </ul>
        </div>

        

        <div class="search-box pull-left">
            <div class="input-group">
                <button class="btn btn-nobg getFullSearch" type="button"><i class="fa fa-search"> </i></button>
            </div>
            <!-- /input-group -->
        </div>
        <div class="user-header">
            @if (Auth::guest())
                <ul class="use_menu">
                    <li><a class="hvr-ripple-out" href="{{ route('login') }}"> <i class="fa fa-sign-in"></i> تسجيل
                            الدخول</a></li>
                    <li><a class="hvr-ripple-out" href="{{ route('register') }}"> <i class="ti-user"></i> مستخدم
                            جديد</a></li>
                </ul>
            @else
                <ul class="user-notify">
                    <a class="header-notifi" href=""> <i class="ti-bell"></i></a>
                </ul>

                <div class="header-user">
                  
                    <a href="#" class="heaer-user-name">
                          
                        <img src="
                             @if( Auth::user() && Auth::user()->img)
                             {{ url(Auth::user()->img) }}
                         @endif
                         ">
                    </a>
                    
                    <ul class="user-menu" role="menu">
                        <li>
                            @if( Auth::user() && Auth::user()->group_id == 1)
                             <a href="{{ URL('userProfile') }}/{{ Auth::user()->id }}">
                                <i class="ti-id-badge"></i>
                                {{ Auth::user()->name }}
                            </a>
                            @endif
                            @if(Auth::user() &&  Auth::user()->group_id == '2')
                             <a href="{{ URL('company') }}/{{ Auth::user()->id }}">
                                <i class="ti-id-badge"></i>
                                {{ Auth::user()->name }}
                            </a>
                            @endif
                            
                           
                        </li>
                        <li>
                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                                <i class="ti-power-off"></i>
                                تسجيل الخروج
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>

                </div>
            @endif
        </div>
        <!-------------------- Notification -------------------->
        @if(Auth::user())
        <div>
            @if(auth()->user()->notifications)
                <span class="no_unread">{{auth()->user()->unreadNotifications->count()}}
                </span>
            @endif
            <ul>
                <li class="dropdown">
                                <a href="#" class="dropdown-toggle notify" data-toggle="dropdown" role="button" aria-expanded="false">
                                    <i class="fa fa-bell-o"> </i> <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu" role="menu" id="showNotification">
                                    @if(auth()->user()->notifications)
                                    @foreach(auth()->user()->notifications as $note)
                                    <li>
                                        <a class="{{ $note->read_at == null ? 'unread' : '' }}" href="{{url('/question')}}/{{$note->data['question_id']}}">
                                            {{$note->data['data']}}
                                            <br>
                                            {{$note->created_at->diffForHumans()}}
                                        </a>
                                    </li>
                                    @endforeach
                                    @endif
                                </ul>
                </li>
            </ul>
        </div>
                        @endif
<!-------------------- Notification -------------------->
        <!--/.nav-collapse -->
    </div>
    <!--/.container -->
    <form action="{{url('/search')}}">
        <div class="search-full text-right"><a class="pull-right search-close"> <i class=" fa fa-times-circle"> </i>
            </a>
            <div class="searchInputBox pull-right">
                <input type="search" data-searchurl="search?=" name="question" placeholder="ابحث عن سؤال"
                       class="search-input">
                <button class="btn-nobg search-btn" type="submit"><i class="fa fa-search"> </i></button>
            </div>
        </div>
    </form>
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
                            <h4><a class="inline" href="callto:+88016000000"> <i class="fa fa-phone"> </i> 88
                                        0160 000 000 </a></h4>
                            <h4><a class="inline" href="mailto:help@tshopweb.com"> <i class="fa fa-envelope-o"> </i>
                                    help@tshopweb.com </a></h4>
                        </li>
                    </ul>
                </div>

                <div style="clear:both" class="hide visible-xs"></div>

                <div class="col-lg-4  col-md-4 col-sm-6 col-xs-6">
                    <h3> روابط تهمك </h3>
                    <ul>
                        <li><a href="{{ URL('/page') }}/1"> من نحن</a></li>
                        <li><a href="{{ URL('/page') }}/2"> مساعدة </a></li>
                        <li><a href="{{ URL('/page') }}/3"> سياسة الخصوصية </a></li>
                        <li><a href="{{ url('/contactus') }}"> اتصل بنا</a></li>
                        <li> <a href="{{ url('/faq') }}">الاسألة الشائعة</a></li>
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
                                            class="fa fa-long-arrow-left"> </i></button>
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

<script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/ion-checkRadio/ion.checkRadio.min.js') }}"></script>
<script src="{{ asset('js/script.js') }}"></script>
<script src="{{asset('js/jquery.jscroll.min.js')}}"></script>
<script src="{{asset('StreamLab/StreamLab.js')}}"></script>

<script>
    $(document).ready(function () {
        $('#option').change(function () {
            $('.next').css({"display": ""})
        });

    });
// infinit scroll
    $('ul.pagination').hide();
    $(function () {
        $('.infinite-scroll').jscroll({
            autoTrigger: true,
            padding: 0,
            nextSelector: '.pagination li.active + li a',
            contentSelector: 'div.infinite-scroll',
            callback: function () {
                $('ul.pagination').remove();
            }
        });
    });

    //real time notification
    var message, ShowDiv = $('#showNotification');
    var slh = new StreamLabHtml();
    var sls = new StreamLabSocket({
       appId:"{{config('stream_lab.app_id')}}",
       channelName:"sal7ly",
       event:"*"
    });

     
    sls.socket.onmessage = function(res){
        ///res is data send from our api
        ///set this data to our class so you can use our helper function 
        slh.setData(res);
        console.log({{Auth::id()}});
        if(slh.getSource() === 'messages'){
            message =slh.getMessage();

            // var li = ShowDiv.prepend('<li></li>').addClass('unread');

            // var a = li.append('<a href="{{url("/question")}}/'+ message. question_id +'">' + message.data + '</a>');

            // a.append("<p></p>").text('message.created_at');
            if({{Auth::id()}} == message.company_id){
            ShowDiv.prepend('<li class="unread"><a href="{{url("/question")}}/'+ message.question_id +'"><b>' + message.data + '</b><br>'+ message.created_at +'</a></li>');
            $('div .no_unread').html(message.no_unread);
            }
        }
        $('.notify').on('click',function(){
            $('div .no_unread').html('0');
            $.get("{{url('MarkAllSeen')}}", function(){});
        });
        $('.notify li').on('click',function(event){
                event.preventDefault();
                $(this).removeClass('unread');
                
        });
        
    }
</script>
    @yield('scripts')
    @yield('company')
</body>


</html>
