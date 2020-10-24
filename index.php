<DOCTYPE html>
<html  lang = "en_US>
<head>
<title> student management system</title>
<meta charset = "UTF-8>
</head>
<body>

<h3 align = "right" style = "margin-rigth:20px;"><a href = "login.php">admin login</a></h5>
<h1 align = "center"> welcome to student management system</h1>
<form action = "index.php" method ="POST">
<table style = "width:30%;" align = "center" border = "1">
<tr>
<td colspan = "2" align = "center">student information</td>
</tr>
<tr>
<td align = "left"> select your course</td>
<td>
<select>

<option>java</option>
<option>php</option>
<option>mysql</option>
<option>oracle</option>
<option>html</option>


</select>
</td>
</tr>
<tr>
<td align = "right">enter your rollno</td>
<td>
<input type = "text" name = "rollno" required>
</td>

</tr>
<tr>
<td colspan = "2" align = "center">
<input type = "submit" name = "submit" value = "show details">
</td>
</tr>



</table>
</form>
</body>
</html>