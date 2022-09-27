<?php
    include 'connect.php';
 
    $sql  = "select * from Luong";
    if (!isset($_SESSION['admin'])) {
        $sql = $sql . ' where MaNV = \''. $_SESSION['ID'] .'\'';
    }
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

    $admin ='';
    $admin2='';
    if (isset($_SESSION['admin']) && $_SESSION['admin'] === TRUE) {
        $admin = ' <th>Sửa</th>
        <th>Xoá</th>';
    }
    echo '
        <div class="table-rep-plugin">
        <div class="table-responsive" data-pattern="priority-columns">
            <table id="tech-companies-1" class="table  table-striped">
                <thead>
                    <tr>
                        <th data-priority="1">Mã Lương</th>
                        <th data-priority="3">Mã NV</th>
                        <th data-priority="1">Ngày nhận lương</th>
                        <th data-priority="1">Lương ban đầu (/Ngày)</th>
                        <th data-priority="3">Số ngày làm</th>
                        <th data-priority="6">Thưởng hoặc phạt</th>
                        <th data-priority="1">Lương thực nhận</th>
                       '.$admin.'
                    </tr>
                </thead>
                <tbody>
    ';
    while ($row = $stmt->fetch()) {   
        if (isset($_SESSION['admin']) && $_SESSION['admin'] === TRUE) {
            $admin2 = ' <td><a href ="Luong-edit.php?MaL='.$row['MaL'].'"  target= "_blank" class="mdi mdi-account-edit"></a></td>
            <td><a href ="Luong-del.php?MaL='.$row['MaL'].'"  target= "_blank" class="mdi mdi-close"></span></td>';
        }
    echo '
                    <tr>
                        <td>'.$row['MaL'].'</td>
                        <td>'.$row['MaNV'].'</td>
                        <td>'.$row['NgayNhanLuong'].'</td>
                        <td>'.$row['LuongBanDau'].'</td>
                        <td>'.$row['SoNgayLam'].'</td>
                        <td>'.$row['Thuong'].'</td>
                        <td>'.$row['LuongThucNhan'].'</td>
                       '.$admin2.'
                    </tr>
                    
              ' ;
    }


    echo '
        </tbody> </table> </div></div>';

?>
