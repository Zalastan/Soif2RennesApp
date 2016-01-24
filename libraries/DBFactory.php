<?php

/**
 * @package   AppSoif2Rennes
 * @author    Sébastien Gamarde
 * @copyright Copyright (C) Sébastien Gamarde
 * @license   http://www.gnu.org/licenses/gpl.html GNU/GPL
 */
function getMysqlConnexionWithPDO() {
	try {
		$config = parse_ini_file ( 'configuration.ini' );
		
		$db = new PDO ( 'mysql:host=' . $config ['host'] . ';dbname=' . $config ['dbname'] . '', '' . $config ['username'] . '', '' . $config ['password'] . '', array (
				PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8" 
		) );
	} catch ( Exception $e ) {
		die ( 'Erreur : ' . $e->getMessage () );
	}
	return $db;
}
function getMysqlConnexionWithMySQLi() 

{
	$config = parse_ini_file ( 'configuration.ini' );
	return new MySQLi ( $config ['host'], $config ['username'], $config ['password'], $config ['dbname'] );
}
