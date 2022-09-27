<?php
    include 'connect.php';
    $sql  = "select * from KhachHang";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);


    echo '
        <div class="table-rep-plugin">
        <div class="table-responsive" data-pattern="priority-columns">
            <table id="tech-companies-1" class="table  table-striped">
                <thead>
                    <tr>
                        <th data-priority="1">Mã Khách</th>
                        <th data-priority="1">Tên khách</th>
                        <th data-priority="3">Giới tính</th>
                        <th data-priority="3">Ngày sinh</th>
                        <th data-priority="6">Số điện thoại</th>
                        <th data-priority="6">Email</th>
                        <th data-priority="6">Địa chỉ</th>
                        <th>Sửa</th>
                        <th>Xoá</th>
                    </tr>
                </thead>
                <tbody>
    ';
    while ($row = $stmt->fetch()) {   
    echo '
                    <tr>
                        <td>'.$row['MaK'].'</td>
                        <td>'.$row['TenK'].'</td>
                        <td>'.$row['GioiTinh'].'</td>
                        <td>'.$row['NgaySinh'].'</td>
                        <td>'.$row['SDT'].'</td>
                        <td>'.$row['Email'].'</td>
                        <td>'.$row['DiaChi'].'</td>
                        <td><a href ="KhachHang-edit.php?MaK='.$row['MaK'].'"  target= "_blank" class="mdi mdi-account-edit"></a></td>
                        <td><a href ="KhachHang-del.php?MaK='.$row['MaK'].'"  target= "_blank" class="mdi mdi-close"></span></td>
                    </tr>
                    
              ' ;
    }


    echo '
        </tbody> </table> </div></div>';

?>
