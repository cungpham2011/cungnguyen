<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa thông tin phim</title>
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
    <form action="Phim-edit.php?MaPhim=<?php echo $_GET['MaPhim']; ?>" method="post">
        <div class="container">
            <div class="col-md-12">
                <div class="card-box">
                    <h4 class="m-t-0 m-b-30 header-title"><b>Sửa phim: <span style="color: red;"> <?php echo $_GET['MaPhim']; ?></span> </b></h4>

                    <form class="form-horizontal" role="form">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-3 col-form-label">Nhập tên phim</label>
                            <div class="col-9">
                                <input type="" class="form-control" required id="TenPhim" name = "TenPhim" placeholder="Tên phim">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-3 col-form-label">Nhập thể loại</label>
                            <div class="col-9">
                                <input type="" class="form-control" required id="TheLoai"  name="TheLoai" placeholder="Thể loại">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword5" class="col-3 col-form-label">Nhập thời lượng</label>
                            <div class="col-9">
                                <input type="number" class="form-control" required id="ThoiLuong" name="ThoiLuong" placeholder="Thời lượng" min="0">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-3 col-form-label">Nhập nhà sản xuất</label>
                            <div class="col-9">
                                <input type="" class="form-control" required id="NhaSX" name = "NhaSX" placeholder="Nhà sản xuất">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-3 col-form-label">Nhập đạo diễn</label>
                            <div class="col-9">
                                <input type="" class="form-control" required id="DaoDien" name = "DaoDien" placeholder="Đạo diễn">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-3 col-form-label">Nhập mô tả</label>
                            <div class="col-9">
                                <input type="" class="form-control" required id="MoTa" name = "MoTa" placeholder="Mô tả">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-3 col-form-label">Nhập năm sản xuất</label>
                            <div class="col-9">
                                <input type="number" class="form-control" required id="NamSX" name = "NamSX" placeholder="Năm sản xuất" min="1000" max="9999">
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

        $MaPhim = $_GET['MaPhim'];
        $TenPhim = $_POST['TenPhim'];
        $TheLoai = $_POST['TheLoai'];
        $ThoiLuong = $_POST['ThoiLuong'];
        $NhaSX = $_POST['NhaSX'];
        $DaoDien = $_POST['DaoDien'];
        $MoTa = $_POST['MoTa'];
        $NamSX = $_POST['NamSX'];
        
        // echo $id . $MaPhim . $MaPC . $LoaiPhim. $LichChieu;

         // Prepare statement
        $sql = "Update Phim set TenPhim = N'$TenPhim', TheLoai =  N'$TheLoai', ThoiLuong = '$ThoiLuong', NhaSX = N'$NhaSX', DaoDien =  N'$DaoDien', MoTa = N'$MoTa', NamSX = '$NamSX' ";
        $sql = $sql . "where MaPhim = '$MaPhim'";
       

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