<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Melon Farm</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.1.0/fonts/remixicon.css" rel="stylesheet" >
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">
    <link rel="shortcut icon" type="img/png" href="img/muk.png">
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->


    <!-- Template Stylesheet -->

    <link href="css/style1.css" rel="stylesheet">
    <!-- icon -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

   
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Noto+Sans+Thai&display=swap');
        </style>

</head>

<body>
    <div class="container">
        
        <!-- Sign In Start -->

  
            <div class="containerContent">
                <!--  <h3>ยินดีต้อนรับ</h3>-->
                <h1>เข้าสู่ระบบ</h1>
                <form action="check_login.php" method="post">
                <label for="username">ชื่อผู้ใช้งาน</label>
                <div class="inputRow">
                    <input type="text" class="form-control" id="username" name="username" placeholder="" required>
                </div>
                <label for="password">รหัสผ่าน</label>
                <div class="inputRow">
                    <input type="password" class="form-control" id="password" name="password" placeholder="" required>
                    <span id="password-eye"><i class="ri-eye-off-line"></i></span>
                </div>  
                <button style="font-family: 'Noto Sans Thai', sans-serif; color:black;" type="submit" id="submit" name="submit" >เข้าสู่ระบบ</button>
                
                </form>
                <p >ยังไม่มีบัญชีใช่ไหม? <a href="register.php">สมัครสมาชิก</a></p>
            </div>
            <div class="containerImg">
                <img src="img/1.png" alt="header" />
            </div>
        

        
        <!-- Sign In End -->
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/script1.js"></script>
</body>

</html>
