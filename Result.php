<?php include 'css/css2.html'; ?>

<html>
<head>
<title>Average Health Results</title>
<style>
    * {
    box-sizing: border-box;
}

.img-container {
    float: left;
    width: 40%;
    padding: 5px;
    font-size: 23px;
}

.clearfix::after {
    content: "";
    clear: both;
    display: table;
}

.img-container2
{
 font-size: 23px;
}

.img-container3
{
    float: left;
    width: 40%;
    padding: 5px;
    font-size: 23px;   
}
</style>
</head>
<button <a href="logout.php" style="float:right" type="submit" class="button button-block" value="submit" name="submit" style="display: block; margin:0 auto;"/>Logout</button>
<h1>Average Health Results</h1>
<body>
<form action="result.php" method="POST">
    
    <div class="clearfix">
  <div class="img-container3">
    <div style='text-align:center'> Averages for Males:</div><br></br>
    <div style='text-align:center'> Calories: 2,500 a day</div><br></br>
    <div style='text-align:center'> Exercise: 2 - 2 and a half hours per week (moderate)</div><br></br>
    <div style='text-align:center'> 1 - 1 and a quarter hour per week (vigorous)</div><br></br>
    <div style='text-align:center'> Heart Rate: 60 bpm - 100 bpm</div><br></br>
    <div style='text-align:center'> Blood Pressure: Under 120/ Over 80</div><br></br>
    <div style='text-align:center'> Blood Sugar: 4.0 to 5.9 mmol/L (Before Meal)</div><br></br>
    <div style='text-align:center'> under 7.8 mmol/L (90 minutes after a meal)</div><br></br>
  </div>
        
  <div class="img-container">
    <div style='text-align:right'> Averages for Female :</div><br></br>
    <div style='text-align:right'> Calories: 2,000 a day</div><br></br>
    <div style='text-align:right'> Exercise: 2 - 2 and a half hours per week (moderate)</div><br></br>
    <div style='text-align:right'> 1 - 1 and a quarter hour per week (vigorous)</div><br></br>
    <div style='text-align:right'> Heart Rate: 60 bpm - 100 bpm</div><br></br>
    <div style='text-align:right'> Blood Pressure: Under 120/ Over 80</div><br></br>
    <div style='text-align:right'> Blood Sugar: 4.0 to 5.9 mmol/L (Before Meal)</div><br></br>
    <div style='text-align:right'> under 7.8 mmol/L (90 minutes after a meal)</div><br></br>
  </div>
    </div> <br></br>

    <div class="img-container2">
    <div style='text-align:center'> If any of the above is abnormal, please call a doctor right away!</div><br></br>
    <div style='text-align:center'> Long Island Jewish Hospital: (718)-470-7000</div><br></br>
    <div style='text-align:center'> New York Presbyterian Queens Hospital: (718)-670-2000</div><br></br>
    </div>
</form>
</body>
</html>