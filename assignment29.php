<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Use the If...else statement of PHP to write a code to Display
“Good Morning” or “Good Afternoon” according to current 
time.</h3>
<?php
// Get the current hour in 24-hour format (0 to 23)
$currentHour = date('G');

// Check the current time and display the appropriate greeting
if ($currentHour >= 0 && $currentHour < 12) {
    echo "Good Morning";
} elseif ($currentHour >= 12 && $currentHour < 18) {
    echo "Good Afternoon";
} else {
    echo "Good Evening";
}
?>
</body>
</html>