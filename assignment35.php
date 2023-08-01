<h1>Assignment 35</h1>
<p>Write a function to sort an array</p>
<?php
$numbers=array(1,5,3,9,10,4,8,3,1);
sort($numbers);
print_r($numbers);
//sort array in alphabetical order
$students=array("Shayan", "Ali", "Ahmad", "Fatima", "Amina", "Khubaib");
rsort($numbers);
print_r($numbers);
//sort array in descending numerical order
$numbers=array(1,4,7,5,2,8,9,3,1,);
rsort($numbers);
print_r($numbers);
//laptop type with price in assending order acording to value
$laptopPrice=array("Dell"=> "50000", "Lenovo"=>"40000","hp"=>"60000","ipad"=>"100000");
asort($laptopPrice);
print_r($laptopPrice);
//in assending order according to keys
$laptopPrice=array("Dell"=> "50000", "Lenovo"=>"40000","hp"=>"60000","ipad"=>"100000");
ksort($laptopPrice);
print_r($laptopPrice);
//in desending ordr according to value
$laptopPrice=array("Dell"=> "50000", "Lenovo"=>"40000","hp"=>"60000","ipad"=>"100000");
arsort($laptopPrice);
print_r($laptopPrice);
//in desending ordr according to keys
$laptopPrice=array("Dell"=> "50000", "Lenovo"=>"40000","hp"=>"60000","ipad"=>"100000");
krsort($laptopPrice);
print_r($laptopPrice);
?>