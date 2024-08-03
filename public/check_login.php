<?php
    session_start();
    require_once("connect_db.php");
    
    // Define $username and $password
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $sql = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $sql);
    $rowcount = mysqli_num_rows($result);
    
    if ($rowcount > 0) {
        $row = $result->fetch_assoc();
        $_SESSION['username'] = $username;
        $_SESSION['name'] = $row['name'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['tel'] = $row['tel'];
        $_SESSION['admin_id'] = $row['admin_id'];

        // ตรวจสอบสิทธิ์การเข้าถึง
        // ในตัวอย่างนี้คือตรวจสอบว่ามีการตั้งค่า session ชื่อ 'admin_id' หรือไม่
        if (isset($_SESSION['admin_id'])) {
            // ถ้ามี session 'admin_id' แสดงว่าเป็นผู้ดูแลระบบ
            header('Location: index_admin.php');
            exit();
        } else {
            // ถ้าไม่มี session 'admin_id' แสดงว่าไม่มีสิทธิ์เข้าถึงหน้านี้
            header('Location: index_user.php');
            exit();
        }
    } else {
        echo "login ไม่ถูกต้อง";
        echo '<script>alert("Login Fail.")</script>';
        header('Location: index_user.php');
        exit();
    }
?>
