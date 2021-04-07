<?php
session_start();
include "services/connect.php";

if(!isset($_SESSION["user"])){
    header( "Location: index");
}
else{

}
?>

<!doctype html>
<html lang="en">
<head>
    <title>Dashboard</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

<!--    <link rel="stylesheet" href="assets/fontawesome/css/all.min.css">-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="assets/bootstrap/css/style.css">

    <style>
        .fas {
            padding-top: 7px;
            padding-bottom: 7px;
            font-size: 35px;
            color: rgb(147, 168, 185) !important;
        }

        .mybt{
            width: 30px;
        }

        path {
            fill:chocolate;
        }


        input:focus {
            outline: none;
        }

        .mysvg svg path{
            fill: red !important;
        }


        .myblocks{
            display: inline-flex;
            margin-left: 4%;
            margin-bottom: 3%;
        }

        .badge-dark{
            padding: 6px;
        }


    </style>
</head>
<body style="background: #eff3f3">

<div class="wrapper d-flex align-items-stretch">

  <?php
   include "services/sidebar.php";
  ?>
    <!-- Page Content  -->
    <div id="content" class="p-md-12">

        <?php
        include "services/topbar.php";
        ?>
        <div class="container-fluid" style="background: #e5e9f1; margin-top: 0px; padding-top: 5px;">

            <div class="row no-gutters">
                <div class="col-md-3">

                    <p style="font-size: 21px; color: #343752;">
                        <span class="fa fa-map-marker" style="color: #343752; font-size: 55px;"> </span>
                        <span class="fa fa-sun-o" style="color: #343752; background: #fff ; font-size: 27px; margin-left: -18px;"></span>
                        Location Setup
                    </p>

                </div>

                <div class="col-md-9">

                    <button style="font-size: 18px; border: #e5e9f1; background: #e5e9f1; color: #343752; margin-right: 35px; margin-top: 30px" href="#" data-toggle="modal" data-target="#addDivisionModal">
                        <b style="">Type : Ministry</b>
                    </button>


                    <button style="font-size: 18px; border: #e5e9f1; background: #e5e9f1; color: #343752; margin-right: 35px;display: none;" href="#" data-toggle="modal" data-target="#addDivisionModal">
                        <span class="fa fa-map-marker" style="color: #e5e9f1; font-size: 60px;"> </span>
                        <span class="fa fa-plus-square" style="color: #343752; font-size: 20px;"> </span>
                        <b style="text-decoration: underline;">Add Division</b>

                    </button>


                    <button style="font-size: 18px; border: #e5e9f1; background: #e5e9f1; color: #343752; margin-right: 35px; display: none;" href="#">
                        <a style="font-size: 18px; color: #a91414; margin-right: 7px;" href="#">
                            <!-- <span class="fa fa-map-marker" style="color: #e5e9f1; font-size: 60px;"> </span> -->
                            <span class="fa fa-save" style="color: #a91414; font-size: 20px;"> </span>
                            <b style="text-decoration: underline;">Save</b>
                        </a>
                    </button>

                    <button style="font-size: 18px; border: #e5e9f1; background: #e5e9f1; color: #343752; margin-right: 35px; display: none;" href="#">
                        <a style="font-size: 18px; color: #343752; margin-right: 13px;" href="#">
                            <span class="fa fa-map-marker" style="color: #e5e9f1; font-size: 60px;"> </span>
                            <span class="fa fa-plus-square" style="color: #343752; font-size: 20px;"> </span>
                            <b style="text-decoration: underline;">Location Data</b>
                        </a>
                    </button>

                    <!--Div for Manage-->
                    <div style="width: 130px; display: inline-flex; height: 40px">
                        <div  style="background: #144e94; width: 40%;  font-size: xx-large; text-align: center">
                            <p id="manageVal" style="margin-top: -8px; color: #fff">0</p>
                        </div>
                        <div id="manage" style="background: #000; width: 60%;  font-size: x-small; text-align: center;">
                            <p style="margin-top: 10px; color: #fff">Manage</p>
                        </div>
                    </div>
                    <!--Div for Manage-->

                </div>
            </div>
        </div>



        <!-- Start Modal -->
        <div class="modal fade" id="createUser" tabindex="-1" role="dialog" aria-labelledby="addLGAModal" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addLGAModal">Create User</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <small style="font-size: 11px;">Close</small><span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" style="margin-top: 30px;">
                        <form>

                            <!-- Start Spinner -->
                            <div class="col-xs-12 app-loader" style="display: none; position: fixed; top: 0; bottom: 0; width: 100%; height: 100%;
                left: 0; text-align: center; z-index: 3; padding-top: 15em;">
                                <div style="background-color: rgba(0,0,0,0.7); display: block; width: 50%; margin-left: 25%; margin-right: 25%">
                                    <i class="fa fa-cog fa-spin" style="font-size: 8em; color: #ffffff"></i>
                                    <div class="app-loader-message" style="color: #ffffff;"></div>
                                </div>
                            </div>
                            <!-- End Spinner -->

                            <div class="form-group row" style="margin-bottom: 40px;">
                                <label for="pname" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="pname" placeholder="">
                                </div>
                            </div>

                            <div class="form-group row" style="margin-bottom: 2px;">
                                <label for="parents" class="col-sm-2 col-form-label">Parent</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="parents" placeholder="">
                                    <small id="emailHelp" class="form-text" style="color: #000; font-style: italic; font-weight: lighter;">All Administrative division that is a child of</small>
                                </div>
                            </div>


                            <div class="form-check" style="margin-bottom: 2px; padding: 35px; display: none">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1" style="font-weight: bold; color: #343752;">
                                    Display on Dashboard and in Tables
                                </label>
                                <small id="emailHelp" class="form-text" style="color: #000; font-style: italic; font-weight: lighter;">Whether to show location data of this division on the dashboard and other tables </small>

                            </div>


                            <div class="form-check" style=" padding: 0px 35px; display: none;">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                                <label class="form-check-label" for="defaultCheck1" style="font-weight: bold; color: #343752;">
                                    Use in Data Summary
                                </label>
                                <small id="emailHelp" class="form-text" style="color: #000; font-style: italic; font-weight: lighter;">Whether to show aggregated data summaries at the administrative level</small>

                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-dark" id="saveUserBtn">Add</button>
                            </div>

                        </form>
                    </div>

                    <!--                    Removed Modal footer from here-->
                </div>
            </div>
        </div>
        <!-- End modal -->


        <div class="container-fluid" >
            <div class="row no-gutters">
                <div class="col-md-1"></div>
                <div class="col-md-4">
                    <img src="assets/img/goodjob.png" width="80%">
                </div>
                <div class="col-md-7" style="display: flex; justify-content: center; align-items: center; padding-right: 10%; margin-bottom: 25px;">
                    <div>
                        <h2>Next Step is to create or add Users to the system</h2>
                          <h3>
                            <button id="createUserBtn" data-target="#createUser" data-toggle="modal" class="btn btn-lg" style="border-radius: 50px; padding-right: 50px; height: 35px; width: 150px;background: url(&quot;assets/img/createUserBtn.png&quot;) center / cover no-repeat, rgba(255,255,255,0);"></button>
<!--                            <button id="createUserBtn" data-target="#createUser" data-toggle="modal" class="btn btn-lg" style="border-radius: 50px; padding-right: 50px; height: 35px; width: 150px;">-->
<!--                                Create Users <i class="fas fa-chevron-circle-right"></i>-->
<!--                            </button>-->
<!--                              <i style="margin-left: -45px; font-size: 40px; margin-top: 20px " class="fa fa-chevron-circle-right"></i>-->
                          </h3>

                    </div>


                </div>

            </div>
        </div>




    </div>




</div>

<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/popper.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/main.js"></script>


<script>
    console.log('I got this');
    $('#addDivision').click(function(){
        $('.app-loader').css("display", "block");
        $('.app-loader-message').html("<div>Adding Entry...</div>" +
            "<div>PLEASE DO NOT CLOSE BROWSER</div>");
    });


    $('#manage').click(function(){
        console.log("manage button clicked");
    });

    $('#createUserBtn').click(function(){
        console.log("create user button clicked");
    });

    $('#saveUserBtn').click(function(){
        console.log("save user button clicked");
        $('.app-loader').css("display", "block");
        $('.app-loader-message').html("<div>Adding Entry...</div>" +
            "<div>PLEASE DO NOT CLOSE BROWSER</div>");
    });





</script>

</body>
</html>