<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Melon Farm</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
   

    <!-- Template Stylesheet -->
    <link href="css/style1.css" rel="stylesheet">
    <link rel="shortcut icon" type="img/png" href="img/muk.png">

</head>
  
<div class="container">
    <div class="containerContent">
     
      <h1>สร้างบัญชี</h1>
      <p>กรอกรายละเอียด</p>
      <br>
      <form action="login_insert.php" method="post">
        <label for="text">ชื่อ</label>
        <div class="inputRow">
          <input type="text" name="name" class="form-control" id="name" required>
          
        </div>
        <label for="text">เบอร์โทรศัพท์</label>
        <div class="inputRow">
          <input type="tel" name="tel" class="form-control" id="tel" required>
         
        </div>
        <label for="email">อีเมล</label>
        <div class="inputRow">
          <span class="input-group-text" id="inputGroupPrepend">@</span>
          <input type="email" name="email" class="form-control" id="email" required>
          
        </div>
        <label for="username">ชื่อผู้ใช้งาน</label>
        <div class="inputRow">
          <input type="text" name="username" class="form-control" id="username" required>
         
        </div>
        <label for="password">รหัสผ่าน</label>
          <div class="inputRow">
                    <input type="password" class="form-control" id="password" name="password" placeholder="" required>
                    <span id="password-eye"><i class="ri-eye-off-line"></i></span>
          </div>
        <button type="submit" style="font-family: 'Noto Sans Thai', sans-serif; color:black;">สร้างบัญชี</button>
      </form>
      
      <p>มีบัญชีอยู่แล้วใช่ไหม? <a href="login.php">เข้าสู่ระบบ</a></p>
    </div>
    <div class="containerImg">
      <img src="img/1.png" alt="header" />
    </div>
  </div>

  <script src="js/script1.js"></script>
</body>
</html>