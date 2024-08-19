<?php

$con=mysqli_connect("localhost","root","","parlour");


$a=$_POST['CustomerName'];
$b=$_POST['ContactNo'];
$c=$_POST['Chooseone'];
$d=$_POST['dob'];


$buf=$_FILES['docimg']['tmp_name'];
$fn=time().$_FILES['docimg']['name'];
move_uploaded_file($buf, "docimg/" .$fn);





$ins="INSERT INTO parlour SET cusname='$a',contact='$b',pakage='$c',date='$d',document='$fn'";
$con->query($ins);




?>

<h1>Customer Name: <?php echo $a; ?></h1>
<h1>Contact No: <?php echo $b; ?></h1>
<h1>Choose Pakage: <?php echo $c; ?></h1>
<h1>Booking Date: <?php echo $d; ?></h1>
<h1>ID Proof: <p><img src= "docimg/<?php echo $fn;?>"/><p></h1>

