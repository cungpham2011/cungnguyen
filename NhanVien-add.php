<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Nhân viên</title>
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
    <form action="NhanVien-add.php" method="post">
        <div class="container">
            <div class="col-md-12">
                <div class="card-box">
                    <h4 class="m-t-0 m-b-30 header-title"><b>Thêm thông tin phim: <span style="color: red;"> </span> </b></h4>

                    <form class="form-horizontal" role="form">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-3 col-form-label">Mã NV</label>
                            <div class="col-9">
                                <input type="" class="form-control" required id="MaNV" name = "MaNV" placeholder="Mã NV">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-3 col-form-label">Tên Nhân viên</label>
                            <div class="col-9">
                                <input type="" class="form-control" required id="TenNV" name = "TenNV" placeholder="Tên Nhân viên">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-3 col-form-label">Giới tính</label>
                            <div class="col-9">
                                <input type="" class="form-control" required id="GioiTinh"  name="GioiTinh" placeholder="Giới tính">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword5" class="col-3 col-form-label">Ngày sinh</label>
                            <div class="col-9">
                                <input type="date" class="form-control" required id="NgaySinh" name="NgaySinh" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-3 col-form-label">SDT</label>
                            <div class="col-9">
                            <input type="" class="form-control" required id="SDT" name = "SDT" placeholder="SDT">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-3 col-form-label">Email</label>
                            <div class="col-9">
                                <input type="" class="form-control" required id="Email"  name="Email" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-3 col-form-label">Địa chỉ</label>
                            <div class="col-9">
                                <input type="" class="form-control" required id="DiaChi"  name="DiaChi" placeholder="Địa chỉ">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-3 col-form-label">Chức vụ</label>
                            <div class="col-9">
                                <input type="" class="form-control" required id="ChucVu"  name="ChucVu" placeholder="Chức vụ">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-3 col-form-label">Ngày đi làm</label>
                            <div class="col-9">
                                <input type="date" class="form-control" required id="NgayDiLam"  name="NgayDiLam" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-3 col-form-label">Mã Nhân viên quản lý</label>
                            <div class="col-9">
                                <input type="" class="form-control" required id="MaNVQL"  name="MaNVQL" placeholder="Mã nhân viên quản lý">
                            </div>
                        </div>
                        <div class="form-group mb-0 justify-content-end row">
                            <div class="col-9">
                                <button type="submit" name = "btnEdit" class="btn btn-info waves-effect waves-light">Thêm</button>
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

        $MaNV = $_POST['MaNV'];
        $MaNVQL = $_POST['MaNVQL'];
        $TenNV = $_POST['TenNV'];
        $GioiTinh = $_POST['GioiTinh'];
        $NgaySinh = $_POST['NgaySinh'];
        $SDT = $_POST['SDT'];
        $Email = $_POST['Email'];
        $DiaChi = $_POST['DiaChi'];
        $ChucVu = $_POST['ChucVu'];
        $NgayDiLam = $_POST['NgayDiLam'];
        
        // echo $id . $MaPhim . $MaPC . $LoaiPhim. $LichChieu;

         // Prepare statement
        $sql = "Insert into NhanVien values ('$MaNV',
        N'$TenNV', N'$GioiTinh', '$NgaySinh', '$SDT', '$Email', N'$DiaChi', N'$ChucVu', '$NgayDiLam', '$MaNVQL') ";
    //    echo $sql;

        // execute the query
        
        try {
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            // echo a message to say the UPDATE succeeded
          
                echo "<script type='text/javascript'> alert('Thêm thành công!');</script>";
        } catch (Exception) {

            echo "<script type='text/javascript'> alert('Thêm thất bại, vui lòng thử lại!');</script>";
            
        }
        

        

    }
?>