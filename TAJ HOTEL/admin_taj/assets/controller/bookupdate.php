<?php

include '../DB/conn.php';


if (isset($_POST['submit'])) {



    $id = $_GET['id'];
    $arrival = $_POST['arrival'];
    $departure = $_POST['departure'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $adults = $_POST['adults'];
    $children = $_POST['children'];
    $room_pref = $_POST['room_pref'];






    $q = "UPDATE `reservation` SET `id`='$id',`arrival`='$arrival',`departure`='$departure',`first_name`='$first_name',`last_name`='$last_name',`email`='$email',`phone`='$phone',`adults`='$adults',`children`='$children',`room_pref`='$room_pref' WHERE id=$id";

    mysqli_query($conn, $q);

    header('location:http://localhost/TAJ%20HOTEL/admin_taj/assets/view/viewbook.php');
    // header('location:http://localhost/TAJ%20HOTEL/admin_taj/assets//view/viewbook.php');
}
?>
<?php

$id = $_GET['id'];

$q = "SELECT * FROM reservation where id ='$id'";

$query = mysqli_query($conn, $q);

$data = mysqli_fetch_array($query);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,minimum-scale=1">
    <title>Hotel Reservation Form</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <link rel="stylesheet" href="../css/roomstyle.css">
</head>
<style>

</style>

<body>
    <form class="hotel-reservation-form" method="post" action="">
        <!-- <input type="hidden" value="<?php echo $id; ?>"> -->
        <h1><i class="far fa-calendar-alt"></i>TAJ HOTEL RESERVATION</h1>
        <div class="fields">
            <!-- Input Elements -->
            <div class="wrapper">
                <div>
                    <label for="arrival">Arrival</label>
                    <div class="field">
                        <input id="arrival" type="date" name="arrival" required value="<?php echo $data['arrival']; ?>">
                    </div>
                </div>
                <div class="gap"></div>
                <div>
                    <label for="departure">Departure</label>
                    <div class="field">
                        <input id="departure" type="date" name="departure" required value="<?php echo $data['departure']; ?>">
                    </div>
                </div>
            </div>
            <div class="wrapper">
                <div>
                    <label for="first_name">First Name</label>
                    <div class="field">
                        <i class="fas fa-user"></i>
                        <input id="first_name" type="text" name="first_name" placeholder="First Name" required value="<?php echo $data['first_name']; ?>">
                    </div>
                </div>
                <div class="gap"></div>
                <div>
                    <label for="last_name">Last Name</label>
                    <div class="field">
                        <i class="fas fa-user"></i>
                        <input id="last_name" type="text" name="last_name" placeholder="Last Name" required value="<?php echo $data['last_name']; ?>">
                    </div>
                </div>
            </div>
            <label for="email">Email</label>
            <div class="field">
                <i class="fas fa-envelope"></i>
                <input id="email" type="email" name="email" placeholder="Your Email" required value="<?php echo $data['email']; ?>">
            </div>
            <label for="phone">Phone</label>
            <div class="field">
                <i class="fas fa-phone"></i>
                <input id="phone" type="tel" name="phone" placeholder="Your Phone Number" required value="<?php echo $data['phone'];?>">
            </div>
            <div class="wrapper">
                <div>
                    <label for="adults">Adults</label>
                    <div class="field">
                        <select id="adults" name="adults" required value>
                            <option disabled selected value="">--</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>
                </div>
                <div class="gap"></div>
                <div>
                    <label for="children">Children</label>
                    <div class="field">
                        <select id="children" name="children" required>
                            <option disabled selected value="">--</option>
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>
                </div>
            </div>
            <option value="5"></option>
            <label for="room_pref">Room Preference</label>
            <div class="field">
                <select id="room_pref" name="room_pref" required >
                    <option disabled selected value="">--</option>
                    <option value="STANDARD_ROOM">STANDARD ROOM</option>
                    <option value="SINGLE_ROOM">SINGLE ROOM</option>
                    <option value="FAMILY_ROOM">FAMILY ROOM</option>
                    <option value="LIBRARY_ROOM">LIBRARY ROOM</option>
                    <option value="DELUXE_ROOM">DELUXE ROOM</option>
                    <option value="LUXURY_ROOM">LUXURY ROOM</option>
                    <option value="MASTER_BEDROOM">MASTER BEDROOM</option>
                </select>
            </div>
            <input type="submit" value="Reserve" name="submit">
        </div>
    </form>
</body>

</html>