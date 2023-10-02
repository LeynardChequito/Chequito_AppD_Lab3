<!DOCTYPE html>
<html lang="en">
<head>
<?= view('header'); ?>
</head>
<body>
    
</body>
</html>


@@include('navigation.htm',{"home":"active"})

<?= view('Popularcat'); ?>


<section class="popular-deals section bg-gray">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="section-title">
					<h2>Trending Adds</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas, magnam.</p>
				</div>
			</div>
		</div>
		<div class="row">
			<!-- offer 01 -->
			<div class="col-lg-12">
				<div class="trending-ads-slide">
					<div class="col-sm-12 col-lg-4">
						@@include('products.htm',{
							"img-src"		: "images/products/products-1.jpg",
							"heading"		: "11inch Macbook Air",
							"category" 	: "Electronics",
							"date"	: "26th December"
						})
					</div>
					<div class="col-sm-12 col-lg-4">
						@@include('products.htm',{
							"img-src"		: "images/products/products-2.jpg",
							"heading"		: "Full Study Table Combo",
							"category" 	: "Furnitures",
							"date"	: "26th December"
						})
					</div>
					<div class="col-sm-12 col-lg-4">
						@@include('products.htm',{
							"img-src"		: "images/products/products-3.jpg",
							"heading"		: "11inch Macbook Air",
							"category" 	: "Electronics",
							"date"	: "26th December"
						})
					</div>
					<div class="col-sm-12 col-lg-4">
						@@include('products.htm',{
							"img-src"		: "images/products/products-2.jpg",
							"heading"		: "Full Study Table Combo",
							"category" 	: "Furnitures",
							"date"	: "26th December"
						})
					</div>
				</div>
			</div>
		</div>
	</div>
</section>



@@include('category.htm')

@@include('call-to-action.htm')

@@include('footer.htm')
