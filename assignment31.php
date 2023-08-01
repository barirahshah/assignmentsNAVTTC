<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Write a program to calculate factorial of a number using for
loop in PHP.</h3>
<?php
function factorial($number) {
    if ($number === 0 || $number === 1) {
        return 1; // Factorial of 0 and 1 is 1
    } else {
        $result = 1;
        for ($i = 2; $i <= $number; $i++) {
            $result *= $i;
        }
        return $result;
    }
}

// Test the factorial function with a number
$number = 5;
echo "Factorial of $number is: " . factorial($number);
?>

</body>
</html>