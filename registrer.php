<?php include('server.php');?>
<!DOCTYPE html>
<html>
<head>
<title>Registrer Technolovie</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="login">
<form action="registrer.php" method="post">
    <?php include('errors.php');?>
<input id="name" name="username" placeholder="username" type="text" >
<input  name="email" placeholder="email" type="text" >
<input  name="password_1" placeholder="password" type="password">
<input  name="password_2" placeholder="confirmer password" type="password"><br><br>
<button type="submit" name="registrer"class="button_registrer">Registrer</button>
<p>Vous avez un compte?
    <a href="login.php" >Se connecter</a></p>

</form>
</div>
</body>
</html>