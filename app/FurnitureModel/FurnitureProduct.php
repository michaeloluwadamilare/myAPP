<?php 

namespace App\FurnitureModel;

use App\ProductCreatorModel\ProductProperty as ProductProperty;



class FurnitureProduct extends ProductProperty
{
	private $mfgProduct;
	public function getProperties()
	{
		$this->mfgProduct = 'Dimension: ';
		return $this->mfgProduct;
	}
}



?>