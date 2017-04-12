@extends('layouts.app')
<style>
.modal{
 background-color: rgba(0, 0, 0, 0.74);
}
.profile-imge-edit img{
width:100%;
margin:10px 0;
}
</style>
@section('content')
@if(isset($users))
<div class="container main-container headerOffset">
    <div class="row">
        <div class="col-lg-12 col-sm-12" style="width: 100%;">
            <div class="card hovercard">
                <div class="card-background">
                    <img class="card-bkimg img-responsive" alt="cover" src="{{ asset('images/cover') }}/{{ $users->cover }}">
                </div>
                <div class="useravatar">
                    <img alt="profile photo" src="{{ url($users->img)}}" />


                </div>
                <div class="card-info"> <span class="card-title">{{ $users->name }}</span>

                </div>
            </div>
            <div class="company-details btn-group-justified btn-group-lg" role="group" aria-label="...">
                <div class="btn-group" role="group">
                </div>
                <div class="btn-group" role="group">
                    <div  id="favorites" class="btn " ><i class="ti-location-pin" aria-hidden="true"></i>
                        <div class="hidden-xs">{{$users->city}}</div>
                    </div>
                </div>
            
            </div>
        </div>  
    </div>


<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal" style="
    margin-top: -210px;">
        تعديل
      </button>
    
    </div>


    <div class="row">
    <div class="col-m-12">
        <div class="question-block">
            <div class="row">
                <div class="col-sm-2">
                    <div class="row">
                        @if(isset($userQuestions))
                        @foreach ($userQuestions as $question)
                        <span class="data-icons col-sm-4">
                            <i class="fa fa-eye"></i>
                            {{ $question->seen }}                    
                            
                        </span>
                        <span class="data-icons col-sm-4">
                            @if (isset($commentsNumber))
                            <i class="ti-thought"></i>
                            {{ $commentsNumber }} 
                            @endif
                        </span>
                        <span class="data-icons col-sm-4">
                            <i class="ti-info-alt"></i>
                            {{ $question->visited }}
                        </span>
                        
                    </div>
                </div>
                <div class="col-sm-10 question-desc">
                    <div class="row">
                        <div class="col-sm-12">
                            <h2 class="question-title-block"><a href="{{ url('/question') }}">{{ $question->title }}</a></h2>
                        </div>
                        <div class="col-sm-8">
                            <h2 class="question-title-block"><a href="{{ url('/question') }}">{{ $question->desc }}</a></h2>
                        </div>
                        <div class="col-sm-12">
                            @if (isset($cats))
                            @foreach($cats as $cat)
                            <a href="#" class="qustion-user">
                                <i class="ti-tag"></i>
                                {{ $cat->title }}
                            </a>
                            @endforeach
                            @endif
                            <span class="qustion-user">
                                <i class="ti-timer"></i>
                                {{ $question->created }}
                            </span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        @endforeach
        @endif
    </div>
</div>

@endif

  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">تعديل الملف الشخصى</h4>
            </div>
            <div class="modal-body">
              <div class="form-group">
              <label for="name">اﻻسم</label>
                <input type="text" name="name" id="name" class="form-control" value="{{$users->name}}" />
                <input type="hidden" id="hidden" value="{{ csrf_token() }}">
              </div>
              <div class="form-group">
               <label for="name">المحافظة</label>
                <select name="city" class="form-control" id="city">
                  <option value="1">اﻻسكندرية</option>
                  <option value="2">القاهرة</option>
                  <option value="3">اﻻسماعيلية</option>
                  <option value="4">طنطا</option>
                  <option value="5">سوهاج</option>
                  <option value="6">أسيوط</option>
                  <option value="7">مطروح</option>
                  <option value="8">شرم الشيخ</option>
                  <option value="9">القليوبية</option>
                  <option value="10">المنيا</option>
                  <option value="11">السويس</option>
                  <option value="12">شمال سيناء</option>
                </select>
              </div>
              <div class="form-group">
               <label for="name">البريد اﻻلكترونى</label>
               <input type="email" class="form-control" id="email" value="{{$users->email}}">
              </div>
              
              <div class="form-group">
               <label for="name">الهاتف</label>
               <input type="text" class="form-control" id="phone" value="{{$users->phone}}">
              </div>
               <div class="form-group profile-imge-edit">
                <label for="name">الصورة الشخصية</label>
                <input type="file" id="img" value="{{ $users->img }}">
                
                <p class="help-block">يمكنك تغيير صورتك الشخصية من هنا</p>
              </div>

              <div class="form-group profile-imge-edit">
              <label for="name">صورة الحائط</label>
                <input type="file" id="cover" value="{{ $users->cover }}">
               
                <p class="help-block">يمكنك تغيير صورتك الحائط من هنا</p>
              </div>

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">الغاء</button>
              <button type="button" class="btn btn-primary" id="form">حفظ التغييرات</button>
            </div>
          </div>
        </div>
      </div>

<!--end edit modal-->
 </div>

@endsection
@section('scripts')
<script>
           $("#form").on("click", function(event){
               
            event.preventDefault();
            var csrf= $("#hidden").val();
            var name=$('#name').val();
            var city=$('#city :selected').text();
            var email=$('#email').val();
            var phone=$('#phone').val();
            var img=$('#img').val();
            var cover=$('#cover').val();
               $.ajax({
                // url:"updateUser",
                 method: "post",
                 data:{
                 'name':name,
                  'city':city,
                  'email':email,
                  'phone':phone,
                  'img':img,
                  'cover':cover,
                "_token" : csrf
                },
                 success: function(response) {
                   console.log(response);
                  window.location.reload();
                    $("#myModal").modal("hide");
                 }
                
               });
           });

</script>
@endsection