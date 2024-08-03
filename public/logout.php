<?php
    session_start();
    session_destroy();
    header("Location: index_user.php");
    //unset($_SESSION["username"]);
    //unset($_SESSION["memberName"]);
?>