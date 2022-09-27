<?php
    include 'connect.php';
    $sql  = "select * from NhanVien";
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
                        <th data-priority="1">Mã NV</th>
                        <th data-priority="3">Tên Nhân Viên</th>
                        <th data-priority="1">Giới tính</th>
                        <th data-priority="3">Ngày sinh</th>
                        <th data-priority="3">SDT</th>
                        <th data-priority="6">Email</th>
                        <th data-priority="6">Địa chỉ</th>
                        <th data-priority="6">Chức vụ</th>
                        <th data-priority="6">Ngày đi làm</th>
                        <th data-priority="6">Mã nhân viên quản lí</th>
                       '.$admin.'
                    </tr>
                </thead>
                <tbody>
    ';
    while ($row = $stmt->fetch()) {   
        if (isset($_SESSION['admin']) && $_SESSION['admin'] === TRUE) {
          $admin2 = '<td><a href ="NhanVien-edit.php?MaNV='.$row['MaNV'].'"  target= "_blank" class="mdi mdi-account-edit"></a></td>
          <td><a href ="NhanVien-del.php?MaNV='.$row['MaNV'].'"  target= "_blank" class="mdi mdi-close"></span></td>';
        }
    echo '
                    <tr>
                        <td>'.$row['MaNV'].'</td>
                        <td>'.$row['TenNV'].'</td>
                        <td>'.$row['GioiTinh'].'</td>
                        <td>'.$row['NgaySinh'].'</td>
                        <td>'.$row['SDT'].'</td>
                        <td>'.$row['Email'].'</td>
                        <td>'.$row['DiaChi'].'</td>
                        <td>'.$row['ChucVu'].'</td>
                        <td>'.$row['NgayDiLam'].'</td>
                        <td>'.$row['MaNVQL'].'</td>
                        '.$admin2.'
                    </tr>
                    
              ' ;
    }


    echo '
        </tbody> </table> </div></div>';

?>
