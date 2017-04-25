@extends('layouts.app')

@section('style')
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/1.7.3/socket.io.min.js"></script>--}}

@endsection


@section('content')


@if(auth()->user())
<div class="container spark-screen headerOffset">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="row">
                    <div class="col-lg-12">
                        <div id="messages">
                            @if(isset($messages, $user))
                            @foreach($messages as $msg)
                            <div class="block-message">
                                @if($msg->sender_id == auth()->id())
                                <div class="reciever">
                                    <img @if(isset(auth()->user()->img)) src="{{ url(auth()->user()->img)}}" @endif  alt="{{auth()->user()->name}}">
                                    <div class="mesaage-content">
                                        <div class="message-date">
                                            <span class="text-right">
                                                <i class="fa fa-clock-o" aria-hidden="true"></i> {{$msg->created}}
                                            </span>
                                            <span class="text-left">
                                                {{auth()->user()->name}}
                                            </span>
                                        </div>
                                        <p>{{$msg->msg}}</p>
                                    </div>
                                </div>
                                @else
                                <div class="sender">
                                   <img @if(isset($user->img)) src="{{ url($user->img)}}" @endif  alt="{{$user->name}}">
                                    <div class="mesaage-content">
                                        <div class="message-date">
                                            <span class="text-left">
                                                <i class="fa fa-clock-o" aria-hidden="true"></i> {{$msg->created}}
                                            </span>
                                            <span class="text-right">
                                                 {{$user->name}}
                                            </span>
                                        </div>
                                         <p>{{$msg->msg}}</p>
                                    </div>
                                </div>
                                @endif  
                            </div>
                            @endforeach
                            @endif  
                        </div>
                    </div>
                    <div class="col-lg-12" >
                        <form action="sendmessage" method="POST">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}" >
                            <input type="hidden" name="user" value="{{Auth::user()->name}}" >
                            <input type="hidden" name="receiver_id" value="{{$user->id}}" >
                            {{-- <input type="hidden" name="receiver_id" value="{{$user->id}}" > --}}
                            <textarea class="form-control msg"></textarea>
                            <br/>
                            <button type="button" class="btn btn-success send-msg">ارسل</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endif

@endsection


@section('scripts')

<script>
    $(".send-msg").on('click', function (e) {
        e.preventDefault();
        var token = $("input[name='_token']").val();
        var user = $("input[name='user']").val();
        var msg = $(".msg").val();
        var receiver_id = $("input[name='receiver_id']").val();
        console.log(token, user, msg, receiver_id);
        if (msg != '') {
            $.ajax({
                method: 'post',
                // url: "sendmessage",
                data: {'_token': token,
                    'message': msg,
                    'user': user,
                    'receiver_id': receiver_id
                },
                success: function (data) {
                    //                    console.log(data);
                    $('.msg').val('');
                }
            });
        } else {
            alert("Please Add Message.");
        }
    });
</script>
@endsection