
<?php 
 session_start();
 if($_SESSION['uid'])
 {
     header('location:admindash.php');
 }
 ?>
<html>
<body>
<h2 align = "center">Admin login</h2>
<form action = "login.php" method = "POST">
<table align = "center">
<tr>
<td> username</td>
<td><input type = "text" name = "username" required></dt>
</tr>
<tr>
<td>  password</td>
<td><input type = "pass" name = "password" required></dt>
</tr>
<tr>
<td><input type ="submit" name = "submit"></dt>
</tr>
</form>
</body>
</html>
<?php
include('dbconn.php');
if(isset($_POST['submit']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];

     $qry = "select * from admin where username = '$username' AND password = '$password'";
     $res = mysqli_query($conn,$qry);
     $row = mysqli_num_rows($res);
     if($row <1)
     {
         ?>
         <script>
         alert("username and password does not exist");
         window.open("login.php","_self");
         </script>
         <?php
     }
     else
     {
         $data = mysqli_fetch_assoc($res);
         $id = $data['id'];
         echo "id is :".$id;
        
         $_SESSION['uid'] = $id;
         header("location:admindash.php");
         
     }
}

?>