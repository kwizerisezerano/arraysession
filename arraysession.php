<?php
session_start();
$_SESSION['fruits']=array(
array("product"=>"Apple","quantity"=>40),
array("product"=>"Pineaple","quantity"=>20),
array("product"=>"Banana","quantity"=>10),
array("product"=>"Mango","quantity"=>6),
array("product"=>"Orange","quantity"=>4)
);
echo "session array created";
//add elements to array
$add=array("product"=>"cocomber","quantity"=>45);
array_push($_SESSION['fruits'],$add);
//access the elements of the array
print_r( $_SESSION['fruits']);
//remove elements to array
unset($_SESSION['fruits'][0]);

?>