<?php

// Create a connection
$conn = mysqli_connect("localhost", "crud", "root","");

if($_POST["action"] == "insert"){
    insert();
}

function insert(){
    global $conn;

    $name = $_POST["name"];
    $email = $_POST["email"];
    $mobile = $_POST["mobile"];
    $department = $_POST["department"];
    $address = $_POST["address"];
    $dob = $_POST["dob"];
    $doj = $_POST["doj"];
    $gender = $_POST["gender"];

    // Check if variable is empty
    if(empty($name) || empty($email) || empty($mobile) || empty($department) || empty($address) || empty($dob) ||
     empty($doj) || empty($gender)){

        //Output
        echo "";
        exit;

     }

    // Check if email still available
     $sameEmail = mysqli_query($conn, "SELECT * FROM employees WHERE email = '$email'");
     if(mysqli_num_rows($sameEmail) > 0){
        //Output
        echo 2;
        exit;
     }

//Insert value to database
$query = "INSERT INTO employees VALUES('', '$name', '$email','$mobile', '$department',
 '$address', '$dob','$doj', '$gender')";
 mysqli_query($conn, $query);
 //Output
 echo 1;
}
