<?php

include '../../../DB/dbconn.php';


if (isset($_POST['submit'])) {

    $id = $_GET['id'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];


    $q = "UPDATE  `userinfo` SET `id`=$id,`username`='$username',`email`='$email',`phone`='$phone',`password`='$password',`cpassword`='$cpassword' WHERE id=$id";

    mysqli_query($conn, $q);


    //    $q = "UPDATE `userinfo` SET `id`='$id',`username`='$username',`email`='$email',`phone`='$phone',`password`='$password',`cpassword`='$cpassword' WHERE id=$id";

    //     mysqli_query($conn,$q);

    header('location:http://localhost/TAJ%20HOTEL/admin_taj/assets/view/viewuseraccount.php');
}
?>
<?php 

$id = $_GET['id'];

$q = "SELECT * FROM userinfo where id='$id'";

$query = mysqli_query($conn,$q);

$data = mysqli_fetch_array($query);



?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Account</title>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Merriweather:wght@700&family=Nunito+Sans&family=Roboto:wght@400;900&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script type="text/javascript" src="../index.js"></script>

</head>
<style>
    * {
        margin: 0;
        padding: 0;
        top: 0;
        bottom: 0;
        box-sizing: border-box;
        /* font-family: 'Nunito Sans', sans-serif;  */
        font-family: 'Roboto', sans-serif;
    }


    body {
        background: linear-gradient(to right, rgba(132, 250, 176, 1), rgba(143, 211, 244, 1))
    }
</style>

<body>
    <div class="container mt-5">
        <section class="vh-100 bg-image" style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
            <div class="mask d-flex align-items-center h-100 gradient-custom-3">
                <div class="container h-100">
                    <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                            <div class="card" style="border-radius: 15px;">
                                <div class="card-body p-5">
                                    <h2 class="text-uppercase text-center mb-5">Update an account</h2>

                                    <form method="post">

                                        <div class="form-outline mb-4">
                                            <input type="text" id="form3Example1cg" class="form-control form-control-lg" name="username" value="<?php  echo $data['username']; ?>"/>
                                            <label class="form-label" for="form3Example1cg">Your Name</label>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="email" id="form3Example3cg" class="form-control form-control-lg" name="email" value="<?php echo $data['email']; ?>"/>
                                            <label class="form-label" for="form3Example3cg">Your Email</label>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="text" id="form3Example3cg" class="form-control form-control-lg" name="phone" value="<?php echo $data['phone']; ?>"/>
                                            <label class="form-label" for="form3Example3cg">Your Phone</label>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="text" id="form3Example4cg" class="form-control form-control-lg" name="password" value="<?php echo $data['password']; ?>"/>
                                            <label class="form-label" for="form3Example4cg">Password</label>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="text" id="form3Example4cdg" class="form-control form-control-lg" name="cpassword" value="<?php echo $data['cpassword']; ?>"/>
                                            <label class="form-label" for="form3Example4cdg">Repeat your password</label>
                                        </div>



                                        <div class="d-flex justify-content-center">
                                            <button type="submit" class="btn btn-success btn-block btn-lg gradient-custom-4 text-white" name="submit">Update Account</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>


</html>