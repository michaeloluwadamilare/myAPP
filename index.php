<?php

use App\ProductCreatorModel\ProductModel as ProductModel;
use App\DiscModel\DiscProperty as DiscProperty;
use App\BookModel\BookProperty as BookProperty;
use App\FurnitureModel\FurnitureProperty as FurnitureProperty;


require_once __DIR__ . '/vendor/autoload.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Product Page</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://code.jquery.com/jquery-3.6.0.js"></script>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

	<div class="container">
		<form id="deleteForm">
		<header>
			<div class="row">
				<div class="col-md-8">
					<h1>Product List</h1>
				</div>
				<div class="col-md-4">
					<button class="btn btn-success" type="button" onclick="addPageRedirect()">ADD</button>
					<button class="btn btn-danger" type="submit" id="btndelete" name="btndelete">MASS DELETE</button>
				</div>
			</div>
			<hr>

		</header>

		<div class="col-xs-12 col-md-12 content-container">
			<div class="row">
				<?php

					$objProductModel = new ProductModel();
					$data = $objProductModel-> getAllDisc();
					while ($result = mysqli_fetch_array($data)) {

				?>

				<div class="col-md-3">

					<div class="card">
						<div class="card-select"><input type="checkbox" name="delete[]" value="<?php echo $result['id'] ?>"></div>
						<div class="card-block">
							
		
							<p class="card-text"><strong><?php echo $result['sku'] ?></strong></p>
							<p class="card-text"><strong><?php echo $result['name'] ?></strong></p>
							<p class="card-text"><strong>Price <?php echo $result['price'] ?> $</strong></p>
							<p class="card-text">
								<strong>
									<?php 
										$objProductModel = new DiscProperty(); 
										echo $result['size'] . 'MB';
									?>		
								</strong>
							</p>

						</div>
					</div>
					
				</div>

				<?php

					}

				?>
				<?php

					$objProductModel = new ProductModel();
					$data = $objProductModel-> getAllBook();
					while ($result = mysqli_fetch_array($data)) {

				?>

				<div class="col-md-3">

					<div class="card">
						<div class="card-select"><input type="checkbox" name="delete[]" value="<?php echo $result['id'] ?>"></div>
						<div class="card-block">
							
		
							<p class="card-text"><strong><?php echo $result['sku'] ?></strong></p>
							<p class="card-text"><strong><?php echo $result['name'] ?></strong></p>
							<p class="card-text"><strong><?php  echo 'Price ' .$result['price']. ' $'; ?></strong></p>
							<p class="card-text">
								<strong>
									<?php 
										$objProductModel = new BookProperty(); 
										echo $result['weight'] . 'KG';
									?>
											
								</strong>
							</p>

						</div>
					</div>
					
				</div>

				<?php

					}

				?>

				<?php

					$objProductModel = new ProductModel();
					$data = $objProductModel-> getAllFurniture();
					while ($result = mysqli_fetch_array($data)) {

				?>

				<div class="col-md-3">

					<div class="card">
						<div class="card-select"><input type="checkbox" name="delete[]" value="<?php echo $result['id'] ?>"></div>
						<div class="card-block">
							
		
							<p class="card-text"><strong><?php echo $result['sku'] ?></strong></p>
							<p class="card-text"><strong><?php echo $result['name'] ?></strong></p>
							<p class="card-text"><strong>Price  <?php echo $result['price'] ?> $</strong></p>
							<p class="card-text">
								<strong>
									<?php 

										$objProductModel = new FurnitureProperty(); 
										echo $result['height'] .'x'. $result['width']. 'x'. $result['length'];

									?>	
								</strong>
							</p>

						</div>
					</div>
					
				</div>

				<?php

					}

				?>



			</div>
		</div>
		</form>
	</div>
<script type="text/javascript" src="script.js"></script>
</body>
</html>

