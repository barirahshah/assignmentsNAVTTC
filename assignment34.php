<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>You need to write a program in PHP using for...each 
loop to remove specific elements by value from an array 
using PHP program.
Hint:
• Take an array with list of month names.
• Take a variable with the name of value to be deleted</h3>
<?php
// Take an array with list of month names
$monthNames = array(
    "January", "February", "March", "April", "May", "June",
    "July", "August", "September", "October", "November", "December"
);

// Take a variable with the name of the value to be deleted
$valueToDelete = "April";

// Use foreach loop to find and remove the specific value from the array
foreach ($monthNames as $key => $month) {
    if ($month === $valueToDelete) {
        unset($monthNames[$key]);
    }
}

// Re-index the array to maintain the sequential keys
$monthNames = array_values($monthNames);

// Display the modified array
print_r($monthNames);
?>

</body>
</html>