<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa thông tin lương</title>
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
    <form action="Luong-edit.php?MaPhim=<?php echo $_GET['MaL']; ?>" method="post">
        <div class="container">
            <div class="col-md-12">
                <div class="card-box">
                    <h4 class="m-t-0 m-b-30 header-title"><b>Sửa lương: <span style="color: red;"> <?php echo $_GET['MaL']; ?></span> </b></h4>

                    <form class="form-horizontal" role="form">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-3 col-form-label">Nhập mã nhân viên</label>
                            <div class="col-9">
                                <input type="" class="form-control" required id="MaNV" name = "MaNV" placeholder="Mã nhân viên">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-3 col-form-label">Nhập lương ban đầu</label>
                            <div class="col-9">
                                <input type="" class="form-control" required id="LuongBanDau"  name="LuongBanDau" placeholder="Lương ban đầu">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-3 col-form-label">Nhập ngày nhận lương</label>
                            <div class="col-9">
                                <input type="date" class="form-control" required id="NgayNhanLuong"  name="NgayNhanLuong" placeholder="Ngày nhận lương">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-3 col-form-label">Nhập số ngày làm</label>
                            <div class="col-9">
                                <input type="number" class="form-control" required id="SoNgayLam" name = "SoNgayLam" min="0" max="31">
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

        $MaL = $_GET['MaL'];
        $MaNV = $_POST['MaNV'];
        $NgayNhanLuong = $_POST['NgayNhanLuong'];
        $LuongBanDau = $_POST['LuongBanDau'];
        $SoNgayLam = $_POST['SoNgayLam'];
        
        // echo $id . $MaPhim . $MaPC . $LoaiPhim. $LichChieu;

         // Prepare statement
        $sql = "Update Luong set MaNV = '$MaNV', LuongBanDau =  '$LuongBanDau', NgayNhanLuong = '$NgayNhanLuong' SoNgayLam = '$SoNgayLam'";
        $sql = $sql . "where MaL = '$MaL'";
       

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