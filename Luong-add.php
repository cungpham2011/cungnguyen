<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý lương</title>
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
    <form action="Luong-add.php" method="post">
        <div class="container">
            <div class="col-md-12">
                <div class="card-box">
                    <h4 class="m-t-0 m-b-30 header-title"><b>Quản lý lương <span style="color: red;"> </span> </b></h4>

                    <form class="form-horizontal" role="form">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-3 col-form-label">Mã Lương</label>
                            <div class="col-9">
                                <input type="" class="form-control" required id="MaL" name = "MaL" placeholder="Mã Lương">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-3 col-form-label">Mã Nhân viên</label>
                            <div class="col-9">
                                <input type="" class="form-control" required id="MaNV"  name="MaNV" placeholder="Mã Nhân viên">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-3 col-form-label">Lương ban đầu (VND/ngày)</label>
                            <div class="col-9">
                                <input type="" class="form-control" required id="LuongBanDau" name = "LuongBanDau" placeholder="Lương ban đầu (VND/ngày)">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-3 col-form-label">Ngày nhận lương</label>
                            <div class="col-9">
                                <input type="date" class="form-control" required id="NgayNhanLuong" name = "NgayNhanLuong" placeholder="Ngày nhận lương">
                            </div>
                        </div>
                      
                        <div class="form-group row">
                            <label for="inputPassword5" class="col-3 col-form-label">Số ngày đi làm</label>
                            <div class="col-9">
                             <input type="" class="form-control" required id="SoNgayLam"  name="SoNgayLam" placeholder="Số Ngày Làm" min ="0">
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

        $MaL = $_POST['MaL'];
        $NgayNhanLuong = $_POST['NgayNhanLuong'];
        $MaNV = $_POST['MaNV'];
        $LuongBanDau = $_POST['LuongBanDau'];
        $SoNgayLam = $_POST['SoNgayLam'];
        
        // echo $id . $MaPhim . $MaPC . $LoaiPhim. $LichChieu;

         // Prepare statement
        $sql = "Insert into Luong(MaL, MaNV, NgayNhanLuong,LuongBanDau, SoNgayLam) values ('$MaL',
        '$MaNV', '$NgayNhanLuong','$LuongBanDau', '$SoNgayLam') ";
       

        // execute the query
        
        try {
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            // echo a message to say the UPDATE succeeded
          
                echo "<script type='text/javascript'> alert('Thêm thành công!');</script>";
        } catch (Exception) {

            echo "<script type='text/javascript'> alert('Thêm thất bại, vui lòng thử lại!');</script>";
            
        }
        
          # First procedure
          try {
            $sql = "exec proc2";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
        } catch( PDOException $e ) {
            die( "Error executing stored procedure: ".$e->getMessage());
        }
        // execute the query


        

    }
?>