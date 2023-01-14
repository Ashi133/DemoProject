<?php

// Connect to the Database 
$servername = "localhost";
$username = "root";
$password = "";
$database = "crud";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Die if connection was not successful
if (!$conn) {
  die("Sorry we failed to connect: " . mysqli_connect_error());
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
  <link rel="stylesheet" href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
  <title>Crud Php</title>
</head>

<body>
  <center>
    <h3>Employee Search</h3>
  </center>
  <div class="container d-flex justify-content-center">
    <form action="" style="width: 50vw; min-width:300px;">
    <div class="mb-3">
      <label for="name" class="form-label">Employee Name</label>
      <input type="text" class="form-control" id="name">
    </div>
    <div class="mb-3">
      <label for="mobile" class="form-label">Mobile</label>
      <input type="tel" class="form-control" id="mobile">
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail" class="form-label">Email</label>
      <input type="email" class="form-control" id="email">
    </div>
    <div class="mb-3">
      <label for="dept" class="form-label">Department</label>
      <select name="department" required>
        <option value="Java Developer">Java Developer</option>
        <option value="Android Developer">Android Developer</option>
        <option value="Php Developer">Php Developer</option>
        <option value="Python Developer">Python Developer</option>
        <option value="Dot.net Developer">Dot.net Developer</option>
        <option value="C Developer">C Developer</option>
      </select>
    </div>
    <a href="add_emp.php" class="btn btn-primary">Add Emp</a>
    <a href="add_dept.php" class="btn btn-primary">Add Dept</a>
    <a class="btn btn-primary">Search</a>
    <!-- <button type="button" class="btn btn-outline-primary">Search</button> -->
    <!-- <button type="button" class="btn btn-outline-primary">Search -->
    <!-- <a href="add.php"></a> -->
    </button>
    <!-- <button type="button" class="btn btn-outline-primary">Add Dept</button> -->
  </div>
  </form>
  <div class="container d-flex justify-content-center my-4">
    <table class="table" id="myTable">
      <thead>
        <tr>
          <th scope="col">emp_name</th>
          <!-- <th scope="col">department</th> -->
          <th scope="col">mobile</th>
          <th scope="col">email</th>
          <th scope="col">actions</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $sql = "SELECT * FROM `employees`";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
          echo "<tr>
           <th scope='row'>" . $row['emp_name'] . "</th>
           <td>" . $row['mobile'] . "</td>
           <td>" . $row['email'] . "</td>
           <td> <button class='view btn btn-sm btn-primary'>View</button> <button class='edit btn btn-sm btn-primary'>Edit</button> <button class='delete btn btn-sm btn-primary'>Delete</button></td>
          </tr>";
          // echo $row['emp_name'] .  ". Department " . $row['department'] . " Mobile " . $row['mobile'] . " Email " . $row['email'];
          // echo "<br>";
        }
        ?>
      </tbody>
    </table>
  </div>
  <hr>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <script src="//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#myTable').DataTable();
    });
  </script>
</body>

</html>