<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <!-- <link rel="stylesheet" href="assets/css/materialize.min.css" media="screen,projection"/>-->
    <link rel="stylesheet" href="assets/css/carousel.css">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">

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

        .heads{
            color: #fff;
        }

        @media (max-width: 576px) {
            .headings {
                font-size: 3.5rem !important;
                line-height: 14px;
                font-weight: 600;
            }

        }

        /* Medium devices (tablets, 768px and up) */
        @media screen and (max-width: 768px) {
            .headings {
                font-size: 4.5rem !important;
                line-height: 14px;
                font-weight: 600;
            }

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
                    <a class="btn btn-light action-button mr-sm-2" role="button" href="register" style="border-radius: 8px; border-color: #6168a0; color:#fff ;background: #4c5282;padding-top: 4px;padding-bottom: 4px;padding-right: 14px;padding-left: 14px;margin-right: 8px;">Sign Up</a>

                    <!-- <a class="btn btn-light action-button mr-sm-2" role="button" href="#" style="border-radius: 8px; color:#fff ;background: rgba(73,162,162,0);padding-top: 4px;padding-bottom: 4px;padding-right: 14px;padding-left: 14px;margin-right: 8px;">Sign Up</a>     -->

                </li>
            </form>

            <form class="form-inline my-2 my-lg-2" style="margin-right: 0%;">
                <li class="nav-item" style="list-style-type: none;">
                    <a class="btn btn-light action-button my-2 my-sm-0" role="button" href="login" style="border-radius: 8px;background: rgb(35,174,226);padding-top: 4px;padding-bottom: 4px;padding-right: 14px;padding-left: 14px;margin-right: 3px;border-color: rgb(0,0,0);">Login</a>
                </li>
            </form>
        </div>
    </div>
</nav>
<!-- End of Nav Bar -->


<!-- Start Copy of first Section -->
<section class="top_section" style="background: #343752; padding-bottom: 25px;">
    <div class="row no-gutters">

        <div class="col-md-7 flex-shrink-1 flex-sm-shrink-1 ">
            <img src="assets/img/topBars.png" style="margin-top: 75px;margin-left: 50px; width: 25%;">

            <h1 class="headings heads" style="font-family: mont, sans-serif;font-size: 6vw;line-height: 100px;font-weight: 800; margin-left: 50px;">Experience a</h1>
            <h2 class="headings heads" style="font-family: mont, sans-serif;font-size: 6vw;line-height: 100px;font-weight: 800; margin-left: 50px;">Fresh way to</h2>
            <h2 class="headings heads" style="font-family: mont, sans-serif;font-size: 6vw;line-height: 100px;font-weight: 800; margin-left: 50px; color: rgb(35,174,226);">manage money</h2>

            <p class="heads" style="margin-right:20%; margin-left: 50px;">
                Reach your goals with personalized insights, custom budgets, spend tracking and subscription monitoring - all for free
            </p>
            <div class="text-left d-block d-sm-block  flex-shrink-1  flex-sm-shrink-1 " style="margin-top: 7px;margin-left: -6px;text-align: left; margin-bottom: 20px;">
                <a class="waves-effect waves-light btn" style="padding-top: 10px;padding-right: 10px;padding-bottom: 10px;padding-left: 5px;margin-top: 0px; margin-left: 15px; color: rgb(255,255,225); font-weight: bold;">Get the App</a>

            </div>
        </div>

        <div class="col-md-5">
            <img class="img-fluid" src="assets/img/Asset 1.svg" style="width: 95%;">
        </div>

    </div>

</section>

<!-- End Copy of first Section -->





<section style="background: #C2D2F0; padding: 5%;">
    <!-- <div class="row no-gutters">  -->
    <div id="carouselExampleControls" class="row no-gutters carousel vert slide" data-ride="carousel" data-interval="5000" >

        <div class="col-md-1">
            <ul class="carousel-indicators" style="position: block; display: none;">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ul>
        </div>


        <div class="col-md-5" style="padding: 0%; margin: 0%;">
            <div class="carousel-inner">

                <div class="carousel-item active">
                    <div class="row no-gutters">
                        <div class="col-md-12">
                            <img class="d-block mx-auto img-fluid" style="width: 85%;" src="assets/img/Asset 2.svg" alt="First slide">
                        </div>
                    </div>
                </div>


                <div class="carousel-item">
                    <div class="row no-gutters">
                        <div class="col-md-12">
                            <img class="d-block mx-auto img-fluid" style="width: 75%;" src="assets/img/Asset 2.svg" alt="First slide">
                        </div>
                    </div>
                </div>


                <div class="carousel-item">
                    <div class="row no-gutters">
                        <div class="col-md-12">
                            <img class="d-block mx-auto img-fluid" style="width: 75%;" src="assets/img/Asset 2.svg" alt="First slide">
                        </div>
                    </div>
                </div>


            </div>
        </div>

        <!-- Last div section in carousel row -->
        <div class="col-md-6" style="padding: 0%; margin-top:  10%;">
            <!-- <img class="d-block mx-auto img-fluid" style="width: 85%;" src="assets/img/sl1r.png" alt="First slide"> -->
            <h2 style="font-size: 4.5em;font-weight: bolder; ">Spend Smarter</h2>
            <h2 style="font-size: 4.5em;font-weight: bolder; color: rgb(35,174,226);"> and Save More</h2>
            <p style="margin-right:35%;">Personalized FM insights make your money go further. We will authomatically find savings you missed</p>
            <button class="btn btn-dark flex-shrink-1" type="button" style="height: 45px;font-size: 18px;padding-top: 10px; padding-bottom: 10px;padding-right: 5px;padding-bottom: 10px;padding-left: 5px;margin-top: 0px; margin-left: 2px;">Get the app</button>

        </div>


    </div>

</section>



<section style="background: #c5d4f1;">
    <div style="text-align: center;">
        <span style="font-weight: bolder; font-size: 40px; padding-bottom: 2em; padding-top: 3em;"> FM is loaded with free Accounting features</span>
    </div>

    <div class="row no-gutters ">
        <div class="col-md-4" style="text-align: center;">
            <img width="25%" src="assets/img/Asset 42.svg">
            <h2 style="font-family: mont, sans-serif; font-size: 1.5em; font-weight: 900;">Budget Planner</h2>
            <p style="padding: 0% 20%;"> Say goodbye to spreadsheets with customizable budgets. Easily add and update your categories.</p>
        </div>

        <div class="col-md-4" style="text-align: center;">
            <img width="25%" src="assets/img/Asset 4.svg">
            <h2 style="font-family: mont, sans-serif; font-size: 1.5em; font-weight: 900;">Credit Monitoring</h2>
            <p style="padding: 0% 20%;"> Get 24/7 access to your score for free. Plus, we'll let you know of any important changes on your report</p>
        </div>

        <div class="col-md-4" style="text-align: center;">
            <img width="25%" src="assets/img/Asset 5.svg">
            <h2 style="font-family: mont, sans-serif; font-size: 1.5em; font-weight: 900;">Track your spending</h2>
            <p style="padding: 0% 20%;"> Stay on top of your finances by seeing where your money comes and goes.</p>
        </div>

    </div>




    <div style="text-align: center; padding: 5% 0%;">
        <span style="font-weight: bolder; font-size: 40px; padding-bottom: 0.5em;"> Your Finances, safe and secure</span>
        <p style="padding: 0% 20%;"> Our top priority is keeping your data secure. With multiple safety measures like <br> secure 256-bit encryption and multi-factor authentication, we protect your info <br> like its our own </p>
        <div style="margin-top: 15px;">
            <a style="color: cornflowerblue; text-decoration: underline;" href="security.html">Learn more about our security</a>
        </div>
    </div>

    <!-- <img class="img-fluid" src="assets/img/artcenter.png"> -->
</section>



<section style="background: #343752;text-align: center;padding-top: 25px;padding-bottom: 50px;margin-bottom: 0px;">
    <div><img class="img-fluid" src="assets/img/getApp.png" width="30%" style="margin-top: 7px;text-align: center;"></div>
    <div style="margin-top: 15px;"><button class="btn btn-primary" type="button" style="background: url(&quot;assets/img/googleplay.png&quot;) center / cover no-repeat, rgba(255,255,255,0);font-size: 21px;width: 202px;max-width: 202px;max-height: 55px;height: 150px;border-color: rgba(255,255,255,0);"></button></div>

</section>


<script type="text/javascript" src="assets/js/materialize.min.js"></script>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/carousel2.js"></script>

<!-- <script src="assets/bootstrap/js/less@3.13" ></script> -->
</body>

</html>

