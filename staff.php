<?php
$con=new mysqli('localhost','root','','sona');
if(isset($_POST['submit']))
    {
    $name=$_POST['name'];
    $password=$_POST['password'];
    session_start();
    #$_SESSION["namee"]=$name;
    $sql="select * from admin where name='$name' and password='$password';";
    $result = $con->query($sql);
    $row=$result->fetch_object();
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
</head>
<body>

<form class="login-form" action="#" method="post">
<h3>Select Semster</h3>
    <select required>
        <option></option>
        <option>Semester-1</option>
        <option>Semester-2</option>
        <option>Semester-3</option>
        <option>Semester-4</option>
        <option>Semester-5</option>
        <option>Semester-6</option>
        <option>Semester-7</option>
        <option>Semester-8</option>
    </select>

<div class="mb-3" >
<label for="formFile" class="form-label" ><h3>Upload File</h3></label>
  <input class="form-control" type="file" id="formFile" required>
  <input style="background-color: blue; color:white" type="submit" name="submit" value="LOGIN"> 
</div>
</form>
</body>
</html>