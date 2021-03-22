<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>fm</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/carousel.css">

    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="assets/fonts/Poppins-Black.ttf" rel="stylesheet">
<link href="assets/fonts/Poppins-Regular.ttf" rel="stylesheet">
<link href="assets/fonts/Poppins-ExtraLight.ttf" rel="stylesheet">

<link href="assets/fonts/DancingScript-Bold.ttf" rel="stylesheet">
    <!-- <link rel="stylesheet/less" type="text/css" href="assets/css/carousel.less" /> -->
   
    <style>


/* @import url('https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@200&display=swap'); */

@import url('assets/fonts/*');

      .vert .carousel-item-next.carousel-item-left,
.vert .carousel-item-prev.carousel-item-right {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
}

.vert .carousel-item-next,
.vert .active.carousel-item-right {
    -webkit-transform: translate3d(0, 100%, 0);
    transform: translate3d(0, 100% 0);
}

.vert .carousel-item-prev,
.vert .active.carousel-item-left {
    -webkit-transform: translate3d(0, -100%, 0);
    transform: translate3d(0, -100%, 0);
}

@media (max-width: 576px) { 
 .right {
     display: none;
 }

 }

 /* Medium devices (tablets, 768px and up) */
@media screen and (max-width: 768px) { 
    .right {
     display: none;
 }

 }

 /* Large devices (desktops, 992px and up) */
@media screen and (max-width: 992px) { 

    
}

 /* X-Large devices (large desktops, 1200px and up) */
@media screen and (max-width: 1200px) { 
    
 }

/* XX-Large devices (larger desktops, 1400px and up) */
@media screen and (max-width: 1400px) { 
 

}

.inps {
    background:#343752;
    width: 70%;
    height: 3.1rem;
    border-radius: 10px;
    /* margin-bottom: 4%; */
    color: rgb(35,174,226);

}
.labels {
    margin-bottom: 0%;
    margin-left: 5px;
    color: #fff;
    font-size: 1.5em;
    font-weight: lighter;
    /* font-family: Poppins; */
}

input:focus {
              outline: none;
            }

@font-face {
        font-family: 'Poppins';
        font-style: normal;
        /*font-weight: 300;*/
        src: url('assets/fonts/Poppins-Regular.ttf'); /* IE9 Compat Modes */
        src: local('Poppins'), local('Poppins-Regular'),
        url('assets/fonts/Poppins-Light') format('truetype'), /* IE6-IE8 */
        url('assets/fonts/Poppins-ExtraLight.ttf') format('truetype'), /* IE6-IE8 */
        url('assets/fonts/Poppins-Bold.ttf') format('truetype'), /* IE6-IE8 */
        url('assets/fonts/Poppins-Thin.ttf') format('truetype'); /* IE6-IE8 */
       }
    </style>

 
</head>

<body style="font-family: Poppins; background: #343752; ">
  <!-- Start of NavBar -->
  <nav class="navbar navbar-light navbar-expand-md" style="background: url(&quot;assets/img/menu.png&quot;) top / contain no-repeat, #343752; padding: 0.8rem; ">
    <div class="container-fluid">
        <a class="navbar-brand" href="#" style="background: url(&quot;assets/img/applogo.png&quot;) center / contain no-repeat;width: 56px;height: 45px;margin-right: 0px;padding: 0px;margin-top: 6px;margin-left: 16px;"></a>
        <button data-toggle="collapse" class="navbar-toggler" data-target="#navbarTogglerDemo02">
            <span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span>
        </button>
             
<div class="collapse navbar-collapse" id="navbarTogglerDemo02"  style="margin-left: 5%; font-size: 20px;">
    <ul class="navbar-nav mr-auto mt-6 mt-lg-0">
      <li class="nav-item active" style="margin-right: 20%; font-weight: bold;">
        <a class="nav-link" href="#">How it works <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item" style="margin-right: 20%; font-weight: bold;">
        <a class="nav-link" href="#">About FM</a>
      </li>
      <li class="nav-item" style="margin-right: 20%; font-weight: bold;">
        <a class="nav-link disabled" href="#">Resources</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-2" style="margin-right: 1%;">
      <li class="nav-item" style="list-style-type: none;">
        <a class="btn btn-light action-button mr-sm-2" role="button" href="#" style="border-radius: 8px; border-color: #6168a0; color:#fff ;background: #4c5282;padding-top: 4px;padding-bottom: 4px;padding-right: 14px;padding-left: 14px;margin-right: 8px;">Sign Up</a>    
     
        <!-- <a class="btn btn-light action-button mr-sm-2" role="button" href="#" style="border-radius: 8px; color:#fff ;background: rgba(73,162,162,0);padding-top: 4px;padding-bottom: 4px;padding-right: 14px;padding-left: 14px;margin-right: 8px;">Sign Up</a>     -->
     
      </li>
   </form>

    <form class="form-inline my-2 my-lg-2" style="margin-right: 0%;">
      <li class="nav-item" style="list-style-type: none;">
        <a class="btn btn-light action-button my-2 my-sm-0" role="button" href="#" style="display: none ; border-radius: 8px;background: rgb(35,174,226);padding-top: 4px;padding-bottom: 4px;padding-right: 14px;padding-left: 14px;margin-right: 3px;border-color: rgb(0,0,0);">Login</a>  
      </li>
      </form>
        </div>
    </div>
  </nav>
      <!-- End of Nav Bar -->


      <section>
        <div class="container-fluid" style="padding-right: 0px;padding-left: 0px; margin-top: 10px ;background: #343752; ">
            <div style="margin-left: 50px;"> 
                <b style="font-size: 4rem; color: #fff; ">WELCOME!</b>
               
            </div>


            <div class="row" style="margin-right: 0px;margin-left: 0px;">          
                <div  class=" col-md-6 left" style="padding-top: 10px;padding-right: 0px;padding-left: 50px;background: #343752; ">
                   
                    <h4 style="color: #fff; ">USER XYZ</h4>
                    <h5 style="color: rgb(70, 176, 222); font-weight: bolder !important; font-size: 18px;">Kaduna State Primary Health Care Services</h5>
            
                    <!-- <label class="d-block">Name</label>
                    <input class="d-block inps" type="text" required="" style="width: 340px;height: 35px;background: rgb(191,196,208);border-color: #e5e9f1;padding-top: 0px;margin-top: -4px;"> -->
                
                    <div style=" margin-top: 60px; margin-bottom: 20px;">
                        <span>
                            <img class="img-fluid"  width="45px" src="assets/img/reset.png">
                            <b style="color: #fff; font-size: 28px;">Password RESET</b>
                        </span>
                    </div>
                    

                    <form id="register">
                        <!-- <img src="assets/img/topBars.png" style="width: 25%;"> -->
                        <div class="form-group" style="margin-bottom: 8%;">
                          <small for="fname" style="color: #fff;">Please kindly RESET your password by entering a new password <br> 
                         Password should contain Capital letters, Special Characters, etc...</small>
                          <input type="text" class="form-control inps" id="fname" placeholder="">
                          <!-- <small id="emailHelp" class="form-text" style="color: #fff; font-style: italic; font-weight: bolder;">Please enter User ID as seen in your email.</small> -->

                        </div>
                
                          <div class="form-group" style="margin-bottom: 3%;">
                            <small for="fname" style="color: #fff;"> Repeat password</small>
                            <input type="text" class="form-control inps" id="email" placeholder="">
                            <!-- <small class="form-text"  style="color: #fff; font-style: italic; font-weight: bolder;">Enter Password here</small> -->
                          </div>

                         
                    
                          <button style="border-radius: 25px; padding: 4px 20px;  background:rgb(35,174,226); color: #fff;" type="button" class="btn btn-lg">Continue</button>
                      
                    </form>
                
                </div>
                <div class="col-md-6 right" style="padding-right: 0px;padding-left: 0px;background: #343752; ">
                    <img class="img-fluid" width="1500px" src="assets/img/art4r.png">

                   
                </div>
            </div>
        </div>
      </section>




      <section style="display: none;">
        <div class="container-fluid" style="padding-right: 0px;padding-left: 0px; background: #e5e9f1; margin-bottom: 20%;">
            <div class="row no-gutters" >               
                <div class="col-md-12" style="padding-right: 10px;padding-left: 10px; background: #e5e9f1; text-align: center;">
                    <img class="img-fluid" width="1300px" style="margin-top: 100px;" src="assets/img/congrats2.png">

                    <h3 style="font-weight: bolder; margin-left: 10%; margin-right: 10%;">Your request is being processed. You will receive an email once the verification process is complete</h3>
                    <img class="img-fluid" width="100px" style="margin-top: 50px;" src="assets/img/congratsbird.png">

                </div>            
            </div>
        </div>
      </section>

 
 

 


    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/carousel2.js"></script>

     <!-- <script src="assets/bootstrap/js/less@3.13" ></script> -->
</body>

</html>