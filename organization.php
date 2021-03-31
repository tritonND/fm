<?php
session_start();
include "services/connect.php";

if(!isset($_SESSION["user"])){
    header( "Location: register");
}
else{

}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Organization</title>
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

        .form-group{
            margin-bottom: 4.5%;
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

<!-- <body style="font-family: Poppins; background: #e5e9f1;"> -->

<body style="font-family: Poppins; background: #e5e9f1;">
<!-- Start of NavBar -->
<?php
include "nav.php";
?>


<section>
    <div class="container-fluid" style="padding-right: 0px;padding-left: 0px;">
        <div class="row" style="margin-right: 0px;margin-left: 0px;">
            <div  class=" col-md-6 left" style="padding-top: 10px;padding-right: 0px;padding-left: 50px;background: #e5e9f1;">
                <h1 style="margin-top: 6px; font-weight: bolder;">Organization Details</h1>

                <!-- <label class="d-block">Name</label>
                <input class="d-block inps" type="text" required="" style="width: 340px;height: 35px;background: rgb(191,196,208);border-color: #e5e9f1;padding-top: 0px;margin-top: -4px;"> -->

                <!-- Start Spinner -->
                <div class="col-xs-12 app-loader" style="display: none; position: fixed; top: 0; bottom: 0; width: 100%; height: 100%;
                     left: 0; text-align: center; z-index: 3; padding-top: 15em;">
                    <div style="background-color: rgba(0,0,0,0.7); display: block; width: 50%; margin-left: 25%; margin-right: 25%">
                        <i class="fa fa-spinner fa-pulse" style="font-size: 5.5em; color: #ffffff; margin: 25px;"></i>
                        <div class="app-loader-message" style="color: #ffffff;"></div>
                    </div>
                </div>
                <!-- End Spinner -->


                <form id="organizationForm" method="POST" class="needs-validation" novalidate >

                    <div class="form-group">
                        <label for="oname" class="labels" >Organization name</label>
                        <input type="text" class="form-control inps" id="oname" name="oname" placeholder="" required>
                        <div class="invalid-feedback">Please provide organization name  </div>
                    </div>


                    <div class="form-group">
                        <label for="age">Select State <small style="color:red; display: none;">*</small></label>
                        <select type="text" class="form-control inps" id="state" name="state" required >
                            <option disabled selected  hidden value=""></option>
                            <option value="Abuja FCT">Abuja FCT</option>
                            <option value="Abia">Abia</option>
                            <option value="Adamawa">Adamawa</option>
                            <option value="Akwa Ibom">Akwa Ibom</option>
                            <option value="Anambra">Anambra</option>
                            <option value="Bauchi">Bauchi</option>
                            <option value="Bayelsa">Bayelsa</option>
                            <option value="Benue">Benue</option>
                            <option value="Borno">Borno</option>
                            <option value="Cross River">Cross River</option>
                            <option value="Delta">Delta</option>
                            <option value="Ebonyi">Ebonyi</option>
                            <option value="Edo">Edo</option>
                            <option value="Ekiti">Ekiti</option>
                            <option value="Enugu">Enugu</option>
                            <option value="Gombe">Gombe</option>
                            <option value="Imo">Imo</option>
                            <option value="Jigawa">Jigawa</option>
                            <option value="Kaduna">Kaduna</option>
                            <option value="Kano">Kano</option>
                            <option value="Katsina">Katsina</option>
                            <option value="Kebbi">Kebbi</option>
                            <option value="Kogi">Kogi</option>
                            <option value="Kwara">Kwara</option>
                            <option value="Lagos">Lagos</option>
                            <option value="Nassarawa">Nassarawa</option>
                            <option value="Niger">Niger</option>
                            <option value="Ogun">Ogun</option>
                            <option value="Ondo">Ondo</option>
                            <option value="Osun">Osun</option>
                            <option value="Oyo">Oyo</option>
                            <option value="Plateau">Plateau</option>
                            <option value="Rivers">Rivers</option>
                            <option value="Sokoto">Sokoto</option>
                            <option value="Taraba">Taraba</option>
                            <option value="Yobe">Yobe</option>
                            <option value="Zamfara">Zamfara</option>
                        </select>

                        <div class="invalid-feedback">Please select state </div>
                    </div>


                    <div class="form-group">
                        <label for="age">Select Sector <small style="color:red; display: none;">*</small></label>
                        <select type="text" class="form-control inps" id="sector" name="sector" required>
                            <option disabled selected  hidden value=""></option>
                            <option value="Economic">Economic</option>
                            <option value="Administrative">Administrative</option>
                            <option value="Health">Health</option>

                        </select>

                        <div class="invalid-feedback">Please select sector  </div>
                    </div>


                    <div class="form-group">
                        <label for="age">Select Ministry / Agency <small style="color:red; display: none;">*</small></label>
                        <select type="text" class="form-control inps" id="ministry" name="ministry" required>
                            <option disabled selected  hidden value=""></option>
                            <option value="Ministry of Health">Ministry of Health</option>
                            <option value="Ministry of Works">Ministry of Works</option>
                            <option value="Ministry of Finance">Ministry of Finance</option>
                            <option value="Ministry of Sports">Ministry of Sports</option>

                        </select>
                        <div class="invalid-feedback">Please select Ministry / Agency </div>
                    </div>

                    <button style="border-radius: 25px; padding: 10px 80px; margin-bottom: 19%;" type="submit" class="btn btn-lg btn-dark">
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


<script>
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



    $('#organizationForm').on("submit", function(submitEvent){

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
                url: "services/fmorganization", // Url to which the request is send
                type: "POST",             // Type of request to be send, called as method
                data: new FormData($('#organizationForm').get(0)), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
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
                        location.href = "congrat";
                    }, 2500);


                }
                else{

                    Swal.fire({
                        icon: 'error',
                        title: 'Organization Name Already exist',
                        text: 'Please provide unique Organization name',

                    });

                    $('.app-loader').css("display", "none");
                }

            });


        }
    });


</script>
</body>

</html>
