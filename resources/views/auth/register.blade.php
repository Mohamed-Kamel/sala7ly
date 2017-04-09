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
                <div class="panel-heading">تسجيل الدخول </div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
                         
                         <!-- user name -->

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">اسم المستخدم</label>

                            <div class="col-md-6 input-group">
                                <span class="input-group-addon"><i class="fa fa-user fa-lg" aria-hidden="true"></i></span>
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- user email -->
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">الايميل</label>

                            <div class="col-md-6 input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope fa-lg" aria-hidden="true"></i></span>
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                       <!-- insert user phone -->

                        <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                            <label for="phone" class="col-md-4 control-label">التليفون</label>

                            <div class="col-md-6  input-group">

                         <span class="input-group-addon"><i class="fa fa-phone fa-lg" aria-hidden="true"></i></span>

                            
                                <input id="phone" type="number" class="form-control" name="phone" value="{{ old('phone') }}" required autofocus>

                                @if ($errors->has('phone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                     <!-- enter password -->
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">كلمه المرور</label>

                            <div class="col-md-6 input-group">
                                    <span class="input-group-addon">
                                    <i class="fa fa-lg fa-lock " aria-hidden="true"></i>
                                    </span>
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <!-- end password -->
                        <!-- start confirm password -->
                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">تاكيد كلمه المرور</label>

                            <div class="col-md-6 input-group">
                                <span class="input-group-addon">
                                <i class="fa fa-lock fa-lg" aria-hidden="true"></i>
                                </span>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                         <!-- location is here  -->
                         <div class="form-group">
                       
                            <label  class="col-md-4 control-label">اختار المحافظه</label>

                            <div class="col-md-6 ">
                                <div class="">
                                <div class="bs-docs-example">

                                    <select class="selectpicker">
                                      <option >القاهره</option>
                                      <option>الجيزه</option>
                                    </select>
                                 </div>

                                
                              </div>

                            </div>
</div>
                            <!-- end location -->

                     <div class="form-group{{ $errors->has('cover_img') ? ' has-error' : '' }}">
                            <label  class="col-md-4 control-label">صوره الحائط</label>

                            <div class="col-md-6 ">
                                    <div class="controls">
                                <input  name="coverphoto" class="input-file" type="file">
                              </div>

                                @if ($errors->has('cover_img'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cover_img') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('profile_img') ? ' has-error' : '' }}">
                            <label  class="col-md-4 control-label">الصوره الشخصيه</label>

                            <div class="col-md-6 ">
                                    <div class="controls">
                                <input  name="profilephoto" class="input-file" type="file">
                              </div>

                                @if ($errors->has('profile_img'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('profile_img') }}</strong>
                                    </span>
                                @endif
                            </div>


                        </div>
                        <div class="form-group">
                        
                              <div class="col-md-6 col-md-offset-4">
                                    <div class="controls">
                                <div class="bs-docs-example">
                                
                                  <div class="btn-group" data-toggle="buttons">
            
                                        
                                        <div class="bs-docs-example">
                                        <select class="selectpicker btn-success " id="option">
                                          <option class="btn-primary">مستخدم جديد</option>
                                          <option class="btn-success" >صاحب شركه</option>
                                        </select>
                                        </div>

                                   </div>

                              </div>
                        </div>
                    </div >
   </div>
        <!-- company details -->
         <div class="next more" style="display: none;">
          
                      <!-- address of company -->

                        <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                            <label for="address" class="col-md-4 control-label">عنوان الشركه</label>

                            <div class="col-md-6  input-group">

                         <span class="input-group-addon">
                         <i class="fa fa-map-marker" aria-hidden="true"></i></i>
                         </span>

                            
                                <input id="address" type="text" class="form-control" name="address" value="{{ old('address') }}" required>

                                @if ($errors->has('address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <!-- end company location  -->
                        <!-- maps -->
                        <div class="form-group">
                        <label for="address" class="col-md-4 control-label">موقعك على الخريطه</label>
                        <div class="col-md-6">  
                         <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2648.833038448318!2d-89.2826271!3d48.402149400000006!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4d59202c99c9252f%3A0x4cb61e2f5a8d87e!2s218+Humber+Crescent%2C+Thunder+Bay%2C+ON+P7C+5X2!5e0!3m2!1sen!2sca!4v1424370904204"  width=100% height="450" frameborder="1" style="border:1px">
                             
                         </iframe>
                         </div>
                         </div>
                        <!-- end maps -->

                           <!-- company descreption -->
                     <div class="form-group{{ $errors->has('desc') ? ' has-error' : '' }}">
                            <label for="desc" class="col-md-4 control-label">وصف الشركه</label>

                            <div class="col-md-6 input-group">
                                
                               <textarea class="form-control" placeholder="اوصف شركتك" wrap='off' rows="12" cols="200">
                             
                               </textarea>


                             @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('desc') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                    </div>

                    <!-- end company details -->
                       
                        <div class="form-group" >
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary login-button">
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

