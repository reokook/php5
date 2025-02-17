 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task1</title>
 </head>
 <body>
    <h1>Q1</h1>
    <?php
function isLeapYear($year) {
    if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
        return true;
    } else {
        return false;
    }
}

$year = 2013;

if (isLeapYear($year)) {
    echo "This year is a leap year.";
} else {
    echo "This year is not a leap year.";
};
?>
<hr>
<h1>Q2</h1>
<?php
function checkSeason($temperature) {
    if ($temperature < 20) {
        return "It is wintertime!";
    } else {
        return "It is summertime!";
    }
}

$temperature = 27;
echo checkSeason($temperature);
?>
<hr>
<h1>Q3</h1>
<?php
function calculateSumOrTriple($firstInteger, $secondInteger) {
    if ($firstInteger == $secondInteger) {
        return ($firstInteger + $secondInteger) * 3;
    } else {
        return $firstInteger + $secondInteger;
    }
}

$firstInteger = 2;
$secondInteger = 2;

$result = calculateSumOrTriple($firstInteger, $secondInteger);
echo "The result is: ($firstInteger + $secondInteger) * 3 = " . $result . "\n";

$firstInteger = 3;
$secondInteger = 5;

$result = calculateSumOrTriple($firstInteger, $secondInteger);
echo "The result is: $firstInteger + $secondInteger = " . $result . "\n";


$temperature = 27;
if ($temperature < 20) {
    echo "It is wintertime!\n";
} else {
    echo "It is summertime!\n";
}
?>

<hr>
<h1>Q4</h1>
<?php
function checkSum($firstInteger, $secondInteger) {
    $sum = $firstInteger + $secondInteger;
    if ($sum == 30) {
        return $sum;
    } else {
        return false;
    }
}

$firstInteger = 10;
$secondInteger = 1;

$result = checkSum($firstInteger, $secondInteger);
if ($result === false) {
    echo 'false';
} else {
    echo 'The sum is: ' . $result;
}
?>

<hr>
<h1>Q5</h1>
<?php
function isMultipleOfThree($number) {
    if ($number > 0 && $number % 3 == 0) {
        return true;
    } else {
        return false;
    }
}
$number = 20;

$result = isMultipleOfThree($number);
if ($result) {
    echo 'true';
} else {
    echo 'false';
}
?>

<hr>
<h1>Q6</h1>
<?php
function isInRange($number) {
    if ($number >= 20 && $number <= 50) {
        return true;
    } else {
        return false;
    }
}
$number = 50;

$result = isInRange($number);
if ($result) {
    echo 'true';
} else {
    echo 'false';
}
?>

<hr>
<h1>Q7</h1>
<?php
function findLargest($num1, $num2, $num3) {
    return max($num1, $num2, $num3);
}
$numbers = [1, 5, 9];
$largest = findLargest($numbers[0], $numbers[1], $numbers[2]);

echo "The largest number is: " . $largest;
?>

<hr>
<h1>Q8</h1>
<?php
function calculateElectricityBill($units) {
    $bill = 0;

    if ($units <= 50) {
        $bill = $units * 2.50;
    } elseif ($units <= 150) {
        $bill = (50 * 2.50) + (($units - 50) * 5.00);
    } elseif ($units <= 250) {
        $bill = (50 * 2.50) + (100 * 5.00) + (($units - 150) * 6.20);
    } else {
        $bill = (50 * 2.50) + (100 * 5.00) + (100 * 6.20) + (($units - 250) * 7.50);
    }

    return $bill;
}

$units = 300;
$bill = calculateElectricityBill($units);

echo "The total electricity bill for $units units is: " . $bill . " JOD.";
?>

<hr>
<h1>Q9</h1>
<form method="post">
        <label for="num1">First Number:</label>
        <input type="number" id="num1" name="num1" required><br><br>
        <label for="num2">Second Number:</label>
        <input type="number" id="num2" name="num2" required><br><br>
        <label for="operation">Operation:</label>
        <select id="operation" name="operation">
            <option value="add">Addition</option>
            <option value="subtract">Subtraction</option>
            <option value="multiply">Multiplication</option>
            <option value="divide">Division</option>
        </select><br><br>
        <input type="submit" value="Calculate">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $operation = $_POST["operation"];
        $result = 0;

        switch ($operation) {
            case "add":
                $result = $num1 + $num2;
                break;
            case "subtract":
                $result = $num1 - $num2;
                break;
            case "multiply":
                $result = $num1 * $num2;
                break;
            case "divide":
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    echo "Division by zero is not allowed.";
                    exit();
                }
                break;
        }

        echo "<h2>Result: $result</h2>";
    }
    ?>
<hr>
<h1>Q10</h1>
<?php
?>
<hr>
<h1>Q11</h1>
<?php
function checkNumber($number) {
    if ($number > 0) {
        return "Positive";
    } elseif ($number < 0) {
        return "Negative";
    } else {
        return "Zero";
    }
}

$number = -60;

$result = checkNumber($number);
echo $result;
?>

<hr>
<h1>Q12</h1>
<?php
function calculateGrade($scores) {
    $total = array_sum($scores);
    $count = count($scores);
    $average = $total / $count;

    if ($average >= 90) {
        return 'A';
    } elseif ($average >= 80) {
        return 'B';
    } elseif ($average >= 70) {
        return 'C';
    } elseif ($average >= 60) {
        return 'D';
    } else {
        return 'F';
    }
}
$scores = [60, 86, 95, 63, 55, 74, 79, 62, 50];
$grade = calculateGrade($scores);

echo "The grade is: " . $grade;
?>

<hr>
 </body>
 </html>


