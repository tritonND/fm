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
                        <a class="dropdown-item" href="#"> <?php echo $_SESSION["fullname"];?> Profile</a>
                        <a class="dropdown-item" href="passwordreset">Password Reset</a>
                        <a class="dropdown-item" href="services/logout">Logout</a>
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

