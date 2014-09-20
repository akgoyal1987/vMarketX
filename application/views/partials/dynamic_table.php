<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="ThemeBucket">
  <link rel="shortcut icon" href="#" type="image/png">

  <title>Dynamic Table</title>

  <!--dynamic table-->
  <link href="js/advanced-datatable/css/demo_page.css" rel="stylesheet" />
  <link href="js/advanced-datatable/css/demo_table.css" rel="stylesheet" />
  <link rel="stylesheet" href="js/data-tables/DT_bootstrap.css" />

  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <script src="js/respond.min.js"></script>
  <![endif]-->
</head>

<body class="sticky-header">

<section>
    <!-- left side start-->
    <div class="left-side sticky-left-side">

        <!--logo and iconic logo start-->
        <div class="logo">
            <a href="index.html"><img src="images/logo.png" alt=""></a>
        </div>

        <div class="logo-icon text-center">
            <a href="index.html"><img src="images/logo_icon.png" alt=""></a>
        </div>
        <!--logo and iconic logo end-->


        <div class="left-side-inner">

            <!-- visible to small devices only -->
            <div class="visible-xs hidden-sm hidden-md hidden-lg">
                <div class="media logged-user">
                    <img alt="" src="images/photos/user-avatar.png" class="media-object">
                    <div class="media-body">
                        <h4><a href="#">John Doe</a></h4>
                        <span>"Hello There..."</span>
                    </div>
                </div>

                <h5 class="left-nav-title">Account Information</h5>
                <ul class="nav nav-pills nav-stacked custom-nav">
                    <li><a href="#"><i class="fa fa-user"></i> <span>Profile</span></a></li>
                    <li><a href="#"><i class="fa fa-cog"></i> <span>Settings</span></a></li>
                    <li><a href="#"><i class="fa fa-sign-out"></i> <span>Sign Out</span></a></li>
                </ul>
            </div>

            <!--sidebar nav start-->
            <ul class="nav nav-pills nav-stacked custom-nav">
                <li class="menu-list"><a href="index.html"><i class="fa fa-home"></i> <span>Dashboard</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="index_alt.html"> Dashboard 1</a></li>
                        <li><a href="index.html"> Dashboard 2</a></li>
                    </ul>
                </li>
                <li class="menu-list"><a href=""><i class="fa fa-laptop"></i> <span>Layouts</span></a>
                    <ul class="sub-menu-list">
                        <li ><a href="blank_page.html"> Blank Page</a></li>
                        <li><a href="boxed_view.html"> Boxed Page</a></li>
                        <li><a href="leftmenu_collapsed_view.html"> Sidebar Collapsed</a></li>
                        <li><a href="horizontal_menu.html"> Horizontal Menu</a></li>

                    </ul>
                </li>
                <li class="menu-list"><a href=""><i class="fa fa-book"></i> <span>UI Elements</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="general.html"> General</a></li>
                        <li><a href="buttons.html"> Buttons</a></li>
                        <li><a href="tabs-accordions.html"> Tabs & Accordions</a></li>
                        <li><a href="typography.html"> Typography</a></li>
                        <li><a href="slider.html"> Slider</a></li>
                        <li><a href="panels.html"> Panels</a></li>
                        <li><a href="widgets.html"> Widgets</a></li>
                    </ul>
                </li>
                <li class="menu-list"><a href=""><i class="fa fa-cogs"></i> <span>Components</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="grids.html"> Grids</a></li>
                        <li><a href="gallery.html"> Media Gallery</a></li>
                        <li><a href="calendar.html"> Calendar</a></li>
                        <li><a href="tree_view.html"> Tree View</a></li>
                        <li><a href="nestable.html"> Nestable</a></li>

                    </ul>
                </li>

                <li><a href="fontawesome.html"><i class="fa fa-bullhorn"></i> <span>Fontawesome</span></a></li>

                <li class="menu-list"><a href=""><i class="fa fa-envelope"></i> <span>Mail</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="mail.html"> Inbox</a></li>
                        <li><a href="mail_compose.html"> Compose Mail</a></li>
                        <li><a href="mail_view.html"> View Mail</a></li>
                    </ul>
                </li>

                <li class="menu-list"><a href=""><i class="fa fa-tasks"></i> <span>Forms</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="form_layouts.html"> Form Layouts</a></li>
                        <li><a href="form_advanced_components.html"> Advanced Components</a></li>
                        <li><a href="form_wizard.html"> Form Wizards</a></li>
                        <li><a href="form_validation.html"> Form Validation</a></li>
                        <li><a href="editors.html"> Editors</a></li>
                        <li><a href="inline_editors.html"> Inline Editors</a></li>
                        <li><a href="pickers.html"> Pickers</a></li>
                        <li><a href="dropzone.html"> Dropzone</a></li>
                    </ul>
                </li>
                <li class="menu-list"><a href=""><i class="fa fa-bar-chart-o"></i> <span>Charts</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="flot_chart.html"> Flot Charts</a></li>
                        <li><a href="morris.html"> Morris Charts</a></li>
                        <li><a href="chartjs.html"> Chartjs</a></li>
                        <li><a href="c3chart.html"> C3 Charts</a></li>
                    </ul>
                </li>
                <li class="menu-list nav-active"><a href="#"><i class="fa fa-th-list"></i> <span>Data Tables</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="basic_table.html"> Basic Table</a></li>
                        <li class="active"><a href="dynamic_table.html"> Advanced Table</a></li>
                        <li><a href="responsive_table.html"> Responsive Table</a></li>
                        <li><a href="editable_table.html"> Edit Table</a></li>
                    </ul>
                </li>

                <li class="menu-list"><a href="#"><i class="fa fa-map-marker"></i> <span>Maps</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="google_map.html"> Google Map</a></li>
                        <li><a href="vector_map.html"> Vector Map</a></li>
                    </ul>
                </li>
                <li class="menu-list"><a href=""><i class="fa fa-file-text"></i> <span>Extra Pages</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="profile.html"> Profile</a></li>
                        <li><a href="invoice.html"> Invoice</a></li>
                        <li><a href="pricing_table.html"> Pricing Table</a></li>
                        <li><a href="timeline.html"> Timeline</a></li>
                        <li><a href="blog_list.html"> Blog List</a></li>
                        <li><a href="blog_details.html"> Blog Details</a></li>
                        <li><a href="directory.html"> Directory </a></li>
                        <li><a href="chat.html"> Chat </a></li>
                        <li><a href="404.html"> 404 Error</a></li>
                        <li><a href="500.html"> 500 Error</a></li>
                        <li><a href="registration.html"> Registration Page</a></li>
                        <li><a href="lock_screen.html"> Lockscreen </a></li>
                    </ul>
                </li>
                <li><a href="login.html"><i class="fa fa-sign-in"></i> <span>Login Page</span></a></li>

            </ul>
            <!--sidebar nav end-->

        </div>
    </div>
    <!-- left side end-->
    
    <!-- main content start-->
    <div class="main-content" >

        <!-- header section start-->
        <div class="header-section">

        <!--toggle button start-->
        <a class="toggle-btn"><i class="fa fa-bars"></i></a>
        <!--toggle button end-->

        <!--search start-->
        <form class="searchform" action="index.html" method="post">
            <input type="text" class="form-control" name="keyword" placeholder="Search here..." />
        </form>
        <!--search end-->

        <!--notification menu start -->
        <div class="menu-right">
            <ul class="notification-menu">
                <li>
                    <a href="#" class="btn btn-default dropdown-toggle info-number" data-toggle="dropdown">
                        <i class="fa fa-tasks"></i>
                        <span class="badge">8</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-head pull-right">
                        <h5 class="title">You have 8 pending task</h5>
                        <ul class="dropdown-list user-list">
                            <li class="new">
                                <a href="#">
                                    <div class="task-info">
                                        <div>Database update</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div style="width: 40%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="40" role="progressbar" class="progress-bar progress-bar-warning">
                                            <span class="">40%</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="new">
                                <a href="#">
                                    <div class="task-info">
                                        <div>Dashboard done</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div style="width: 90%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="90" role="progressbar" class="progress-bar progress-bar-success">
                                            <span class="">90%</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info">
                                        <div>Web Development</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div style="width: 66%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="66" role="progressbar" class="progress-bar progress-bar-info">
                                            <span class="">66% </span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info">
                                        <div>Mobile App</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div style="width: 33%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="33" role="progressbar" class="progress-bar progress-bar-danger">
                                            <span class="">33% </span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info">
                                        <div>Issues fixed</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div style="width: 80%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="80" role="progressbar" class="progress-bar">
                                            <span class="">80% </span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="new"><a href="">See All Pending Task</a></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#" class="btn btn-default dropdown-toggle info-number" data-toggle="dropdown">
                        <i class="fa fa-envelope-o"></i>
                        <span class="badge">5</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-head pull-right">
                        <h5 class="title">You have 5 Mails </h5>
                        <ul class="dropdown-list normal-list">
                            <li class="new">
                                <a href="">
                                    <span class="thumb"><img src="images/photos/user1.png" alt="" /></span>
                                        <span class="desc">
                                          <span class="name">John Doe <span class="badge badge-success">new</span></span>
                                          <span class="msg">Lorem ipsum dolor sit amet...</span>
                                        </span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <span class="thumb"><img src="images/photos/user2.png" alt="" /></span>
                                        <span class="desc">
                                          <span class="name">Jonathan Smith</span>
                                          <span class="msg">Lorem ipsum dolor sit amet...</span>
                                        </span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <span class="thumb"><img src="images/photos/user3.png" alt="" /></span>
                                        <span class="desc">
                                          <span class="name">Jane Doe</span>
                                          <span class="msg">Lorem ipsum dolor sit amet...</span>
                                        </span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <span class="thumb"><img src="images/photos/user4.png" alt="" /></span>
                                        <span class="desc">
                                          <span class="name">Mark Henry</span>
                                          <span class="msg">Lorem ipsum dolor sit amet...</span>
                                        </span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <span class="thumb"><img src="images/photos/user5.png" alt="" /></span>
                                        <span class="desc">
                                          <span class="name">Jim Doe</span>
                                          <span class="msg">Lorem ipsum dolor sit amet...</span>
                                        </span>
                                </a>
                            </li>
                            <li class="new"><a href="">Read All Mails</a></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#" class="btn btn-default dropdown-toggle info-number" data-toggle="dropdown">
                        <i class="fa fa-bell-o"></i>
                        <span class="badge">4</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-head pull-right">
                        <h5 class="title">Notifications</h5>
                        <ul class="dropdown-list normal-list">
                            <li class="new">
                                <a href="">
                                    <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                                    <span class="name">Server #1 overloaded.  </span>
                                    <em class="small">34 mins</em>
                                </a>
                            </li>
                            <li class="new">
                                <a href="">
                                    <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                                    <span class="name">Server #3 overloaded.  </span>
                                    <em class="small">1 hrs</em>
                                </a>
                            </li>
                            <li class="new">
                                <a href="">
                                    <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                                    <span class="name">Server #5 overloaded.  </span>
                                    <em class="small">4 hrs</em>
                                </a>
                            </li>
                            <li class="new">
                                <a href="">
                                    <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                                    <span class="name">Server #31 overloaded.  </span>
                                    <em class="small">4 hrs</em>
                                </a>
                            </li>
                            <li class="new"><a href="">See All Notifications</a></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                        <img src="images/photos/user-avatar.png" alt="" />
                        John Doe
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-usermenu pull-right">
                        <li><a href="#"><i class="fa fa-user"></i>  Profile</a></li>
                        <li><a href="#"><i class="fa fa-cog"></i>  Settings</a></li>
                        <li><a href="#"><i class="fa fa-sign-out"></i> Log Out</a></li>
                    </ul>
                </li>

            </ul>
        </div>
        <!--notification menu end -->

        </div>
        <!-- header section end-->

        <!-- page heading start-->
        <div class="page-heading">
            <h3>
                Dynamic Table
            </h3>
            <ul class="breadcrumb">
                <li>
                    <a href="#">Dashboard</a>
                </li>
                <li>
                    <a href="#">Data Tables</a>
                </li>
                <li class="active"> Dynamic Table </li>
            </ul>
        </div>
        <!-- page heading end-->

        <!--body wrapper start-->
        <div class="wrapper">
        <div class="row">
        <div class="col-sm-12">
        <section class="panel">
        <header class="panel-heading">
            Dynamic Table
            <span class="tools pull-right">
                <a href="javascript:;" class="fa fa-chevron-down"></a>
                <a href="javascript:;" class="fa fa-times"></a>
             </span>
        </header>
        <div class="panel-body">
        <div class="adv-table">
        <table  class="display table table-bordered table-striped" id="dynamic-table">
        <thead>
        <tr>
            <th>Rendering engine</th>
            <th>Browser</th>
            <th>Platform(s)</th>
            <th class="hidden-phone">Engine version</th>
            <th class="hidden-phone">CSS grade</th>
        </tr>
        </thead>
        <tbody>
        <tr class="gradeX">
            <td>Trident</td>
            <td>Internet
                Explorer 4.0</td>
            <td>Win 95+</td>
            <td class="center hidden-phone">4</td>
            <td class="center hidden-phone">X</td>
        </tr>
        <tr class="gradeC">
            <td>Trident</td>
            <td>Internet
                Explorer 5.0</td>
            <td>Win 95+</td>
            <td class="center hidden-phone">5</td>
            <td class="center hidden-phone">C</td>
        </tr>
        <tr class="gradeA">
            <td>Trident</td>
            <td>Internet
                Explorer 5.5</td>
            <td>Win 95+</td>
            <td class="center hidden-phone">5.5</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Trident</td>
            <td>Internet
                Explorer 6</td>
            <td>Win 98+</td>
            <td class="center hidden-phone">6</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Trident</td>
            <td>Internet Explorer 7</td>
            <td>Win XP SP2+</td>
            <td class="center hidden-phone">7</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Trident</td>
            <td>AOL browser (AOL desktop)</td>
            <td>Win XP</td>
            <td class="center hidden-phone">6</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Gecko</td>
            <td>Firefox 1.0</td>
            <td>Win 98+ / OSX.2+</td>
            <td class="center hidden-phone">1.7</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Gecko</td>
            <td>Firefox 1.5</td>
            <td>Win 98+ / OSX.2+</td>
            <td class="center hidden-phone">1.8</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Gecko</td>
            <td>Firefox 2.0</td>
            <td>Win 98+ / OSX.2+</td>
            <td class="center hidden-phone">1.8</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Gecko</td>
            <td>Firefox 3.0</td>
            <td>Win 2k+ / OSX.3+</td>
            <td class="center hidden-phone">1.9</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Gecko</td>
            <td>Camino 1.0</td>
            <td>OSX.2+</td>
            <td class="center hidden-phone">1.8</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Gecko</td>
            <td>Camino 1.5</td>
            <td>OSX.3+</td>
            <td class="center hidden-phone">1.8</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Gecko</td>
            <td>Netscape 7.2</td>
            <td>Win 95+ / Mac OS 8.6-9.2</td>
            <td class="center hidden-phone">1.7</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Gecko</td>
            <td>Netscape Browser 8</td>
            <td>Win 98SE+</td>
            <td class="center hidden-phone">1.7</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Gecko</td>
            <td>Netscape Navigator 9</td>
            <td>Win 98+ / OSX.2+</td>
            <td class="center hidden-phone">1.8</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Gecko</td>
            <td>Mozilla 1.0</td>
            <td>Win 95+ / OSX.1+</td>
            <td class="center hidden-phone">1</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Gecko</td>
            <td>Mozilla 1.1</td>
            <td>Win 95+ / OSX.1+</td>
            <td class="center hidden-phone">1.1</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Gecko</td>
            <td>Mozilla 1.2</td>
            <td>Win 95+ / OSX.1+</td>
            <td class="center hidden-phone">1.2</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Gecko</td>
            <td>Mozilla 1.3</td>
            <td>Win 95+ / OSX.1+</td>
            <td class="center hidden-phone">1.3</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Gecko</td>
            <td>Mozilla 1.4</td>
            <td>Win 95+ / OSX.1+</td>
            <td class="center hidden-phone">1.4</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Gecko</td>
            <td>Mozilla 1.5</td>
            <td>Win 95+ / OSX.1+</td>
            <td class="center hidden-phone">1.5</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Gecko</td>
            <td>Mozilla 1.6</td>
            <td>Win 95+ / OSX.1+</td>
            <td class="center hidden-phone">1.6</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Gecko</td>
            <td>Mozilla 1.7</td>
            <td>Win 98+ / OSX.1+</td>
            <td class="center hidden-phone">1.7</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Gecko</td>
            <td>Mozilla 1.8</td>
            <td>Win 98+ / OSX.1+</td>
            <td class="center hidden-phone">1.8</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Gecko</td>
            <td>Seamonkey 1.1</td>
            <td>Win 98+ / OSX.2+</td>
            <td class="center hidden-phone">1.8</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Gecko</td>
            <td>Epiphany 2.20</td>
            <td>Gnome</td>
            <td class="center hidden-phone">1.8</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Webkit</td>
            <td>Safari 1.2</td>
            <td>OSX.3</td>
            <td class="center hidden-phone">125.5</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Webkit</td>
            <td>Safari 1.3</td>
            <td>OSX.3</td>
            <td class="center hidden-phone">312.8</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Webkit</td>
            <td>Safari 2.0</td>
            <td>OSX.4+</td>
            <td class="center hidden-phone">419.3</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Webkit</td>
            <td>Safari 3.0</td>
            <td>OSX.4+</td>
            <td class="center hidden-phone">522.1</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Webkit</td>
            <td>OmniWeb 5.5</td>
            <td>OSX.4+</td>
            <td class="center hidden-phone">420</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Webkit</td>
            <td>iPod Touch / iPhone</td>
            <td>iPod</td>
            <td class="center hidden-phone">420.1</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Webkit</td>
            <td>S60</td>
            <td>S60</td>
            <td class="center hidden-phone">413</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Presto</td>
            <td>Opera 7.0</td>
            <td>Win 95+ / OSX.1+</td>
            <td class="center hidden-phone">-</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Presto</td>
            <td>Opera 7.5</td>
            <td>Win 95+ / OSX.2+</td>
            <td class="center hidden-phone">-</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Presto</td>
            <td>Opera 8.0</td>
            <td>Win 95+ / OSX.2+</td>
            <td class="center hidden-phone">-</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Presto</td>
            <td>Opera 8.5</td>
            <td>Win 95+ / OSX.2+</td>
            <td class="center hidden-phone">-</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Presto</td>
            <td>Opera 9.0</td>
            <td>Win 95+ / OSX.3+</td>
            <td class="center hidden-phone">-</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Presto</td>
            <td>Opera 9.2</td>
            <td>Win 88+ / OSX.3+</td>
            <td class="center hidden-phone">-</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Presto</td>
            <td>Opera 9.5</td>
            <td>Win 88+ / OSX.3+</td>
            <td class="center hidden-phone">-</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Presto</td>
            <td>Opera for Wii</td>
            <td>Wii</td>
            <td class="center hidden-phone">-</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Presto</td>
            <td>Nokia N800</td>
            <td>N800</td>
            <td class="center hidden-phone">-</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Presto</td>
            <td>Nintendo DS browser</td>
            <td>Nintendo DS</td>
            <td class="center hidden-phone">8.5</td>
            <td class="center hidden-phone">C/A<sup>1</sup></td>
        </tr>
        <tr class="gradeC">
            <td>KHTML</td>
            <td>Konqureror 3.1</td>
            <td>KDE 3.1</td>
            <td class="center hidden-phone">3.1</td>
            <td class="center hidden-phone">C</td>
        </tr>
        <tr class="gradeA">
            <td>KHTML</td>
            <td>Konqureror 3.3</td>
            <td>KDE 3.3</td>
            <td class="center hidden-phone">3.3</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>KHTML</td>
            <td>Konqureror 3.5</td>
            <td>KDE 3.5</td>
            <td class="center hidden-phone">3.5</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeX">
            <td>Tasman</td>
            <td>Internet Explorer 4.5</td>
            <td>Mac OS 8-9</td>
            <td class="center hidden-phone">-</td>
            <td class="center hidden-phone">X</td>
        </tr>
        <tr class="gradeC">
            <td>Tasman</td>
            <td>Internet Explorer 5.1</td>
            <td>Mac OS 7.6-9</td>
            <td class="center hidden-phone">1</td>
            <td class="center hidden-phone">C</td>
        </tr>
        <tr class="gradeC">
            <td>Tasman</td>
            <td>Internet Explorer 5.2</td>
            <td>Mac OS 8-X</td>
            <td class="center hidden-phone">1</td>
            <td class="center hidden-phone">C</td>
        </tr>
        <tr class="gradeA">
            <td>Misc</td>
            <td>NetFront 3.1</td>
            <td>Embedded devices</td>
            <td class="center hidden-phone">-</td>
            <td class="center hidden-phone">C</td>
        </tr>
        <tr class="gradeA">
            <td>Misc</td>
            <td>NetFront 3.4</td>
            <td>Embedded devices</td>
            <td class="center hidden-phone">-</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeX">
            <td>Misc</td>
            <td>Dillo 0.8</td>
            <td>Embedded devices</td>
            <td class="center hidden-phone">-</td>
            <td class="center hidden-phone">X</td>
        </tr>
        <tr class="gradeX">
            <td>Misc</td>
            <td>Links</td>
            <td>Text only</td>
            <td class="center hidden-phone">-</td>
            <td class="center hidden-phone">X</td>
        </tr>
        <tr class="gradeX">
            <td>Misc</td>
            <td>Lynx</td>
            <td>Text only</td>
            <td class="center hidden-phone">-</td>
            <td class="center hidden-phone">X</td>
        </tr>
        <tr class="gradeC">
            <td>Misc</td>
            <td>IE Mobile</td>
            <td>Windows Mobile 6</td>
            <td class="center hidden-phone">-</td>
            <td class="center hidden-phone">C</td>
        </tr>
        <tr class="gradeC">
            <td>Misc</td>
            <td>PSP browser</td>
            <td>PSP</td>
            <td class="center hidden-phone">-</td>
            <td class="center hidden-phone">C</td>
        </tr>
        <tr class="gradeU">
            <td>Other browsers</td>
            <td>All others</td>
            <td>-</td>
            <td class="center hidden-phone">-</td>
            <td class="center hidden-phone">U</td>
        </tr>
        </tbody>
        <tfoot>
        <tr>
            <th>Rendering engine</th>
            <th>Browser</th>
            <th>Platform(s)</th>
            <th class="hidden-phone">Engine version</th>
            <th class="hidden-phone">CSS grade</th>
        </tr>
        </tfoot>
        </table>
        </div>
        </div>
        </section>
        </div>
        </div>
        <div class="row">
        <div class="col-sm-12">
        <section class="panel">
        <header class="panel-heading">
            DataTables hidden row details example
            <span class="tools pull-right">
                <a href="javascript:;" class="fa fa-chevron-down"></a>
                <a href="javascript:;" class="fa fa-times"></a>
             </span>
        </header>
        <div class="panel-body">
        <div class="adv-table">
        <table class="display table table-bordered" id="hidden-table-info">
        <thead>
        <tr>
            <th>Rendering engine</th>
            <th>Browser</th>
            <th class="hidden-phone">Platform(s)</th>
            <th class="hidden-phone">Engine version</th>
            <th class="hidden-phone">CSS grade</th>
        </tr>
        </thead>
        <tbody>
        <tr class="gradeX">
            <td>Trident</td>
            <td>Internet
                Explorer 4.0</td>
            <td class="hidden-phone">Win 95+</td>
            <td class="center hidden-phone">4</td>
            <td class="center hidden-phone">X</td>
        </tr>
        <tr class="gradeC">
            <td>Trident</td>
            <td>Internet
                Explorer 5.0</td>
            <td class="hidden-phone">Win 95+</td>
            <td class="center hidden-phone">5</td>
            <td class="center hidden-phone">C</td>
        </tr>
        <tr class="gradeA">
            <td>Trident</td>
            <td>Internet
                Explorer 5.5</td>
            <td class="hidden-phone">Win 95+</td>
            <td class="center hidden-phone">5.5</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Trident</td>
            <td>Internet
                Explorer 6</td>
            <td class="hidden-phone">Win 98+</td>
            <td class="center hidden-phone">6</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Trident</td>
            <td>Internet Explorer 7</td>
            <td class="hidden-phone">Win XP SP2+</td>
            <td class="center hidden-phone">7</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Trident</td>
            <td>AOL browser (AOL desktop)</td>
            <td class="hidden-phone">Win XP</td>
            <td class="center hidden-phone">6</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Gecko</td>
            <td>Firefox 1.0</td>
            <td class="hidden-phone">Win 98+ / OSX.2+</td>
            <td class="center hidden-phone">1.7</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Gecko</td>
            <td>Firefox 1.5</td>
            <td class="hidden-phone">Win 98+ / OSX.2+</td>
            <td class="center hidden-phone">1.8</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Gecko</td>
            <td>Firefox 2.0</td>
            <td class="hidden-phone">Win 98+ / OSX.2+</td>
            <td class="center hidden-phone">1.8</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Gecko</td>
            <td>Firefox 3.0</td>
            <td class="hidden-phone">Win 2k+ / OSX.3+</td>
            <td class="center hidden-phone">1.9</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Gecko</td>
            <td>Camino 1.0</td>
            <td class="hidden-phone">OSX.2+</td>
            <td class="center hidden-phone">1.8</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Gecko</td>
            <td>Camino 1.5</td>
            <td class="hidden-phone">OSX.3+</td>
            <td class="center hidden-phone">1.8</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Gecko</td>
            <td>Netscape 7.2</td>
            <td class="hidden-phone">Win 95+ / Mac OS 8.6-9.2</td>
            <td class="center hidden-phone">1.7</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Gecko</td>
            <td>Netscape Browser 8</td>
            <td class="hidden-phone">Win 98SE+</td>
            <td class="center hidden-phone">1.7</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Gecko</td>
            <td>Netscape Navigator 9</td>
            <td class="hidden-phone">Win 98+ / OSX.2+</td>
            <td class="center hidden-phone">1.8</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Gecko</td>
            <td>Mozilla 1.0</td>
            <td class="hidden-phone">Win 95+ / OSX.1+</td>
            <td class="center hidden-phone">1</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Gecko</td>
            <td>Mozilla 1.1</td>
            <td class="hidden-phone">Win 95+ / OSX.1+</td>
            <td class="center hidden-phone">1.1</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Gecko</td>
            <td>Mozilla 1.2</td>
            <td class="hidden-phone">Win 95+ / OSX.1+</td>
            <td class="center hidden-phone">1.2</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Gecko</td>
            <td>Mozilla 1.3</td>
            <td class="hidden-phone">Win 95+ / OSX.1+</td>
            <td class="center hidden-phone">1.3</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Gecko</td>
            <td>Mozilla 1.4</td>
            <td class="hidden-phone">Win 95+ / OSX.1+</td>
            <td class="center hidden-phone">1.4</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Gecko</td>
            <td>Mozilla 1.5</td>
            <td class="hidden-phone">Win 95+ / OSX.1+</td>
            <td class="center hidden-phone">1.5</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Gecko</td>
            <td>Mozilla 1.6</td>
            <td class="hidden-phone">Win 95+ / OSX.1+</td>
            <td class="center hidden-phone">1.6</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Gecko</td>
            <td>Mozilla 1.7</td>
            <td class="hidden-phone">Win 98+ / OSX.1+</td>
            <td class="center hidden-phone">1.7</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Gecko</td>
            <td>Mozilla 1.8</td>
            <td class="hidden-phone">Win 98+ / OSX.1+</td>
            <td class="center hidden-phone">1.8</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Gecko</td>
            <td>Seamonkey 1.1</td>
            <td class="hidden-phone">Win 98+ / OSX.2+</td>
            <td class="center hidden-phone">1.8</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Gecko</td>
            <td>Epiphany 2.20</td>
            <td class="hidden-phone">Gnome</td>
            <td class="center hidden-phone">1.8</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Webkit</td>
            <td>Safari 1.2</td>
            <td class="hidden-phone">OSX.3</td>
            <td class="center hidden-phone">125.5</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Webkit</td>
            <td>Safari 1.3</td>
            <td class="hidden-phone">OSX.3</td>
            <td class="center hidden-phone">312.8</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Webkit</td>
            <td>Safari 2.0</td>
            <td class="hidden-phone">OSX.4+</td>
            <td class="center hidden-phone">419.3</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Webkit</td>
            <td>Safari 3.0</td>
            <td class="hidden-phone">OSX.4+</td>
            <td class="center hidden-phone">522.1</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Webkit</td>
            <td>OmniWeb 5.5</td>
            <td class="hidden-phone">OSX.4+</td>
            <td class="center hidden-phone">420</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Webkit</td>
            <td>iPod Touch / iPhone</td>
            <td class="hidden-phone">iPod</td>
            <td class="center hidden-phone">420.1</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Webkit</td>
            <td>S60</td>
            <td class="hidden-phone">S60</td>
            <td class="center hidden-phone">413</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Presto</td>
            <td>Opera 7.0</td>
            <td class="hidden-phone">Win 95+ / OSX.1+</td>
            <td class="center hidden-phone">-</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Presto</td>
            <td>Opera 7.5</td>
            <td class="hidden-phone">Win 95+ / OSX.2+</td>
            <td class="center hidden-phone">-</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Presto</td>
            <td>Opera 8.0</td>
            <td class="hidden-phone">Win 95+ / OSX.2+</td>
            <td class="center hidden-phone">-</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Presto</td>
            <td>Opera 8.5</td>
            <td class="hidden-phone">Win 95+ / OSX.2+</td>
            <td class="center hidden-phone">-</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Presto</td>
            <td>Opera 9.0</td>
            <td class="hidden-phone">Win 95+ / OSX.3+</td>
            <td class="center hidden-phone">-</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Presto</td>
            <td>Opera 9.2</td>
            <td class="hidden-phone">Win 88+ / OSX.3+</td>
            <td class="center hidden-phone">-</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Presto</td>
            <td>Opera 9.5</td>
            <td class="hidden-phone">Win 88+ / OSX.3+</td>
            <td class="center hidden-phone">-</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Presto</td>
            <td>Opera for Wii</td>
            <td class="hidden-phone">Wii</td>
            <td class="center hidden-phone">-</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Presto</td>
            <td>Nokia N800</td>
            <td class="hidden-phone">N800</td>
            <td class="center hidden-phone">-</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Presto</td>
            <td>Nintendo DS browser</td>
            <td class="hidden-phone">Nintendo DS</td>
            <td class="center hidden-phone">8.5</td>
            <td class="center hidden-phone">C/A<sup>1</sup></td>
        </tr>
        <tr class="gradeC">
            <td>KHTML</td>
            <td>Konqureror 3.1</td>
            <td class="hidden-phone">KDE 3.1</td>
            <td class="center hidden-phone">3.1</td>
            <td class="center hidden-phone">C</td>
        </tr>
        <tr class="gradeA">
            <td>KHTML</td>
            <td>Konqureror 3.3</td>
            <td class="hidden-phone">KDE 3.3</td>
            <td class="center hidden-phone">3.3</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>KHTML</td>
            <td>Konqureror 3.5</td>
            <td class="hidden-phone">KDE 3.5</td>
            <td class="center hidden-phone">3.5</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeX">
            <td>Tasman</td>
            <td>Internet Explorer 4.5</td>
            <td class="hidden-phone">Mac OS 8-9</td>
            <td class="center hidden-phone">-</td>
            <td class="center hidden-phone">X</td>
        </tr>
        <tr class="gradeC">
            <td>Tasman</td>
            <td>Internet Explorer 5.1</td>
            <td class="hidden-phone">Mac OS 7.6-9</td>
            <td class="center hidden-phone">1</td>
            <td class="center hidden-phone">C</td>
        </tr>
        <tr class="gradeC">
            <td>Tasman</td>
            <td>Internet Explorer 5.2</td>
            <td class="hidden-phone">Mac OS 8-X</td>
            <td class="center hidden-phone">1</td>
            <td class="center hidden-phone">C</td>
        </tr>
        <tr class="gradeA">
            <td>Misc</td>
            <td>NetFront 3.1</td>
            <td>Embedded devices</td>
            <td class="center">-</td>
            <td class="center">C</td>
        </tr>
        <tr class="gradeA">
            <td>Misc</td>
            <td>NetFront 3.4</td>
            <td class="hidden-phone">Embedded devices</td>
            <td class="center hidden-phone">-</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeX">
            <td>Misc</td>
            <td>Dillo 0.8</td>
            <td class="hidden-phone">Embedded devices</td>
            <td class="center hidden-phone">-</td>
            <td class="center hidden-phone">X</td>
        </tr>
        <tr class="gradeX">
            <td>Misc</td>
            <td>Links</td>
            <td class="hidden-phone">Text only</td>
            <td class="center hidden-phone">-</td>
            <td class="center hidden-phone">X</td>
        </tr>
        <tr class="gradeX">
            <td>Misc</td>
            <td>Lynx</td>
            <td class="hidden-phone">Text only</td>
            <td class="center hidden-phone">-</td>
            <td class="center hidden-phone">X</td>
        </tr>
        <tr class="gradeC">
            <td>Misc</td>
            <td>IE Mobile</td>
            <td class="hidden-phone">Windows Mobile 6</td>
            <td class="center hidden-phone">-</td>
            <td class="center hidden-phone">C</td>
        </tr>
        <tr class="gradeC">
            <td>Misc</td>
            <td>PSP browser</td>
            <td class="hidden-phone">PSP</td>
            <td class="center hidden-phone">-</td>
            <td class="center hidden-phone">C</td>
        </tr>
        <tr class="gradeU">
            <td>Other browsers</td>
            <td>All others</td>
            <td class="hidden-phone">-</td>
            <td class="center hidden-phone">-</td>
            <td class="center hidden-phone">U</td>
        </tr>
        </tbody>
        </table>

        </div>
        </div>
        </section>
        </div>
        </div>
        </div>
        <!--body wrapper end-->

        <!--footer section start-->
        <footer>
            2014 &copy; AdminEx by ThemeBucket
        </footer>
        <!--footer section end-->


    </div>
    <!-- main content end-->
</section>

<!-- Placed js at the end of the document so the pages load faster -->
<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/jquery-ui-1.9.2.custom.min.js"></script>
<script src="js/jquery-migrate-1.2.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/modernizr.min.js"></script>
<script src="js/jquery.nicescroll.js"></script>

<!--dynamic table-->
<script type="text/javascript" language="javascript" src="js/advanced-datatable/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="js/data-tables/DT_bootstrap.js"></script>
<!--dynamic table initialization -->
<script src="js/dynamic_table_init.js"></script>

<!--common scripts for all pages-->
<script src="js/scripts.js"></script>

</body>
</html>
