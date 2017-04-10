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
    margin-top: 30px;
}
#map{
    height: 300px;
}
</style>

@section('content')
<div class="container">
    <div class="row more">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">استكمال بيانات شركتك</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form"  method="POST" action="{{ url('/company_details') }}">
                        {{ csrf_field() }}
                         
                        <!-- company details -->
                                
                              <!-- address of company -->

                            <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                                <label for="address" class="col-md-4 control-label">عنوان الشركه</label>

                                 <div class="col-md-8  ">

                                 
                                 <div class="input-group">

                                 <span class="input-group-addon">
                                 <i class="fa fa-map-marker" aria-hidden="true"></i>
                                 </span>
                                 <input id="address" type="text" class="form-control" name="address" value="{{ old('address') }}" required>

                                     </div>
                                        <div>
                                   @if ($errors->has('address'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('address') }}</strong>
                                            </span>
                                        @endif
                                       </div>
                                    </div>
                                </div> 


                                    
                                        
                                <!-- end company location  -->

                              
                                       <!-- company descreption -->
                                <div class="form-group{{ $errors->has('desc') ? ' has-error' : '' }}">
                                    <label for="desc" class="col-md-4 control-label">وصف الشركه</label>

                                    <div class="col-md-8">
                                         <div class="input-group">
                                       <textarea class="form-control" placeholder="اوصف شركتك" wrap='off' rows="12" cols="200" name="desc">
                                     
                                       </textarea>
                                       </div>
                                       <div>

                                       @if ($errors->has('desc'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('desc') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    </div>

                                </div> 
                                <!-- end desc -->

                    
                              <div class="form-group">
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
                        </div>

                        

<!-- end company details -->


@endsection   


   


