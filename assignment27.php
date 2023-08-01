<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Write a Program to display count, from 5 to 15 (as shown 
below) using following:
• For Loop
• While Loop
• Do…while Loop
</h3>
<h3>Using for loop</h3>
<?php
for ($x=5; $x<=15; $x++){
    echo "The number is: $x <br>";
}
?>
<h3>using while loop</h3>
<?php
$x=5;
while ($x<=15){
    echo "The number is: $x <br>";
    $x++;
}
?> 
<h3>using Do...While loop</h3>
<?php
$x=5;
do {
    echo "The number is: $x <br>";
    $x++;
}
while ($x<=15);

?>  
</body>
</html>