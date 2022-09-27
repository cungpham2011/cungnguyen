<?php
    include 'connect.php';
    $sql  = "select * from Ve";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);


    echo '
        <div class="table-rep-plugin">
        <div class="table-responsive" data-pattern="priority-columns">
            <table id="tech-companies-1" class="table  table-striped">
                <thead>
                    <tr>
                        <th data-priority="1">Mã Vé</th>
                        <th data-priority="3">Ngày đặt</th>
                        <th data-priority="1">Ghế</th>
                        <th data-priority="3">Giá vé</th>
                        <th data-priority="3">Giảm giá</th>
                        <th data-priority="6">Giá vé thực</th>
                        <th data-priority="6">Mã Khách mua</th>
                        <th data-priority="6">Mã Nhân viên bán</th>
                        <th data-priority="6">Mã Suất chiếu</th>
                    </tr>
                </thead>
                <tbody>
    ';
    while ($row = $stmt->fetch()) {   
        $GiamGia = round($row['GiamGia'], 2);
    echo "
                    <tr>
                        <td>".$row['MaVe']."</td>
                        <td>".$row['NgayDat']."</td>
                        <td>".$row['Ghe']."</td>
                        <td>".$row['GiaVe']."</td>
                        <td>".$GiamGia."</td>
                        <td>".$row['GiaVeThuc']."</td>
                        <td>".$row['MaK']."</td>
                        <td>".$row['MaNV']."</td>
                        <td>".$row['MaCTSC']."</td>
                    </tr>
                    
              " ;
    }


    echo '
        </tbody> </table> </div></div>';

?>
         
       