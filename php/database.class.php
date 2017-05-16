<?php

class database
{

	static $imgdir = 'assets/upmgs/20161111/';

	static $mysql_object;

	static $mysql_statement;


	 function __construct()
	{
		if(is_null(self::$mysql_object))
		{
			self::$mysql_object = new mysqli("localhost", "root", "", "flex");
		}
	}


	static function query($string)
	{


		self::$mysql_statement = self::$mysql_object->query($string);

		return new self();
	}


	static function escape($string, $encryption = false)
	{


		if($encryption == false)

			return self::$mysql_object->real_escape_string(trim(htmlspecialchars($string)));

		elseif($encryption == true)

			return self::$mysql_object->real_escape_string(stripslashes(trim(md5(sha1($string)))));
	}

	static function numrows()
	{


		return (self::$mysql_statement) ? self::$mysql_statement->num_rows : false;
	}

	static function fetch()
	{


		return (self::$mysql_statement) ? self::$mysql_statement->fetch_assoc() : false;
	}


	static function online_count()
	{
		$data = self::query("SELECT NULL FROM users WHERE online='1'")->numrows();

		return $data;
	}


	static function Randomize($length = 10, $onlynumbers = false)
	{

		if($onlynumbers == false)
			$validCharacters = "abcdefghijklmnopqrstvABCDEFGHIJKLMNOPQRST1234567890";
		else
			$validCharacters = "1234567890";

		$validCharNumber = strlen($validCharacters);

		$result = "";

		for ($i = 0; $i < $length; $i++)
		{
			$index = mt_rand(0, $validCharNumber - 1);
			$result .= $validCharacters[$index];
		}

			return $result;

	}


	static function isTaken($table, $field, $value)
	{

		$value = self::escape($value);

		$check = self::query("SELECT NULL FROM ".$table." WHERE ".$field." = '".$value."' LIMIT 1")->numrows();

		if($check > 0)

				return true;

			else

				return false;

	}


}
