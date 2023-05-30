<?php 

session_start();

?>

<?php 

$userpass = $_SESSION['Admin_Password'];

if($userpass == true){

}
else{
   
    header('location:http://localhost/TAJ%20HOTEL/admin_taj/Admin_Login.php');
    
}


?>

<!DOCTYPE html>
<html>

<head>
    <title>Admin</title>

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="../admin_taj/assets/css/style.css">
        </link>


    </head>
</head>

<body>

    <!-- nav -->
    <nav class="navbar navbar-expand-lg navbar-light px-5" style="background-color: #3B3131;">

        <a class="navbar-brand ml-5" href="./index.php">
            <img src="../admin_taj/assets/images/tajlogo.png" width="80" height="80" alt="TAJ HOTEL">
        </a>
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0"></ul>

        <div class="user-cart">

        </div>
    </nav>
    <div class="sidebar" id="mySidebar">
        <div class="side-header">

            <img src="../admin_taj/assets/images/tajlogo.png" width="120" height="120" alt="Swiss Collection">
            <h5 style="margin-top:10px;">Hello, Admin</h5>
        </div>

        <hr style="border:1px solid; background-color:#8a7b6d; border-color:#3B3131;">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
        <a href="./index.php"><i class="fa fa-home"></i> Dashboard</a>
        <a href="./assets//view/viewbook.php" onclick="showCustomers()"><i class="fa fa-book"></i>Booked</a>
        <a href="./assets//view/viewuseraccount.php" onclick="showCategory()"><i class="fa fa-users"></i>Account</a>
        <a href="#productsizes" onclick="showProductSizes()"><i class="fa fa-home"></i>Meeting Room</a>
        <a href="#sizes" onclick="showSizes()"><i class="fa fa-phone"></i>Contact Us</a>



    </div>

    <div id="main">
        <button class="openbtn" onclick="openNav()"><i class="fa fa-home"></i></button>
    </div>

    <div id="main-content" class="container allContent-section py-4">
        <div class="row">
            <div class="col-sm-3">
                <div class="card">
                    <i class="fa fa-users  mb-2" style="font-size: 70px;"></i>
                    <h4 style="color:white;">Users Accounts</h4>
                    <h5 style="color:white;">

                    <?php
                     
                        include '../DB/dbconn.php';

                        $sql="SELECT * from userinfo where email=0";
                        $result=$conn-> query($sql);
                        $count=0;
                        if ($result-> num_rows > 0){
                            while ($row=$result-> fetch_assoc()) {
                    
                                $count=$count+1;
                            }
                        }
                        echo $count;
                                            
                    ?>
                    </h5>
                
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <i class="fa fa-th-large mb-2" style="font-size: 70px;"></i>
                    <h4 style="color:white;">Booked</h4>
                    <h5 style="color:white;">

                    <?php
              

                           include '../DB/dbconn.php';

                           $q = "SELECT * FROM reservation where email=0";

                        //    $result = $conn -> query($q);  // same hai  in dono mai se konsa bhi use kr skate hai

                           $result = mysqli_query($conn,$q); //// same hai 

                           $count =0;

                           if($result-> num_rows >0 ){
                            while($row=$result->fetch_assoc()){

                                $count=$count+1;
                           }
                        }
                        echo $count;

                   ?>

                    </h5>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <i class="fa fa-th mb-2" style="font-size: 70px;"></i>
                    <h4 style="color:white;">Meeting Room</h4>
                    <h5 style="color:white;">


                    <?php
                       
                    //    $sql="SELECT * from product";
                    //    $result=$conn-> query($sql);
                    //    $count=0;
                    //    if ($result-> num_rows > 0){
                    //        while ($row=$result-> fetch_assoc()) {
                   
                    //            $count=$count+1;
                    //        }
                    //    }
                    //    echo $count;
                   ?>

                    </h5>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <i class="fa fa-list mb-2" style="font-size: 70px;"></i>
                    <h4 style="color:white;">Contact</h4>
                    <h5 style="color:white;">

                    <?php
                       
                       include '../DB/dbconn.php';

                       $q = "SELECT * FROM usercontact where email=0";

                    //    $result = $conn -> query($q);  // same hai  in dono mai se konsa bhi use kr skate hai

                       $result = mysqli_query($conn,$q); //// same hai 

                       $count =0;

                       if($result-> num_rows >0 ){
                        while($row=$result->fetch_assoc()){

                            $count=$count+1;
                       }
                    }
                    echo $count;
                   ?>

                    </h5>
                </div>
            </div>
        </div>

    </div>





    <script type="text/javascript" src="../admin_taj/assets/js/script.js"></script>

    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
</body>

</html>