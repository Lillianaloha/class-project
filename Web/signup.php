<?php
include 'initialize.php';
$connection = mysqli_connect('localhost','root','1234','user');
?>
<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>Sigup</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  <style>
  body{
  margin-left:auto;
  margin-right:auto;
  margin-TOP:100PX;
  width:20em;
  }
  </style>
 </head>

 <body>
 
  <h1 style="font-size:50PX;">Sign Up</h1>
  <br>
<div class="input-group">
<form action="sgp.php" method="post">
  <span class="input-group-addon" id="basic-addon1">@</span>
  <input id="userName" name = "userName" type="text"  style="width:320px" placeholder="Username" aria-describedby="basic-addon1">
<br>
  <span class="input-group-addon" id="basic-addon1">@</span>
  <input id="pw_1" name="pw_1" type="password"  style="width:320px" placeholder="Password" aria-describedby="basic-addon1">
<br>
  <span class="input-group-addon" id="basic-addon1">@</span>
  <input id="pw_2" type="password" name="pw_2"  style="width:320px" placeholder="Certify Your Password" aria-describedby="basic-addon1">
<br>
<input id="sp" type="submit" style="width:320px" value="Sign Up">
</form>
</div>

 </body>
</html>
