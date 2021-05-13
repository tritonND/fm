<?php
session_start();
include "services/connect.php";

if(!isset($_SESSION["user"])){
    header( "Location: index");
}
else{

}

$createdby = $_SESSION["user"];
$organization = $_SESSION['organization'];
$ministry = $_SESSION['ministry'];
$sector = $_SESSION['sector'];
$states = $_SESSION['states'];

$myqry = "select accountname from fm_account_list where state = '$states' and 
  ministry = '$ministry' and sector = '$sector' and organization = '$organization'";
$result3 = mysqli_query($conn, $myqry);
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
    <link rel="stylesheet" href="assets/css/hyperform.min.css">
    <script src="assets/js/polyfill.min.js"></script>
    <script src="assets/js/hyperform.min.js"></script>


    <script src="assets/js/sweetalert2.all.min.js"></script>
    <link href="assets/css/sweetalert2.min.css" rel="stylesheet">




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

        .imps{
            border-radius: 9px;
        }

        .myblocks{
            display: inline-flex;
            margin-left: 4%;
            margin-bottom: 2.5%;
        }

        .badge-dark{
            padding: 6px;
        }

        .col-form-label{
            text-align: right;
        }


    </style>
</head>
<body style="background: #fff">

<div class="wrapper d-flex align-items-stretch">
    <?php
    include "services/sidebar.php";
    ?>
    <!-- Page Content  -->
    <div id="content" class="p-md-12">

        <?php
        include "services/topbar.php";
        ?>

        <div class="container-fluid" style="background: #e5e9f1; margin-top: 0px; padding-top: 5px; display: none">

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


        <div style="margin: 0px 20px; ">
            <h2 style="display: none" class="mb-4">KDSG</h2>
        </div>

        <!--start ForBlocks-->
        <!--        <div id="forBlocks" style="margin: 25px 20px; width: 60%;">-->
        <div id="forBlocks" style="margin-left: 5px; margin-top: 25px; width: 60%;">


            <button style="margin-left: 7%;margin-bottom: 20px; font-size: 18px; border: #fff; background: #fff; color: #343752; margin-right: 35px;" href="dashlistaccounts">
                <a style="font-size: 18px; color: #000; margin-right: 7px;" href="dashlistaccounts">
                    <span class="fa fa-users" style="color: #343752; font-size: 20px;"> </span>
                    <b style="text-decoration: underline;">List Accounts</b>
                </a>
            </button>


            <button style="margin-bottom: 20px; font-size: 18px; border: #fff; background: #fff; color: #343752; margin-right: 35px;" href="dashcreateaccount">
                <a style="font-size: 18px; color: #000; margin-right: 7px;" href="dashcreateaccount">
                    <span class="fa fa-user-plus" style="color: #343752; font-size: 20px;"> </span>
                    <b style="text-decoration: underline;">Create Account</b>
                </a>
            </button>

            <!--
            <button style="margin-bottom: 20px; font-size: 18px; border: #fff; background: #fff; color: #343752; margin-right: 35px;" href="uploadusers">
                <a style="font-size: 18px; color: #000; margin-right: 7px;" href="uploadusers">
                    <span class="fa fa-user-plus" style="color: #343752; font-size: 20px;"> </span>
                    <b style="text-decoration: underline;">Upload Users</b>
                </a>
            </button>
            -->


            <!--            <form method="post" id="createUserForm" class="needs-validation" novalidate>-->
            <form id="createaccountdescrform" autocomplete="off" method="POST" class="needs-validation" novalidate >
                <!-- Start Spinner -->
                <div class="col-xs-12 app-loader" style="display: none; position: fixed; top: 0; bottom: 0; width: 100%; height: 100%;
                left: 0; text-align: center; z-index: 3; padding-top: 15em;">
                    <div style="background-color: rgba(0,0,0,0.7); display: block; width: 50%; margin-left: 25%; margin-right: 25%">
                        <i class="fa fa-cog fa-spin" style="font-size: 8em; color: #ffffff"></i>
                        <div class="app-loader-message" style="color: #ffffff;"></div>
                    </div>
                </div>
                <!-- End Spinner -->


                <h3 style="margin-left: 7%;">Create Account Description/Code</h3>
                <div class="form-group row" style="margin-bottom: 30px;">
                    <label for="fullname" class="col-sm-3 col-form-label">Account Description<small style="color:red;">*</small></label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control imps" id="fullname" name="fullname" placeholder="" required>
                        <div class="invalid-feedback">Enter account to be created </div>
                    </div>
                </div>




                <div class="form-group row" style="margin-bottom: 30px;">
                    <label class="col-sm-3 col-form-label" for="age">Account<small style="color:red;">*</small></label>
                    <div class="col-sm-9">
                        <select data-required-error="Select an account" class="form-control" name="account" id="account" required>
                            <option value="" selected>Select An Account</option>
                            <?php
                            while($row=  mysqli_fetch_array($result3)){
                                echo "<option style=\"text-transform : uppercase\" value=\"$row[0]\">$row[0]</option>";
//                                echo "<option style=\"text-transform : uppercase \" value=\"$row[1]**$row[0]\">$row[0]</option>";
                            }
                            ?>
                        </select>
                        <div class="invalid-feedback">Please select an account  </div>
                    </div>
                </div>






                <div style="margin-left: 17%;">

                    <button type="submit" class="btn btn-sm" style="border-radius: 50px; background: #2d73b0; color: #fff; margin-bottom: 2%; box-shadow: 5px 5px 18px 1px #888888;">
                        <i class="fa fa-save"></i> Save
                    </button>


                    <button type="reset" class="btn btn-sm btn-secondary" style="border-radius: 50px; margin-bottom: 2%;"> x Cancel</button>

                </div>



            </form>


            <br>

            <hr style="text-align: center; width: 80%; height: 1px; background: #0b2e13; display: none ">

            <h6 style="margin-left: 10%; color: #343752; display: none;">Add more <b>locations</b> as it applies</h6>

            <div style="margin-left: 10%; display: none;">

                <button type="button" class="btn " data-toggle="modal" data-target="#lgaModal" style="border-radius: 50px; background: #2d73b0; color: #fff; margin-bottom: 2%; box-shadow: 5px 5px 18px 1px #888888;">
                    + Add Local Government Areas
                </button>

                <button type="button" class="btn " data-toggle="modal" data-target="#wardModal2" style="border-radius: 50px; background: #2d73b0; color: #fff; margin-bottom: 2%; box-shadow: 5px 5px 18px 1px #888888">
                    + Add Ward
                </button>

            </div>





        </div>
        <!--end forBlocks-->


    </div>




</div>

<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/popper.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/js/validator.min.js"></script>
<script>
    hyperform(window);
</script>



<script>
    (function () {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll('.needs-validation');

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



    $('#createaccountdescrform').on("submit", function(submitEvent){

        // form was successfully validated
        if(! submitEvent.isDefaultPrevented()) {
            // prevent the form from submitting automatically
            submitEvent.preventDefault();


            // display the app-loader
            $('.app-loader').css("display", "block");
            $('.app-loader-message').html("<div>Account Description Creation in progress...</div>" +
                "<div>PLEASE DO NOT CLOSE BROWSER</div>");
            // submit the from via ajax



            var x=$.ajax({
                url: "services/fmcreateaccdescr", // Url to which the request is send
                type: "POST",             // Type of request to be send, called as method
                data: new FormData($('#createaccountdescrform').get(0)), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
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
                        title: 'Account Description Creation Was successful',
                        showConfirmButton: false,
                        timer: 2500
                    });

                    setTimeout(function(){
                        location.href = "dashcreateaccdescription";
                    }, 2500);


                }

                else{

                    Swal.fire({
                        icon: 'error',
                        title: 'User Already exist',
                        text: 'Please provide unique username and email',

                    });

                    $('.app-loader').css("display", "none");
                }

            });


        }
    });


</script>


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

