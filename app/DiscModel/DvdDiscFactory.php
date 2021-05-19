<?php 

namespace App\DiscModel;

use App\ProductCreatorModel\ProductCreator as ProductCreator;



class DvdDiscFactory extends ProductCreator
{
	
	protected function factoryMethod()
	{
		$product = new DvdDiscProduct();
		return ($product->getProperties());
	}
}

 ?>