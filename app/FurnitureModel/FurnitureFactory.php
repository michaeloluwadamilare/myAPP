<?php 


namespace App\FurnitureModel;

use App\ProductCreatorModel\ProductCreator as ProductCreator;


class FurnitureFactory extends ProductCreator
{
	
	protected function factoryMethod()
	{
		$product = new FurnitureProduct();
		return ($product->getProperties());
	}
}

 ?>