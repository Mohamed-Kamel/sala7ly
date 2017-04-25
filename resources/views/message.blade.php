@extends('layouts.app')

@section('style')

    <style type="text/css">
        #messages {
            border: 1px solid black;
            height: 300px;
            margin-bottom: 8px;
            overflow: scroll;
            padding: 5px;
        }
    </style>
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/1.7.3/socket.io.min.js"></script>--}}

@endsection


@section('content')


@if(auth()->user())
<div class="container spark-screen">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Chat Message Module</div>

                <div class="panel-body">
 
                    <div class="row">
                        <div class="col-lg-8">
                          <div id="messages" >
                            @if(isset($messages, $user))
                            @foreach($messages as $msg)
                              <strong>
                              @if($msg->sender_id == auth()->id()){{auth()->user()->name}}
                              @else
                                {{$user->name}}  
                              @endif  
                              </strong>
                              <p>{{$msg->msg}}</p>
                            @endforeach
                            @endif    
                          </div>
                        </div>
                        <div class="col-lg-8" >
                                <form action="sendmessage" method="POST">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}" >
                                    <input type="hidden" name="user" value="{{Auth::user()->name}}" >
                                    <input type="hidden" name="receiver_id" value="{{$user->id}}" >
                                    {{-- <input type="hidden" name="receiver_id" value="{{$user->id}}" > --}}
                                    <textarea class="form-control msg"></textarea>
                                    <br/>
                                    <button type="button" class="btn btn-success send-msg">send</button>
                                </form>
                        </div>
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


    $(".send-msg").on('click', function(e){
        e.preventDefault();
        var token = $("input[name='_token']").val();
        var user = $("input[name='user']").val();
        var msg = $(".msg").val();
        var receiver_id = $("input[name='receiver_id']").val();
        console.log(token, user, msg, receiver_id);
        if(msg != ''){
            $.ajax({
                method: 'post',
                // url: "sendmessage",
                data: {'_token':token,
                    'message':msg,
                    'user':user,
                    'receiver_id':receiver_id
                },
                success:function(data){
                    //                    console.log(data);
                    $('.msg').val('');
                }
            });
        }else{
            alert("Please Add Message.");
        }
    });
    {{--$(".send-msg").on('click', function(e){--}}
        {{--e.preventDefault();--}}
        {{--var token = $("input[name='_token']").val();--}}
        {{--var user = $("input[name='user']").val();--}}
        {{--var msg = $(".msg").val();--}}
        {{--var receiver_id = $("input[name='receiver_id']").val();--}}
        {{--console.log(token, user, msg, receiver_id);--}}
        {{--if(msg != ''){--}}
            {{--$.ajax({--}}
                {{--method: 'post',--}}
                {{--// url: "sendmessage",--}}
                {{--data: {'_token':token,--}}
                    {{--'message':msg,--}}
                    {{--'user':user,--}}
                    {{--'receiver_id':receiver_id--}}
                {{--},--}}
                {{--success:function(data){--}}
{{--//                    console.log(data);--}}
                    {{--$('.msg').val('');--}}
                {{--}--}}
            {{--});--}}
        {{--}else{--}}
            {{--alert("Please Add Message.");--}}
        {{--}--}}
    {{--});--}}

    {{--var socket = io.connect('http://localhost:8890');--}}

    {{--socket.on('message', function (data) {--}}
        {{--data = jQuery.parseJSON(data);--}}
        {{--console.log(data);--}}
        {{--$("#messages").append( "<strong>"+data.user+"</strong><p>"+data.message+"</p>");--}}
        {{--if(data.receiver_id == {{auth()->user()->id}}) {--}}
            {{--$("#no_msgs").find(".no_unread").text(parseInt($("#no_msgs").find(".no_unread").text())+1);--}}
        {{--}--}}
      {{--});--}}
</script>
@endsection