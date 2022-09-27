<?php
    include 'connect.php';
    $sql  = "select * from Phim";
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
                        <th data-priority="1">Mã Phim</th>
                        <th data-priority="1">Tên Phim</th>
                        <th data-priority="3">Thể Loại</th>
                        <th data-priority="3">Thời lượng</th>
                        <th data-priority="6">Nhà sản xuất</th>
                        <th data-priority="6">Đạo diễn</th>
                        <th data-priority="6">Mô tả</th>
                        <th data-priority="6">Năm sản xuất</th>
                        '.$admin.'
                    </tr>
                </thead>
                <tbody>
    ';
    while ($row = $stmt->fetch()) {  
        if (isset($_SESSION['admin']) && $_SESSION['admin'] === TRUE){
            $admin2 = ' <td><a href ="Phim-edit.php?MaPhim='.$row['MaPhim'].'"  target= "_blank" class="mdi mdi-account-edit"></a></td>
            <td><a href ="Phim-del.php?MaPhim='.$row['MaPhim'].'"  target= "_blank" class="mdi mdi-close"></span></td>';
        }
    echo '
                    <tr>
                        <td>'.$row['MaPhim'].'</td>
                        <td>'.$row['TenPhim'].'</td>
                        <td>'.$row['TheLoai'].'</td>
                        <td>'.$row['ThoiLuong'].'</td>
                        <td>'.$row['NhaSX'].'</td>
                        <td>'.$row['DaoDien'].'</td>
                        <td>'.$row['MoTa'].'</td>
                        <td>'.$row['NamSX'].'</td>
                       '.$admin2.'
                    </tr>
                    
              ' ;
    }


    echo '
        </tbody> </table> </div></div>';

?>
