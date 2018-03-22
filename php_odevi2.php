<?php
if(isset($_POST["adi"])&&isset($_POST["soyadi"])){


$adi=trim(strip_tags($_POST["adi"]));
$soyadi=$_POST["soyadi"];
$email=$_POST["email"];




echo $adi."<br>";
echo $soyadi."<br>";
echo $email."<br>";


if(strstr($email,"@hotmail.com"))
echo header("Location: http://debis.deu.edu.tr/debis.php");


if(strstr($email,"@gmail.com"))
echo header("Location: http://oys.deu.edu.tr");


};
?>