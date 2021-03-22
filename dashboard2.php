 
<!doctype html>
<html lang="en">
  <head>
  	<title>Dashboard</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
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
            


            .hiddin{
              /* display: none; */
            }

            /* .topbar{
              margin-left: -25px;
              margin-right: -25px;
              padding-right: 0px;
              padding-left: 0px;
              text-align: center;
            } */
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
                
                <a style="font-size: 18px; color: #343752; margin-right: 35px; display: none;" href="#"> 
                  <span class="fa fa-map-marker" style="color: #e5e9f1; font-size: 60px;"> </span>
                  <span class="fa fa-plus-square" style="color: #343752; font-size: 20px;"> </span>
                  <b style="text-decoration: underline;">Add Division</b>
              
                </a>


                <a style="font-size: 18px; color: #a91414; margin-right: 7px; display: none;" href="#"> 
                  <!-- <span class="fa fa-map-marker" style="color: #e5e9f1; font-size: 60px;"> </span> -->
                  <span class="fa fa-save" style="color: #a91414; font-size: 20px;"> </span>
                  <b style="text-decoration: underline;">Save</b>              
                </a>

                <a style="font-size: 18px; color: #343752; margin-right: 13px;" href="#"> 
                  <span class="fa fa-map-marker" style="color: #e5e9f1; font-size: 60px;"> </span>
                  <span class="fa fa-plus-square" style="color: #343752; font-size: 20px;"> </span>
                  <b style="text-decoration: underline;">Location Data</b>
              
                </a>

                <!-- <h3>test <span class="badge "></span> <button type="button" class="btn btn-success"></button></h3> -->
   <span style="background: #000; padding: 10px 2px;">
    <button type="button" class="btn" style="background: #414776; color: #fff; width: 65px; font-size: 15px; border-radius: 0px;">9700</button>
     <button type="button" class="btn" style="background: #000; color: #fff;  font-size: 10px;">Manage</button>
  
    </span>


              </div>
          </div>
      </div>

       <div style="margin: 0px 20px">
            <h2 class="mb-4">KDSG</h2>
           
            

        </div>
    
    </div>
	
    </div>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>
     
  </body>
</html>