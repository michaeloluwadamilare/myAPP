<?php
namespace App\DbConnection;

	class Connection
	{
		
		var $con;
		
		function dbConnection()
		{
			$serverName = "localhost";
			$userName = "root";
			$password = "";
			$con = mysqli_connect($serverName, $userName, $password);
			
			if (!$con)
            {
                die('Could not connect: ' . mysqli_error());
            }
			
			mysqli_select_db( $con,"db");
			$this->con=$con;
		}
		
		// function dbCloseConnection()
		// {	 
		// 	mysql_close($this->con);
		// }
		
	}
	
?>