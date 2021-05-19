<?php
use App\ProductCreatorModel\ProductModel as ProductModel;
require_once __DIR__ . '/vendor/autoload.php';


?>

<!DOCTYPE html>
<html>
<head>
	<title>Product Page</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://code.jquery.com/jquery-3.4.1.js"></script>


	
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css"/>
    <link rel="stylesheet" href="dist/css/bootstrapValidator.css"/>


	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<div class="container">
		<form id="addForm">
		<header>
			<div class="row">
				<div class="col-md-8">
					<h1>Add Product</h1>
				</div>
				<div class="col-md-4">
					
					<button class="btn btn-success" id="btnAdd" type="submit">Save</button>
					<button class="btn btn-danger" onclick="IndexPageRedirect()">Cancel</button>
				</div>
			</div>
			<hr>

		</header>

		<div class="col-xs-12 col-md-6 content-container">

			
				<div class="form-group">
					<label>SKU</label>
					<input type="text" name="sku" pattern="[a-zA-Z0-9]+" title="The SKU can only consist of alphabetical and number e.g BB1234WW" class="form-control" required>
				
				</div>
				<div class="form-group">
					<label>Name</label>
					<input type="text" name="name" class="form-control" required>
				
				</div>
				<div class="form-group">
					<label>Price ($)</label>
	              	<input type="text" pattern="[0-9]" title="The price can only consist of numbers e.g 2" class="form-control" name="price" required />
	            </div>
	
				<div class="form-group">
					<label>Product type switcher</label>
					<select id="mySelect" name="select" onchange="selectChange()">
						<option value="TypeSwitcher">Type Switcher</option>
						<option value="Book">Book</option>
						<option value="Disc">Disc</option>
						<option value="Furniture">Furniture</option>
					</select>
					
				</div>
				<div class="form-group" id="productForm">
					<!-- All forms will be displayed here -->
				</div>


			

		</div>
		</form>
	</div>
	<script type="text/javascript" src="script.js"></script>
	
	
</body>
</html>