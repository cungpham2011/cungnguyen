<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm phim</title>
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
    <form action="Ve-add.php" method="post">
        <div class="container">
            <div class="col-md-12">
                <div class="card-box">
                    <h4 class="m-t-0 m-b-30 header-title"><b>Bán vé: <span style="color: red;"> </span> </b></h4>

                    <form class="form-horizontal" role="form">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-3 col-form-label">Mã vé</label>
                            <div class="col-9">
                                <input type="" class="form-control" required id="MaVe" name = "MaVe" placeholder="Mã Vé">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-3 col-form-label">Ngày đặt</label>
                            <div class="col-9">
                                <input type="date" class="form-control" required id="NgayDat" name = "NgayDat" placeholder="Ngày đặt (mm-dd-yyyy)">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-3 col-form-label">Ghế</label>
                            <div class="col-9">
                                <input type="" class="form-control" required id="Ghe"  name="Ghe" placeholder="Ghế">
                            </div>
                        </div>
                        <!-- <div class="form-group row">
                            <label for="inputPassword5" class="col-3 col-form-label">Giá vé</label>
                            <div class="col-9">
                                <input type="number" class="form-control" required id="GiaVe" name="GiaVe" min="0">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-3 col-form-label">Giảm giá</label>
                            <div class="col-9">
                            <input type="" class="form-control" required id="GiamGia" name = "GiamGia" placeholder="Giảm giá (0 -> 1)" min="0" max="1">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-3 col-form-label">Giá vé thực</label>
                            <div class="col-9">
                                <input type="" class="form-control" required id="GiaVeThuc"  name="GiaVeThuc" placeholder="Giá Vé thực">
                            </div>
                        </div> -->
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-3 col-form-label">Mã khách mua vé</label>
                            <div class="col-9">
                                <input type="" class="form-control" required id="MaK"  name="MaK" placeholder="Mã khách mua vé">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-3 col-form-label">Mã nhân viên bán vé</label>
                            <div class="col-9">
                                <input type="" class="form-control" required id="MaNV"  name="MaNV" placeholder="Mã nhân viên" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-3 col-form-label">Mã suất chiếu</label>
                            <div class="col-9">
                                <input type="" class="form-control" required id="MaCTSC"  name="MaCTSC" placeholder="Mã suất chiếu" >
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

        $MaVe = $_POST['MaVe'];
        $NgayDat = $_POST['NgayDat'];
        $Ghe = $_POST['Ghe'];
        // $GiaVe = $_POST['GiaVe'];
        // $GiamGia = $_POST['GiamGia'];
        // $GiaVeThuc = $_POST['GiaVeThuc'];
        $MaK = $_POST['MaK'];
        $MaNV = $_POST['MaNV'];
        $MaCTSC = $_POST['MaCTSC'];
        

         // Prepare statement
        $sql = "Insert into Ve(MaVe, NgayDat,Ghe,GiaVe,MaK,MaNV, MaCTSC) values ('$MaVe',
        '$NgayDat', '$Ghe',0, '$MaK', '$MaNV', '$MaCTSC') ";
        // echo $sql;
       
      
        
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
            $sql = "exec proc3";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
        } catch( PDOException $e ) {
            die( "Error executing stored procedure: ".$e->getMessage());
        }
        // execute the query

        

    }
?>