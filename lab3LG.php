<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  

<?php
// define variables and set to empty values
 $UserName =$Password =  "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  $Password = test_input($_POST["Password"]);
  
}

function test_input($data) {
  $data = trim($data); 
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>LOGIN</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  UserName: <input type="text" name="User Name">
  <br><br>
  Password: <input type="text" name="Password">
  <br><br>
  
  

<input type="checkbox" id="Donation" name="Donation" value="Remember me">
  <label for="Donation"> Remember Me</label><br>

 <br>
<input type="submit" name="submit" value="Submit">  <a href=" https://portal.aiub.edu/ForgotPassword " target="_blank">Forgot Passward ?</a> 

 
<?php



 





echo $UserName;
echo "<br>";
echo $Password;
echo "<br>";

?>

















</body>
</html>