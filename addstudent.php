<?php

session_start();
if($_SESSION['uid'])
{
    echo $_SESSION['uid'];
}
else
{
    header("location:login.php");
}


?>
<?php include('header.php');?>
<?php include('titlehead.php');?>
<form action = "addstudent.php" method = "POST">
<table border = "1" style = "width:40%" align = "center">
<tr>
<td>id</td><td><input type = "number" name ="number" placeholder ="enter your id" required></td>
</tr>
</tr>
<tr>
<td>name</td><td><input type = "text" name ="name" placeholder ="enter your name" required></td>
</tr>
<tr>
<td>city</td><td><input type = "text" name ="city" placeholder ="enter your city" required></td>
</tr>
<tr>
<td>course</td><td><input type = "text" name ="cousrse" placeholder ="enter your id" required></td>
</tr>
<td>contactno</td><td><input type = "num" name ="contactno" placeholder ="enter your course" required></td>
</tr>
<tr>
<td>rollno</td><td><input type = "number" name ="rollno" placeholder ="enter your contact" required></td>
</tr>
<tr>
<td>image</td><td><input type = "file" name ="img" placeholder ="enter your image" required></td>
</tr>
<tr>
<td colspan ="2" align = "center"><input type = "submit" name = "submit" value = "submit" class = "btn btn-primary"  ></td>
</tr>






</table>
</form>
<?php
include('dbconn.php');
if(isset($_POST['submit']))
{
    $id = $_POST['id'];
    $name = $_POST['name'];
    $city = $_POST['city'];
    $cousrse = $_POST['course'];
    $contactno = $_POST['contactno'];
    $rollno = $_POST['rollno'];
    $img = $_POST['img'];
    $qry = "insert into student (id,name,city,cousrse,contactno,rollno,img) values('$id','$name','$city','$cousrse','$contactno','$rollno','$img')";
    $res = mysqli_query($conn,$qry);
    if($res = true)
    {
        ?>
        alert ("data inserted successfully");
        <?php
    }

}
?>