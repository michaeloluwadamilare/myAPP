<?php

namespace App\FurnitureModel;

use App\FurnitureModel\FurnitureFactory as FurnitureFactory;




class FurnitureProperty
{
	// private $someBook;
	private $someFuniture;
	// private $someDvd;
	public function __construct()
	{
		// $this->someBook = new BookFactory();
		// echo $this->someBook->startFactory();
		$this->someFuniture = new FurnitureFactory();
		echo $this->someFuniture->startFactory();
		// $this->someDvd = new DvdDiscFactory();
		// echo $this->someDvd->startFactory();

	}

}


 ?>