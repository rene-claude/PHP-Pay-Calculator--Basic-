<!DOCTYPE HTML>
<html>
<header>
    <title>Lets do it!</title>
        
</header>
<body>

<form method="GET" action="index.php">
    Enter Hourly Pay: <input type="text" name="wage"></input>
    <button type="submit" name="sHourly">Submit</button>
</form>
<form method="GET" action="index.php">
    Enter Yearly Pay: <input type="text" name="salary"></input>
    <button type="submit" name="sYearly">Submit</button>
</form>
<br><br>

<div class="payReveal">
    <h3>Hourly Pay Breakdown</h3>

<?php
    
    if (isset($_GET['sHourly'])) {
        $hourlyPay = $_GET['wage'];
        $weeklyPay =  $hourlyPay * 40;
        $monthlyPay = $weeklyPay * 4;
        $yearly = $monthlyPay * 12; 

        echo "Hourly to Yearly Wage<br><br>";
        echo "\$" . $hourlyPay ." per hour. <br>";
        echo "\$" . $weeklyPay . " per week. <br>";
        echo "\$" . $monthlyPay . " per month. <br>";
        echo "\$" . $yearly . " per year.";
        
       } 
    elseif (isset($_GET['sYearly'])) {
        echo "Yearly to Hourly Wage<br><br>";
        $yearly = $_GET['salary'];
        $monthlyPay = $yearly / 12;
        $weeklyPay =  $monthlyPay / 40;
        $hourlyPay = $weeklyPay * 8; 

        echo "\$" . round($yearly , 2) . " per year.<br>";
        echo "\$" . round($monthlyPay, 2) . " per month. <br>";
        echo "\$" . round($weeklyPay, 2) . " per week. <br>";
        echo "\$" . round($hourlyPay, 2) ." per hour. <br>";
        
        
        
        
    } else {
        echo "Please enter something";
    }
?>
</div>

</body>

</html>​