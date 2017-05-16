<?php

	define("rulo", false);

	require("global.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Ica Pickup Service</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="style1.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>

<body>
	<?php

		if(isset($_POST['login']))$users->login($_POST['email'], $_POST['password']);
	?>
    <div id="topbar">
        <a href="ica_pickup.html">
            <ul class="nav justify-content-begginning" id="loogin"> <img src="bilder/flex.png" id="logo"></a>
        <li class="nav-item" id="listhover"> <a class="nav-link active" id="hem" href="ica_pickup.html">Hem</a> </li>
        <li class="nav-item" id="listhover"> <a class="nav-link" id="matvaror" href="matvaror.html">Matvaror</a> </li>
        <li class="nav-item" id="listhover"> <a class="nav-link" id="tjanster" href="butiker.html">Flex-butiker</a> </li>
        <li class="nav-item" id="listhover"> <a class="nav-link" id="hjalp" href="hjalp.html">Hjälp</a> </li>
        <li class="nav-item" id="loginin">
            <a href="#"> <img id="cart" src="bilder/cart.png"> </a>
        </li>
        <li class="nav-item" id="login">
            <a href="login.php">
                <button type="button" class="btn btn-primary">Logga in!</button>
            </a>
        </li>
        </ul>
    </div>
    <!-- This is where the user uses his own email and password to log in. -->
	<form method="post">
    <div id="baluba1">
        <div class="input-group input-group-lg"> <span class="input-group-addon" id="sizing-addon1">E-mail</span>
            <input name="email" type="email" class="form-control" aria-describedby="sizing-addon1" placeholder="example@hotmail.com"> </div>
        <br>
        <div class="input-group"> <span class="input-group-addon" id="sizing-addon2">Lösenord</span>
            <input name="password" type="password" class="form-control" aria-describedby="sizing-addon2" placeholder="***********"> </div>
        <br>
        <a href="profil.php">
            <input type="submit" name="login" id="bubbe" class="btn btn-primary" value="Logga in!">
        </a><a id="bubba" href="skapakonto.php">Skapa konto!</a> <a id="bubba" href="#">Glömt lösenord</a> </div>
		</form>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>

</html>
