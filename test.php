<html>
<body>

<form action="test.php" method="POST">
Name: <input type="text" name="name"><br>
Age: <input type="text" name="age"><br>
color: <input type="text" name="color"><br>

a: <input type="text" name="number_1"><br>
b: <input type="text" name="number_2"><br>

length: <input type="text" name="length"><br>
width: <input type="text" name="width"><br>

Celsius: <input type="text" name="Celsius"><br>

c: <input type="text" name="number_3"><br>
d: <input type="text" name="number_4"><br>

basic_salary: <input type="text" name="salary"><br>
allowance: <input type="text" name="allowance"><br>
deduction: <input type="text" name="deduction"><br>

weight: <input type="text" name="weight"><br>
height: <input type="text" name="height"><br>

sentence: <input type="text" name="sentence"><br>

balance: <input type="text" name="balance"><br>
deposit: <input type="text" name="deposit"><br>
withdrawl: <input type="text" name="withdrawl"><br>

mathscore: <input type="text" name="math"><br>
englishscore: <input type="text" name="english"><br>
sciencescore: <input type="text" name="science"><br>

pesos: <input type="text" name="pesos"><br>

distance: <input type="text" name="distance"><br>
fuel_consumption: <input type="text" name="fuelconsumption"><br>
fuel_price: <input type="text" name="fuelprice"><br>
<input type="submit">
</form>

</body>
</html>

<?php
//Introduce yourself
$name = $_POST["name"];
$age = $_POST["age"];
$color = $_POST["color"];
    echo "<h1>Hello, I'm $name, I'm $age, and my favorite color is $color</h1>";
?>

<?php
//simple math
$a = $_POST["number_1"];
$b = $_POST["number_2"];
$sum = $a + $b;
$difference = $a - $b;
$product = ($a * $b);
$quotient = $a / $b;
    echo "<p>The sum of $a and $b is: $sum. the difference is $difference. The product is $product. and the quotient is $quotient</p>";
?>

<?php
//Area and Perimeter of a Rectangle
$length = $_POST["length"];
$width = $_POST["width"];
$area = $length * $width;
$perimeter = 2*($length + $width);
    echo "<p>the area and perimeter of a rectangle with a length of $length and a width of $width is $area and $perimeter respectively</p>";
?>

<?php
// Temperature Converter
$Celsius = $_POST["Celsius"];
$Fahrenheit = ($Celsius * 9/5) + 32;
    echo "<p>In Chicago it is $Celsius&deg;C. or $Fahrenheit&deg;F.</p>";
?>

<?php
//Swapping Variables
$c = $_POST["number_3"];
$d = $_POST["number_4"];
    echo "<p>previously weather showed to be around $c&deg;f. and later to drop to $d&deg;F.</p>";
$temp = $c;
$c = $d;
$d = $temp;

    echo "<p> now after a few days the temp has dropped from $d&deg;f. to $c&deg;f. as expected</p>";
?>

<?php
//Salary Calculator
$basic_salary = $_POST["salary"];
$allowance = $_POST["allowance"];
$deduction = $_POST["deduction"];
$net_salary = $basic_salary + $allowance - $deduction;
    echo "<p>The net salary of someone with a basic salary of $basic_salary, an allowance of $allowance, but a deduction of $deduction is $net_salary</p>";
?>

<?php
//BMI Calculator
$weight = $_POST["weight"];
$height = $_POST["height"];
$BMI = $weight / ($height * $height);
    echo "<p>the BMI of someone who weighs $weight kilograms and is $height tall would be $BMI</p>";
?>

<?php
//String Manipulation
$sentence = $_POST["sentence"];
    echo "<p>$sentence</p>";
$charactercount = strlen($sentence);
    echo "that sentence has $charactercount characters and ";
$wordcount = str_word_count($sentence);
    echo "that sentence also has $wordcount words";
?>

<?php
// Bank Account Simulation
$balance = $_POST["balance"];
$deposit = $_POST["deposit"];
$withdrawl = $_POST["withdrawl"];
$balancedeposit = $balance + $deposit;
$balancewithdrawl = $balance - $withdrawl;
    echo "<p>Current balance is $balance. if you withdraw $withdrawl the remaining balance will be $balancewithdrawl</p>";
    echo "<p>If you deposit $deposit instead, your original balance will be $balancedeposit</p>";
?>

<?php
//Simple Grading System
$mathscore = $_POST["math"];
$englishscore = $_POST["english"];
$sciencescore = $_POST["science"];
$average = ($mathscore + $englishscore + $sciencescore) / 3;
if ($average >= 90) {
    echo "your average is $average. you get a grade of A";
} elseif ($average >= 80) {
    echo "your average is $average. you get a grade of B";
} elseif ($average >= 70) {
    echo "your average is $average. you get a grade of C";
} elseif ($average >= 60) {
    echo "your average is $average. you get a grade of F";

} else {"your average is $average. you get a grade of A";}
?>

<?php
//Currency Converter
$pesos = $_POST["pesos"];
$usd = round($pesos / 58.03);
$eur = round($pesos / 67.43);
$jpy = round($pesos / 0.38);
    echo"<p>$pesos pesos, if converted to USD would be $usd, $eur in euros, and $jpy in Japanese Yen.</p>";
?>

<?php
//Travel Cost Estimator
$distance = $_POST["distance"];
$fuel_consumption = $_POST["fuelconsumption"];
$fuel_price = $_POST["fuelprice"];
$computation = round(($distance / $fuel_consumption) * $fuel_price);
    echo "if you were to travek $distance miles and consume $fuel_consumption.km per liter, with the price for fuel being $fuel_price. that would cost you $computation dollars";
?>