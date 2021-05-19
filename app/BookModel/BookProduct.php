<?php 

namespace App\BookModel;

use App\ProductCreatorModel\ProductProperty as ProductProperty;



class BookProduct extends ProductProperty
{
	private $mfgProduct;
	public function getProperties()
	{
		$this->mfgProduct = 'Weight: ';
		return $this->mfgProduct;
	}
}


?>