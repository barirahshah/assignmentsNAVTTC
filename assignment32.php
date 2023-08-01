<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Write a Program to create following pattern using while 
loop:</h3>
<?php
$row=8;
$maxRows=8;
while ($row<=$maxRows){
    $column=1;
    while ($column<=$row){
        echo "*";
        $column++;
    }
    echo  "<br>";
    $row++;
}
?>

</body>
</html>