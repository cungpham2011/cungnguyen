<!DOCTYPE html>
<?php
    session_start();
    if (!isset($_SESSION['login']))  header('location: login/index.php');
?>
<html>

<head>
    <meta charset="utf-8" />
    <title>IDEA STUDIO - Quản lý Rạp Chiếu Phim</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="Assets/images/favicon.ico">

    <!-- Table Responsive css -->
    <link href="plugins/responsive-table/css/rwd-table.min.css" rel="stylesheet" type="text/css" media="screen">

    <!-- App css -->
    <link href="Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="Assets/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="Assets/css/metismenu.min.css" rel="stylesheet" type="text/css" />
    <link href="Assets/css/style.css" rel="stylesheet" type="text/css" />

    <script src="Assets/js/modernizr.min.js"></script>

</head>


<body>

    <!-- Begin page -->
    <div id="wrapper">

        <!-- ========== Left Sidebar Start ========== -->
        <div class="left side-menu">

            <div class="slimscroll-menu" id="remove-scroll">

                <!-- LOGO -->
                <div class="topbar-left">
                    <a href="index.html" class="logo">
                        <span>
                            <!-- <img src="Assets/images/logo.png" alt="" height="22"> -->
                            <!-- logo -->
                        </span>
                        <i>
                            <img src="Assets/images/logo_sm.png" alt="" height="28">
                        </i>
                    </a>
                </div>

                <!-- User box -->
                <div class="user-box">
                    <div class="user-img">
                        <img src="Assets/images/users/avatar-1.jpg" alt="user-img" title="Mat Helme" class="rounded-circle img-fluid">
                    </div>
                    <h5><a href="#"><?php  echo $_SESSION['login'];?></a> </h5>
                    <p class="text-muted">

                    <?php
                        if (isset($_SESSION['admin'])) echo 'Quản lý';
                        else echo 'Nhân viên';
                    ?>
                    </p>
                </div>

                <!--- Sidemenu -->
                <div id="sidebar-menu">

                    <ul class="metismenu" id="side-menu">

                        <!--<li class="menu-title">Navigation</li>-->

                        <li>
                            <a href="index.php?type=0">
                                <i class="fi-air-play"></i> <span> Quản lý bán vé </span>
                            </a>
                        </li>

                        <li>
                            <a href="index.php?type=1">
                                <i class="fi-air-play"></i> <span> Thông tin Suất chiếu </span>
                            </a>
                        </li>

                        <li>
                            <a href="index.php?type=2">
                                <i class="fi-air-play"></i> <span> Thông tin Phim </span>
                            </a>
                        </li>

                        <li>
                            <a href="index.php?type=3">
                                <i class="fi-air-play"></i> <span> Thông tin Phòng Chiếu </span>
                            </a>
                        </li>


                        <li>
                            <a href="index.php?type=4">
                                <i class="fi-air-play"></i> <span> Thông tin Khách hàng </span>
                            </a>
                        </li>

                       <?php
                        if (isset($_SESSION['admin']) && $_SESSION['admin'] === TRUE) {
                            echo '
                            <li>
                            <a href="index.php?type=5">
                                <i class="fi-air-play"></i> <span> Quản lý Nhân viên </span>
                            </a>
                            </li>

                            <li>
                                <a href="index.php?type=6">
                                    <i class="fi-air-play"></i> <span> Bảng lương nhân viên </span>
                                </a>
                            </li>

                            <li>
                                <a href="index.php?type=7">
                                    <i class="fi-air-play"></i> <span>Quản lý tài khoản </span>
                                </a>
                            </li>    
                            ';
                        }
                        else {
                            echo '
                            <li>
                            <a href="index.php?type=5">
                                <i class="fi-air-play"></i> <span> Thông tin Nhân viên </span>
                            </a>
                            </li>

                            <li>
                                <a href="index.php?type=6">
                                    <i class="fi-air-play"></i> <span>Lương </span>
                                </a>
                            </li>';
                        }
                       ?>


                    </ul>

                </div>
                <!-- Sidebar -->

                <div class="clearfix"></div>

            </div>
            <!-- Sidebar -left -->

        </div>
        <!-- Left Sidebar End -->



        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->

        <div class="content-page">

            <!-- Top Bar Start -->
            <div class="topbar">

                <nav class="navbar-custom">

                    <ul class="list-unstyled topbar-right-menu float-right mb-0">
                        <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <img src="Assets/images/users/avatar-1.jpg" alt="user" class="rounded-circle"> <span class="ml-1"><?php  echo $_SESSION['login'];?><i class="mdi mdi-chevron-down"></i> </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown ">
                                <!-- item-->
                                <a href="logout.php" class="dropdown-item notify-item">
                                    <i class="fi-power"></i> <span>Đăng xuất</span>
                                </a>

                            </div>
                        </li>

                    </ul>

                    <ul class="list-inline menu-left mb-0">
                        <li class="float-left">
                            <button class="button-menu-mobile open-left disable-btn">
                                <i class="dripicons-menu"></i>
                            </button>
                        </li>
                        <li>
                            <div class="page-title-box">
                                <h4 class="page-title"><?php
                                                        $t =  isset($_GET['type']) ?  $_GET['type'] : 0;
                                                        if ($t == 0) echo "Quản lý Bán vé";
                                                        if ($t == 1) echo "Thông tin Suất chiếu";
                                                        if ($t == 2) echo "Thông tin Phim";
                                                        if ($t == 3) echo "Thông tin Phòng Chiếu";
                                                        if ($t == 4) echo "Thông tin khách hàng";
                                                        if ($t == 5) echo "Quản lý Nhân viên";
                                                        if ($t == 6) echo "Bảng lương nhân viên";
                                                        if ($t == 7) echo "Quản lý Tài khoản";
                                                        ?></h4>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">IDEA STUDIO</a></li>
                                    <li class="breadcrumb-item"><a href="#">Bảng</a></li>
                                    <li class="breadcrumb-item active">
                                        <?php
                                        if ($t == 0) echo "Quản lý Bán vé";
                                        if ($t == 1) echo "Thông tin Suất chiếu";
                                        if ($t == 2) echo "Thông tin Phim";
                                        if ($t == 3) echo "Thông tin Phòng Chiếu";
                                        if ($t == 4) echo "Thông tin khách hàng";
                                        if ($t == 5) echo "Quản lý Nhân viên";
                                        if ($t == 6) echo "Bảng lương nhân viên";
                                        if ($t == 7) echo "Quản lý Tài khoản";
                                        ?>
                                    </li>
                                </ol>
                            </div>
                        </li>

                    </ul>

                </nav>

            </div>
            <!-- Top Bar End -->



            <!-- Start Page content -->
            <div class="content">

                <div class="container-fluid">

                    <div class="row">
                        <div class="col-12">
                            <div class="card-box">
                                <?php
                                $link ='#';
                                if ($t == 0) $link = 'Ve-add.php';
                                if ($t == 1) $link = 'ChiTietSuatChieu-add.php';
                                if ($t == 2) $link = 'Phim-add.php';
                                if ($t == 3) $link = 'PhongChieu-add.php';
                                if ($t == 4) $link = 'KhachHang-add.php';
                                if ($t == 5) $link = 'NhanVien-add.php';
                                if ($t == 6) $link = 'Luong-add.php';
                                if ($t == 7) $link = 'TaiKhoan-add.php';
                                $btnAdd = ' <div class="btn-group focus-btn-group">
                                    <a href="'.$link.'" target="_blank"><button class="btn btn-default" name="addBtn" style="background-color: #ffffff; border: 1px solid rgba(49, 58, 70, 0.3);">
                                    <span class="glyphicon glyphicon-screenshot"></span> Thêm</button></a>
                               </div>';
                                if (isset($_SESSION['admin']) && $_SESSION['admin']) {
                                        echo $btnAdd;
                                }
                                if ($t == 0) {
                                    if (!isset($_SESSION['admin'])) echo $btnAdd;
                                    include 'Ve-page.php';
                                 
                                }
                                if ($t == 1) include 'ChiTietSuatChieu-page.php';
                                if ($t == 2) include 'Phim-page.php';
                                if ($t == 3) include 'PhongChieu-page.php';
                                if ($t == 4) {
                                    if (!isset($_SESSION['admin'])) echo $btnAdd;
                                    include 'KhachHang-page.php';
                                } 
                                if ($t == 5) include 'NhanVien-page.php';
                                if ($t == 6) include 'Luong-page.php';
                                if ($t == 7)    include 'TaiKhoan-page.php';
                                  
                                

                                ?>

                                <!-- <div class="table-rep-plugin">
                                    <div class="table-responsive" data-pattern="priority-columns">
                                        <table id="tech-companies-1" class="table  table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Company</th>
                                                    <th data-priority="1">Last Trade</th>
                                                    <th data-priority="3">Trade Time</th>
                                                    <th data-priority="1">Change</th>
                                                    <th data-priority="3">Prev Close</th>
                                                    <th data-priority="3">Open</th>
                                                    <th data-priority="6">Bid</th>
                                                    <th data-priority="6">Ask</th>
                                                    <th data-priority="6">1y Target Est</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th>GOOG <span class="co-name">Google Inc.</span></th>
                                                    <td>597.74</td>
                                                    <td>12:12PM</td>
                                                    <td>14.81 (2.54%)</td>
                                                    <td>582.93</td>
                                                    <td>597.95</td>
                                                    <td>597.73 x 100</td>
                                                    <td>597.91 x 300</td>
                                                    <td>731.10</td>
                                                </tr>
                                                <tr>
                                                    <th>AAPL <span class="co-name">Apple Inc.</span></th>
                                                    <td>378.94</td>
                                                    <td>12:22PM</td>
                                                    <td>5.74 (1.54%)</td>
                                                    <td>373.20</td>
                                                    <td>381.02</td>
                                                    <td>378.92 x 300</td>
                                                    <td>378.99 x 100</td>
                                                    <td>505.94</td>
                                                </tr>
                                                <tr>
                                                    <th>AMZN <span class="co-name">Amazon.com Inc.</span></th>
                                                    <td>191.55</td>
                                                    <td>12:23PM</td>
                                                    <td>3.16 (1.68%)</td>
                                                    <td>188.39</td>
                                                    <td>194.99</td>
                                                    <td>191.52 x 300</td>
                                                    <td>191.58 x 100</td>
                                                    <td>240.32</td>
                                                </tr>
                                               

                                            </tbody>
                                        </table>
                                    </div>

                                </div> -->

                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                </div>
                <!-- container -->

            </div>
            <!-- content -->

            <footer class="footer text-right">
                2021 © IDEA STUDIO - Hệ Thống Quản Lý Rạp Chiếu Phim
            </footer>

        </div>


        <!-- ============================================================== -->
        <!-- End Right content here -->
        <!-- ============================================================== -->


    </div>
    <!-- END wrapper -->



    <!-- jQuery  -->
    <script src="Assets/js/jquery.min.js"></script>
    <script src="Assets/js/popper.min.js"></script>
    <script src="Assets/js/bootstrap.min.js"></script>
    <script src="Assets/js/metisMenu.min.js"></script>
    <script src="Assets/js/waves.js"></script>
    <script src="Assets/js/jquery.slimscroll.js"></script>

    <!-- responsive-table-->
    <script src="plugins/responsive-table/js/rwd-table.min.js" type="text/javascript"></script>

    <!-- App js -->
    <script src="Assets/js/jquery.core.js"></script>
    <script src="Assets/js/jquery.app.js"></script>

    <script>
        $(function() {
            $('.table-responsive').responsiveTable({
                addDisplayAllBtn: 'btn btn-secondary'
            });
        });
    </script>

</body>

</html>