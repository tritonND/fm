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

    <link rel="stylesheet" href="assets/fontawesome/css/all.min.css">
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
            margin-bottom: 2.5%;
        }

        .badge-dark{
            padding: 6px;
        }


    </style>
</head>
<body>

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
        <div class="modal fade" id="addDivisionModal" tabindex="-1" role="dialog" aria-labelledby="addDivisionModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addDivisionModalLabel">Add Division</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <small style="font-size: 11px;">Close</small><span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" style="margin-top: 30px;">
                        <form>
                            <!-- <div class="form-group">
                              <label for="recipient-name" class="col-form-label">Recipient:</label>
                              <input type="text" class="form-control" id="recipient-name">
                            </div>
                            <div class="form-group">
                              <label for="message-text" class="col-form-label">Message:</label>
                              <textarea class="form-control" id="message-text"></textarea>
                            </div> -->

                            <!-- Start Spinner -->
                            <div class="col-xs-12 app-loader" style="display: none; position: fixed; top: 0; bottom: 0; width: 100%; height: 100%;
                left: 0; text-align: center; z-index: 3; padding-top: 15em;">
                                <div style="background-color: rgba(0,0,0,0.7); display: block; width: 50%; margin-left: 25%; margin-right: 25%">
                                    <i class="fa fa-cog fa-spin" style="font-size: 8em; color: #ffffff"></i>

                                    <!-- <i class="fa fa-heartbeat fa-pulse" style="font-size: 10em; color: #ffffff"></i> -->
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


                            <div class="form-check" style="margin-bottom: 2px; padding: 35px;">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1" style="font-weight: bold; color: #343752;">
                                    Display on Dashboard and in Tables
                                </label>
                                <small id="emailHelp" class="form-text" style="color: #000; font-style: italic; font-weight: lighter;">Whether to show location data of this division on the dashboard and other tables </small>

                            </div>


                            <div class="form-check" style=" padding: 0px 35px;">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                                <label class="form-check-label" for="defaultCheck1" style="font-weight: bold; color: #343752;">
                                    Use in Data Summary
                                </label>
                                <small id="emailHelp" class="form-text" style="color: #000; font-style: italic; font-weight: lighter;">Whether to show aggregated data summaries at the administrative level</small>

                            </div>



                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-dark" id="addDivision">Add</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- End modal -->


        <!-- Start Modal -->
        <div class="modal fade" id="addLGA" tabindex="-1" role="dialog" aria-labelledby="addLGAModal" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addLGAModal">Add LGA</h5>
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
                                <button type="button" class="btn btn-dark" id="addDivision">Add</button>
                            </div>

                        </form>
                    </div>

                    <!--                    Removed Modal footer from here-->
                </div>
            </div>
        </div>
        <!-- End modal -->



        <div style="margin: 0px 20px; ">
            <h2 style="display: none" class="mb-4">KDSG</h2>
        </div>

        <!--start ForBlocks-->
        <div id="forBlocks" style="margin: 25px 20px;">
            <!--country-->
            <div class="myblocks">
                <div style="background: #e1edf7; width: 180px; font-size: medium; text-align: center; border-radius: 50px">
                    <h6 style="color: #144e94; margin-top: 10px">Country </h6>
                </div>

                <div id="manage" style=" text-align: center; margin-top: 5px; margin-left: 10px">
                    <span id="myCountry" class="badge badge-dark">1</span>
                </div>
            </div>
            <br>
            <!--Geo Zone-->
            <div class="myblocks">
                <div style="background: #e1edf7; width: 180px; font-size: medium; text-align: center; border-radius: 50px">
                    <h6 style="color: #144e94; margin-top: 10px">Geo-Zone </h6>
                </div>

                <div style=" text-align: center; margin-top: 5px; margin-left: 10px">
                    <span id="myGeoZone" class="badge badge-dark">6</span>
                </div>
            </div>
            <br>

            <!--           state-->
            <div class="myblocks">
                <div style="background: #e1edf7; width: 180px; font-size: medium; text-align: center; border-radius: 50px">
                    <h6 style="color: #144e94; margin-top: 10px">State </h6>
                </div>

                <div style=" text-align: center; margin-top: 5px; margin-left: 10px">
                    <span id="myState" class="badge badge-dark">1</span>
                </div>
            </div>
            <br>

            <!--Ministry-->
            <div class="myblocks">
                <div style="background: #e1edf7; width: 180px; font-size: medium; text-align: center; border-radius: 50px">
                    <h6 style="color: #144e94; margin-top: 10px">Ministries </h6>
                </div>

                <div style=" text-align: center; margin-top: 5px; margin-left: 10px">
                    <span id="myMinistry" class="badge badge-dark">0</span>
                </div>
            </div>

            <br>

            <!--Agency-->
            <div class="myblocks">
                <div style="background: #e1edf7; width: 180px; font-size: medium; text-align: center; border-radius: 50px">
                    <h6 style="color: #144e94; margin-top: 10px">Agencies </h6>
                </div>

                <div style=" text-align: center; margin-top: 5px; margin-left: 10px">
                    <span id="myAgency" class="badge badge-dark">0</span>
                </div>
            </div>

            <br>

            <hr style="text-align: center; width: 80%; height: 1px; background: #0b2e13 ">

            <h6 style="margin-left: 10%; color: #343752">Add more <b>locations</b> as it applies</h6>

            <div style="margin-left: 10%;">
               
                <button type="button" class="btn " data-toggle="modal" data-target="#lgaModal" style="border-radius: 50px; background: #2d73b0; color: #fff; margin-bottom: 2%; box-shadow: 5px 5px 18px 1px #888888;">
                    + Add Local Government Areas
                </button>

                <button type="button" class="btn " data-toggle="modal" data-target="#wardModal2" style="border-radius: 50px; background: #2d73b0; color: #fff; margin-bottom: 2%; box-shadow: 5px 5px 18px 1px #888888">
                    + Add Ward
                </button>

            </div>



            <button style="font-size: 18px; border: #e5e9f1; background: #fff; color: #343752; margin-right: 35px; margin-left: 10%; margin-top: 5px; " href="#">
                <a style="font-size: 18px; color: #a91414; margin-right: 7px;" href="#">
                    <!-- <span class="fa fa-map-marker" style="color: #e5e9f1; font-size: 60px;"> </span> -->
                    <span class="fa fa-save" style="color: #a91414; font-size: 20px;"> </span>
                    <b style="text-decoration: underline;">Save</b>
                </a>
            </button>

        </div>
        <!--end forBlocks-->


        <!-- Modal -->
        <div class="modal fade" id="lgaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add LGA</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
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


                            <div class="form-check" style="margin-bottom: 2px; padding: 35px;">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1" style="font-weight: bold; color: #343752;">
                                    Display on Dashboard and in Tables
                                </label>
                                <small id="emailHelp" class="form-text" style="color: #000; font-style: italic; font-weight: lighter;">Whether to show location data of this division on the dashboard and other tables </small>

                            </div>


                            <div class="form-check" style=" padding: 0px 35px;">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                                <label class="form-check-label" for="defaultCheck1" style="font-weight: bold; color: #343752;">
                                    Use in Data Summary
                                </label>
                                <small id="emailHelp" class="form-text" style="color: #000; font-style: italic; font-weight: lighter;">Whether to show aggregated data summaries at the administrative level</small>

                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>

                        </form>
                    </div>

                </div>
            </div>
        </div>
<!--        end modal here-->


        <!-- Modal -->
        <div class="modal fade" id="wardModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Ward</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
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


                            <div class="form-check" style="margin-bottom: 2px; padding: 35px;">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1" style="font-weight: bold; color: #343752;">
                                    Display on Dashboard and in Tables
                                </label>
                                <small id="emailHelp" class="form-text" style="color: #000; font-style: italic; font-weight: lighter;">Whether to show location data of this division on the dashboard and other tables </small>

                            </div>


                            <div class="form-check" style=" padding: 0px 35px;">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                                <label class="form-check-label" for="defaultCheck1" style="font-weight: bold; color: #343752;">
                                    Use in Data Summary
                                </label>
                                <small id="emailHelp" class="form-text" style="color: #000; font-style: italic; font-weight: lighter;">Whether to show aggregated data summaries at the administrative level</small>

                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>

                        </form>
                    </div>

                </div>
            </div>
        </div>
        <!--        end modal here-->


        <!-- Start Modal -->
        <div class="modal fade" id="addWard" tabindex="-1" role="dialog" aria-labelledby="addDivisionModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addDivisionModalLabel">Add Division</h5>
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

                                    <!-- <i class="fa fa-heartbeat fa-pulse" style="font-size: 10em; color: #ffffff"></i> -->
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


                            <div class="form-check" style="margin-bottom: 2px; padding: 35px;">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1" style="font-weight: bold; color: #343752;">
                                    Display on Dashboard and in Tables
                                </label>
                                <small id="emailHelp" class="form-text" style="color: #000; font-style: italic; font-weight: lighter;">Whether to show location data of this division on the dashboard and other tables </small>

                            </div>


                            <div class="form-check" style=" padding: 0px 35px;">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                                <label class="form-check-label" for="defaultCheck1" style="font-weight: bold; color: #343752;">
                                    Use in Data Summary
                                </label>
                                <small id="emailHelp" class="form-text" style="color: #000; font-style: italic; font-weight: lighter;">Whether to show aggregated data summaries at the administrative level</small>

                            </div>



                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-dark" id="addDivision">Add</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- End modal -->
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




</script>

</body>
</html>