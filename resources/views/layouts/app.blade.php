<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--SEO-->
        @foreach(Helper::settings() as $setting )
        <title>{{$setting->title}}</title>
        <meta name="description" content="{{$setting->meta_description}}">
        <meta name="Keywords" content="{{$setting->meta_keywords}}">
        @endforeach
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
            ]) !!};</script>
        <!--Start of Zendesk Chat Script-->
<script type="text/javascript">
window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
$.src="https://v2.zopim.com/?3h1xWVfBfnylkgNcfUjOFCUUMm2DF0rk";z.t=+new Date;$.
type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
</script>
<!--End of Zendesk Chat Script-->
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
                                        @foreach(Helper::pages() as $page )
                                        <a href="{{ URL('/page') }}/{{$page->id}}"> {{$page->title}} </a>
                                        @endforeach
                                        <a href="{{ url('/contactus') }}"> اتصل بنا</a>
                                        <a href="{{ url('/faq') }}">الاسألة الشائعة</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12 col-xs-12 col-md-6">
                            <div class="text-left">
                                <ul>
                                    @foreach(Helper::settings() as $setting )
                                    <li class="phone-number">
                                        <a href="callto:{{$setting->phone}}">
                                            <i class="glyphicon glyphicon-phone-alt "></i>
                                           {{$setting->phone}}
                                        </a>
                                    </li>
                                    <li class="phone-number">
                                        <a href="{{$setting->webmaster_email}}">
                                            <i class="fa fa-envelope-o"></i>
                                           {{$setting->webmaster_email}}
                                        </a>
                                    </li>
                                    @endforeach
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
                    <div class="user-notify">
                        <a href="#" class="heaer-user-notify notify">
                            <i class="ti-bell"></i>
                            @if(auth()->user()->notifications)
                            <span class="no_unread">{{auth()->user()->unreadNotifications->count()}}
                            </span>
                            @endif   

                        </a>
                        <ul class="user-menu-notify" role="menu" id="showNotification">
                            @if(!auth()->user()->notifications->count()==0)
                            @foreach(auth()->user()->notifications as $note)
                            <li class="{{ $note->read_at == null ? 'unread' : '' }}">
                                <a  href="{{url('/question')}}/{{$note->data['question_id']}}">
                                    {!!$note->data['data']!!}
                                   
                                    <span class="notification-time">
                                        <i class="ti-timer"></i> {{$note->created_at->diffForHumans()}}
                                    </span> 
                                </a>
                            </li>
                            @endforeach
                            @else
                            <li class="temp">لا يوجد شعارات </li>
                            @endif
                            
                        </ul>
                    </div>
                    <!--START MESSAGES MENU-->
                    <div class="user-messages">
                        <a href="#" class="header-user-message message">
                            <i class="ti-email"></i>
                            <span class="no_unread">3</span>
                        </a>
                        <ul class="user-menu-message" role="menu" id="">
                           
                            <li class="">
                                <a  href="">
                                   Mesage here
                                    <span class="notification-time">
                                        <i class="ti-timer"></i> 
                                    </span> 
                                    <span class="notification-time">
                                        <i class="ti-user"></i>  Mohammed
                                    </span> 
                                </a>
                            </li>
                            <li class="">
                                <a  href="">
                                   Mesage here
                                    <span class="notification-time">
                                        <i class="ti-timer"></i> 
                                    </span> 
                                    <span class="notification-time">
                                        <i class="ti-user"></i>  Ahmed
                                    </span> 
                                </a>
                            </li>
                            
                            
                        </ul>
                    </div>
                    <!--/END MESSAGES MENU-->
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
                                 @foreach(Helper::settings() as $setting )
                                <li class="supportLi">
                                    <p> اذا اردت الاستفسار عن شيئ ما قم بالاتصال بنا </p>
                                    <h4><a class="inline" href="callto:{{$setting->phone}}"> <i class="fa fa-phone"> </i>
                                            {{$setting->phone}}</a></h4>
                                    <h4><a class="inline" href="{{$setting->webmaster_email}}"> <i class="fa fa-envelope-o"> </i>
                                            {{$setting->webmaster_email}} </a></h4>
                                    <h4><a class="inline" href="{{$setting->support_email}}"> <i class="fa fa-envelope-o"> </i>
                                            {{$setting->support_email}} </a></h4>
                                </li>
                                 @endforeach
                            </ul>
                        </div>

                        <div style="clear:both" class="hide visible-xs"></div>

                        <div class="col-lg-4  col-md-4 col-sm-6 col-xs-6">
                            <h3> روابط تهمك </h3>
                            <ul>
                                @foreach(Helper::pages() as $page )
                                <li><a href="{{ URL('/page') }}/{{$page->id}}"> {{$page->title}} </a></li>
                                @endforeach
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
                                @foreach(Helper::settings() as $setting )
                                <li><a href="{{$setting->fb_account}}"> <i class=" fa fa-facebook"> &nbsp; </i> </a></li>
                                <li><a href="{{$setting->tw_account}}"> <i class="fa fa-twitter"> &nbsp; </i> </a></li>
                                <li><a href="{{$setting->gp_account}}"> <i class="fa fa-google-plus"> &nbsp; </i> </a></li>
                                <li><a href="{{$setting->yt_account}}"> <i class="fa fa-youtube"> &nbsp; </i> </a></li>
                                @endforeach
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
                    @foreach(Helper::settings() as $setting )
                    <p class="text-center"> {{$setting->copyrights}}</p>
                    @endforeach
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
                                                       if (slh.getSource() === 'messages'){
                                               message = slh.getMessage();
                                                       // var li = ShowDiv.prepend('<li></li>').addClass('unread');

                                                       // var a = li.append('<a href="{{url("/question")}}/'+ message. question_id +'">' + message.data + '</a>');

                                                       // a.append("<p></p>").text('message.created_at');
                                                       if ({{Auth::id()}} == message.company_id){
                                                           $('.temp').remove();
                                               ShowDiv.prepend('<li class="unread"><a href="{{url("/question")}}/' + message.question_id + '">' +  message.data + '<span class="notification-time"><i class="ti-timer"></i>' + message.created_at + '</span></a></li>');
                                                       $('div .no_unread').html(message.no_unread);
                                               }
                                               }
                                               $('.notify').on('click', function(){
                                               $('div .no_unread').html('0');
                                                       $.get("{{url('MarkAllSeen')}}", function(){});
                                               });
                                                       $('.notify li').on('click', function(event){
                                               event.preventDefault();
                                                       $(this).removeClass('unread');
                                               });
                                               }
                                             
        </script>
        @yield('scripts')
        @yield('company')
    </body>


</html>