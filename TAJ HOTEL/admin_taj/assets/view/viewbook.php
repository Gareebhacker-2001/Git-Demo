<?php


$conn = mysqli_connect('localhost', 'root');


mysqli_select_db($conn, 'hoteltaj');



// if($conn){
//     echo 'connecting' ;
// }else{
//     echo ' Not connecting' ;
// }

?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>Booked</title>
</head>
<style>
  .container {
    margin-top: 8rem;
  }
</style>

<body>

  <h1 class="text-dark text-center p text-muted mt-2">HOTEL RESERVATION</h1>

  <div class="container">
    <div class="table-responsive-sm">
      <table class="table align-middle mb-0 bg-white table-striped table-bordered table-hover">
        <thead class="bg-dark text-white">
          <tr>
            <th>ID</th>
            <th>ARRIVAL</th>
            <th>DEPARTURE</th>
            <th>FIRST NAME</th>
            <th>LAST NAME</th>
            <th>EMAIL</th>
            <th>PHONE</th>
            <th>ADULT</th>
            <th>CHILDERN</th>
            <th>ROOM PREFERENCE</th>
            <th>UPDATE</th>
            <th>DELETE</th>
          </tr>

          <?php


          $q = "SELECT * FROM reservation";

          $data =  mysqli_query($conn, $q);

          while ($res = mysqli_fetch_array($data)) {
          ?>
            <tr>
              <td class="text-dark bg-white"><?php echo $res['id']; ?></td>
              <td class="text-dark bg-white"><?php echo $res['arrival']; ?></td>
              <td class="text-dark bg-white"><?php echo $res['departure']; ?></td>
              <td class="text-dark bg-white"><?php echo $res['first_name']; ?></td>
              <td class="text-dark bg-white"><?php echo $res['last_name']; ?></td>
              <td class="text-dark bg-white"><?php echo $res['email']; ?></td>
              <td class="text-dark bg-white"><?php echo $res['phone']; ?></td>
              <td class="text-dark bg-white"><?php echo $res['adults']; ?></td>
              <td class="text-dark bg-white"><?php echo $res['children']; ?></td>
              <td class="text-dark bg-white"><?php echo $res['room_pref']; ?></td>
              <td class="text-dark bg-white"><button type="button" class="btn btn-success"><a href= "../controller/bookupdate.php?id=<?php echo $res['id']; ?>" class="text-white text-decoration-none">UPDATE</a></button></td>
              <td class="text-dark bg-white"><button type="button" class="btn btn-danger"><a href ="../controller/bookdelete.php?id=<?php echo $res['id']; ?>" class="text-white text-decoration-none">DELETE</a></button></td>

            </tr>
          <?php  }  ?>
    </div>
  </div>





  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>