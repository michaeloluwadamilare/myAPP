<?php
use App\DbConnection\DbOperation as DbOperation;

require_once __DIR__ . '/vendor/autoload.php';

extract($_POST);

$delete = $_POST['delete'];


	
	foreach ($delete as $deleteId) {


		$objdelete = new DbOperation();
		$data = $objdelete-> deleteProduct('product',$deleteId);

}



 ?>
