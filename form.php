<?php

use App\DbConnection\DbOperation as DbOperation;

require_once __DIR__ . '/vendor/autoload.php';

$width = '';
$length= '';
$height='';
$size='';
$weight= '';

echo extract($_POST);


		$objdelete = new DbOperation();
		$data = $objdelete->addProduct($name,$select,$price,$length,$width,$height,$size,$weight,$sku)



 ?>
