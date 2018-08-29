<?php

		class conecta
		{

				var $bd;

				function __construct() 
				{
					$this->bd = ADONewConnection('postgres');
					$this->bd->dialect = 3;
					$this->bd->debug = false;
					$this->bd->Connect('localhost', 'postgres', '963852741', 'trabalhopw1');
				}

		}


?>