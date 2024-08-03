<?php 
//("server_name","username_database","password","database_name") *xampp not password*
$conn = new mysqli("sql304.infinityfree.com","if0_37031717","VDNYYNxRbo","if0_37031717_project");
if($conn->connect_error) {
    die("Connection failed: ".$con->connect_error);
}

?>