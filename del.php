<?php

$con=mysqli_connect("localhost","root","","parlour");

$cusid=$_GET['id'];



$sel="SELECT * FROM parlour WHERE cusid='$cusid'";
$rs=$con->query($sel);
$row=$rs->fetch_assoc();


unlink("docimg/".$row['document']);

$d="DELETE FROM parlour WHERE cusid='$cusid'";
if($con->query($d)){
    header("location:sel.php");
}

?>