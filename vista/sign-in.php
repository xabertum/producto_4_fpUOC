<?php
include '../controlador/UsuarioControlador.php';

echo UsuarioControlador::login('editor', 1234);

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>WN - SignIn</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-grid.css" rel="stylesheet">
    <link href="css/bootstrap-reboot.css" rel="stylesheet">    
    
    <link rel="stylesheet" href="css/sign-in-style.css">

</head>

<body>

    <div class="container">
        <div class="wrapper">
            <h3>World News Sign-In</h3>
            <form action="login.php" method="post" autocomplete="off">
                <input type="text" placeholder="Username" size="46%" name="username" autofocus> <br>
                <input type="text" placeholder="Password" size="46%" name="password" autocomplete="off">
                <input id="button" type="image" src="img/Group 9.png" width="70%" >
            </form>
			<a href="#">Forgot your password?</a>
            <hr>
            <h4>Don't have a World News account? </h4>
            <a href="register.html">Register Now</a>

        </div>

    </div>

</body>

</html>