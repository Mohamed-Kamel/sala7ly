@extends('layouts.app')
@section('content')

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
                    <li><a href="{{ url('/') }}"><i class="ti-home"></i> الرئيسية</a></li>
                    <li class="active">شركات الصيانة</li>
                </ul>
            </div>
        </div>

        <!-- /.row  -->
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                <div class="row">
                    <form class="col-sm-12" method="get" id="search-com-form">
                        <div class="search-company">
                            <input id="search-comp" type="text" class="search-input-comp" placeholder="ابحث عن الشركة "
                                   name="name">
                            <button class="search-comp-button"><i class="ti-search"></i></button>
                        </div>
                    </form>
                </div>
                <div class="companies-list">
                    <div class="companies-links">
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#category-1"> الكل</a></li>
                            <li><a data-toggle="tab" href="#category-2"> المضاف حديثاً</a></li>
                            <li><a data-toggle="tab" href="#category-3"> الاعلى تقيماً</a></li>
                        </ul>
                        <h1 class="subtitles"> شركات الصيانة</h1>
                    </div>
                    <div class="col-sm-12 infinite-scroll" id="search-results">
                    </div>
                    <div class="tab-content">
                        <div id="category-1" class="tab-pane fade in active">
                            @if(count($companies) > 0)
                                @foreach($companies as $company)
                                    <div class="company-block">
                                        <div class="comp-image">
                                            <a href="{{ URL('company') }}/{{ $company->id }}"><img
                                                        src="{{ $company->img }}"></a>
                                        </div>
                                        <div class="company-det">
                                            <a class="comp-title"
                                               href="{{ URL('company') }}/{{ $company->id }}">{{ $company->name }}</a>
                                            <div class="sub-det">
                                                <div id="stars" class="pull-right">
                                                    @for($i=0; $i<round($company->company->rating); $i++)
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                    @endfor
                                                    @for($i=5; $i>round($company->company->rating); $i--)
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                    @endfor
                                                </div>
                                                <span class="pull-left">
                                        <i class="ti-location-pin"> {{ $company->city }}</i>
                                    </span>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                        <div id="category-2" class="tab-pane fade ">
                            @if(count($latest_added)>0)
                                @foreach($latest_added as $last)
                                    <div class="company-block">
                                        <div class="comp-image">
                                            <a href="{{ URL('company') }}/{{ $last->id }}"><img src="{{ $last->img }}"></a>
                                        </div>
                                        <div class="company-det">
                                            <a class="comp-title"
                                               href="{{ URL('company') }}/{{ $last->id }}">{{ $last->name }}</a>
                                            <div class="sub-det">
                                                <div id="stars" class="pull-right">
                                                    @for($i=0; $i<round($last->company->rating); $i++)
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                    @endfor
                                                    @for($i=5; $i>round($last->company->rating); $i--)
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                    @endfor
                                                </div>
                                                <span class="pull-left">
                                        <i class="ti-location-pin"> {{ $last->city  }}</i>
                                    </span>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif

                        </div>
                        <div id="category-3" class="tab-pane fade">
                            @if($top_rated)
                                @foreach($top_rated as $top)
                                    <div class="company-block">
                                        <div class="comp-image">
                                            <a href="{{ URL('/company') }}/{{ $top->user->id }}"><img
                                                        src="{{ $top->user->img }}"></a>
                                        </div>
                                        <div class="company-det">
                                            <a class="comp-title"
                                               href="{{ URL('/company') }}/{{ $top->user->id }}">{{ $top->user->name }}</a>
                                            <div class="sub-det">
                                                <div id="stars" class="pull-right">
                                                    @for($i=0; $i<round($top->rating); $i++)
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                    @endfor
                                                    @for($i=5; $i>round($top->rating); $i--)
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                    @endfor
                                                </div>
                                                <span class="pull-left">
                                        <i class="ti-location-pin"> {{ $top->user->city  }}</i>
                                    </span>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <div class="anouncment-sidebar">
                    <img src="{{ asset('images/sidebar-ann.jpg') }}">
                </div>
            </div>
        </div>
        <!-- /.row  -->
    </div>
    <!-- /main container -->
@endsection

@section('scripts')
    <script src="{{asset('js/jquery.jscroll.min.js')}}"></script>

    <script type="text/javascript">
        $('ul.pagination').hide();
        $(function () {
            $('.infinite-scroll').jscroll({
                autoTrigger: true,
                loadingHtml: '<img class="center-block" src="/images/loading.gif" alt="Loading..." />',
                padding: 0,
                nextSelector: '.pagination li.active + li a',
                contentSelector: 'div.infinite-scroll',
                callback: function () {
                    $('ul.pagination').remove();
                }
            });
        });


        $(function () {
            $("#search-comp").on("keyup", function (event) {
                $("#search-results").empty();
                $('.companies-list').show();

                event.preventDefault();
//            console.log("hello");
                var key = $("#search-comp").val();
                console.log(key);
                $.ajax({
                    url: "{{URL('/companies/search')}}",
                    type: "GET",
                    data: {'key': key},
                    success: function (response) {
                        console.log(response);
                        var html;
                        $.each(response, function (index, ele) {
//                        var block = $('<div class="company-block"></div>').attr('href', "{{url('/company')}}/" + ele.id).text(ele.name);
                            var company_block = $('<div class="company-block"></div>');
                            var comp_image_block = $('<div class="comp-image"></div>');
                            var image_a_image = $('<img src="' + ele.img + '">');
                            var image_a = $('<a></a>').attr('href', "{{url('/company')}}/" + ele.id).append(image_a_image);
                            comp_image_block.append(image_a);
                            var company_det = $('<div class="company-det"></div>');
                            var comp_title = $('<a class="comp-title"></a>').attr('href', "{{url('/company')}}/" + ele.id).text(ele.name);
                            var sub_det = $('<div class="company-det"></div>');
                            var stars = $('<div id="stars" class="pull-right"></div>');
                            for (var i = 0; i < ele.total_rating; i++) {
                                stars.append($('<i class="fa fa-star"></i>'));
                            }
                            for (var i = 0; i < (5 - ele.total_rating); i++) {
                                stars.append($('<i class="fa fa-star-o"></i>'));
                            }
                            var city = $('<div class="pull-left" id="stars"></div>');
                            var city_i = $('<i class="ti-location-pin"></div>').text(ele.city);
                            city.append(city_i);
                            sub_det.append(stars, city);
                            company_det.append(comp_title, sub_det);
                            company_block.append(comp_image_block, company_det);
                            if ($("#search-results").append(company_block)) {
                                $('.companies-list').hide();
                            }
//                        console.log($("#search-results"));
//                        $('.companies-list').hide();
                        });
                    }
                });
            });
        }());

    </script>
@endsection