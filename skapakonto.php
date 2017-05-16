<?php
	define('rulo', FALSE);

	require 'global.php';
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
                <a href="login.html">
                    <button type="button" class="btn btn-primary">Logga in!</button>
                </a>
            </li>
            </ul>
        </div>
        <!-- This is where the user is signing up with email and password and so on to the webserver. -->
        <?php if(isset($_POST['reg'])) $users->createuser($_POST['fname'], $_POST['password'], $_POST['cpassword'], $_POST['email'], $_POST['phonenumber'], $_POST['adress']); ?>
            <form method="post">
                <div id="baluba1">
                    <div class="input-group input-group-lg"> <span class="input-group-addon" id="sizing-addon1">E-mail</span>
                        <input type="email" name="email" class="form-control" aria-describedby="sizing-addon1" placeholder="example@hotmail.com"> </div>
                    <br>
                    <div>
                        <div class="input-group"> <span class="input-group-addon" id="sizing-addon1">Adress:</span>
                            <input type="text" name="adress" class="form-control" aria-describedby="sizing-addon1" placeholder="exempelgatan6"> </div>
                        <br>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="input-group">
                                    <input type="text" name="fname" class="form-control" aria-describedby="sizing-addon1" placeholder="Förnamn"> </div>
                            </div>
                        </div>
                        <br>
                        <div class="input-group"> <span class="input-group-addon" id="sizing-addon2">Mobil-nummer</span>
                            <input type="number" name="phonenumber" class="form-control" aria-describedby="sizing-addon2" placeholder="T.ex (+46758388656)"> </div>
                        <br>
                        <div class="input-group"> <span class="input-group-addon" id="sizing-addon2">Lösenord</span>
                            <input type="password" name="password" class="form-control" aria-describedby="sizing-addon2" placeholder="***********"> </div>
                        <br>
                        <div class="input-group"> <span class="input-group-addon" id="sizing-addon2">Re-lösenord</span>
                            <input type="password" name="cpassword" class="form-control" aria-describedby="sizing-addon2" placeholder="***********"> </div>
                        <br>
                        <a href="#">
                            <input type="submit" name="reg" id="bubbe" type="button" class="btn btn-primary" value="Skapa konto!"> </a>
                        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
                        <!-- Include all compiled plugins (below), or include individual files as needed -->
                        <script src="js/bootstrap.min.js"></script>
            </form>
    </body>

    </html>
