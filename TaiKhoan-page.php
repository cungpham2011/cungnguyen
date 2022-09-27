<?php
    include 'connect.php';
    $sql  = "select * from users";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);


    echo '
        <div class="table-rep-plugin">
        <div class="table-responsive" data-pattern="priority-columns">
            <table id="tech-companies-1" class="table  table-striped">
                <thead>
                    <tr>
                        <th data-priority="1">Username</th>
                        <th data-priority="3">ID</th>
                        <th data-priority="1">Mật khẩu</th>
                        <th data-priority="3">Quyền hạn</th>
                        <th data-priority="1">Sửa</th>
                        <th data-priority="1">Xoá</th>
                    </tr>
                </thead>
                <tbody>
    ';
    while ($row = $stmt->fetch()) {   
    echo '
                    <tr>
                        <td>'.$row['Username'].'</td>
                        <td>'.$row['ID'].'</td>
                        <td>'.$row['password'].'</td>
                        <td>'.$row['level'].'</td>
                        <td><a href ="TaiKhoan-edit.php?username='.$row['Username'].'"  target= "_blank" class="mdi mdi-account-edit"></a></td>
                        <td><a href ="TaiKhoan-del.php?username='.$row['Username'].'"  target= "_blank" class="mdi mdi-close"></span></td>
                    </tr>
                    
              ' ;
    }


    echo '
        </tbody> </table> </div></div>';

?>