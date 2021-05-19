<?php 
namespace App\DbConnection;

use App\DbConnection\Connection as Connection;



	
class DbOperation
	{
		
		public function dbSelect($columnsName,$tablesName, $conditions)
		{
			$objConnection = new Connection();
			// object declaretion for using Connection class. Connection class is in Connection.php file
			$objConnection->dbConnection();
			$con = $objConnection->con;
			//$sql = "SELECT ".$columnsName." FROM ".$tablesName." WHERE ".$conditions;
			$result = mysqli_query( $con, "SELECT ".$columnsName." FROM ".$tablesName." WHERE ".$conditions);
			
			return $result;
		}

		public function dbSelectAll($columnsName,$tablesName)
		{
			$objConnection = new Connection();
			// object declaretion for using Connection class. Connection class is in Connection.php file
			$objConnection->dbConnection();
			$con = $objConnection->con;
			//$sql = "SELECT ".$columnsName." FROM ".$tablesName." WHERE ".$conditions;
			$result = mysqli_query( $con, "SELECT ".$columnsName." FROM ".$tablesName);
			
			return $result;
		}

		public function deleteProduct($tablesName,$conditions)
		{
			$objConnection = new Connection();
			// object declaretion for using Connection class. Connection class is in Connection.php file
			$objConnection->dbConnection();
			$con = $objConnection->con;

			$result = mysqli_query( $con, "DELETE FROM ".$tablesName." WHERE  id = '".$conditions."'");
			
			return $result;
		}


		public function addProduct($name,$category,$price,$length,$width,$height,$size,$weight,$sku)
		{
			$objConnection = new Connection();
			// object declaretion for using Connection class. Connection class is in Connection.php file
			$objConnection->dbConnection();
			$con = $objConnection->con;

			$result = mysqli_query( $con, "INSERT INTO product (category,name,price,length,height,width,size,weight,sku) VALUES('$category','$name','$price','$length','$height','$width','$size','$weight','$sku')");
			
			return $result;
		}
		
	}








?>