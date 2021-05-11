<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Login</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/carousel.css">
    <link rel="stylesheet" href="assets/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	

    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="assets/fonts/Poppins-Black.ttf" rel="stylesheet">
<link href="assets/fonts/Poppins-Regular.ttf" rel="stylesheet">
<link href="assets/fonts/Poppins-ExtraLight.ttf" rel="stylesheet">
<!-- <link href="assets/fonts/Poppins-Light.ttf" rel="stylesheet"> -->
<link href="assets/fonts/Poppins-Thin.ttf" rel="stylesheet">
<link href="assets/fonts/DancingScript-Bold.ttf" rel="stylesheet">
    <!-- <link rel="stylesheet/less" type="text/css" href="assets/css/carousel.less" /> -->
   
   <script src="assets/js/sweetalert2.all.min.js"></script>
   <link href="assets/css/sweetalert2.min.css" rel="stylesheet">
 
 
    <style>

 
/* @import url('assets/fonts/*'); */

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
    width: 80%;
    height: 4.1rem;
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
        <a class="btn btn-light action-button mr-sm-2" role="button" href="register" style="display:none;border-radius: 8px; border-color: #6168a0; color:#fff ;background: #4c5282;padding-top: 4px;padding-bottom: 4px;padding-right: 14px;padding-left: 14px;margin-right: 8px;">Sign Up</a>
     
        <!-- <a class="btn btn-light action-button mr-sm-2" role="button" href="#" style="border-radius: 8px; color:#fff ;background: rgba(73,162,162,0);padding-top: 4px;padding-bottom: 4px;padding-right: 14px;padding-left: 14px;margin-right: 8px;">Sign Up</a>     -->
     
      </li>
   </form>

    <form class="form-inline my-2 my-lg-2" style="margin-right: 0%; ">
      <li class="nav-item" style="list-style-type: none;">
        <a class="btn btn-light action-button my-2 my-sm-0" role="button" href="#" style="display:none; border-radius: 8px;background: rgb(35,174,226);padding-top: 4px;padding-bottom: 4px;padding-right: 14px;padding-left: 14px;margin-right: 3px;border-color: rgb(0,0,0);">Login</a>  
      </li>
      </form>
        </div>
    </div>
  </nav>
      <!-- End of Nav Bar -->


      <section>
        <div class="container-fluid" style="padding-right: 0px;padding-left: 0px; margin-top: 35px ;background: #343752; ">
            <div class="row" style="margin-right: 0px;margin-left: 0px;">
                <div  class=" col-md-6 left" style="padding-top: 10px;padding-right: 0px;padding-left: 50px;background: #343752; ">
                  
                
                  <!-- Start Spinner -->
                  <div class="col-xs-12 app-loader" style="display: none; position: fixed; top: 0; bottom: 0; width: 100%; height: 100%;
                left: 0; text-align: center; z-index: 3; padding-top: 15em;">
              <div style="background-color: rgba(0,0,0,0.7); display: block; width: 50%; margin-left: 25%; margin-right: 25%">
                <!-- <i class="fa fa-cog fa-spin" style="font-size: 8em; color: #ffffff"></i> -->
                <i class="fa fa-spinner fa-pulse" style="font-size: 5.5em; color: #ffffff; margin: 25px;"></i>



                <!-- <i class="fa fa-heartbeat fa-pulse" style="font-size: 10em; color: #ffffff"></i> -->
                <div class="app-loader-message" style="color: #ffffff;"></div>
              </div>
               </div>
               <!-- End Spinner -->


               <!-- <div id="div1" class="fa" style="font-size: 45px"> </div> -->


                
                    <!-- <form id="loginForm" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate> -->
                    <form id="loginForm" method="POST" class="needs-validation" novalidate >  

                      <!-- <form id="loginForm" method="POST" data-toggle="validator" role="form" >                       -->
                        <img src="assets/img/topBars.png" style="width: 25%;">
                       
                        <div class="form-group has-feedback" style="margin-bottom: 8%;">
                          <label for="fname" class="labels"  >User ID</label>
                          <input type="text" class="form-control inps" id="username" name="username" placeholder="" required>
                          <small id="emailHelp" class="form-text" style="color: #fff; font-style: italic; font-weight: bolder;">Please enter User ID as seen in your email.</small>
                          <div class="invalid-feedback">Please provide a valid username  </div>
                        </div>
                
                          <div class="form-group" style="margin-bottom: 3%;">
                            <label for="password" class="labels">Password</label>
                            <input type="password" class="form-control inps" id="password" name="password" placeholder="" required>
                            <small class="form-text"  style="color: #fff; font-style: italic; font-weight: bolder;">Enter Password here</small>
                            <div class="invalid-feedback">Please provide a valid password  </div>
                          </div>

                         
                    
                          <button id="loginBtn" style="border-radius: 25px; padding: 4px 40px; margin-bottom: 19%; background:rgb(35,174,226); color: #fff;" type="submit" class="btn btn-lg">Login</button>
                      
                    </form>
                
                </div>
                <div class="col-md-6 right" style="padding-right: 0px;padding-left: 0px;background: #343752; ">
                    <img class="img-fluid" width="1500px" src="assets/img/art4r.png">

                   
                </div>
            </div>
        </div>
      </section>



    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/carousel2.js"></script>

     <!-- <script src="assets/bootstrap/js/less@3.13" ></script> -->

<script> 
(function () {
  'use strict';

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault();
          event.stopPropagation();
        }

        form.classList.add('was-validated')
      }, false)
    })
})();

  $('#loginForm').on("submit", function(submitEvent){
            
            // form was successfully validated
            if(! submitEvent.isDefaultPrevented()) {
                // prevent the form from submitting automatically
                submitEvent.preventDefault();
                // display the app-loader
                $('.app-loader').css("display", "block");
                $('.app-loader-message').html("<div>Submitting...</div>" +
                    "<div>PLEASE DO NOT CLOSE BROWSER</div>");
                // submit the from via ajax



                var x=$.ajax({
                    url: "services/fm_mdauserlogin", // Url to which the request is send
                    type: "POST",             // Type of request to be send, called as method
                    data: new FormData($('#loginForm').get(0)), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
                    contentType: false,       // The content type used when sending data to the server.
                    dataType:"text",
                    timeout: 300000,
                    cache: false,             // disable page caching
                    processData: false
            });

            x.done(function(myresponse)
            {
                console.log(myresponse);
                if(myresponse === 'success'){
                    console.log(myresponse);
                    $('.app-loader').css("display", "none");
                    Swal.fire({
                          position: 'center',
                          icon: 'success',
                          title: 'Login Was successful',
                          showConfirmButton: false,
                          timer: 2500
                        });

                        setTimeout(function(){
                          location.href = "reset";
                        }, 2500);

                  
                }
                else{
                    
                    Swal.fire({
                        icon: 'error',
                        title: 'Invalid Credentials',
                        text: 'Please provide the correct credentials',
                    
                      });

                      $('.app-loader').css("display", "none");
                }

            });



             
               


            }
        });

</script>
 
 

</body>

</html>