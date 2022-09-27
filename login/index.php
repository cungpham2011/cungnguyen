<!DOCTYPE html>

<?php 
  session_start();
  if (isset($_SESSION['login']))  header('location: ../index.php');
?>
<html>
    <head>
        <meta charset="utf-8" />
        <title>IDEA STUDIO - Đăng nhập</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="../Assets/images/favicon.ico">

        <!-- App css -->
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="../Assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="../Assets/css/metismenu.min.css" rel="stylesheet" type="text/css" />
        <link href="../Assets/css/style.css" rel="stylesheet" type="text/css" />

        <script src="../Assets/js/modernizr.min.js"></script>

    </head>


    <body class="account-pages">

        <!-- Begin page -->
        <div class="accountbg" style="background: url('../Assets/images/bg-1.jpg');"></div>

        <div class="wrapper-page account-page-full">

            <div class="card">
                <div class="card-block">

                    <div class="account-box">

                        <div class="card-box p-5">
                            <h2 class="text-uppercase text-center pb-4">
                                <a href="index.html" class="text-success">
                                    <span>IDEA STUDIO</span>
                                </a>
                            </h2>

                            <form class="" action="login.php" method="POST">

                                <div class="form-group m-b-20 row">
                                    <div class="col-12">
                                        <label for="emailaddress">Username</label>
                                        <input class="form-control" type="username" id="username" name = "username" required="" placeholder="Nhập username">
                                    </div>
                                </div>

                                <div class="form-group row m-b-20">
                                    <div class="col-12">
                                        <a href="page-recoverpw.html" class="text-muted pull-right"><small>Quên mật khẩu?</small></a>
                                        <label for="password">Password</label>
                                        <input class="form-control" type="password" required="" id="password" name ="password" placeholder="Nhập mật khẩu">
                                    </div>
                                </div>

                                <div class="form-group row m-b-20">
                                    <div class="col-12">

                                        <div class="checkbox checkbox-custom">
                                            <input id="remember" type="checkbox" checked="">
                                            <label for="remember">
                                                Nhớ tài khoản
                                            </label>
                                        </div>

                                    </div>
                                </div>

                                <div class="form-group row text-center m-t-10">
                                    <div class="col-12">
                                        <button class="btn btn-block btn-custom waves-effect waves-light" type="submit" name = "btnSubmit">Đăng nhập</button>
                                    </div>
                                </div>

                            </form>

                        </div>
                    </div>

                </div>
            </div>

            <div class="m-t-40 text-center">
                <p class="account-copyright">   2021 © IDEA TEAM - Hệ Thống Quản Lý Rạp Chiếu Phim</p>
            </div>

        </div>



        <!-- jQuery  -->
        <script src="../Assets/js/jquery.min.js"></script>
        <script src="../Assets/js/popper.min.js"></script>
        <script src="../Assets/js/bootstrap.min.js"></script>
        <script src="../Assets/js/metisMenu.min.js"></script>
        <script src="../Assets/js/waves.js"></script>
        <script src="../Assets/js/jquery.slimscroll.js"></script>

        <!-- App js -->
        <script src="../Assets/js/jquery.core.js"></script>
        <script src="../Assets/js/jquery.app.js"></script>

    </body>
</html>
