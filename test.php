<?php
//Introduce yourself
$name = "Cagaid";
$age = 20;
$color = "navy blue";
    echo "<h1>Hello, I'm $name, I'm $age, and my favorite color is $color</h1>";


//simple math
$a = 2;
$b = 3;
$sum = $a + $b;
$difference = $a - $b;
$product = ($a * $b);
$quotient = $a / $b;
    echo "<p>The sum of $a and $b is: $sum. the difference is $difference. The product is $product. and the quotient is $quotient</p>";

//Area and Perimeter of a Rectangle
$length = 6;
$width = 3;
$area = $length * $width;
$perimeter = 2*($length + $width);
    echo "<p>the area and perimeter of a rectangle with a length of $length and a width of $width is $area and $perimeter respectively</p>";

// Temperature Converter

$Celsius = 4;
$Fahrenheit = ($Celsius * 9/5) + 32;
    echo "<p>In Chicago it is $Celsius&deg;C. or $Fahrenheit&deg;F.</p>";

//Swapping Variables
$c = 64;
$d = 32;
    echo "<p>previously weather showed to be around $c&deg;f. and later to drop to $d&deg;F.</p>";
$temp = $c;
$c = $d;
$d = $temp;

    echo "<p> now after a few days the temp has dropped from $d&deg;f. to $c&deg;f. as expected</p>";

//Salary Calculator
$basic_salary = 25000;
$allowance = 5000;
$deduction = 4000;
$net_salary = $basic_salary + $allowance - $deduction;
    echo "<p>The net salary of someone with a basic salary of $basic_salary, an allowance of $allowance, but a deduction of $deduction is $net_salary</p>";

//BMI Calculator
$weight = 64;
$height = 1.778;
$BMI = $weight / ($height * $height);
    echo "<p>the BMI of someone who weighs $weight kilograms and is $height tall would be $BMI</p>";

//String Manipulation
$sentence = "this is a sentence";
    echo "<p>$sentence</p>";
$charactercount = strlen($sentence);
    echo "that sentence has $charactercount characters and ";
$wordcount = str_word_count($sentence);
    echo "that sentence also has $wordcount words";

// Bank Account Simulation
$balance = 5000;
$deposit = 2000;
$withdrawl = 3000;
$balancedeposit = $balance + $deposit;
$balancewithdrawl = $balance - $withdrawl;
    echo "<p>Current balance is $balance. if you withdraw $withdrawl the remaining balance will be $balancewithdrawl</p>";
    echo "<p>If you deposit $deposit instead, your original balance will be $balancedeposit</p>";

//Simple Grading System
$mathscore = 79;
$englishscore = 88;
$sciencescore = 92;
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

//Currency Converter
$pesos = 10000;
$usd = round($pesos / 58.03);
$eur = round($pesos / 67.43);
$jpy = round($pesos / 0.38);
    echo"<p>$pesos pesos, if converted to USD would be $usd, $eur in euros, and $jpy in Japanese Yen.</p>";

//Travel Cost Estimator
$distance = 500;
$fuel_consumption = 26;
$fuel_price = 3;
$computation = round(($distance / $fuel_consumption) * $fuel_price);
    echo "if you were to travek $distance miles and consume $fuel_consumption.km per liter, with the price for fuel being $fuel_price. that would cost you $computation dollars";