<?php
    $serverName = "DESKTOP-ASIQ3PU"; 
    $user = "sa";   
    $password = "123456";  
    $databaseName = "db_RAPCHIEUPHIM_BTL";  

   
    try {
      $conn = new PDO("sqlsrv:server=$serverName;Database=$databaseName", $user, $password);
      // set the PDO error mode to exception
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      // echo "Connected successfully";
    } catch(PDOException $e) {
      die("Connection failed: " . $e->getMessage());
    }

    // VD: Xử lý SELECT

    // $sql  = "select * from Ve";
    // $stmt = $conn->prepare($sql);
    // $stmt->execute();

    // $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    // while ($row = $stmt->fetch()) {   
    //   // Gọi từng row một
    //   print_r($row['MaVe']);
    // }
?>