<?php
    // Xử lí xoá ở dây
    echo "Xửa lí xoá";
    $MaPhongChieu = $_GET['MaPhongChieu'];
    include 'connect.php';
    $sql = "delete from PhongChieu where MaPhongChieu = '$MaPhongChieu'";
    
    try {
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        // echo a message to say the UPDATE succeeded
      
            echo "<script type='text/javascript'> alert('Xoá thành công!');
            window.location.replace('index.php?type=3');
                </script>";
    } catch (Exception) {

        echo "<script type='text/javascript'> 
                alert('Xoá thất bại, vui lòng thử lại!');
                window.location.replace('index.php?type=3') 
                </script>";
        
    }
?>
