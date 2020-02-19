<?php

/**
 * 
 */
class Connection
{
	public static function make($config)
	{
		try {
			// DB driver PDO
			return new PDO(
				$config['connection'].';dbname='.$config['name'],
				$config['username'],
				$config['password'],
				$config['options']
			);
		} catch (PDOException $e) {
			die($e->getMessage()); // catch PDO errors
		}
	}
}
