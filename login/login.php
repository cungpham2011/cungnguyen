<?php 
    session_start();
    if (isset($_POST['btnSubmit'])) {
        include '../connect.php';
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "select * from users where username = '$username' and password = '$password'";
    // echo $sql;
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
      
    if ($stmt->rowCount()) {
        // đúng
        $row = $stmt->fetch();
        $_SESSION['login'] = $username;
        $_SESSION['ID'] = $row['ID'];
        if ($row['level'] == 1) $_SESSION['admin'] = TRUE;
         header('location: ../index.php');
    }
    else {
       // echo "sai";
       echo "<script type='text/javascript'> alert('Sai tên tài khoản hoặc mật khẩu!');
       window.location.replace('index.php');
           </script>";

    }
}
    
?>