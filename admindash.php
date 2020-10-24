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



<div class = "admintitle" align = "center">
<h1>welcome to admin dashboard</h1>
<h4><a href = "logout.php" style = "float:right" margin-right:30px; font-size:20px; color:#fff;>logout</a></h4>
</div>
<div class = "dash">
<table border = "1" style = "width:50%" align = "center">
<tr>
<td>1.</td>
<td><a href = "addstudent.php">insert student details</a></td>
</tr>
<tr>
<td>2.</td>
<td><a href = "updatestudent.php">update student details</a></td>
</tr>
<tr>
<td>3.</td>
<td><a href = "deletestudent.php">delete student details</a></td>

</tr>
</table>
</div>
    
