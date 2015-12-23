<?php

/**
 * @package   AppSoif2Rennes
 * @author    Sébastien Gamarde
 * @copyright Copyright (C) Sébastien Gamarde
 * @license   http://www.gnu.org/licenses/gpl.html GNU/GPL
 */

class DBFactory {
	
	public static function getMysqlConnexionWithPDO() 

	{
		$config = parse_ini_file ( 'configuration.ini' );
		$db = new PDO('mysql:host='.$config ['host'].';dbname='.$config ['dbname'].'', ''.$config ['username'].'', ''.$config ['password'].'');		
		$db->setAttribute ( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
		
		return $db;
	}
	public static function getMysqlConnexionWithMySQLi() 

	{
		$config = parse_ini_file ( 'configuration.ini' );
		return new MySQLi ( $config ['host'], $config ['username'], $config ['password'], $config ['dbname'] );
	}
}