<?php include('server.php');?>
<!DOCTYPE html>
<html>
<head>
<title>Login Technolovie</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="login">
<form action="login.php" method="post">
    <?php include('errors.php');?>
<input name="username" placeholder="username" type="text" >

<input  name="password" placeholder="confirmer password" type="password"><br><br>
<button type="submit" name="login"class="button_registrer">Login</button>
<p>Vous n'avez pas un compte?
    <a href="registrer.php" >Registrez-vous!</a></p>

</form>
</div>
</body>
</html>