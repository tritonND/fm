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


            <button style="margin-left: 7%;margin-bottom: 20px; font-size: 18px; border: #fff; background: #fff; color: #343752; margin-right: 35px;" href="dashlistusers">
                <a style="font-size: 18px; color: #000; margin-right: 7px;" href="dashlistusers">
                    <span class="fa fa-users" style="color: #343752; font-size: 20px;"> </span>
                    <b style="text-decoration: underline;">User List</b>
                </a>
            </button>


            <button style="margin-bottom: 20px; font-size: 18px; border: #fff; background: #fff; color: #343752; margin-right: 35px;" href="dashcreateuser">
                <a style="font-size: 18px; color: #000; margin-right: 7px;" href="dashcreateuser">
                    <span class="fa fa-user-plus" style="color: #343752; font-size: 20px;"> </span>
                    <b style="text-decoration: underline;">Create User</b>
                </a>
            </button>


            <button style="margin-bottom: 20px; font-size: 18px; border: #fff; background: #fff; color: #343752; margin-right: 35px;" href="uploadusers">
                <a style="font-size: 18px; color: #000; margin-right: 7px;" href="uploadusers">
                    <span class="fa fa-user-plus" style="color: #343752; font-size: 20px;"> </span>
                    <b style="text-decoration: underline;">Upload Users</b>
                </a>
            </button>


        </div>
        <!--end forBlocks-->


        <form id="upload_csv" method="post" enctype="multipart/form-data">
            <section class="jumbotron text-center" style=" display: flex;  position: relative; align-items: center;">
                <div class="col-4"></div>
                <div class="col-4" align="center">
                        <div>
                            <h3>Upload CSV file for Users </h3>
                        </div>
                        <div>
                            <input type="file" name="employee_file" id="employee_file" style="margin-top:15px;" />
                        </div>
                        <div>
                            <input type="submit" name="upload" id="upload" value="Upload" style="margin-top:10px;" class="btn btn-info" />
                        </div>
                        <div style="clear:both"></div>

                </div>
                <div class="col-4"></div>
            </section>
        </form>


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

    function openFiles(){
        document.getElementById("file1").click();
    }


    $(document).ready(function(){
        $('input[type="file"]').change(function(e){
            var fileName = e.target.files[0].name;
            document.getElementById("filename").innerHTML = "File Selected: " +fileName;
            // alert('The file "' + fileName +  '" has been selected.');
        });
    });


    $(document).ready(function(){
        $('#upload_csv').on("submit", function(e){
            e.preventDefault(); //form will not submitted

            $('.app-loader').css("display", "block");
            $('.app-loader-message').html("<div>Adding Entry...</div>" +
                "<div>PLEASE DO NOT CLOSE BROWSER</div>");


            $.ajax({
                url:"services/importcsv",
                method:"POST",
                data:new FormData(this),
                contentType:false,          // The content type used when sending data to the server.
                cache:false,                // To unable request pages to be cached
                processData:false,          // To send DOMDocument or non processed data file it is set to false
                success: function(data){
                    if(data=='Error1')
                    {
                        alert("Invalid File");
                    }
                    else if(data == "Error2")
                    {
                        alert("Please Select File");
                    }
                    else
                    {
                        // $('#employee_table').html(data);
                        Swal.fire({
                            position: 'center',
                            icon: 'success',
                            title: 'User Upload Was successful',
                            showConfirmButton: false,
                            timer: 2500
                        });

                        setTimeout(function(){
                            location.href = "uploadusers";
                        }, 2500);
                    }
                }
            })
        });
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


