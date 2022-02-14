<?php
class Connection
{
	public static function connect()
	{
		$connection = new mysqli("localhost:3307", "root", "", "mvc");
		return $connection;
	}
}
