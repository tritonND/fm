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
    <link href="assets/css/datatables.min.css" rel="stylesheet">




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
        <div id="forBlocks" style="margin-left: 15px; margin-top: 25px; width: 95%; padding: 0px 10px">


            <button style="margin-left: 3%;margin-bottom: 20px; font-size: 18px; border: #fff; background: #fff; color: #343752; margin-right: 35px;" href="dashlistusers">
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



            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            ...
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>



            <!--            <table id="myTable" class="table table-condensed table-striped table-bordered table-hover dt-responsive">-->
            <table id="myTable" class="table table-condensed table-striped table-bordered table-hover dt-responsive">
                <thead class="bg-dark" style="color: #ffffff">
<!--                <thead class="bg-primary">-->
                <tr>
                    <th>Edit/Delete</th>
                    <th>Email</th>
                    <th>Username</th>
                    <th>Fullname</th>
                    <th>Role</th>
                    <th>Status</th>
                </tr>
                </thead>
                <?php

                // $query1 = "SELECT ANAME, LGA, BUILDUSE, ADDR, COMPLEVEL, BUILDZONE, AEMAIL FROM apprecords";
//                $query1 = "SELECT FIRSTNAME, LASTNAME, OTHERNAME, PHONENUM, CSTATE, DOB, GRADDATE, SPECIALIZATION, SEX, LGA FROM regcandidate ORDER BY ID";
                $query1 = "SELECT * FROM fm_mdausers ORDER BY id";

                $result = mysqli_query($conn, $query1) or die('Query fail: ' . mysqli_error());

                ?>
                <tbody>
                <?php while ($row = mysqli_fetch_array($result)) { ?>
                    <tr>
<!--                        <td style="text-transform: uppercase">--><?php //echo $row[0]." ".$row[1]." ".$row[2]; ?><!--</td>-->

                        <td>

                            <button class="btn btn-sm trash" data-id="<?php echo $row[1];?>">
                                <i id='trashs' class='fa fa-2x fa-trash'></i>
                            </button>
                            <button class="btn btn-sm edit" data-id="<?php echo $row[1];?>" data-toggle="modal" data-target="#exampleModal">
                                <i id='edits' class='fa fa-2x fa-edit'></i>
                            </button>

                        </td>



                        <td><?php echo $row[4]; ?></td>
                        <td><?php echo $row[1]; ?></td>
                        <td><?php echo $row[3]; ?></td>
                        <td style="text-transform: uppercase"><?php echo $row[7]; ?></td>
                        <td>
                            <?php
                            if($row[6] == 1){
                                // echo $row[6];
                            ?>

                                <button class="btn btn-sm btn-danger deactivate" data-id="<?php echo $row[1];?>" >
                                     Deactivate
                                </button>
                            <?php
                            }
                            else{
                                ?>

                                <button class="btn btn-sm btn-secondary activate" data-id="<?php echo $row[1];?>" >
                                     Activate
                                </button>

                           <?php
                            }
                            ?>

                        </td>

                    </tr>
                <?php } ?>
                </tbody>
            </table>






        </div>
        <!--end forBlocks-->


    </div>




</div>

<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/popper.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/js/validator.min.js"></script>
<script src="assets/js/datatables.min.js"></script>
<script>
    hyperform(window);
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


    $('.trash').click(function(){
        var uid = $(this).data('id');
        console.log("trash button clicked ", uid);

        Swal.fire({
            title: 'Are you sure you want to delete user?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {

                console.log("uid is ",uid);
                var y=$.ajax({
                    url: "services/fmdeleteuser?id=" + uid, // Url to which the request is send
                    type: "GET",             // Type of request to be send, called as method
                    data: "id=" + encodeURIComponent(uid), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
                    contentType: false,       // The content type used when sending data to the server.
                    dataType:"text",
                    timeout: 300000,
                    cache: false,             // disable page caching
                    // processData: false
                });


                y.done(function(myresponse)
                {
                    console.log(myresponse);
                    if(myresponse === 'success'){
                        Swal.fire(
                            'Deleted!',
                            'Your User has been deleted.',
                            'success'
                        );

                        setTimeout(function(){
                            location.href = "dashlistusers";
                        }, 2500);
                    }

                    else{

                        Swal.fire({
                            icon: 'error',
                            title: 'Error Occured',
                            text: 'Request could not be processed',

                        });

                        // $('.app-loader').css("display", "none");
                    }

                });

                //done with ajax response
            }
        });


    });



    $('.edit').click(function(){
        var uid = $(this).data('id');
        console.log("edit button clicked ", uid);
        location.href = "dashedituser?id="+uid;
    });


    // var uid = $(this).data('id');
</script>



<script>

    $('.deactivate').click(function(){
        var userid = $(this).data('id');
        console.log("deactivate button clicked ", userid);

        Swal.fire({
            title: 'Deactivate User?',
            text: "Do you want to deactivate the user?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, deactivate'
        }).then((result) => {
            if (result.isConfirmed) {

                console.log("uid is ",userid);
                var d=$.ajax({
                    url: "services/fmdeactivateuser?id=" + userid, // Url to which the request is send
                    type: "GET",             // Type of request to be send, called as method
                    // data: "id=" + encodeURIComponent(uid), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
                    contentType: false,       // The content type used when sending data to the server.
                    dataType:"text",
                    timeout: 300000,
                    cache: false,             // disable page caching
                    // processData: false
                });


                d.done(function(myresponse)
                {
                    console.log(myresponse);
                    if(myresponse === 'success'){
                        Swal.fire(
                            'Deactivated!',
                            'Your User has been deactivated.',
                            'success'
                        );

                        setTimeout(function(){
                            location.href = "dashlistusers";
                        }, 2500);
                    }

                    else{

                        Swal.fire({
                            icon: 'error',
                            title: 'Error Occured',
                            text: 'Request could not be processed',

                        });
                    }
                });

                //done with ajax response
            }
        });


    });



    $('.activate').click(function(){
        var usrid = $(this).data('id');
        console.log("activate button clicked ", usrid);

        Swal.fire({
            title: 'Activate user?',
            text: "Do you want to reactivate user!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, Activate!'
        }).then((result) => {
            if (result.isConfirmed) {

                console.log("uid is ",usrid);
                var a = $.ajax({
                    url: "services/fmactivateuser?id=" + usrid, // Url to which the request is send
                    type: "GET",             // Type of request to be send, called as method
                    // data: "id=" + encodeURIComponent(uid), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
                    contentType: false,       // The content type used when sending data to the server.
                    dataType:"text",
                    timeout: 300000,
                    cache: false,             // disable page caching
                    // processData: false
                });


                a.done(function(myresponse)
                {
                    console.log(myresponse);
                    if(myresponse === 'success'){
                        Swal.fire(
                            'Activated!',
                            'Your User has been activated.',
                            'success'
                        );

                        setTimeout(function(){
                            location.href = "dashlistusers";
                        }, 2500);
                    }

                    else{

                        Swal.fire({
                            icon: 'error',
                            title: 'Error Occured',
                            text: 'Request could not be processed',

                        });

                        // $('.app-loader').css("display", "none");
                    }

                });

                //done with ajax response
            }
        });


    });
</script>


<script>

    $('#myTable').DataTable(
        {
            dom: 'Bfrtip',
            buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
        }
    );


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

