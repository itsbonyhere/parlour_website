<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body bgcolor="lightpink";>

<form action="parlourins.php" method="post" enctype="multipart/form-data">

    <h1 style="color:darkred;">SAMPURNA LADIES BEAUTY PARLOUR <h1>

    <p>Customer Name<p>
    <p><input type="text" name="CustomerName" /></p>    

    <p>Contact No<p>
    <p><input type="text" name="ContactNo" /></p>    

    <p>Choose Pakage<p>
 
<select id="Category" name="ChoosePakage">
            <option value="Facial">Facial</option>
            <option value="Hair SPA">HairSPA</option>
            <option value="Straightning">Straightning</option>
            <option value="Others">Others</option>
</select>

    <p>Booking Date<p>
    <p><input type="date" name="BookingDate" id=""><p>

    <p>Upload ID Proof<p>
        <p><input type="file" id="document" name="docimg" /><p>
            




    <p><input type="submit" name="Save" value="Save" ></p>

</body>
</html>