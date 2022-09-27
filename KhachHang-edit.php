<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa thông tin khách</title>
    <!-- App favicon -->
    <link rel="shortcut icon" href="Assets/images/favicon.ico">

    <!-- App css -->
    <link href="Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="Assets/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="Assets/css/metismenu.min.css" rel="stylesheet" type="text/css" />
    <link href="Assets/css/style.css" rel="stylesheet" type="text/css" />

    <script src="Assets/js/modernizr.min.js"></script>
</head>

<body>
    <form action="KhachHang-edit.php?MaK=<?php echo $_GET['MaK']; ?>" method="post">
        <div class="container">
            <div class="col-md-12">
                <div class="card-box">
                    <h4 class="m-t-0 m-b-30 header-title"><b>Sửa khách: <span style="color: red;"> <?php echo $_GET['MaK']; ?></span> </b></h4>

                    <form class="form-horizontal" role="form">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-3 col-form-label">Nhập tên khách</label>
                            <div class="col-9">
                                <input type="" class="form-control" required id="TenK" name = "TenK" placeholder="Tên khách">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-3 col-form-label">Nhập giới tính</label>
                            <div class="col-9">
                                <input type="" class="form-control" required id="GioiTinh"  name="GioiTinh" placeholder="Giới tính">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword5" class="col-3 col-form-label">Nhập ngày sinh</label>
                            <div class="col-9">
                                <input type="date" class="form-control" required id="NgaySinh" name="NgaySinh" placeholder="Ngày sinh">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-3 col-form-label">Nhập số điện thoại</label>
                            <div class="col-9">
                                <input type="" class="form-control" required id="SDT" name = "SDT" placeholder="Số điện thoại">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-3 col-form-label">Nhập email</label>
                            <div class="col-9">
                                <input type="" class="form-control" required id="Email" name = "Email" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-3 col-form-label">Nhập địa chỉ</label>
                            <div class="col-9">
                                <input type="" class="form-control" required id="DiaChi" name = "DiaChi" placeholder="Địa chỉ">
                            </div>
                        </div>
                        <div class="form-group mb-0 justify-content-end row">
                            <div class="col-9">
                                <button type="submit" name = "btnEdit" class="btn btn-info waves-effect waves-light">Sửa</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </form>
</body>



<!-- jQuery  -->
<script src="Assets/js/jquery.min.js"></script>
<script src="Assets/js/popper.min.js"></script>
<script src="Assets/js/bootstrap.min.js"></script>
<script src="Assets/js/metisMenu.min.js"></script>
<script src="Assets/js/waves.js"></script>
<script src="Assets/js/jquery.slimscroll.js"></script>

<!-- App js -->
<script src="Assets/js/jquery.core.js"></script>
<script src="Assets/js/jquery.app.js"></script>


</html>

<?php 
    if (isset($_POST['btnEdit'])) {
        include 'connect.php';

        $MaK = $_GET['MaK'];
        $TenK = $_POST['TenK'];
        $GioiTinh = $_POST['GioiTinh'];
        $NgaySinh = $_POST['NgaySinh'];
        $SDT = $_POST['SDT'];
        $Email = $_POST['Email'];
        $DiaChi = $_POST['DiaChi'];
        
        // echo $id . $MaPhim . $MaPC . $LoaiPhim. $LichChieu;

         // Prepare statement
        $sql = "Update KhachHang set TenK = N'$TenK', GioiTinh =  N'$GioiTinh', NgaySinh = '$NgaySinh', SDT = N'$SDT', Email =  N'$Email', DiaChi = N'$DiaChi'";
        $sql = $sql . "where MaK = '$MaK'";
       

        // execute the query
        
        try {
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            // echo a message to say the UPDATE succeeded
          
                echo "<script type='text/javascript'> alert('Cập nhật thành công!');</script>";
        } catch (Exception) {

            echo "<script type='text/javascript'> alert('Cập nhật thất bại, vui lòng thử lại!');</script>";
            
        }
        

        

    }
?>