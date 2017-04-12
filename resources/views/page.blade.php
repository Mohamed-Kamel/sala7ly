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
                <li class="active">{{ $page->title }} </li>
            </ul>
        </div>
    </div>

    <!-- /.row  -->
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fas">
            <h3>{{ $page->title }}</h3>
            <p>{{ $page->content }}</p>
        </div>
    </div>
    <!-- /.row  -->
</div>
<!-- /main container -->

@endsection
