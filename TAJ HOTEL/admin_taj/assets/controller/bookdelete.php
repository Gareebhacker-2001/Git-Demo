<?php

$conn =  mysqli_connect('localhost','root');
mysqli_select_db($conn,'hoteltaj');


$id = $_GET['id'];

$q = "DELETE FROM reservation where id=$id";

 

mysqli_query($conn,$q);


header('location:http://localhost/TAJ%20HOTEL/admin_taj/assets/view/viewbook.php');




?>