<?php 

include './DB/dbconn.php';
if (isset($_POST['arrival'], $_POST['departure'], $_POST['first_name'], $_POST['last_name'], $_POST['email'], $_POST['phone'], $_POST['adults'], $_POST['children'], $_POST['room_pref'])) {
	// Process form data

	$arrival = htmlspecialchars($_POST['arrival'],ENT_QUOTES);
	$departure = htmlspecialchars($_POST['departure'],ENT_QUOTES);
	$first_name = htmlspecialchars($_POST['first_name'],ENT_QUOTES);
	$last_name = htmlspecialchars($_POST['last_name'],ENT_QUOTES);
	$email = htmlspecialchars($_POST['email'],ENT_QUOTES);
	$phone = htmlspecialchars($_POST['phone'],ENT_QUOTES);
	$adults = htmlspecialchars($_POST['adults'],ENT_QUOTES);
	$children = htmlspecialchars($_POST['children'],ENT_QUOTES);
	$room_pref = htmlspecialchars($_POST['room_pref'],ENT_QUOTES);


	$q = 	"INSERT INTO `reservation`(`arrival`, `departure`, `first_name`, `last_name`, `email`, `phone`, `adults`, `children`, `room_pref`) VALUES ('$arrival','$departure','$first_name','$last_name','$email','$phone','$adults','$children','$room_pref')";

	mysqli_query($conn,$q);

	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$responses[] = 'Email is not valid!';
	}
	// First name must contain only alphabet characters.
	if (!preg_match('/^[a-zA-Z]+$/', $first_name)) {
		$responses[] = 'First name must contain only characters!';
	}
	// Last name must contain only alphabet characters.
	if (!preg_match('/^[a-zA-Z]+$/', $last_name)) {
		$responses[] = 'Last name must contain only characters!';
	}
}


?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,minimum-scale=1">
		<title>Hotel Reservation Form</title>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
		<link rel="stylesheet" href="./css/roomstyle.css">
	</head>
    <style>
      
    </style>
	<body>
		<form class="hotel-reservation-form" method="post" action="">
			<h1><i class="far fa-calendar-alt"></i>TAJ HOTEL RESERVATION</h1>
			<div class="fields">
				<!-- Input Elements -->
                <div class="wrapper">
	<div>
		<label for="arrival">Arrival</label>
		<div class="field">
			<input id="arrival" type="date" name="arrival" required>
		</div>
	</div>
	<div class="gap"></div>
	<div>
		<label for="departure">Departure</label>
		<div class="field">
			<input id="departure" type="date" name="departure" required>
		</div>
	</div>
</div>
<div class="wrapper">
	<div>
		<label for="first_name">First Name</label>
		<div class="field">
			<i class="fas fa-user"></i>
			<input id="first_name" type="text" name="first_name" placeholder="First Name" required>
		</div>
	</div>
	<div class="gap"></div>
	<div>
		<label for="last_name">Last Name</label>
		<div class="field">
			<i class="fas fa-user"></i>
			<input id="last_name" type="text" name="last_name" placeholder="Last Name" required>
		</div>
	</div>
</div>
<label for="email">Email</label>
<div class="field">
	<i class="fas fa-envelope"></i>
	<input id="email" type="email" name="email" placeholder="Your Email" required>
</div>
<label for="phone">Phone</label>
<div class="field">
	<i class="fas fa-phone"></i>
	<input id="phone" type="tel" name="phone" placeholder="Your Phone Number" required>
</div>
<div class="wrapper">
	<div>
		<label for="adults">Adults</label>
		<div class="field">
			<select id="adults" name="adults" required>
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
	<select id="room_pref" name="room_pref" required>
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
<input type="submit" value="Reserve">
			</div>
		</form>
	</body>

</html>