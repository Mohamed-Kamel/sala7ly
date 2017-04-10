@extends('layouts.app')

@section('content')

    @foreach($results as $result)
        <div class="question-block">
            <div class="row">
                <div class="col-sm-2">
                    <div class="row">
                            <span class="data-icons col-sm-4">
                                {{$result->visited}}
                                <i class="fa fa-eye"></i>
                            </span>
                        <span class="data-icons col-sm-4">
                                {{$result->allComments->count()}}
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
                            <h2 class="question-title-block">
                                <a href="{{url('/question')}}/{{$result->id}}">
                                    {{$result->title}}
                                </a>
                            </h2>
                        </div>
                        <div class="col-sm-12">
                            <a href="#" class="qustion-user">
                                <i class="ti-user"></i>
                                {{$result->user->name}}
                            </a>

                            <a href="#" class="qustion-user">
                                <i class="ti-tag"></i>
                                {{$result->cat->title}}
                            </a>
                            <span class="qustion-user">
                                <i class="ti-timer"></i>
                                {{$result->created}}
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

@endsection