<?php 

namespace App\DiscModel;

use App\DiscModel\DvdDiscFactory as DvdDiscFactory;


class DiscProperty
{
	// private $someBook;
	// private $someFuniture;
	private $someDvd;
	public function __construct()
	{
		// $this->someBook = new BookFactory();
		// echo $this->someBook->startFactory();
		// $this->someFuniture = new FunitureFactory();
		// echo $this->someFuniture->startFactory();
		$this->someDvd = new DvdDiscFactory();
		echo $this->someDvd->startFactory();

	}

}


 ?>