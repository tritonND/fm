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
    <title>fm</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/carousel.css">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="assets/fonts/Poppins-Black.ttf" rel="stylesheet">
    <link href="assets/fonts/Poppins-Regular.ttf" rel="stylesheet">

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

<body style="font-family: Poppins; background: #e5e9f1;">
<!-- Start of NavBar -->
<?php
include "nav.php";
?>

<!-- End of Nav Bar -->



<section>
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

</body>

</html>
