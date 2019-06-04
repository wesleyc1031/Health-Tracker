<?php
include 'css/css2.html'; 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "healthtracker";

$conn= mysqli_connect($servername, $username, $password, $dbname);

if(!$conn)
{
 die ("Connection failed: " . mysqli_connect_error());
}
        
    $gender = $age = $weight = $height = $calorie = $exercise = $heartrate = $pressure = $sugar = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
    $gender= test_input($_POST["gender"]);
    $age= test_input($_POST["age"]);
    $weight = test_input($_POST["weight"]);
    $height = test_input($_POST["height"]);
    $calorie = test_input($_POST["calorie"]);
    $exercise = test_input($_POST["exercise"]);
    $heartrate= test_input($_POST["heartrate"]);
    $pressure= test_input($_POST["pressure"]);
    $sugar= test_input($_POST["sugar"]);
    }
    
    function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

    $sql = "INSERT INTO users (gender, age, weight, height, calorie, exercise, heartrate, pressure, sugar)"
    . "VALUES ('$gender','$age','$weight','$height', '$calorie', '$exercise', '$heartrate', '$pressure', '$sugar')";
    
    if(mysqli_query ($conn, $sql))
    {
     echo 'Registered';
     header ("refresh:2 url=result.php");
    }
    
    else
    {
     echo "Error: " .sql . "<br>" . mysqli_error($conn);
    }
    
    mysqli_close ($conn);
?>