<?php 
include 'css/css2.html'; 
?>

<!DOCTYPE html>
<html>
<head>
<title>Customer Information</title>
</head>
<button <a href="logout.php" style="float:right" type="submit" class="button button-block" value="submit" name="submit" style="display: block; margin:0 auto;"/>Logout</button>
<h1>Health Tracker</h1>
<body>
    
    <form action="register2.php" method="POST">
   
    <div style='text-align:center'>Gender:</div>
    <div> <input type="text" name="gender" style="display: block; margin:0 auto;"><br><br> </div>
    <div style='text-align:center'>Age:</div>
    <div> <input type="text" name="age" style="display: block; margin:0 auto;"><br><br> </div>
    <div style='text-align:center'>Weight:</div>
    <div> <input type="text" name="weight" style="display: block; margin:0 auto;"><br><br> </div>
    <div style='text-align:center'>Height:</div>
    <div> <input type="text" name="height" style="display: block; margin:0 auto;"><br><br> </div>
    <div style='text-align:center'>Daily Calorie Intake:</div>
    <div> <input type="text" name="calorie" style="display: block; margin:0 auto;"><br><br> </div>
    <div style='text-align:center'>Exercise Level:</div>
    <div> <input type="text" name="exercise" style="display: block; margin:0 auto;"><br><br> </div>
    <div style='text-align:center'>Heart Rate:</div> 
    <div> <input type="text" name="heartrate" style="display: block; margin:0 auto;"><br><br> </div>
    <div style='text-align:center'>Blood Pressure:</div>
    <div> <input type="text" name="pressure" style="display: block; margin:0 auto;"><br><br> </div>
    <div style='text-align:center'>Blood Sugar:</div>
    <div> <input type="text" name="sugar" style="display: block; margin:0 auto;"><br><br> </div>

    <button type="submit" class="button button-block" value="submit" name="submit" style="display: block; margin:0 auto;"/>Submit</button>
    
    
</form>
</body>
</html>
