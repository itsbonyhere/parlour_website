
<?php $con=mysqli_connect("localhost","root","","parlour");?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Dark Striped Table</h2>
  <p>Combine .table-dark and .table-striped to create a dark, striped table:</p>     
  <p><a href="index.php">Add New Customer</a><p>

  
  <table class="table table-dark table-striped">
    <thead>
      <tr>
        <th>Customer Name</th>
        <th>Contact No</th>
        <th>Choose Pakage</th>
        <th>Booking Date</th>
        <th>ID Proof</th>


      </tr>
    </thead>
    <tbody>
      
    <?php
    $sel="SELECT * FROM parlour";
    $rs=$con->query($sel);
    while($row=$rs->fetch_assoc()){
        

?>

<tr>
    <td><?php echo $row['cusid'];?></td>
    <td><?php echo $row['cusname'];?></td>
    <td><?php echo $row['contact'];?></td>
    <td><?php echo $row['pakage'];?></td>
    <td><?php echo $row['date'];?></td>

    <td><img style="width:100px;"src="docimg/<?php echo $row['document'];?>"></td>

    <td><a onclick="return confirm('Are You Sure ?'); " href="del.php?id=<?php echo $row ['cusid']; ?>">Delete</a></td>






</tr>

<?php   } ?>







    </tbody>
  </table>
</div>

</body>
</html>
