@extends('layouts.app')

@section('content')
<div class="container main-container headerOffset">
    <div class="row">
        <div class="col-lg-12 col-sm-12" style="width: 100%;">
            <div class="card hovercard">
                <div class="card-background">
                    <img class="card-bkimg img-responsive" alt="cover" src="{{ asset('images/cover.jpg') }}">
                </div>
                <div class="useravatar">
                    <img alt="profile photo" src="{{ asset('images/company.png') }}">
                </div>
                <div class="card-info"> <span class="card-title">اسم الشركه </span>

                </div>
            </div>
            <div class="company-details btn-group-justified btn-group-lg" role="group" aria-label="...">
                <div class="btn-group" role="group">
                    <div  id="stars" class="btn" >
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                        <div class="hidden-xs">التقييم</div>
                    </div>
                </div>
                <div class="btn-group" role="group">
                    <div  id="favorites" class="btn " ><i class="ti-location-pin" aria-hidden="true"></i>
                        <div class="hidden-xs">العنوان</div>
                    </div>
                </div>
                <div class="btn-group" role="group">
                    <div id="following" class="btn" ><i class="ti-email" aria-hidden="true"></i>
                        <div class="hidden-xs blurry-text"> البريد الاليكترونى</div>
                    </div>
                </div>
                <div class="btn-group" role="group">
                    <div id="following" class="btn" ><i class="ti-headphone-alt" aria-hidden="true"></i>
                        <div class="hidden-xs blurry-text"> الهاتف</div>
                    </div>
                </div>
            </div>
        </div>  
    </div>
    <div class="main row">
        <!-- user review  -->
        <div class="row col-md-8 users-rating">    

            <div class="row ">
                <div class=" col-sm-12">
                    <h3> <label>اراء العملاء </label> </h3>
                </div><!-- /col-sm-12 -->
            </div><!-- /row -->
            <div class="row">
                <div class="col-sm-2">
                    <div class="thumbnail">
                        <img class="img-responsive user-photo" src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png">
                    </div><!-- /thumbnail -->
                </div><!-- /col-sm-2 -->

                <div class="col-sm-10">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <strong> <i class="ti-thumb-up">اسم المستخدم</i></strong> 
                            <span class="text-muted" style="float: left"><i class="ti-timer"></i> منذ 5 ايام</span>
                        </div>
                        <div class="panel-body">
                            don't small us 
                        </div><!-- /panel-body -->
                    </div><!-- /panel panel-default -->
                </div><!-- /col-sm-10 -->

            </div><!-- /row -->
            <div class="row">
                <div class="col-sm-2">
                    <div class="thumbnail">
                        <img class="img-responsive user-photo" src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png">
                    </div><!-- /thumbnail -->
                </div><!-- /col-sm-2 -->

                <div class="col-sm-10">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <strong> <i class="ti-thumb-down">اسم المستخدم</i></strong> 
                            <span class="text-muted" style="float: left"><i class="ti-timer"></i> منذ 5 ايام</span>
                        </div>
                        <div class="panel-body">
                            سيئ جدا و للاسف small us
                        </div><!-- /panel-body -->
                    </div><!-- /panel panel-default -->
                </div><!-- /col-sm-10 -->

            </div><!-- /row -->
            <div class="row">
                <div class="col-sm-2">
                    <div class="thumbnail">
                        <img class="img-responsive user-photo" src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png">
                    </div><!-- /thumbnail -->
                </div><!-- /col-sm-2 -->

                <div class="col-sm-10">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <strong> <i class="ti-thumb-down">اسم المستخدم</i></strong> 
                            <span class="text-muted" style="float: left"><i class="ti-timer"></i> منذ 5 ايام</span>
                        </div>
                        <div class="panel-body">
                            سيئ جدا و للاسف small us
                        </div><!-- /panel-body -->
                    </div><!-- /panel panel-default -->
                </div><!-- /col-sm-10 -->

            </div><!-- /row -->
            <div class="row">
                <div class="col-sm-2">
                    <div class="thumbnail">
                        <img class="img-responsive user-photo" src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png">
                    </div><!-- /thumbnail -->
                </div><!-- /col-sm-2 -->

                <div class="col-sm-10">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <strong> <i class="ti-thumb-down">اسم المستخدم</i></strong> 
                            <span class="text-muted" style="float: left"><i class="ti-timer"></i> منذ 5 ايام</span>
                        </div>
                        <div class="panel-body">
                            سيئ جدا و للاسف small us
                        </div><!-- /panel-body -->
                    </div><!-- /panel panel-default -->
                </div><!-- /col-sm-10 -->

            </div><!-- /row -->
            <div class="row">
                <div class="col-sm-2">
                    <div class="thumbnail">
                        <img class="img-responsive user-photo" src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png">
                    </div><!-- /thumbnail -->
                </div><!-- /col-sm-2 -->

                <div class="col-sm-10">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <strong> <i class="ti-thumb-down">اسم المستخدم</i></strong> 
                            <span class="text-muted" style="float: left"><i class="ti-timer"></i> منذ 5 ايام</span>
                        </div>
                        <div class="panel-body">
                            سيئ جدا و للاسف small us
                        </div><!-- /panel-body -->
                    </div><!-- /panel panel-default -->
                </div><!-- /col-sm-10 -->

            </div><!-- /row -->
            <div class="row">
                <div class="col-sm-2">
                    <div class="thumbnail">
                        <img class="img-responsive user-photo" src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png">
                    </div><!-- /thumbnail -->
                </div><!-- /col-sm-2 -->

                <div class="col-sm-10">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <strong> <i class="ti-thumb-down">اسم المستخدم</i></strong> 
                            <span class="text-muted" style="float: left"><i class="ti-timer"></i> منذ 5 ايام</span>
                        </div>
                        <div class="panel-body">
                            سيئ جدا و للاسف small us
                        </div><!-- /panel-body -->
                    </div><!-- /panel panel-default -->
                </div><!-- /col-sm-10 -->

            </div><!-- /row -->
            <div class="row">
                <div class="col-sm-2">
                    <div class="thumbnail">
                        <img class="img-responsive user-photo" src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png">
                    </div><!-- /thumbnail -->
                </div><!-- /col-sm-2 -->

                <div class="col-sm-10">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <strong> <i class="ti-thumb-down">اسم المستخدم</i></strong> 
                            <span class="text-muted" style="float: left"><i class="ti-timer"></i> منذ 5 ايام</span>
                        </div>
                        <div class="panel-body">
                            سيئ جدا و للاسف small us
                        </div><!-- /panel-body -->
                    </div><!-- /panel panel-default -->
                </div><!-- /col-sm-10 -->

            </div><!-- /row -->


            <!-- leave review -->

            <div class="row" style="margin-top:40px;float: left;padding: 10px;">

                <div class="text-center">
                    <a class="btn btn-success btn-green  btn-lg" href="#reviews-anchor" id="open-review-box">اترك تعليقك </a>
                </div>
                <div class="row" id="post-review-box" style="display:none;">
                    <div class="col-md-12">
                        <form accept-charset="UTF-8" action="" method="post">
                            <input id="ratings-hidden" name="rating" type="hidden">

                            <textarea class="form-control animated" cols="200" id="new-review" name="comment" placeholder="Enter your review here..." rows="5">
                            
                            </textarea>

                            <div class="text-right">
                                <div class="stars starrr" data-rating="0"></div>
                                <a class="btn btn-danger " href="#" id="close-review-box" style="display:none; margin-right: 10px;">
                                    <span class="glyphicon glyphicon-remove">

                                    </span>الغاء</a>
                                <button class="btn btn-success" type="submit">
                                    <span>حفظ</span></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>

        <!-- end user review -->



        <!-- start google map  -->

        <div class="col-md-4">
            <h3 > <label><i class="ti-map-alt"></i> موقع الشركه</label></h3>

            <div class="">

            </div>

            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2648.833038448318!2d-89.2826271!3d48.402149400000006!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4d59202c99c9252f%3A0x4cb61e2f5a8d87e!2s218+Humber+Crescent%2C+Thunder+Bay%2C+ON+P7C+5X2!5e0!3m2!1sen!2sca!4v1424370904204"  width=100% height="450" frameborder="0" style="border:0"></iframe>
            <div class="adds">

                <img src="{{ asset('images/advertise-here.png') }}" class="img-responsive">
                <img src="{{ asset('images/advertise-here.png') }}" class="img-responsive">

            </div>
        </div>




    </div> <!-- end body -->



    <!-- end google map --> 

</div>

@endsection