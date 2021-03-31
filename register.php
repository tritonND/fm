<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Register</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/carousel.css">
    <link rel="stylesheet" href="assets/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	

     
   <script src="assets/js/sweetalert2.all.min.js"></script>
   <link href="assets/css/sweetalert2.min.css" rel="stylesheet">
 

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
    margin-bottom: 0%;

}
.labels {
    margin-bottom: 0%;
    margin-left: 5px;
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

       input:focus {
              outline: none;
            }

       @font-face {
        font-family: 'Poppins_bold';
        font-style: bold;
        /*font-weight: 300;*/
        src: url('assets/fonts/Poppins-Bold.ttf'); /* IE9 Compat Modes */
        src: local('Poppins_bold'), local('Poppins-Bold'),
        url('assets/fonts/Poppins-ExtraLight.ttf') format('truetype'), /* IE6-IE8 */
        url('assets/fonts/Poppins-Bold.ttf') format('truetype'), /* IE6-IE8 */
        url('assets/fonts/Poppins-Thin.ttf') format('truetype'); /* IE6-IE8 */
       }
    </style>

 
</head>

<body style="font-family: Poppins;background: #e5e9f1;">
  <!-- Start of NavBar -->
  <?php
  include "nav.php";
  ?>

  <!-- End of Nav Bar -->



      <section>
        <div class="container-fluid" style="padding-right: 0px;padding-left: 0px;">
            <div class="row" style="margin-right: 0px;margin-left: 0px;">
                <div  class=" col-md-6 left" style="padding-top: 10px;padding-right: 0px;padding-left: 50px;background: #e5e9f1;">
                    <h1 style="margin-top: 6px; font-weight: bolder; font-family: Poppins_bold;">Create account</h1>
         
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
                
                    <form id="registerForm" method="POST" class="needs-validation" novalidate>
                        <div class="form-group">
                          <label for="fname" class="labels" >Name</label>
                          <input type="text" class="form-control inps" id="fname" name="fname" placeholder="" required>
                          <div class="invalid-feedback">Please provide fullname  </div>
                        </div>

                        <div class="form-group">
                          <label for="email" class="labels">E-mail address</label>
                          <input type="email" class="form-control inps" id="email" name="email" placeholder="" required>
                          <div class="invalid-feedback">Please provide a valid email address  </div>
                        </div>


                        <div class="form-group">
                            <label for="phonenumber" class="labels">Phone Number</label>
                            <input type="text" class="form-control inps" id="phonenumber" name="phonenumber" placeholder="" pattern="(0[1-9]{1}[0-9]{9}|\+234[1-9]{1}[0-9]{9})"
                                       data-required-error="phone number is required"
                                       data-pattern-error="incorrect phone number format" required>
                            <div class="invalid-feedback">Please provide a valid phone number </div>
                          </div>

                          <div class="form-group">
                            <label for="password" class="labels">Password</label>
                            <input type="password" class="form-control inps" id="password"  name="password" placeholder="" required>
                            <div class="invalid-feedback">Please provide password  </div>
                          </div>

                          <div class="form-group">
                            <label for="password2" class="labels">Repeat Password</label>
                            <input type="password" class="form-control inps was-validated" id="password2" name="password2" placeholder="" required >
                            <div id="password2x" class="invalid-feedback">Please repeat password </div>
                          </div>



                          <div class="form-group form-check">
                            <input type="checkbox" style="" class="form-check-input" id="agree" required>
                            <label style="font-style:italic;" class="form-check-label" for="agree">I agree to the <a href="#" style="text-decoration: underline;">Terms</a> and <a style="text-decoration: underline;" href="#">Privacy Policy</a></label>
                          </div>
                          <button id="mysubmit" style="border-radius: 25px; padding: 10px 80px; " type="submit" class="btn btn-lg btn-dark" disabled>Create Account</button>
                      
                    </form>
                
                </div>
                <div class="col-md-6 right" style="padding-right: 0px;padding-left: 0px; background: #e5e9f1;">
                    <img class="img-fluid" width="1500px" src="assets/img/newbgr2.png">

                    <span style="float: right; margin-right: 11%; margin-top: 10%;">
                      <img class="img-fluid"  width="25px" src="assets/img/checked.png">
                      <a href="#" style="font-weight: bolder; text-decoration: underline; font-size: 18px; color: rgb(35,174,226);">Privacy Settings</a>
                    </span>
                </div>
            </div>
        </div>
      </section>

 
 


    <section style="display: none;background: #343752;text-align: center;padding-top: 25px;padding-bottom: 50px;margin-bottom: 0px;">
        <div><img class="img-fluid" src="assets/img/getApp.png" width="30%" style="margin-top: 7px;text-align: center;"></div>
        <div style="margin-top: 15px;"><button class="btn btn-primary" type="button" style="background: url(&quot;assets/img/googleplay.png&quot;) center / cover no-repeat, rgba(255,255,255,0);font-size: 21px;width: 202px;max-width: 202px;max-height: 55px;height: 150px;border-color: rgba(255,255,255,0);"></button></div>
   
      </section>


    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/carousel2.js"></script>

     <!-- <script src="assets/bootstrap/js/less@3.13" ></script> -->

     <script>

$('#password2').keyup(function() {
     var password = $('#password').val();
     var agree = document.getElementById("agree").checked;
    console.log('checked: ', agree)

         if (password !== $('#password2').val() ) {
             // $('#password2').removeClass('has-success').addClass('has-error');
             $('#password2').addClass('has-error');
             $('#mysubmit').attr('disabled', 'disabled');

             // console.log("password mismatch");
         }

         else{
              console.log("password match found");
              $('#mysubmit').removeAttr('disabled');
             // if( document.getElementById('agree').checked){
             //     console.log("checked is true");
             // }
             // else{
             //     $('#mysubmit').attr('disabled', 'disabled');
             // }

         }
     // }  //End CHeck here


   });

  


(function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})();

  $('#registerForm').on("submit", function(submitEvent){
            
            // form was successfully validated
            if(! submitEvent.isDefaultPrevented()) {
                // prevent the form from submitting automatically
                submitEvent.preventDefault();

              
                // display the app-loader
                $('.app-loader').css("display", "block");
                $('.app-loader-message').html("<div>Registration in progress...</div>" +
                    "<div>PLEASE DO NOT CLOSE BROWSER</div>");
                // submit the from via ajax



                var x=$.ajax({
                    url: "services/fmregister", // Url to which the request is send
                    type: "POST",             // Type of request to be send, called as method
                    data: new FormData($('#registerForm').get(0)), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
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
                          title: 'Registration Was successful',
                          showConfirmButton: false,
                          timer: 2500
                        });

                        setTimeout(function(){
                          location.href = "organization";
                        }, 2500);

                  
                }
                else{
                    
                    Swal.fire({
                        icon: 'error',
                        title: 'User With same email exist',
                        text: 'Please provide unique email address',
                    
                      });

                      $('.app-loader').css("display", "none");
                }

            });


            }
        });

</script>
 
</body>

</html>