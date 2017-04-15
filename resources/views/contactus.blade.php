@extends('layouts.app')
@section('content')
<div class="container main-container headerOffset">
    <div class="row">
        <div class="col-sm-12 header-ann">
            <img src="{{ asset('images/footer-ann.jpg') }}">
        </div>
    </div>
    <div class="row">
        <div class="breadcrumbDiv col-lg-12">
            <ul class="breadcrumb">
                <li><a href="{{ url('/') }}"><i class="ti-home"></i> الرئيسية</a></li>
                <li class="active">اتصل بنا </li>
            </ul>
        </div>
    </div>

    <!-- /.row  -->
    <div class="row">
        <div class="col-md-6 registration">
            <div class="panel panel-default">
                <div class="panel-heading">اتصل بنا  </div>
                <form action="" method="POST">
                     {{csrf_field()}}
                    <div class="panel-body">
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user blue"></i></span>
                                <input type="text" name="InputName" placeholder="الاسم" class="form-control" autofocus="autofocus" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope blue"></i></span>
                                <input type="email" name="InputEmail" placeholder="البريد الالكتروني" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-phone blue"></i></span>
                                <input type="number" name="InputCno" placeholder="رقم الهاتف" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-comment blue"></i></span>
                                <textarea name="InputMessage" rows="6" class="form-control" type="text" required></textarea>
                            </div>
                        </div>
                        <div class="msg">
                            <button class="btn btn-info send" type="reset" value="Reset" name="reset" class="btn reset"> <span class="glyphicon glyphicon-refresh"></span> القيم الافتراضية</button>
                            <button type="submit" class="btn btn-success send"> <span class="glyphicon glyphicon-send"></span> ارسل</button>

                        </div>
                    </div>
                </form>
            </div>
        </div>


        <div class="col-md-6">
            <legend>مواقع التواصل الاجتماعي</legend>
            <div class="social-box">
                <div class="col-md-4">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <p class="p-mini">
                                <a href="https://facebook.com/niseorg">
                                    <i class='fa fa-facebook-square ico'></i>
                                </a>
                            </p>
                        </div>
                        <div class="panel-footer">
                            Facebook
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <p class="p-mini">
                                <a href="https://twitter.com/niseorg">
                                    <i class='ti-twitter-alt ico'></i>
                                </a>
                            </p>
                        </div>
                        <div class="panel-footer">
                            Twitter
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <p class="p-mini">
                                <a href="https://plus.google.com/">
                                    <i class='ti-google ico'></i>
                                </a>
                            </p>
                        </div>
                        <div class="panel-footer">
                            Google+
                        </div>
                    </div>
                </div>
            </div>

            <div style="margin-top: 50px;">
                <legend>لمزيد من المعلومات</legend>
                <p class="text-align: left;">
                <address>
                    <i class='fa fa-envelope' style="color: #258cc3; margin-left: 3px; margin-bottom: 7px;"></i> info@salahly.com<br>
                    <i class='fa fa-envelope' style="color: #258cc3; margin-left: 3px; margin-bottom: 7px;"></i> support@salahly.com<br>
                   <i class='glyphicon glyphicon-phone-alt' style="color: #258cc3; margin-left: 3px; margin-bottom: 7px;"></i>  +254 178 623 151
                </address>
                </p>
            </div>
        </div>
    </div>
    <!-- /.row  -->
</div>
<!-- /main container -->

@endsection
