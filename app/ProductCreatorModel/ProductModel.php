<?php
namespace App\ProductCreatorModel;

use App\DbConnection\DbOperation as DbOperation;


class ProductModel extends DbOperation
{
	
	public function getAllBook()
		{
			$objDbOperation = new DbOperation();

			$columnsName = "*";
			//database column name
			$tablesName = "product";
			//database table name
			$conditions = "category = 'Book'";

			$result = $objDbOperation->dbSelect($columnsName,$tablesName,$conditions);
			return $result;
		}

	public function getAllDisc()
		{
			$objDbOperation = new DbOperation();

			$columnsName = "*";
			//database column name
			$tablesName = "product";
			//database table name
			$conditions = "category = 'Disc'";

			$result = $objDbOperation->dbSelect($columnsName,$tablesName,$conditions);
			return $result;
		}

	public function getAllFurniture()
		{
			$objDbOperation = new DbOperation();

			$columnsName = "*";
			//database column name
			$tablesName = "product";
			//database table name
			$conditions = "category = 'Furniture'";

			$result = $objDbOperation->dbSelect($columnsName,$tablesName,$conditions);
			return $result;
		}
	
}


?>
