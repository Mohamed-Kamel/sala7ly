@extends('layouts.app')

@section('style')
<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/1.7.3/socket.io.min.js"></script>

@endsection
@section('content')

<div class="container spark-screen headerOffset">
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


@endsection


@section('scripts')

<script src="{{asset('js/jquery.min.js')}}"></script>
{{-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>      --}}
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script>
    var socket = io.connect('http://localhost:8890');

    socket.on('message', function (data) {
        data = jQuery.parseJSON(data);
        console.log(data.user);
        $( "#messages" ).append( "<strong>"+data.user+"</strong><p>"+data.message+"</p>" );
      });


    $(".send-msg").on('click', function(e){
        e.preventDefault();
        var token = $("input[name='_token']").val();
        var user = $("input[name='user']").val();
        var msg = $(".msg").val();
        console.log(token, user, msg);
        if(msg != ''){
            $.ajax({
                method: 'post',
                // url: "sendmessage",
                data: {'_token':token,
                        'message':msg,
                        'user':user
                    },
                success:function(data){
                    console.log(data);
                    $(".msg").val('');
                }
            });
        }else{
            alert("Please Add Message.");
        }
    })
</script>
@endsection