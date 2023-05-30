<?php 

include '../DB/conn.php';

$id = $_GET['id'];

$q = "DELETE FROM userinfo where id=$id";

mysqli_query($conn,$q);

header('location: http://localhost/TAJ%20HOTEL/admin_taj/assets/view/viewuseraccount.php');
?>