<?php
/**
 * Created by PhpStorm.
 * User: triton
 * Date: 2/11/2019
 * Time: 11:51 AM
 */


require_once 'php/dbconnect.php';

$rows = array();

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = ($_GET['id']);


    $query2 = "SELECT ocds_planning.OCID, ocds_planning.PROJECTTITLE, ocds_planning.BUDGETCODE, ocds_planning.BUDGETDESCRIPTION,
  ocds_planning.BUDGETYEAR, ocds_planning.BUDGETAMOUNT, ocds_planning.PROCUREMENTPLAN, ocds_planning.PROCUREMENTCATEGORY,
  ocds_planning.ADVERTDATE, ocds_planning.PREQUALIFICATIONDATE, ocds_planning.TENDERINGPERIODFROM AS TENDERINGPERIODFROM1 , ocds_planning.TENDERINGPERIODTO AS TENDERINGPERIODTO1,
  ocds_planning.BIDOPENDATE, ocds_planning.CONTRACTAWARDDATE,
  ocds_tender.TENDERTITLE, ocds_tender.TENDERSTATUS, ocds_tender.ITEMDESCRIPTION,
  ocds_tender.PROCUREMENTMETHOD, ocds_tender.PROCUREMENTMETHODRATIONAL, ocds_tender.TENDERINGPERIODFROM,
  ocds_tender.BIDOPENINGDATE, ocds_tender.NUMBEROFTENDERS, ocds_tender.TENDERINGPERIODTO,
  ocds_implementation.PROJECTSTATUS, ocds_implementation.PERCENTCOMPLETION, ocds_implementation.AMOUNTPAID,
  ocds_implementation.FINALCOST, ocds_implementation.CONTRACTVARIATION, ocds_implementation.REVISEDCONTRACTAMOUNT,
  ocds_contract.CONTRACTTITLE, ocds_contract.CONTRACTSTATUS, ocds_contract.CONTRACTSIGNINGDATE,
  ocds_contract.CONTRACTPERIODFROM, ocds_contract.CONTRACTPERIODTO,
  ocds_award.AWARDTITLE, ocds_award.AWARDSTATUS, ocds_award.AWARDDATE, ocds_award.AWARDTOBIDDER,
  ocds_award.AWARDJUSTIFICATION, ocds_projectstatus.PROJSTATUS, ocds_planning.MDA, ocds_projectstatus.DATEOFUPDATE,
  
  ocds_planning.projectdescription, ocds_tender.tenderdetails, ocds_award.awarddescription, ocds_award.awardamendment, ocds_award.awardamount,
    ocds_implementation.contractmobilization, ocds_contract.contractorname, ocds_contract.contractoraddress, ocds_contract.contractoremail, ocds_contract.contractorphone,
    ocds_contract.COMMENCEMENTDATE, ocds_planning.SECTOR
 FROM ocds_planning
   LEFT JOIN ocds_tender ON ocds_planning.OCID = ocds_tender.OCID
   LEFT JOIN ocds_implementation ON ocds_planning.OCID = ocds_implementation.OCID
   LEFT JOIN ocds_contract ON ocds_planning.OCID = ocds_contract.OCID
   LEFT JOIN ocds_award ON ocds_planning.OCID = ocds_award.OCID
    LEFT JOIN ocds_projectstatus ON ocds_planning.OCID = ocds_projectstatus.OCID
   WHERE ocds_planning.OCID = '$id' ";

    $result = mysqli_query($con, $query2) or die('Query fail: ' . mysqli_error($con));
    $row = mysqli_fetch_array($result);



}

//$link2 = "pubviewprint.php?id=".$row[0];
$link2 = "pubviewprint.php?id=".$row[0];

?>
<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->
<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>EDO STATE OPEN CONTRACTING DATA STANDARD PORTAL </title>

    <meta name="author" content="JSM">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Bootstrap  -->
    <link rel="stylesheet" type="text/css" href="stylesheets-home/bootstrap.css" >
    <!--    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">-->
    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="stylesheets-home/style.css">

    <!-- Responsive -->
    <link rel="stylesheet" type="text/css" href="stylesheets-home/responsive.css">

    <!-- Colors -->
    <link rel="stylesheet" type="text/css" href="stylesheets-home/colors/color1.css" id="colors">
    <link rel="stylesheet" type="text/css" href="css/sweetalert.css" id="colors">

    <!-- Animation Style -->
    <link rel="stylesheet" type="text/css" href="stylesheets-home/animate.css">

    <link rel="stylesheet" type="text/css" href="css/datatables.min.css">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <!-- <link href="cssf/bootstrap.min.css" rel="stylesheet"> -->
    <link href="cssf/jquery.rateyo.2.3.5.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="cssf/feedback_styles.css" rel="stylesheet">

    <style>

        #myTable tr:nth-of-type(even){
            background-color: #26aa2d;
            color: #ffffff;
            /*background-color: #b4e16c;*/
        }

        #myTable tr:nth-of-type(odd):not(#myTableHeader){
            background-color: #ffffff;
        }

        #myTable tr > td:nth-of-type(2),  #myTable tr > td:nth-of-type(3) {
            text-transform: uppercase;
        }
        .active a {
            background-color: #26aa2d !important;
        }


    </style>




    <!--[if lt IE 9]>
    <script src="javascript-home/html5shiv.js"></script>
    <script src="javascript-home/respond.min.js"></script>
    <![endif]-->
    <style>
        body {
            background-image: url("images-home/bodybg.jpg");
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;

        }
        .newhead {
            background-image: url("images-home/slides/slide1.jpg");
            background-repeat: no-repeat;
            background-attachment: scroll;
            background-size: cover;
            margin: 0;
            width: 100% !important;

        }
        .box-title .tips{
            color:#C5E82C;
        }
        .service-icon{
            cursor: crosshair;
            border-radius: 15px;
            border:3px solid #C5E82C;
            box-shadow: 1px 0px 2px 3px #ffffff;
        }
        .footer {
            /*background-color: #fafafa;*/
            background-image: radial-gradient(#5C666F, #161A23);
        }
        .copyright {
            /*background-color: #fafafa;*/
            /*     background-image: radial-gradient(#5C666F, #161A23);*/
            background: transparent;
        }
        input {
            color: #5C666F !important;
        }
        .price-buynow{
            cursor: pointer;
        }


    </style>


</head>
<body style="font-family: Raleway !important;" class="header_sticky">
<!-- Preloader -->
<section class="loading-overlay">
    <div class="Loading-Page">
        <h2 class="loader">Loading</h2>
    </div>
</section>

<!-- Boxed -->
<?php
include 'head.php';
?>

<!--   Place my container here -->

<section class="flat-row" style="padding: 0; padding-top: 10px; padding-bottom: 25px">

    <div class="container-fluid"  style="margin-bottom: 20px">

        <style>
            .myclass:hover {
                background-color: green !important;
            }
        </style>

        <div class="row">

            <?php
            include 'ocdsside.php';
            ?>

            <div class="col-sm-9">

                <div class="card" >
                    <div class="content">
                        <div id="chartActivity" class="ct-chart">


                            <div class="container" style="width: 98%">

                                <ul class="nav nav-pills nav-justified">
                                    <li class="active"><a style="text-transform: uppercase; font-size: larger; font-weight: bolder" data-toggle="pill" href="#home">Planning</a></li>
                                    <li><a style="text-transform: uppercase; font-size: larger; font-weight: bolder" data-toggle="pill" href="#menu1">Tender</a></li>
                                    <li><a style="text-transform: uppercase; font-size: larger; font-weight: bolder" data-toggle="pill" href="#menu2">Award</a></li>
                                    <li><a style="text-transform: uppercase; font-size: larger; font-weight: bolder" data-toggle="pill" href="#menu3">Contract</a></li>
                                    <li><a style="text-transform: uppercase; font-size: larger; font-weight: bolder" data-toggle="pill" href="#menu4">Implementation </a></li>
                                </ul>

                                <div class="tab-content">

                                    <div id="home" class="tab-pane fade in active">

                                        <table id="myTable" style="font-size: 120%; margin-top: 5px;" class="table table-responsive table-condensed table-striped table-bordered table-hover">

                                            <thead class="bg-primary">
                                            <div style="background-color: darkgreen; margin-top: 5px;">
                                                <h3  style="text-transform: uppercase; color: #ffffff" align="center">Planning Details</h3>
                                                <h4 style="color: #ffffff" align="center">Current Procurement Stage : <?php echo $row[39]; ?> </h4>
                                                <h4 style="color: #ffffff" align="center">Last Updated : <?php echo $row[41]; ?> </h4>
                                            </div>

                                            </thead>

                                            <tbody>

                                            <tr>
                                                <td>Project Title</td>
                                                <td style="text-transform: capitalize" id="projecttitle"> <?php echo $row[1]; ?> </td>
                                            </tr>

                                            <tr>
                                                <td>Project Description</td>
                                                <td id="projectdescription"> <?php echo $row[42]; ?> </td>
                                            </tr>

                                            <tr>
                                                <td>Budget Economic Code</td>
                                                <td style="text-transform: uppercase" id="budgetcode"> <?php echo $row[2]; ?> </td>
                                            </tr>

                                            <tr>
                                                <td>Budget Description</td>
                                                <td style="text-transform: capitalize" id="budgetdescr"> <?php echo $row[3]; ?> </td>
                                            </tr>


                                            <tr>
                                                <td>Budget Year</td>
                                                <td id="budgetyr"> <?php echo $row[4]; ?> </td>
                                            </tr>

                                            <tr>
                                                <td>Budgeted Amount</td>
                                                <td id="budgetamount"> <?php echo number_format($row[5]); ?> </td>
                                            </tr>

                                            <tr>
                                                <td>Procurement Plan</td>
                                                <td style="text-transform: capitalize" id="proplan"> <?php echo $row[6]; ?> </td>
                                            </tr>

                                            <tr>
                                                <td>Tender Period</td>
                                                <td id="tenderperiod1"> <?php echo $row[10]." To ". $row[11] ; ?> </td>
                                            </tr>


                                            <tr>
                                                <td>Sector</td>
                                                <td style="text-transform: capitalize" id="sector"> <?php echo $row[53]; ?> </td>
                                            </tr>


                                            <tr>
                                                <td>Procuring Entity / SubSector</td>
                                                <td style="text-transform: capitalize" id="mda"> <?php echo $row[40]; ?> </td>
                                            </tr>



                                            <tr>
                                                <td>Procurement Category</td>
                                                <td id="procurementcat"> <?php echo $row[7]; ?> </td>
                                            </tr>

                                            <tr>
                                                <td>Bid Solicitation Date</td>
                                                <td id="advertdate"> <?php echo $row[8]; ?> </td>
                                            </tr>

                                            <tr>
                                                <td>Prequalification Date</td>
                                                <td id="prequalificationdate"> <?php echo $row[9]; ?> </td>
                                            </tr>



                                            <tr>
                                                <td>Bid Opening Date</td>
                                                <td id="bidopendate"> <?php echo $row[12]; ?> </td>
                                            </tr>



                                            </tbody>

                                        </table>

                                    </div>


                                    <div id="menu1" class="tab-pane fade">

                                        <table id="myTable" style="font-size: 120%; margin-top: 5px;" class="table table-responsive table-condensed table-striped table-bordered table-hover">
                                            <thead class="bg-primary">

                                            <div style="background-color: darkgreen; margin-top: 5px;">
                                                <h3  style="color: #ffffff; text-transform: uppercase" align="center">Tender Details</h3>
                                                <h4 style="color: #ffffff" align="center">Current Procurement Stage : <?php echo $row[39]; ?> </h4>
                                                <h4 style="color: #ffffff" align="center">Last Updated : <?php echo $row[41]; ?> </h4>
                                            </div>

                                            </thead>

                                            <tbody>
                                            <tr>
                                                <td>Tender Title</td>
                                                <td style="text-transform: uppercase" id="tendertitle"> <?php echo $row[14]; ?> </td>
                                            </tr>

                                            <tr>
                                                <td>Tender Status</td>
                                                <td id="tenderstatus"> <?php echo $row[15]; ?> </td>
                                            </tr>

                                            <tr>
                                                <td>Item Description</td>
                                                <td style="text-transform: capitalize" id="itemdescr"> <?php echo $row[16]; ?> </td>
                                            </tr>

                                            <tr>
                                                <td>Procurement Method</td>
                                                <td id="procurementmethod"> <?php echo $row[17]; ?> </td>
                                            </tr>

                                            <tr>
                                                <td>Procurement Method Rational</td>
                                                <td style="text-transform: capitalize" id="procurementmethodrat"> <?php echo $row[18]; ?> </td>
                                            </tr>

                                            <tr>
                                                <td>Number of Tenderers</td>
                                                <td id="numoftender"> <?php echo $row[21]; ?> </td>
                                            </tr>

                                            <tr>
                                                <td>Tendering Period</td>
                                                <td id="tenderingperiod"> <?php echo $row[19]. " To ". $row[22]; ?> </td>
                                            </tr>

                                            <tr>
                                                <td>Bid Opening Date</td>
                                                <td id="bidopeningdate"> <?php echo $row[12]; ?> </td>
                                            </tr>

                                            <tr>
                                                <td>Details of Bidders</td>

                                                <td id="bidersdetail">

                                                    <?php
                                                    $vals = explode('.', $row[43]);
                                                    if ( !array_key_exists(1, $vals) ){
                                                        // echo "No Document Uploaded Yet";
                                                    }
                                                    else{
                                                        ?>
                                                        <a style="text-decoration: none; background-color: #ffffff !important; color: green !important;" href="<?php echo "../php/". $row[43]; ?>"> Click to download Document</a>
                                                    <?php }  ?>

                                                </td>

                                            </tr>


                                            </tbody>

                                        </table>

                                    </div>


                                    <div id="menu2" class="tab-pane fade">

                                        <table id="myTable" style="font-size: 120%; margin-top: 5px;" class="table table-responsive table-condensed table-striped table-bordered table-hover">
                                            <thead class="bg-primary">

                                            <div style="background-color: darkgreen; margin-top: 5px;">
                                                <h3  style="text-transform: uppercase; color: #ffffff" align="center">Award Details</h3>
                                                <h4 style="color: #ffffff" align="center">Current Procurement Stage : <?php echo $row[39]; ?> </h4>
                                                <h4 style="color: #ffffff" align="center">Last Updated : <?php echo $row[41]; ?> </h4>
                                            </div>

                                            </thead>

                                            <tbody>

                                            <tr>
                                                <td>Award Date</td>
                                                <td id="awarddate"> <?php echo $row[36]; ?> </td>
                                            </tr>

                                            <tr>
                                                <td>Award Title</td>
                                                <td id="awardtitle"> <?php echo $row[34]; ?> </td>
                                            </tr>

                                            <tr>
                                                <td>Award Status</td>
                                                <td id="awardstatus"> <?php echo $row[35]; ?> </td>
                                            </tr>

                                            <tr>
                                                <td>Award Description</td>
                                                <td id="awarddescription"> <?php echo $row[44]; ?> </td>
                                            </tr>

                                            <tr>
                                                <td>Award Criteria</td>
                                                <td id="awardjustification"> <?php echo $row[38]; ?> </td>
                                            </tr>


                                            <tr>
                                                <td>Award Amount</td>
                                                <td id="awardamount"> <?php echo $row[46]; ?> </td>
                                            </tr>

                                            <tr>
                                                <td>Awardee</td>
                                                <td id="awardtobidder"> <?php echo $row[37]; ?> </td>
                                            </tr>

                                            <tr>
                                                <td>Award Amendment</td>
                                                <td id="awardamendment"> <?php echo $row[45]; ?> </td>
                                            </tr>


                                            </tbody>

                                        </table>

                                    </div>

                                    <div id="menu3" class="tab-pane fade">

                                        <table id="myTable" style="font-size: 120%; margin-top: 5px;" class="table table-responsive table-condensed table-striped table-bordered table-hover">
                                            <thead class="bg-primary">

                                            <div style="background-color: darkgreen; margin-top: 5px;">
                                                <h3  style="color: #ffffff; text-transform: uppercase" align="center">Contract Details</h3>
                                                <h4 style="color: #ffffff" align="center">Current Procurement Stage : <?php echo $row[39]; ?>
                                                    <h4 style="color: #ffffff" align="center">Last Updated : <?php echo $row[41]; ?> </h4>
                                                </h4></div>

                                            </thead>

                                            <tbody>
                                            <tr>
                                                <td>Contract Title</td>
                                                <td style="text-transform: uppercase" id="contracttitle"> <?php echo $row[29]; ?> </td>
                                            </tr>

                                            <tr>
                                                <td>Contractor Name</td>
                                                <td id="contractstatus"> <?php echo $row[48]; ?> </td>
                                            </tr>

                                            <tr>
                                                <td>Contractor Phone</td>
                                                <td id="contractstatus"> <?php echo $row[51]; ?> </td>
                                            </tr>

                                            <tr>
                                                <td>Contractor Address</td>
                                                <td id="contractstatus"> <?php echo $row[49]; ?> </td>
                                            </tr>

                                            <tr>
                                                <td>Contractor eMail</td>
                                                <td id="contractstatus" style="text-transform: lowercase"> <?php echo $row[50]; ?> </td>
                                            </tr>


                                            <tr>
                                                <td>Contract Status</td>
                                                <td id="contractstatus"> <?php echo $row[30]; ?> </td>
                                            </tr>


                                            <tr>
                                                <td>Contract Signing Date</td>
                                                <td id="contractsign"> <?php echo $row[31]; ?> </td>
                                            </tr>

                                            <tr>
                                                <td>Contract Duration</td>
                                                <td id="contractperiod"> <?php echo $row[32]. " To ".$row[33] ; ?> </td>
                                            </tr>

                                            <tr>
                                                <td>Commencement Date</td>
                                                <td id="contractstatus"> <?php echo $row[52]; ?> </td>
                                            </tr>

                                            </tbody>

                                        </table>

                                    </div>

                                    <div id="menu4" class="tab-pane fade">

                                        <table id="myTable" style="font-size: 120%; margin-top: 5px;" class="table table-responsive table-condensed table-striped table-bordered table-hover">
                                            <thead class="bg-primary">


                                            <div style="background-color: darkgreen; margin-top: 5px;">
                                                <h3 style="color: #ffffff; text-transform: uppercase" align="center">Implementation Details</h3>
                                                <h4 style="color: #ffffff" align="center">Current Procurement Stage : <?php echo $row[39]; ?> </h4>
                                                <h4 style="color: #ffffff" align="center">Last Updated : <?php echo $row[41]; ?> </h4>
                                            </div>

                                            </thead>

                                            <tbody>

                                            <tr>
                                                <td>Contract Sum</td>
                                                <td class="currency-format" id="finalcost"> <?php echo number_format($row[26]); ?> </td>
                                            </tr>


                                            <tr>
                                                <td>Contract Variation</td>
                                                <td class="currency-format"  id="variation"> <?php echo number_format($row[27]); ?> </td>
                                            </tr>

                                            <tr>
                                                <td>Revised Contract Amount</td>
                                                <td class="currency-format"  id="revisedcs"> <?php echo number_format($row[28]); ?> </td>
                                            </tr>

                                            <tr>
                                                <td>Contract Mobilization</td>
                                                <td > <?php echo number_format($row[47], 2); ?> </td>
                                                <!--                                                <td cc  id="mobilization"> --><?php //echo number_format($row[47], 2); ?><!-- </td>-->
                                            </tr>

                                            <tr>
                                                <td>Amount Paid</td>
                                                <td class="currency-format"  id="amtpaid"> <?php echo number_format($row[25]); ?> </td>
                                            </tr>

                                            <tr>
                                                <td>Percentage Completion</td>
                                                <td class="currency-format"  id="completion"> <?php echo $row[24]; ?> </td>
                                            </tr>

                                            <tr>
                                                <td>Project Status</td>
                                                <td id="projectstatus"> <?php echo $row[23]; ?> </td>
                                            </tr>

                                            </tbody>

                                        </table>

                                    </div>
                                </div>


                                <div align="center" style="float: right; padding-top:15px; padding-bottom: 15px; margin-bottom: 5%">
                                    <a id="myButton" target="_blank" href=" <?php echo  $link2; ?>" class="btn btn-block btn-success"><i class="fa fa-print"></i> Print </a>
                                </div>




                                <!--       Section for Disqus thread-->

                                <div id="disqus_thread"></div>

                                <!--       Section for Disqus thread-->

                                <hr>










                            </div>


                            <!-- Div for the feed back comments section -->
                            <div>
                                <div class="row">
                                    <div class="col-lg-12 text-center">
                                        <h3>Share your feedback on this content with us</h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <form id="feedbackForm" novalidate="novalidate">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    Rate Project: <div id="project_rating"></div>
                                                    <div class="form-group" style="margin-top: 0.6em;">
                                                        <input class="form-control" id="name" name="name" type="text" placeholder="Your Name *" required="required" data-validation-required-message="Please enter your name.">
                                                        <p class="help-block text-danger"></p>
                                                    </div>
                                                    <div class="form-group">
                                                        <input class="form-control" id="email" name="email" type="email" placeholder="Your Email *" required="required" data-validation-required-message="Please enter your email address.">
                                                        <p class="help-block text-danger"></p>
                                                    </div>
                                                    <div class="form-group">
                                                        <input class="form-control" id="phone" name="phone" type="text" placeholder="Your Location *"  required="required" data-validation-required-message="Please enter your location.">
                                                        <p class="help-block text-danger"></p>
                                                    </div>
                                                </div>




                                                <div class="col-md-6">
                                                    <div class="form-group" style="min-height: 2.5em">
                                                        <input class="form-control" id="project_id" name="project_id" type="hidden" value="<?php echo $_GET['id']; ?> ">

                                                        <input class="form-control" id="project_title" name="project_title" type="hidden" value="<?php echo $row[1]; ?> ">

                                                        <input class="form-control" id="project_rating_value"  name="project_rating_value" type="hidden" value="">
                                                    </div>
                                                    <div class="form-group">
                                                        <textarea class="form-control" id="message" name="message" placeholder="Your Feedback *" required="required" data-validation-required-message="Please enter a feedback."></textarea>
                                                        <p class="help-block text-danger"></p>
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="col-lg-12 text-center">
                                                    <div id="success"></div>
                                                    <button id="sendMessageButton" class="btn btn-primary" type="submit">Send Message</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <br>   <br> <br>
                            <!-- End section for comments -->

                        </div>

                    </div>
                </div>

            </div>


            <div class="col-sm-1">

            </div>


        </div>


    </div>
</section>

<!-- End  Place my container here -->

<?php
include 'footer.php';
?>
</div>

<!-- Javascript -->
<script type="text/javascript" src="javascript-home/jquery.min.js"></script>
<script type="text/javascript" src="javascript-home/bootstrap.min.js"></script>
<script type="text/javascript" src="javascript-home/jquery.easing.js"></script>
<script type="text/javascript" src="javascript-home/jquery-waypoints.js"></script>
<script type="text/javascript" src="javascript-home/jquery.cookie.js"></script>
<script type="text/javascript" src="javascript-home/jquery.fitvids.js"></script>
<script type="text/javascript" src="javascript-home/parallax.js"></script>
<script type="text/javascript" src="javascript-home/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="javascript-home/owl.carousel.js"></script>
<script type="text/javascript" src="javascript-home/jquery.flexslider-min.js"></script>
<script type="text/javascript" src="javascript-home/jquery-validate.js"></script>


<script src="js/datatables.min.js"></script>



<script type="text/javascript" src="javascript-home/main.js"></script>

<!-- Revolution Slider -->
<script type="text/javascript" src="javascript-home/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="javascript-home/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="javascript-home/slider.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAHtWltCIolOgzpMEfi_GVZZHCkrXH10SM&region=GB"></script>
<script type="text/javascript" src="javascript-home/gmap3.min.js"></script>


<script src="jsf/jqBootstrapValidation.js"></script>
<script src="jsf/jquery.rateyo.2.3.5.min.js"></script>
<script src="jsf/feedback.js"></script>


<script>
    // Cache selectors
    var lastId,
        topMenu = $("#mainNav"),
        topMenuHeight = topMenu.outerHeight()+1,
        // All list items
        menuItems = topMenu.find("a"),
        // Anchors corresponding to menu items
        scrollItems = menuItems.map(function(){
            var item = $($(this).attr("href"));
            if (item.length) { return item; }
        });

    // Bind click handler to menu items
    // so we can get a fancy scroll animation
    menuItems.click(function(e){
        var href = $(this).attr("href"),
            offsetTop = href === "#" ? 0 : $(href).offset().top-topMenuHeight+1;
        $('html, body').stop().animate({
            scrollTop: offsetTop
        }, 850);
        e.preventDefault();
    });

    // Bind to scroll
    $(window).scroll(function(){
        // Get container scroll position
        var fromTop = $(this).scrollTop()+topMenuHeight;

        // Get id of current scroll item
        var cur = scrollItems.map(function(){
            if ($(this).offset().top < fromTop)
                return this;
        });
        // Get the id of the current element
        cur = cur[cur.length-1];
        var id = cur && cur.length ? cur[0].id : "";

        if (lastId !== id) {
            lastId = id;
            // Set/remove active class
            menuItems
                .parent().removeClass("active")
                .end().filter("[href=#"+id+"]").parent().addClass("active");
        }
    });
    //    $('#myModal').modal('show');
</script>
<script src="js/validator.min.js"></script>
<script src="js/sweetalert.min.js"></script>



<script>

    $(document).ready(function() {
        $('#myTable').DataTable( {
            dom: 'Bfrtip',
            buttons: ['copy', 'csv', 'excel', 'pdf', 'print'],
            "pageLength" : 5,
            "processing": true,
            "serverSide": true,
            "ajax": "getocdsdata.php"
        } );
    } );


</script>

</body>
</html>


