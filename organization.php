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

    <!-- <link rel="stylesheet/less" type="text/css" href="assets/css/carousel.less" /> -->
   
    <style>
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
    background: rgb(191,196,208);
    width: 60%;
    height: 2.6rem;
    border-radius: 10px;
    margin-bottom: 4%;

}
.labels {
    margin-bottom: 0%;
    margin-left: 5px;
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

<body style="font-family: Poppins;">
  <!-- Start of NavBar -->
  <nav class="navbar navbar-light navbar-expand-md" style="background: url(&quot;assets/img/menu.png&quot;) top / contain no-repeat, #343752; padding: 0.8rem; ">
    <div class="container-fluid">
        <a class="navbar-brand" href="#" style="background: url(&quot;assets/img/applogo.png&quot;) center / contain no-repeat;width: 56px;height: 45px;margin-right: 0px;padding: 0px;margin-top: 6px;margin-left: 16px;"></a>
        <button data-toggle="collapse" class="navbar-toggler" data-target="#navbarTogglerDemo02">
            <span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span>
        </button>
             
<div class="collapse navbar-collapse" id="navbarTogglerDemo02"  style="margin-left: 5%; font-size: 20px;">
    <ul class="navbar-nav mr-auto mt-6 mt-lg-0">
      <li class="nav-item active" style="margin-right: 20%;">
        <a class="nav-link" href="#">How it works <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item" style="margin-right: 20%;">
        <a class="nav-link" href="#">About FM</a>
      </li>
      <li class="nav-item" style="margin-right: 20%;">
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
        <a class="btn btn-light action-button my-2 my-sm-0" role="button" href="#" style="border-radius: 8px;background: rgb(35,174,226);padding-top: 4px;padding-bottom: 4px;padding-right: 14px;padding-left: 14px;margin-right: 3px;border-color: rgb(0,0,0);">Login</a>  
      </li>
      </form>
        </div>
    </div>
  </nav>
      <!-- End of Nav Bar -->



      <section>
        <div class="container-fluid" style="padding-right: 0px;padding-left: 0px;">
            <div class="row" style="margin-right: 0px;margin-left: 0px;">
                <div  class=" col-md-6 left" style="padding-top: 10px;padding-right: 0px;padding-left: 50px;background: #e5e9f1;">
                    <h1 style="margin-top: 6px; font-weight: bolder;">Organization Details</h1>

                    <!-- <label class="d-block">Name</label>
                    <input class="d-block inps" type="text" required="" style="width: 340px;height: 35px;background: rgb(191,196,208);border-color: #e5e9f1;padding-top: 0px;margin-top: -4px;"> -->
                
                
                    <form id="register" >
                        <div class="form-group">
                          <label for="oname" class="labels" >Organization name</label>
                          <input type="text" class="form-control inps" id="oname" placeholder="">
                        </div>
                        

                        <div class="form-group">
                            <label for="age">Select State <small style="color:red; display: none;">*</small></label>
                            <select type="text" class="form-control inps" id="state" name="state" >
                                  <option disabled selected  hidden value=""></option>
                                  <option value="Kaduna">Kaduna</option>
                                  <option value="Kano">Kano</option>
                                  <option value="Katsina">Katsina</option>
                                  <option value="Kebbi">Kebbi</option>
                                  <option value="Kogi">Kogi</option>
                              </select>
                        </div>


                        <div class="form-group">
                            <label for="age">Select Sector <small style="color:red; display: none;">*</small></label>
                            <select type="text" class="form-control inps" id="state" name="state" >
                                  <option disabled selected  hidden value=""></option>
                                  <option value="Economic">Economic</option>
                                  <option value="Administrative">Administrative</option>
                                  <option value="Health">Health</option>
                                 
                              </select>
                        </div>


                        <div class="form-group">
                            <label for="age">Select Ministry / Agency <small style="color:red; display: none;">*</small></label>
                            <select type="text" class="form-control inps" id="state" name="state" >
                                  <option disabled selected  hidden value=""></option>
                                  <option value="Kaduna">Ministry of Health</option>
                                  <option value="Kano">Ministry of Works</option>
                                  <option value="Katsina">Ministry of Finance</option>
                                  <option value="Kebbi">Ministry of Sports</option>
                                  
                              </select>
                        </div>

                       


                         
                        
                          <div class="form-group form-check" style="display: none;">
                            <input type="checkbox" style="" class="form-check-input" id="agree" required>
                            <label style="font-style:italic;" class="form-check-label" for="agree">I agree to the <a href="#" style="text-decoration: underline;">Terms</a> and <a style="text-decoration: underline;" href="#">Privacy Policy</a></label>
                          </div>

                         
                            
                          <button style="border-radius: 25px; padding: 10px 80px; margin-bottom: 19%;" type="button" class="btn btn-lg btn-dark">
                            <span>  <img class="img-fluid"  width="25px" src="assets/img/finishlogo.png">Finish </span>
                          </button>
                          
                    </form>
                
                </div>
                <div class="col-md-6 right" style="padding-right: 50px;padding-left: 0px; background: #e5e9f1;">
                    <img class="img-fluid" width="1500px" src="assets/img/art3bg.png">

                    <span style="float: right; margin-right: 11%; margin-top: 2%;">
                      <img class="img-fluid"  width="25px" src="assets/img/checked.png">
                      <a href="#" style="font-weight: bolder; text-decoration: underline; font-size: 18px; color: rgb(35,174,226);">Privacy Settings</a>
                    </span>
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