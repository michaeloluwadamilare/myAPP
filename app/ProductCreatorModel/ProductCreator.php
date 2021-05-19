<?php 

namespace App\ProductCreatorModel;

abstract class ProductCreator
{
	
	Protected abstract function factoryMethod();
	public function startFactory()
	{
		$result = $this->factoryMethod();
		return $result;
	}
}


 ?>