<?php

return new class
{
	private const USER = 'root';
	private const PASSWORD = '';
	
	# Назначение драйвера для подключения базы данных
	public $driver = mysqli::class;
	
	# Параметры для драйвера mysqli
	public $mysqli = [
		'host' => '127.0.0.1',
		'user' => self::USER,
		'password' => self::PASSWORD,
		'dbname' => 'single',
		'port' => 3306
	];
	
	# Параметры для драйвера PDO
	public $PDO = [
		'dns' => 'mysql:host=127.0.0.1;dbname=single;charset=utf8',
		'user' => self::USER,
		'password' => self::PASSWORD,
		'options' => [
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
			PDO::ATTR_EMULATE_PREPARES => FALSE,
		]
	];
};