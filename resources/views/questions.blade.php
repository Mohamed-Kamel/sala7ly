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
                <li class="active">الاسألة</li>
            </ul>
        </div>
    </div>
    <!-- /.row  -->

    <div class="row">

        <!--left column-->

        <div class="questions-filter col-lg-3 col-md-3 col-sm-12">
            <div class="panel-group" id="accordionNo">
                <!--Category-->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" href="#collapseCategory" class="collapseWill">
                                <span class="pull-left"> <i class="fa fa-caret-left"></i></span> 
                                القسم 
                            </a>
                        </h4>
                    </div>
                    <div id="collapseCategory" class="panel-collapse collapse in">
                        <div class="panel-body">
                            <ul class="nav nav-pills nav-stacked tree">
                                <li><a href="#"> <span class="badge pull-right">42</span>قسم السوفوير </a></li>
                                <li><a href="#"> <span class="badge pull-right">42</span>قسم الهاردوير </a></li>
                                <li><a href="#"> <span class="badge pull-right">42</span>قسم ثالث </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--/Category menu end-->


                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" href="#collapseBrand" class="collapseWill">
                                <span class="pull-left"> <i class="fa fa-caret-left"></i></span>
                                المحافظة
                            </a>
                        </h4>
                    </div>
                    <div id="collapseBrand" class="panel-collapse collapse in">
                        <div class="panel-body smoothscroll maxheight300">
                            <div class="block-element">
                                <label>
                                    <input type="checkbox" name="tour" value="0"/>
                                    الكل </label>
                            </div>
                            <div class="block-element">
                                <label>
                                    <input type="checkbox" name="tour" value="0"/>
                                    الاسألة المفتوحة </label>
                            </div>
                            <div class="block-element">
                                <label>
                                    <input type="checkbox" name="tour" value="0"/>
                                    المضاف حديثا </label>
                            </div>
                            <div class="block-element">
                                <label> &nbsp; </label>
                                <!-- keep it blank // -->
                            </div>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" href="#collapseBrand" class="collapseWill">
                                <span class="pull-left"> <i class="fa fa-caret-left"></i></span>
                                المحافظة
                            </a>
                        </h4>
                    </div>
                    <div id="collapseBrand" class="panel-collapse collapse in">
                        <div class="panel-body smoothscroll maxheight300">
                            <div class="block-element">
                                <label>
                                    <input type="checkbox" name="tour" value="0"/>
                                    الاسكندرية </label>
                            </div>
                            <div class="block-element">
                                <label>
                                    <input type="checkbox" name="tour" value="0"/>
                                    الاسكندرية </label>
                            </div>
                            <div class="block-element">
                                <label>
                                    <input type="checkbox" name="tour" value="0"/>
                                    الاسكندرية </label>
                            </div>
                            <div class="block-element">
                                <label>
                                    <input type="checkbox" name="tour" value="0"/>
                                    الاسكندرية </label>
                            </div>
                            <div class="block-element">
                                <label>
                                    <input type="checkbox" name="tour" value="0"/>
                                    الاسكندرية </label>
                            </div>
                            <div class="block-element">
                                <label>
                                    <input type="checkbox" name="tour" value="0"/>
                                    الاسكندرية </label>
                            </div>
                            <div class="block-element">
                                <label>
                                    <input type="checkbox" name="tour" value="0"/>
                                    الاسكندرية </label>
                            </div>
                            <div class="block-element">
                                <label>
                                    <input type="checkbox" name="tour" value="0"/>
                                    الاسكندرية </label>
                            </div>
                            <div class="block-element">
                                <label>
                                    <input type="checkbox" name="tour" value="0"/>
                                    الاسكندرية </label>
                            </div>
                            <div class="block-element">
                                <label>
                                    <input type="checkbox" name="tour" value="0"/>
                                    الاسكندرية </label>
                            </div>
                            <div class="block-element">
                                <label>
                                    <input type="checkbox" name="tour" value="0"/>
                                    الاسكندرية </label>
                            </div>
                            <div class="block-element">
                                <label> &nbsp; </label>
                                <!-- keep it blank // -->
                            </div>
                        </div>
                    </div>
                </div>
                <!--/brand panel end-->



            </div>
        </div>

        <!--right column-->
        <div class="col-lg-9 col-md-9 col-sm-12 all-questions">
            <div class="row">
                <div class="col-sm-12">
                    <div class="widget-area no-padding blank">
                        <div class="status-upload">
                            <form>
                                <input type="text" placeholder="عنوان المشكله">
                                <textarea placeholder="اكتب مشكلتك" ></textarea>
                                <ul>
                                    <li class="upload-img-icon">
                                        
                                        <a title="" data-toggle="tooltip" data-placement="bottom" data-original-title="اضف صورة"><input type="file"><i class="ti-image"></i></a>
                                    </li>
                                    <li class="">
                                        <select>
                                            <option>قسم السوفتوير</option>
                                        </select>
                                    </li>
                                </ul>
                                <button type="submit" class="btn btn-success green"><i class="fa fa-share"></i> نشر</button>
                            </form>
                        </div><!-- Status Upload  -->
                    </div><!-- Widget Area -->

                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
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
                                            <h2 class="question-title-block"><a href="#">مشكله في مروجة لاب توب سوني</a></h2>
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
                                            <h2 class="question-title-block"><a href="#">مشكله في مروجة لاب توب سوني</a></h2>
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
                                            <h2 class="question-title-block"><a href="#">مشكله في مروجة لاب توب سوني</a></h2>
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
                                            <h2 class="question-title-block"><a href="#">مشكله في مروجة لاب توب سوني</a></h2>
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
                                            <h2 class="question-title-block"><a href="#">مشكله في مروجة لاب توب سوني</a></h2>
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
                                            <h2 class="question-title-block"><a href="#">مشكله في مروجة لاب توب سوني</a></h2>
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
                                            <h2 class="question-title-block"><a href="#">مشكله في مروجة لاب توب سوني</a></h2>
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
                                            <h2 class="question-title-block"><a href="#">مشكله في مروجة لاب توب سوني</a></h2>
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
                                            <h2 class="question-title-block"><a href="#">مشكله في مروجة لاب توب سوني</a></h2>
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
                                            <h2 class="question-title-block"><a href="#">مشكله في مروجة لاب توب سوني</a></h2>
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
                                            <h2 class="question-title-block"><a href="#">مشكله في مروجة لاب توب سوني</a></h2>
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

            <!--/.category-top-->



            <div class="w100 categoryFooter">
                <div class="pagination pull-left no-margin-top">
                    <ul class="pagination no-margin-top">
                        <li><a href="#">«</a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">»</a></li>
                    </ul>
                </div>
                <div class="pull-right pull-right col-sm-4 col-xs-12 no-padding text-right text-left-xs">
                    <p>Showing 1–450 of 12 results</p>
                </div>
            </div>
            <!--/.categoryFooter-->
        </div>
        <!--/right column end-->
    </div>
    <!-- /.row  -->
</div>
<!-- /main container -->
@endsection