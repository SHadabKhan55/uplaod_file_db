<?php

include("dbcon.php");

if(isset($_POST['submit'])){

    $file_name = $_FILES['image']['name'];
    $tmpname = $_FILES['image']['tmp_name'];
    $dir = 'Images/'.$file_name;

    $query = mysqli_query($con, "insert into upl_files () values '$file_name'")
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="file" id="">
        <input type="submit" name="submit" id="">
    </form>
</body>
</html>