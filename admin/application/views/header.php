<div class="header-section">

    <!--toggle button start-->
    <a class="toggle-btn"><i class="fa fa-bars"></i></a>
    <!--toggle button end-->

    <!--search start-->
    <!-- <form class="searchform" action="index.html" method="post">
        <input type="text" class="form-control" name="keyword" placeholder="Search here..." />
    </form> -->
    <!--search end-->

    <!--notification menu start -->
    <div class="menu-right">
        <ul class="notification-menu">                  
            <li>
                <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <img src="images/photos/user-avatar.png" alt="" />
                    <?php echo $this->session->userdata('username');?>
                    <span class="caret"></span>
                </a>
                <ul class="dropdown-menu dropdown-menu-usermenu pull-right">
                    <!-- <li><a href="#"><i class="fa fa-user"></i>  Profile</a></li> -->
                    <li><a href="#"><i class="fa fa-cog"></i>  Change Password</a></li>
                    <li><a href="<?php echo base_url();?>logins/logout"><i class="fa fa-sign-out"></i> Log Out</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <!--notification menu end -->
</div>