<?php 

 session_start();

?>


<?php 

 include 'dbconn.php';


 if(isset($_POST['done'])){


    $email = $_POST['email'];

    $password = $_POST['password'];


    $q = "SELECT * from userinfo where email='$email' && password = '$password'";

    $query = mysqli_query($conn,$q);

    $data = mysqli_num_rows($query);

    if($data >0){

        echo "LOG IN SUCCESSFUL";

        header("Location: ../index.php");

        $userinfo = $_SESSION['email'] = $email;
    } 
    else{
        echo "Please Check Your Email And Password"; 


    }
 }



?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Merriweather:wght@700&family=Nunito+Sans&family=Roboto:wght@400;900&display=swap" rel="stylesheet">

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
        background-color: rgb(222 223 229);

    }

    .form-section {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 1rem;
    }

    .button h2 {
        font-size: 3.1rem;
        margin-top: 3rem;
        margin-left: 3rem;
        font-weight: lighter;
    }

    .logo {
        width: 12%;
        height: 8%;
    }

    .logo1 {
        width: 10%;
        height: 8%;
    }

    .btn1 {
        margin: 3rem 0rem;
        background: red;
        border: none;
        border-radius: 5px;
        padding: 1rem 7rem;
        display: flex;
        text-align: center;
        margin-bottom: 1rem;
    }

    .btn1 a {
        color: white;
        text-decoration: none;
        font-size: 20px;
        margin-left: 1rem;
    }

    .btn2 {
        margin: 1rem 0rem;
        background: #47a3f3;
        ;
        border: none;
        border-radius: 5px;
        padding: 1rem 6rem;
        display: flex;
        text-align: center;

    }

    .btn2 a {
        color: white;
        text-decoration: none;
        font-size: 20px;
        margin-left: 1rem;

    }


    .separator {
        display: flex;
        align-items: center;
        margin-bottom: 1.5rem;
    }

    .separator h2 {
        /* padding: 0 4rem; */
        /* padding: 0 18px; */
        padding: 0 40px;

        font-size: 30px;
        margin-top: 0rem;
        margin-left: 0rem;

        opacity: 0.5;
    }

    .separator .line {
        flex: 1;
        height: 3px;
        /* background-color: #000; */
        background-color: #a5a5a5;
    }

    /* Style the input container */
    .input-container {
        display: flex;
        width: 100%;
        margin-bottom: 15px;
    }

    /* Style the form icons */
    .icon {
        padding: 10px;
        background: dodgerblue;
        color: white;
        min-width: 50px;
        text-align: center;
    }

    /* Style the input fields */
    .input-field {
        width: 100%;
        padding: 10px;
        outline: none;
        font-size: 18px;
        font-weight: 500;
    }

    .input-field:focus {
        border: 2px solid dodgerblue;
        font-weight: 500;
        font-size: 18px;

    }

    .input-field::placeholder {
        font-weight: bold;
        opacity: .5;
        color: black;

    }

    /* Set a style for the submit button */
    .btn {
        background-color: dodgerblue;
        color: white;
        padding: 15px 20px;
        border: none;
        cursor: pointer;
        width: 100%;
        opacity: 0.9;
        border-radius: 6px;
        font-size: 25px;
        margin-bottom: 2rem;
    }

    .btn a {
        text-decoration: none;
        font-size: 25px;
        font-weight: 200;
        color: white;
    }

    .btn:hover {
        opacity: 1;
    }

    .p-log {
        text-align: center;
        font-size: 20px;
    }

    .p-log a {
        margin-left: 1rem;
        text-decoration: none;
        color: #007de9;
    }
</style>

<body>
    <div class="container">
        <div class="form-section">
            <div class="button">
                <h2>Create Account</h2>

                <!-- <div class="button1"> -->
                <div class="btn1"><img src="../img/gmail.png" class="logo"><a href="#" arlt="something went wrong">Login
                        via
                        Gmail</a></div>
                <!-- </div> -->

                <!-- <div class="button2"> -->
                <div class="btn2"><img src="../img/facebook.png" class="logo1"><a href="#" arlt="something went wrong">Login
                        via
                        Facebook</a></div>
                <!-- </div> -->

                <!-- <div class="btn1"><a href="#" arlt="something went wrong"><img src="google.png">Login via Facebook</a></div> -->

                <div class="separator">
                    <div class="line"></div>
                    <h2>OR</h2>
                    <div class="line"></div>
                </div>


                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">



                    <div class="input-container">
                        <i class="fa fa-envelope icon size"><img src="../img/email icon.png" alt="" width="30" height="30"></i>
                        <input class="input-field" type="text" placeholder="Email Address" name="email">
                    </div>


                    <div class="input-container">
                        <i class="fa fa-key icon"><img src="../img/paasword icon.png" alt=""></i>
                        <input class="input-field" type="text" placeholder="Password" name="password">
                    </div>


                    <button type="submit" class="btn" name="done"  onclick = "fun();" >Login Now</button>

                    <p class="p-log">Don't Have an account?<a href="sign up.php" alt="something went wrong">Sign Up Here</a></p>
                </form>
            </div>
        </div>
    </div>
</body>


</html>