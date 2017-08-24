<?php
require_once('koneksi.php');
?>
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
            <a href="#"><img src="images/logo.png" alt=""></a>
        </div>

        <div class="logo-icon text-center">
            <a href="#"><img src="images/logo_icon.png" alt=""></a>
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

                </li>
                <li class="menu-list"><a href=""><i class="fa fa-laptop"></i> <span>Layouts</span></a>

                </li>
                <li class="menu-list"><a href=""><i class="fa fa-book"></i> <span>UI Elements</span></a>

                </li>
                <li class="menu-list"><a href=""><i class="fa fa-cogs"></i> <span>Components</span></a>

                </li>

                <li><a href="#"><i class="fa fa-bullhorn"></i> <span>Fontawesome</span></a></li>

                <li class="menu-list"><a href=""><i class="fa fa-envelope"></i> <span>Mail</span></a>

                </li>

                <li class="menu-list"><a href=""><i class="fa fa-tasks"></i> <span>Forms</span></a>

                </li>
                <li class="menu-list"><a href=""><i class="fa fa-bar-chart-o"></i> <span>Charts</span></a>

                </li>
                <li class="menu-list nav-active"><a href="#"><i class="fa fa-th-list"></i> <span>Data Tables</span></a>

                </li>

                <li class="menu-list"><a href="#"><i class="fa fa-map-marker"></i> <span>Maps</span></a>

                </li>
                <li class="menu-list"><a href=""><i class="fa fa-file-text"></i> <span>Extra Pages</span></a>

                </li>
                <li><a href="#"><i class="fa fa-sign-in"></i> <span>Login Page</span></a></li>

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
            <form class="searchform" action="#" method="post">
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

                    </li>
                    <li>
                        <a href="#" class="btn btn-default dropdown-toggle info-number" data-toggle="dropdown">
                            <i class="fa fa-envelope-o"></i>
                            <span class="badge">5</span>
                        </a>

                    </li>
                    <li>
                        <a href="#" class="btn btn-default dropdown-toggle info-number" data-toggle="dropdown">
                            <i class="fa fa-bell-o"></i>
                            <span class="badge">4</span>
                        </a>
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

                            <div class="clearfix">

                                <div class="btn-group" style="float: right;">
                                    <a href="exportData.php">
                                        <button data-toggle="modal" class="btn btn-primary">
                                           <i class="fa fa-file-excel-o"></i>  Cetak CSV
                                        </button>
                                    </a>
                                </div>

                                <div class="btn-group pull-right">
                                </div>
                            </div>

                            <div class="adv-table">
                                <table  class="display table table-bordered table-striped" id="dynamic-table">
                                    <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Author</th>
                                        <th>ISBN</th>
                                        <th>Aksi</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php 
                                    $query = $db->query("SELECT * FROM books ORDER BY id DESC");
                                    $no = 0;
                                    while($data =$query->fetch_assoc()){
                                    $no++;
                                    ?>
                                    <tr class="gradeC">
                                        <td><?php echo $no; ?></td>
                                        <td><?php echo $data['name']; ?></td>
                                        <td><?php echo $data['author'];?></td>
                                        <td><?php echo $data['isbn'];?></td>
                                        <td class="center hidden-phone"><i class="fa fa-eye"></i> <i class="fa fa-pencil"></i> <i class="fa fa-trash-o"></i></td>
                                    </tr>
                                    <?php } ?>

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
            2017 &copy; Ruangprogrammer
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
