<?php 

namespace App\DiscModel;

use App\ProductCreatorModel\ProductProperty as ProductProperty;


class DvdDiscProduct extends ProductProperty
{
	private $mfgProduct;
	public function getProperties()
	{
		$this->mfgProduct = 'Size: ';
		return $this->mfgProduct;
	}
}
?>