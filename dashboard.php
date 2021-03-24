 
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
            


           
        </style>
  </head>
  <body>
		
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar" class="active">
       
       <button type="button" id="sidebarCollapse" class="btn btn-lg" style="background: #343752;">
          <i class="fa fa-bars" style="color:rgb(147, 168, 185) !important;"></i>
          <span class="sr-only">Toggle Menu</span>
        </button>

		
        <!-- <h1><a href="dash.html" class="logo">FM</a></h1> -->
        <ul class="list-unstyled components mb-5" >
          <!-- <li class="active">
            <a href="#"><span class="fa fa-home" style="font-size: 35px;"></span> </a>
          </li> -->

          <li>
            <a href="#"><span class="fa fa-bullseye fas" ></span> </a>
          </li>

          <li class="active">
            <a href="#"><span class="fa fa-star fas" ></span> </a>
          </li>

          <li>
            <a href="#"><span class="fa fa-heart fas" ></span> </a>
          </li> 


          <li>
              <a href="#"><span class="fa fa-bar-chart-o fas" ></span> </a>
          </li>

          <li>
            <a href="#"><span class="fa fa-map-marker fas" ></span> </a>
          </li>

          <li>
            <a href="#"><span class="fa fa-paper-plane-o fas" ></span> </a>
          </li>

          <li>
            <a href="#"><span class="fa fa-sun-o fas"></span> </a>
          </li>

          <li>
            <a href="#"><span class="fa fa-lock fas"></span> </a>
            
          </li>

        
        </ul>

        <div class="footer" >
        	<p> Copyright &copy;<script>document.write(new Date().getFullYear());</script> Developed by Zena Concepts</p>
        </div>

    	    </nav>

        <!-- Page Content  -->
      <div id="content" class="p-md-12">

        <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background: #fff !important; padding-top: 5px !important; padding-bottom: 5px !important;">
          <div class="container-fluid">

            <button type="button" id="sidebarCollapse1" class="btn btn-lg mybt" style="min-width: 2.5rem; min-height: 2.5rem; background-image: url('assets/img/hlogo.png'); background-position: center; background-size: cover;background-repeat: no-repeat; margin-left: -2px;">
              <!-- <i class="fa fa-bars"></i>          -->
              <span class="sr-only">Toggle Menu</span>
            </button>

            <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <h6 style="margin-left: 6px; color: #343752 !important;">Kaduna State Primary Health Care Services</h6>
             
             <!-- Specify the margin left of the menu items -->
            <ul class="nav navbar-nav ml-auto " style=" margin-left: 5px;">
               
              <li class="nav-item active topbar" style=" margin-top: 8px; margin-right: 50px;">             
                  <form> 
                      <div class="form-group"> 
                          <span> <input class="input-field" placeholder="search" style="border-radius: 25px; padding: 5px 5px; border: #fff; background: #e5e9f1; width: fit-content; " type="text" placeholder="" > 
                                  <i style="margin-left: -26px;" class="fa fa-search icon"> </i></span>
                      </div>
                  </form>
                 </li>


               
                 <li class="nav-item dropdown topbar" style="text-align: left; margin-right: 50px;">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="mysvg" src="assets/ionicons/person-circle-outline.svg"  style="width: 32px;"/>
                   </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="float: left;">
                      <a class="dropdown-item" href="#">Profile</a>
                      <a class="dropdown-item" href="#">Password Reset</a>
                      <a class="dropdown-item" href="#">Logout</a>
                    </div>
              </li>


                <li class="nav-item" style="  text-align: left; margin-right: 50px;">
                    <a class="nav-link topbar" href="#">  
                      <img class="mysvg" src="assets/ionicons/mail-unread-outline.svg"  style="width: 32px;"/>
                   
                     </a>
                </li>
              

                <li class="nav-item topbar" style="  text-align: left; margin-right: 20px;">
                  <a class="nav-link" href="#">  
                      <img class="mysvg" src="assets/ionicons/chatbubble-outline.svg"  style="width: 32px;"/>
                   </a>
              </li>

              </ul>
            </div>
          </div>
        </nav>

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
                
                <button style="font-size: 18px; border: #e5e9f1; background: #e5e9f1; color: #343752; margin-right: 35px;" href="#" data-toggle="modal" data-target="#addDivisionModal"> 
                  <span class="fa fa-map-marker" style="color: #e5e9f1; font-size: 60px;"> </span>
                  <span class="fa fa-plus-square" style="color: #343752; font-size: 20px;"> </span>
                  <b style="text-decoration: underline;">Add Division</b>
              
                </button>


                <button style="font-size: 18px; border: #e5e9f1; background: #e5e9f1; color: #343752; margin-right: 35px;" href="#">
                    <a style="font-size: 18px; color: #a91414; margin-right: 7px;" href="#"> 
                      <!-- <span class="fa fa-map-marker" style="color: #e5e9f1; font-size: 60px;"> </span> -->
                      <span class="fa fa-save" style="color: #a91414; font-size: 20px;"> </span>
                      <b style="text-decoration: underline;">Save</b>              
                    </a>
          </button>

                <button style="font-size: 18px; border: #e5e9f1; background: #e5e9f1; color: #343752; margin-right: 35px;" href="#">
                    <a style="font-size: 18px; color: #343752; margin-right: 13px;" href="#"> 
                      <span class="fa fa-map-marker" style="color: #e5e9f1; font-size: 60px;"> </span>
                      <span class="fa fa-plus-square" style="color: #343752; font-size: 20px;"> </span>
                      <b style="text-decoration: underline;">Location Data</b>              
                    </a>
          </button>

                <!-- <h3>test <span class="badge "></span> <button type="button" class="btn btn-success"></button></h3> -->
   
                <!-- <button> -->
                <span style="background: #000; padding: 10px 2px;">
                <button type="button" class="btn" style="background: #414776; color: #fff; width: 65px; font-size: 15px; border-radius: 0px;">9700</button>
                <button type="button" class="btn" style="background: #000; color: #fff;  font-size: 10px;">Manage</button> 
                </span>
                <!-- </button> -->


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

       <div style="margin: 0px 20px">
            <h2 class="mb-4">KDSG</h2>
           
            

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
     
    </script>
     
  </body>
</html>