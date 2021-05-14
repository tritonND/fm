<?php
session_start();
include "services/connect.php";

if(!isset($_SESSION["user"])){
    header( "Location: index");
}
else{

}

$organization = $_SESSION['organization'];
$ministry = $_SESSION['ministry'];
$sector = $_SESSION['sector'];
$states = $_SESSION['states'];

$myqry = "select accountname from fm_account_list where state = '$states' and 
  ministry = '$ministry' and sector = '$sector' and organization = '$organization'";
$result3 = mysqli_query($conn, $myqry);

$myqry2 = "select lga from statelga where states = '$states'";

$result2 = mysqli_query($conn, $myqry2);

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
    <link href="assets/css/bootstrap-datepicker.css" rel="stylesheet">




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
            <form id="createcashbook" autocomplete="off" method="POST" class="needs-validation" novalidate >
                <!-- Start Spinner -->
                <div class="col-xs-12 app-loader" style="display: none; position: fixed; top: 0; bottom: 0; width: 100%; height: 100%;
                left: 0; text-align: center; z-index: 3; padding-top: 15em;">
                    <div style="background-color: rgba(0,0,0,0.7); display: block; width: 50%; margin-left: 25%; margin-right: 25%">
                        <i class="fa fa-cog fa-spin" style="font-size: 8em; color: #ffffff"></i>
                        <div class="app-loader-message" style="color: #ffffff;"></div>
                    </div>
                </div>
                <!-- End Spinner -->


                <h3 style="margin-left: 7%;">Create CashBook Record</h3>

                <div class="form-group row" style="margin-bottom: 30px;">
                    <label for="cbdate" class="col-sm-3 col-form-label">Date <small style="color:red;">*</small></label>
                    <div class="col-sm-9">
<!--                        <input type="date" class="form-control imps" id="cbdate" name="cbdate" placeholder="" required>-->
                        <input type="text" class="form-control mydatepicker" id="cbdate" name="cbdate"
                               placeholder="Entry Date" data-required-error="Enter date of entry to be created" required>

                        <div class="invalid-feedback">Enter date of entry to be created </div>
                    </div>
                </div>

                <div class="form-group row" style="margin-bottom: 30px;">
                    <label for="description" class="col-sm-3 col-form-label">Description<small style="color:red;">*</small></label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control imps" id="description" name="description" placeholder="" required>
                        <div class="invalid-feedback">Enter description of entry to be created </div>
                    </div>
                </div>


                <div class="form-group row" style="margin-bottom: 30px;">
                    <label for="voucherno" class="col-sm-3 col-form-label">Voucher Number<small style="color:red;">*</small></label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control imps" id="voucherno" name="voucherno" placeholder="" required>
                        <div class="invalid-feedback">Enter Voucher Number </div>
                    </div>
                </div>


                <div class="form-group row" style="margin-bottom: 30px;">
                    <label class="col-sm-3 col-form-label" for="entrytype">Entry Type<small style="color:red;">*</small></label>
                    <div class="col-sm-9">
                        <select style="text-transform: uppercase !important;" type="text" class="form-control imps" id="entrytype" name="entrytype" required>
                            <option disabled selected  hidden value=""></option>
                            <option value="Payment">Payment</option>
                            <option value="Receipt">Receipt</option>

                        </select>
                        <div class="invalid-feedback">Please select cashbook type  </div>
                    </div>
                </div>




                <div class="form-group row" style="margin-bottom: 30px;">
                    <label class="col-sm-3 col-form-label" for="account">Segment<small style="color:red;">*</small></label>
                    <div class="col-sm-9">
                        <select style="text-transform: uppercase !important;" data-required-error="Select an account" class="form-control" name="account" id="account" required>
                            <option value="" disabled selected hidden>Select A Segment</option>
                            <?php
                            while($row=  mysqli_fetch_array($result3)){
                                echo "<option style=\"text-transform : uppercase\" value=\"$row[0]\">$row[0]</option>";
                                }
                            ?>
                        </select>
                        <div class="invalid-feedback">Please select a segment  </div>
                    </div>
                </div>



                <div class="form-group row" style="margin-bottom: 30px;">
                    <label class="col-sm-3 col-form-label" for="accountdescr">Segment Code / Description <small style="color:red;">*</small></label>
                    <div class="col-sm-9" id="selectAcc">
                        <select style="text-transform: uppercase !important;" data-required-error="Select an account" class="form-control" name="accountdescr" id="accountdescr" required>
                            <option value="" disabled selected hidden>Select A Description</option>

                        </select>
                        <div class="invalid-feedback">Please select a Description  </div>
                    </div>
                </div>


                <div class="form-group row" style="margin-bottom: 30px;">
                    <label class="col-sm-3 col-form-label" for="location">Location<small style="color:red;">*</small></label>
                    <div class="col-sm-9">
                        <select style="text-transform: uppercase !important;" data-required-error="Select a location" class="form-control" name="location" id="location" required>
                            <option value="" disabled selected hidden>Select A Location</option>
                            <?php
                            while($row22 =  mysqli_fetch_array($result2)){
                                echo "<option style=\"text-transform : uppercase\" value=\"$row22[0]\">$row22[0]</option>";
                            }
                            ?>
                        </select>
                        <div class="invalid-feedback">Please select a location </div>
                    </div>
                </div>



                <div class="form-group row" style="margin-bottom: 30px;">
                    <label for="amount" class="col-sm-3 col-form-label">Amount<small style="color:red;">*</small></label>
                    <div class="col-sm-9">
<!--                        <input type="number" onblur="formatCurrency(this)"  class="form-control imps floatNumberField" id="amount" name="amount" placeholder="" required>-->
                        <input type="number" step='0.01' class="form-control imps floatNumberField" id="amount" name="amount" placeholder="" required>

                        <div class="invalid-feedback"> Enter Amount </div>
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
<script src="assets/js/bootstrap-datepicker.js"></script>
<script>
    hyperform(window);
</script>



<script type="text/javascript">

    function formatCurrency(amounts){
        // console.log( new Intl.NumberFormat().format($(amounts))) ;
    }
    $(document).ready(function () {
        $(".floatNumberField").change(function() {
            $(this).val(parseFloat($(this).val()).toFixed(2));
            console.log( new Intl.NumberFormat('en-NG').format($(this).val())) ;
            var amount2 = new Intl.NumberFormat('en-NG').format($(this).val());

            // $(this).val() = amount2;
            // Intl.NumberFormat().format( $(this) );
            // console.log(  $(this).val(parseFloat($(this).val()).toFixed(2)).toString()  ) ;
        });
    });
</script>

<script>
    $( ".mydatepicker" ).datepicker({
        format: "dd-M-yyyy"
    });
</script>


<script>
    (function () {
        'use strict';

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



    $('#createcashbook').on("submit", function(submitEvent){

        // form was successfully validated
        if(! submitEvent.isDefaultPrevented()) {
            // prevent the form from submitting automatically
            submitEvent.preventDefault();


            // display the app-loader
            $('.app-loader').css("display", "block");
            $('.app-loader-message').html("<div>Adding Cashbook Entry...</div>" +
                "<div>PLEASE DO NOT CLOSE BROWSER</div>");


            // submit the from via ajax
            var x=$.ajax({
                url: "services/fmcashbookentry", // Url to which the request is send
                type: "POST",             // Type of request to be send, called as method
                data: new FormData($('#createcashbook').get(0)), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
                contentType: false,       // The content type used when sending data to the server.
                dataType:"text",
                timeout: 300000,
                cache: false,             // disable page caching
                processData: false
            });

            x.done(function(myresponse)
            {
                // console.log("this is my",myresponse);
                if(myresponse !== 'success'){
                    console.log(myresponse);
                    $('.app-loader').css("display", "none");
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: 'Account Creation Was successful',
                        showConfirmButton: false,
                        timer: 2500
                    });

                    setTimeout(function(){
                        location.href = "cashbook";
                    }, 2500);


                }

                else{

                    Swal.fire({
                        icon: 'error',
                        title: 'Account Already exist',
                        text: 'Please provide unique Account Name',

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


<script>
    $('#account').change(function(){
        var selectedVal =  $('#account option:selected').text();
        console.log('selected value is ', selectedVal);
        // console.log('selected value is ',   $('#account option:selected').text());

        $('.app-loader').css("display", "block");
        $('.app-loader-message').html("<div>Fetching Code Descriptions...</div>" +
            "<div>PLEASE DO NOT CLOSE BROWSER</div>");

        var gets = $.ajax({
            url: "services/fmgetaccountcodes?acc=" + selectedVal, // Url to which the request is send
            type: "GET",             // Type of request to be send, called as method
            // data: , // Data sent to server, a set of key/value pairs (i.e. form fields and values)
            // data: new FormData($('#createaccountform').get(0)), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
            contentType: false,       // The content type used when sending data to the server.
            dataType:"text",
            timeout: 300000,
            cache: false,             // disable page caching
            processData: false
        });

        gets.done(function(serverResponse)
        {
            $('.app-loader').css("display", "none");
            console.log(serverResponse);
            var servervalue=serverResponse.trim();
            $('#accountdescr').html('');
            $('#accountdescr').append('<option value="" selected hidden disabled>Select A Description</option>');
            $('#accountdescr').append(servervalue);

        });

        gets.fail(function(){

        });


    });

</script>

</body>
</html>

