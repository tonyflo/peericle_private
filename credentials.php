<?php
/* @file credentials.php
 * @date 2014-09-21
 * @author Tony Florida
 * @brief Logic to connect to the peericle database
 */
	$user="peericle_u";
	$password="getup2speed";
	$database="peericledb";
	$host="mysql.peericle.org";

	$db = new mysqli($host, $user, $password, $database);
	if($db->connect_errno > 0)
	{
		die('Unable to connect to database [' . $db->connect_error . ']');
	}

	error_reporting(E_ERROR);
?>

