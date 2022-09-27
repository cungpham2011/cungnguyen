<?php
    include 'connect.php';
    $sql  = "select * from view1";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

  
    $admin = '';
    $admin2 = '';
    if (isset($_SESSION['admin']) && $_SESSION['admin'] === TRUE)
        $admin = '<th>Sửa</th>
        <th>Xoá</th>';
    echo '
        <div class="table-rep-plugin">
        <div class="table-responsive" data-pattern="priority-columns">
            <table id="tech-companies-1" class="table  table-striped">
                <thead>
                    <tr>
                        <th data-priority="1">Mã Suất Chiếu</th>
                        <th data-priority="3">Mã Phim</th>
                        <th data-priority="1">Tên Phim</th>
                        <th data-priority="3">Thể Loại</th>
                        <th data-priority="3">Thời lượng</th>
                        <th data-priority="6">Nhà sản xuất</th>
                        <th data-priority="6">Đạo diễn</th>
                        <th data-priority="6">Mã Phòng chiếu</th>
                        <th data-priority="6">Tên phòng chiếu</th>
                        <th data-priority="6">Số lượng ghế</th>
                        <th data-priority="6">Lịch chiếu</th>
                     '.$admin.'
                    </tr>
                </thead>
                <tbody>
    ';
    while ($row = $stmt->fetch()) {   
        $admin = '';
        $admin2 = '';
        if (isset($_SESSION['admin']) && $_SESSION['admin'] === TRUE){
            $admin2 = '  <td><a href ="ChiTietSuatChieu-edit.php?ID='.$row['ID'].'"  target= "_blank" class="mdi mdi-account-edit"></a></td>
            <td><a href ="ChiTietSuatChieu-del.php?ID='.$row['ID'].'"  target= "_blank" class="mdi mdi-close"></span></td>';
        }
    echo '
                    <tr>
                        <td>'.$row['ID'].'</td>
                        <td>'.$row['MaPhim'].'</td>
                        <td>'.$row['TenPhim'].'</td>
                        <td>'.$row['TheLoai'].'</td>
                        <td>'.$row['ThoiLuong'].'</td>
                        <td>'.$row['NhaSX'].'</td>
                        <td>'.$row['DaoDien'].'</td>
                        <td>'.$row['MaPhongChieu'].'</td>
                        <td>'.$row['TenPhongChieu'].'</td>
                        <td>'.$row['SLGhe'].'</td>
                        <td>'.$row['LichChieu'].'</td>
                        '.$admin2.'
                    </tr>
                    
              ' ;
    }


    echo '
        </tbody> </table> </div></div>';

?>
