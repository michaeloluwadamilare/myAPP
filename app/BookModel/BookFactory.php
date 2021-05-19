<?php 
namespace App\BookModel;

use App\ProductCreatorModel\ProductCreator as ProductCreator;


class BookFactory extends ProductCreator
{
	
	protected function factoryMethod()
	{
		$product = new BookProduct();
		return ($product->getProperties());
	}
}

 ?>