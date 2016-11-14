<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Material Design Bootstrap</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
    <link href="http://mdbootstrap.com/live/_MDB/templates/Ecommerce/css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="http://mdbootstrap.com/live/_MDB/templates/Ecommerce/css/mdb.css" rel="stylesheet">

    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">

</head>

<body>
<?php include './imported/cusNav.php'; ?>

    <!-- Start your project here-->

    <!-- /.Intro -->
    <br>
    <hr>
	<section id="productDetails">
				<div class="row">
					<div class="col-lg-5">
						<!--Carousel Wrapper-->
						<div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails" data-ride="carousel">

							<!--Slides-->
							<div class="carousel-inner" role="listbox">
								<div class="carousel-item active">
									<img src="http://mdbootstrap.com/images/ecommerce/vertical/img%20(13).jpg" alt="First slide">
								</div>
								<div class="carousel-item">
									<img src="http://mdbootstrap.com/images/ecommerce/vertical/img%20(15).jpg" alt="Second slide">
								</div>
								<div class="carousel-item">
									<img src="http://mdbootstrap.com/images/ecommerce/vertical/img%20(16).jpg" alt="Third slide">
								</div>
							</div>
							<!--/.Slides-->

							<!--Thumbnails-->
							<a class="left carousel-control" href="#carousel-thumb" role="button" data-slide="prev">
								<span class="icon-prev" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="right carousel-control" href="#carousel-thumb" role="button" data-slide="next">
								<span class="icon-next" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
							</a>
							<!--/.Thumbnails-->

						</div>
						<!--/.Carousel Wrapper-->
					</div>
					<div class="col-lg-7">
						<h2 class="h2-responsive center-on-small-only product-name"><strong>Product Name</strong></h2>
						<h4 class="h4-responsive center-on-small-only"><span class="green-text"><strong>$49</strong></span> <span class="grey-text"><small><s>$89</s></small></span></h4>

						<!--Accordion wrapper-->
						<div class="product-accordion accordion mb-r" id="accordion" role="tablist" aria-multiselectable="true">

							<!--First panel-->
							<div class="panel panel-default">

								<!--Panel heading-->
								<div class="panel-heading" role="tab" id="headingOne">
									<h5 class="panel-title">
										<a class="arrow-r" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Description <i class="fa fa-angle-down rotate-icon"></i></a>
									</h5>
								</div>

								<!--Panel body-->
								<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente nesciunt atque nemo neque ut officiis nostrum incidunt maiores, magni optio et sunt suscipit iusto nisi totam quis, nobis mollitia necessitatibus.
								</div>
							</div>
							<!--/.First panel-->

							<!--Second panel-->
							<div class="panel panel-default">

								<!--Panel heading-->
								<div class="panel-heading" role="tab" id="headingTwo">
									<h5 class="panel-title">
										<a class="arrow-r" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseOne">						Details<i class="fa fa-angle-down rotate-icon"></i></a>
									</h5>
								</div>

								<!--Panel body-->
								<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis debitis culpa omnis asperiores sequi id vero fuga deleniti eligendi porro odio, libero incidunt laudantium aperiam iusto reiciendis adipisci, labore cupiditate!
								</div>
							</div>
							<!--/.Second panel-->

							<!--Third panel-->
							<div class="panel panel-default">

								<!--Panel heading-->
								<div class="panel-heading" role="tab" id="headingThree">
									<h5 class="panel-title">
										<a class="arrow-r" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="true" aria-controls="collapseOne">Shipping<i class="fa fa-angle-down rotate-icon"></i></a>
									</h5>
								</div>

								<!--Panel body-->
								<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis incidunt ullam quis cum obcaecati quos reiciendis totam asperiores numquam? Enim aspernatur sequi eum molestias magnam amet, debitis ratione obcaecati ducimus.
								</div>
							</div>
							<!--/.Third panel-->

						</div>
						<!--/.Accordion wrapper-->

						<!-- Add to Cart -->

						<div class="card-block">
							<div class="row">
								<div class="col-md-6">
									<div class="md-form">
										<select class="mdb-select">
											<option value="" disabled selected>Choose your option</option>
											<option value="1">White</option>
											<option value="2">Black</option>
											<option value="3">Pink</option>
										</select>
										<label>Select color</label>
									</div>
								</div>
								<div class="col-md-6">
									<div class="md-form">
										<select class="mdb-select">
											<option value="" disabled selected>Choose your option</option>
											<option value="1">XS</option>
											<option value="2">S</option>
											<option value="3">L</option>
										</select>
										<label>Select size</label>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12 center-on-small-only text-md-right">
									<span class="green-text">Product available</span>
									<button class="btn btn-primary"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
								</div>
							</div>
						</div>

						<!-- /.Add to Cart -->

					</div>
				</div>
			</section>



    <!-- /Start your project here-->

<?php include './imported/footer.php'; ?>
    <!-- SCRIPTS -->

    <!-- JQuery -->
    <script type="text/javascript" src="http://mdbootstrap.com/live/_MDB/templates/Ecommerce/js/jquery-3.1.1.min.js"></script>

    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="http://mdbootstrap.com/live/_MDB/templates/Ecommerce/js/tether.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="http://mdbootstrap.com/live/_MDB/templates/Ecommerce/js/bootstrap.min.js"></script>

    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="http://mdbootstrap.com/live/_MDB/templates/Ecommerce/js/mdb.min.js"></script>
<script type="text/javascript">
		/* WOW.js init */
		new WOW().init();

		/* Side navigation toggle */
		$(".button-collapse").sideNav();

	</script>

</body>

</html>