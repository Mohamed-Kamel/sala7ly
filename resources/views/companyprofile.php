<style >
    /* USER PROFILE PAGE */
 .card {
    margin-top: 20px;
    padding: 30px;
    background-color: rgba(214, 224, 226, 0.2);
    -webkit-border-top-left-radius:5px;
    -moz-border-top-left-radius:5px;
    border-top-left-radius:5px;
    -webkit-border-top-right-radius:5px;
    -moz-border-top-right-radius:5px;
    border-top-right-radius:5px;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
.card.hovercard {
        width: 100%;
    height: 300px;
    position: relative;
    padding-top: 0;
    overflow: hidden;
    text-align: center;
    background-color: #fff;
    background-color: rgba(255, 255, 255, 1);
}
.card.hovercard .card-background {
    height: 130px;
}
.card-background img {
    -webkit-filter: blur(25px);
    -moz-filter: blur(25px);
    -o-filter: blur(25px);
    -ms-filter: blur(25px);
    filter: blur(25px);
    margin-left: -100px;
    margin-top: -200px;
    min-width: 130%;
}
.card.hovercard .useravatar {
    position: absolute;
    top: 65px;
    left: 0;
    right: 0;
}
.card.hovercard .useravatar img {
    width: 170px;
    height: 170px;
    
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    border-radius: 50%;
    border: 5px solid rgba(255, 255, 255, 0.5);
}
.card.hovercard .card-info {
    position: absolute;
    bottom: 14px;
    left: 0;
    right: 0;
}
.card.hovercard .card-info .card-title {
    padding:0 5px;
    font-size: 20px;
    line-height: 1;
    color: #262626;
    background-color: rgba(255, 255, 255, 0.1);
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;
}
.card.hovercard .card-info {
    overflow: hidden;
    font-size: 12px;
    line-height: 20px;
    color: #737373;
    text-overflow: ellipsis;
}
.card.hovercard .bottom {
    padding: 0 20px;
    margin-bottom: 17px;
}
.btn-pref .btn {
    -webkit-border-radius:0 !important;
}
.main{
    padding-top:30px; 
}
 .animated {
    -webkit-transition: height 0.2s;
    -moz-transition: height 0.2s;
    transition: height 0.2s;
}

.stars
{
    margin: 20px 0;
    font-size: 24px;
    color: #d17581;
}
.adds img {
   

    -webkit-border-radius: 3%;
    -moz-border-radius: 3%;
    border-radius: 3%;
    border: 5px solid rgba(255, 255, 255, 0.5);
}



</style>

<div class="col-lg-6 col-sm-6" style="width: 100%;">
    <div class="card hovercard">
        <div class="card-background">

            <img class="card-bkimg img-responsive" alt="cover" src="cover.jpg">
           
        </div>
        <div class="useravatar">
            <img alt="profile photo" src="profile.jpg">
        </div>
        <div class="card-info"> <span class="card-title">اسم الشركه </span>

        </div>
    </div>
    <div class="  btn-group-justified btn-group-lg" role="group" aria-label="...">
        <div class="btn-group" role="group">
            <div  id="stars" class="btn" >
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star-o" aria-hidden="true"></i>
            <i class="fa fa-star-o" aria-hidden="true"></i>
            <div class="hidden-xs">التقييم</div>
            </div>
        </div>
        <div class="btn-group" role="group">
            <div  id="favorites" class="btn " ><i class="fa fa-map-marker" aria-hidden="true"></i>
                <div class="hidden-xs">العنوان</div>
            </div>
        </div>
        <div class="btn-group" role="group">
            <div id="following" class="btn" ><i class="fa fa-envelope-o" aria-hidden="true"></i>
                <div class="hidden-xs"> البريد الاليكترونى</div>
            </div>
        </div>
    </div>
    
<div class="main">
        <!-- user review  -->
 <div class="row col-md-8">    
       
        <div class="row ">
            <div class=" col-sm-12">
            <h3> <label>اراء العملاء </label> </h3>
            </div><!-- /col-sm-12 -->
        </div><!-- /row -->
        <div class="row">
            <div class="col-sm-2">
            <div class="thumbnail">
            <img class="img-responsive user-photo" src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png">
            </div><!-- /thumbnail -->
            </div><!-- /col-sm-2 -->

            <div class="col-sm-10">
            <div class="panel panel-default">
            <div class="panel-heading">
            <strong>اسم المستخدم</strong> 
            <span class="text-muted" style="float: left">منذ 5 ايام</span>
            </div>
            <div class="panel-body">
               don't small us 
            </div><!-- /panel-body -->
            </div><!-- /panel panel-default -->
            </div><!-- /col-sm-10 -->

        </div><!-- /row -->

        <div class="row">
            <div class="col-sm-2">
            <div class="thumbnail">
            <img class="img-responsive user-photo" src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png">
            </div><!-- /thumbnail -->
            </div><!-- /col-sm-2 -->

            <div class="col-sm-10">
            <div class="panel panel-default">
            <div class="panel-heading">
            <strong>اسم المستخدم</strong> 
            <span class="text-muted" style="float: left">منذ 5 ايام</span>
            </div>
            <div class="panel-body">
               اهدا كده يا ليدر عشان ربنا يكرمنا 
            </div><!-- /panel-body -->
            </div><!-- /panel panel-default -->
            </div><!-- /col-sm-10 -->

        </div><!-- /row -->

        <div class="row">
            <div class="col-sm-2">
            <div class="thumbnail">
            <img class="img-responsive user-photo" src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png">
            </div><!-- /thumbnail -->
            </div><!-- /col-sm-2 -->

            <div class="col-sm-10">
            <div class="panel panel-default">
            <div class="panel-heading">
            <strong>اسم المستخدم</strong> 
            <span class="text-muted" style="float: left">منذ 5 ايام</span>
            </div>
            <div class="panel-body">
               اهدا كده يا ليدر عشان ربنا يكرمنا 
            </div><!-- /panel-body -->
            </div><!-- /panel panel-default -->
            </div><!-- /col-sm-10 -->

        </div><!-- /row -->

        <div class="row">
            <div class="col-sm-2">
            <div class="thumbnail">
            <img class="img-responsive user-photo" src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png">
            </div><!-- /thumbnail -->
            </div><!-- /col-sm-2 -->

            <div class="col-sm-10">
            <div class="panel panel-default">
            <div class="panel-heading">
            <strong>اسم المستخدم</strong> 
            <span class="text-muted" style="float: left">منذ 5 ايام</span>
            </div>
            <div class="panel-body">
               اهدا كده يا ليدر عشان ربنا يكرمنا 
            </div><!-- /panel-body -->
            </div><!-- /panel panel-default -->
            </div><!-- /col-sm-10 -->

        </div><!-- /row -->
        <div class="row">
            <div class="col-sm-2">
            <div class="thumbnail">
            <img class="img-responsive user-photo" src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png">
            </div><!-- /thumbnail -->
            </div><!-- /col-sm-2 -->

            <div class="col-sm-10">
            <div class="panel panel-default">
            <div class="panel-heading">
            <strong>اسم المستخدم</strong> 
            <span class="text-muted" style="float: left">منذ 5 ايام</span>
            </div>
            <div class="panel-body">
               اهدا كده يا ليدر عشان ربنا يكرمنا 
            </div><!-- /panel-body -->
            </div><!-- /panel panel-default -->
            </div><!-- /col-sm-10 -->

        </div><!-- /row -->
        <div class="row">
            <div class="col-sm-2">
            <div class="thumbnail">
            <img class="img-responsive user-photo" src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png">
            </div><!-- /thumbnail -->
            </div><!-- /col-sm-2 -->

            <div class="col-sm-10">
            <div class="panel panel-default">
            <div class="panel-heading">
            <strong>اسم المستخدم</strong> 
            <span class="text-muted" style="float: left">منذ 5 ايام</span>
            </div>
            <div class="panel-body">
               اهدا كده يا ليدر عشان ربنا يكرمنا 
            </div><!-- /panel-body -->
            </div><!-- /panel panel-default -->
            </div><!-- /col-sm-10 -->

        </div><!-- /row -->
        <div class="row">
            <div class="col-sm-2">
            <div class="thumbnail">
            <img class="img-responsive user-photo" src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png">
            </div><!-- /thumbnail -->
            </div><!-- /col-sm-2 -->

            <div class="col-sm-10">
            <div class="panel panel-default">
            <div class="panel-heading">
            <strong>اسم المستخدم</strong> 
            <span class="text-muted" style="float: left">منذ 5 ايام</span>
            </div>
            <div class="panel-body">
               اهدا كده يا ليدر عشان ربنا يكرمنا 
            </div><!-- /panel-body -->
            </div><!-- /panel panel-default -->
            </div><!-- /col-sm-10 -->

        </div><!-- /row -->
        <div class="row">
            <div class="col-sm-2">
            <div class="thumbnail">
            <img class="img-responsive user-photo" src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png">
            </div><!-- /thumbnail -->
            </div><!-- /col-sm-2 -->

            <div class="col-sm-10">
            <div class="panel panel-default">
            <div class="panel-heading">
            <strong>اسم المستخدم</strong> 
            <span class="text-muted" style="float: left">منذ 5 ايام</span>
            </div>
            <div class="panel-body">
               اهدا كده يا ليدر عشان ربنا يكرمنا 
            </div><!-- /panel-body -->
            </div><!-- /panel panel-default -->
            </div><!-- /col-sm-10 -->

        </div><!-- /row -->

        <!-- leave review -->

        <div class="row" style="margin-top:40px;float: left;padding: 10px;">
   
            <div class="text-center">
                <a class="btn btn-success btn-green  btn-lg" href="#reviews-anchor" id="open-review-box">اترك تعليقك </a>
            </div>
            <div class="row" id="post-review-box" style="display:none;">
                <div class="col-md-12">
                    <form accept-charset="UTF-8" action="" method="post">
                        <input id="ratings-hidden" name="rating" type="hidden">

                        <textarea class="form-control animated" cols="200" id="new-review" name="comment" placeholder="Enter your review here..." rows="5">
                            
                        </textarea>
        
                        <div class="text-right">
                            <div class="stars starrr" data-rating="0"></div>
                            <a class="btn btn-danger " href="#" id="close-review-box" style="display:none; margin-right: 10px;">
                            <span class="glyphicon glyphicon-remove">
                                
                            </span>الغاء</a>
                            <button class="btn btn-success" type="submit">
                            <span style='Times New Roman'>حفظ</span></button>
                        </div>
                    </form>
                </div>
            </div>
    </div>

</div>

<!-- end user review -->
    


    <!-- start google map  -->
    
    <div class="col-md-4">
    <h3 > <label>موقع الشركه</label></h3>
    
      <div class="">
          
      </div>
      
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2648.833038448318!2d-89.2826271!3d48.402149400000006!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4d59202c99c9252f%3A0x4cb61e2f5a8d87e!2s218+Humber+Crescent%2C+Thunder+Bay%2C+ON+P7C+5X2!5e0!3m2!1sen!2sca!4v1424370904204"  width=100% height="450" frameborder="0" style="border:0"></iframe>
          <div class="adds">
          
          <img src="advertise-here.png" class="img-responsive">
          <img src="advertise-here.png" class="img-responsive">
          
         </div>
     </div>




</div> <!-- end body -->



<!-- end google map --> 
   