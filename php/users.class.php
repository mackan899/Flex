<?php

class users extends database
{

	static function login($email, $password)
	{

		if($email == "" || $password == "") return false;

		$email = self::escape($email, false);
		$password = self::escape($password, true);

		$pr = self::query("SELECT NULL FROM users WHERE email = '".$email."' AND password='".$password."' LIMIT 1")->numrows();

		if($pr > 0)
		{
			$name = self::query("SELECT fname FROM users WHERE email='".$email."' LIMIT 1")->fetch();
			$username = $name['fname'];

			$_SESSION['username'] = $username;

			header("location: profil.php");
		}
		else
		{
			echo '<h1>Fel info</h1>';
		}
	}


	static function createuser($fname, $password, $cpassword, $email, $phonenumber, $adress)
	{

		if(

			$fname == ""

		|| $email == ""

		|| $password == ""

		|| $phonenumber == ""

		|| $adress == ""

		)
		{

			echo 'Alla fält är obligatoriska.';

			return 1;
		}



		$email = self::escape($email);

		$checkEmail = self::query("SELECT NULL FROM users WHERE email='".$email."' LIMIT 1")->numrows();

		if($checkEmail > 0)
		{
			echo 'Email addressen som du har angett är redan i bruk.';

			return 4;
		}


		if(strlen($password) < 6)
		{
			echo 'Lösenordet måste innehålla minst 6 tecken.';

			return 5;
		}

		if($password != $cpassword)
		{
			echo 'Lösenorden stämmer inte överens. Försök igen.';

			return 6;
		}

		if(!is_numeric($phonenumber))
		{
			echo 'telefonnummret är ogiltigt';

			return 7;
		}


		$fname = self::escape($fname);

		$email = self::escape($email);

		$password = self::escape($password, true);

		$phonenumber = self::escape($phonenumber);

		$adress = self::escape($adress);



		self::query("INSERT INTO users (fname, email, password, phonenumber, adress)

			VALUES

			('".$fname."', '".$email."', '".$password."', '".$phonenumber."', '".$adress."')

		");

		$_SESSION['username'] = $username;

		header("location: profil.php");


	}
}
