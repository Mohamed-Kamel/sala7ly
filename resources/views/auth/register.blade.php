@extends('layouts.app')
<style >
    .input-group {
    -webkit-box-shadow: 0px 2px 5px 0px rgba(0,0,0,0.21)!important;
    -moz-box-shadow: 0px 2px 5px 0px rgba(0,0,0,0.21)!important;
    box-shadow: 0px 2px 5px 0px rgba(0,0,0,0.21)!important;
}
span.input-group-addon i {
    color: #009edf;
    font-size: 17px;
}

.login-button{
    margin-top: 5px;
}

.login-register{
    font-size: 11px;
    text-align: center;
}
.choice{
    
    margin: 5px;
    margin-right: 11px;
    padding: 3px;
}

a{
    text-decoration: none;

}
.more{
    margin-top: 10px;
}

    

</style>

@section('content')
<div class="container">
    <div class="row">
     <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">تسجيل حساب جديد</div>
            <div class="panel-body">
                <form class="form-horizontal" role="form" enctype="multipart/form-data" method="POST" action="{{ route('register') }}">
                    {{ csrf_field() }}
                     
                     <!-- user name -->

                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label for="name" class="col-md-4 control-label">اسم المستخدم</label>

                        <div class="col-md-6  controls">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user fa-lg" aria-hidden="true"></i></span>
                            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}"  autofocus>
                            </div>
                            <div>

                            @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                            </div>
                        </div>
                    </div>

                    <!-- user email -->
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="col-md-4 control-label">البريد الاليكترونى</label>

                        <div class="col-md-6">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-envelope fa-lg" aria-hidden="true"></i></span>
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                           </div>
                           <div>
                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                            </div>
                        </div>
                    </div>

                   <!-- insert user phone -->

                    <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                        <label for="phone" class="col-md-4 control-label">التليفون</label>

                        
                         <div class=" controls">
                        <div class="col-md-6">

                            <div class="input-group">
                             
                            <span class="input-group-addon">
                             <i class="fa fa-phone fa-lg" aria-hidden="true"></i></span>

                             <input id="phone" type="number" class="form-control" name="phone" value="{{ old('phone') }}" required autofocus>
                          
                                </div>
                                <div>
                                @if ($errors->has('phone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                                </div>
                         </div>
                    </div>
                    </div>
             

                 <!-- enter password -->
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password" class="col-md-4 control-label">كلمه المرور</label>
                      
                        <div class="col-md-6">
                            <div class="input-group">
                                <span class="input-group-addon">
                                <i class="fa fa-lg fa-lock " aria-hidden="true"></i>
                                </span>
                               
                                <input id="password" type="password" class="form-control"
                                 name="password" required autofocus>
                              </div>
                              <div>
                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                        </div>
                        </div>
                       
                   
                    <!-- end password -->
                    <!-- start confirm password -->
                    <div class="form-group">
                        <label for="password-confirm" class="col-md-4 control-label">تاكيد كلمه المرور</label>
                   <div class=" controls">
                        <div class="col-md-6">
                       <div class="input-group">
                            <span class="input-group-addon">
                            <i class="fa fa-lock fa-lg" aria-hidden="true"></i>
                            </span>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                        </div>
                        </div>
                        </div>
                    </div>

                     <!-- location is here  -->
                     <div class="form-group">
                   
                     <label  class="col-md-4 control-label">اختار المحافظه</label>

                                <div class="col-md-6  ">
                 
                            <select class="selectpicker form-control" name="city">
                              <option value="cairo" selected>القاهره</option>
                              <option value="elgeza">الجيزه</option>
                              <option value="elsharqia">الشرقيه</option>
                              <option value="alex">الاسكندريه</option>
                              <option value="domiatte">دمياط</option>
                              <option value="algharbia">الغربيه</option>
                              <option value="mnofia">المنوفيه</option>
                              <option value="matrou7">مطروح</option>
                              <option value="matrou7">كفرالشيخ</option>
                              <option value="matrou7">المنيا</option>
                              <option value="matrou7">اسيوط</option>
                              <option value="matrou7">قنا</option>
                              <option value="matrou7">سوهاج</option>
                            </select>
                             

                        </div>
                         </div>

                        <!-- end location -->

                      <div class="form-group{{ $errors->has('coverphoto') ? ' has-error' : '' }}">
                           <label  class="col-md-4 control-label">صوره الحائط</label>

                            <div class="col-md-6 ">
                             <div class="controls">
                            <input  name="coverphoto" class="input-file form-control" type="file" >
                          

                            @if ($errors->has('coverphoto'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('coverphoto') }}</strong>
                                </span>
                            @endif
                            </div>
                        </div>
                    </div>


                    <div class="form-group{{ $errors->has('profilephoto') ? ' has-error' : '' }}">
                        <label  class="col-md-4 control-label">الصوره الشخصيه</label>

                        <div class="col-md-6 ">
                        <div class="controls">
                        <input  type="file"   name="profilephoto" class="input-file form-control" >
                         

                            @if ($errors->has('profilephoto'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('profilephoto') }}</strong>
                                </span>
                            @endif
                             </div>
                        </div>


                    </div>
                    <div class="form-group">
                    
                      <div class="col-md-4"></div>
                        <div class="col-md-8">
                        <div class="btn-group " data-toggle="buttons"> 
                            
                          <select class="selectpicker form-control" name="group"  id="option" >
                            <option class=""   id="option1"  value="1" selected>مستخدم جديد</option>
                            <option class=""   id="option2" value="2">صاحب شركه</option>
                          </select>
                        </div>
                       
                    </div>
                </div >
         
               
                    <div class="form-group now" >
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                تسجيل
                            </button>
                        </div>
                    </div>
           
            </form>
            </div>
            </div>
        </div>
    </div>
</div>

@endsection

