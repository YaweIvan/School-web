<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Functional Image Gallery</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Google Fonts -->
		

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">
	<!-- Custom CSS for card hover effect -->
	<link rel="stylesheet" href="css/custom.css">
	

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400" rel="stylesheet">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

	<!-- Magnific Popup CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">

	<!-- Custom Styles -->
	<style>
		/* Adjust the size of the gallery cards */
		.gallery-card {
			position: relative;
			cursor: pointer;
			transition: transform 0.3s ease;
			margin-bottom: 15px;
		}

		.gallery-card img {
			width: 400px;
			height: 300px;
			object-fit: cover;
			border-radius: 5px;
			transition: transform 0.3s ease;
			
		}

		/* Add spacing between the cards */
		.col-md-4, .col-sm-6 {
			padding: 15px;
		}

		/* Card hover effect */
		.gallery-card:hover {
			transform: scale(1.05);
		}

		.card-overlay {
			position: absolute;
			top: 0;
			left: 0;
			width: 400px;
			height: 300px;
			background: rgba(0, 0, 0, 0.5);
			color: white;
			display: flex;
			justify-content: center;
			align-items: center;
			opacity: 0;
			transition: opacity 0.3s ease;
			border-radius: 5px;
		}

		/* On hover, show the overlay */
		.gallery-card:hover .card-overlay {
			opacity: 1;
		}

		.card-overlay h3 {
			margin: 0;
		}
	</style>
</head>
<body>
@include('nav')

<div class="overlay-gradient"></div>
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2 text-center slider-text">
			<div class="slider-text-inner">
				<h1 class="heading-section">Gallery</h1>
				<h2>Explore Our Collection of Beautiful Photos</h2>
			</div>
		</div>
	</div>
</div>

	<div class="container-fluid">
		<div class="row no-gutters">
			<div class="col-md-4 col-sm-6">
				<a href="{{ asset('images/person1.jpg') }}" class="gallery-card image-popup" title="Image 1">
					<img src="{{ asset('images/person1.jpg') }}" class="img-responsive card-img" alt="Image 1">
					<div class="card-overlay">
						<h3>Image 1</h3>
					</div>
				</a>
			</div>
			<div class="col-md-4 col-sm-6">
				<a href="{{ asset('images/person2.jpg') }}" class="gallery-card image-popup" title="Image 2">
					<img src="{{ asset('images/person2.jpg') }}" class="img-responsive card-img" alt="Image 2">
					<div class="card-overlay">
						<h3>Image 2</h3>
					</div>
				</a>
			</div>
			<div class="col-md-4 col-sm-6">
				<a href="{{ asset('images/person3.jpg') }}" class="gallery-card image-popup" title="Image 3">
					<img src="{{ asset('images/person3.jpg') }}" class="img-responsive card-img" alt="Image 3">
					<div class="card-overlay">
						<h3>Image 3</h3>
					</div>
				</a>
			</div>
			<div class="col-md-4 col-sm-6">
				<a href="{{ asset('images/person1.jpg') }}" class="gallery-card image-popup" title="Image 4">
					<img src="{{ asset('images/person1.jpg') }}" class="img-responsive card-img" alt="Image 4">
					<div class="card-overlay">
						<h3>Image 4</h3>
					</div>
				</a>
			</div>
			<div class="col-md-4 col-sm-6">
				<a href="{{ asset('images/person1.jpg') }}" class="gallery-card image-popup" title="Image 5">
					<img src="{{ asset('images/person1.jpg') }}" class="img-responsive card-img" alt="Image 5">
					<div class="card-overlay">
						<h3>Image 5</h3>
					</div>
				</a>
			</div>
			<div class="col-md-4 col-sm-6">
				<a href="{{ asset('images/person1.jpg') }}" class="gallery-card image-popup" title="Image 6">
					<img src="{{ asset('images/person1.jpg') }}" class="img-responsive card-img" alt="Image 6">
					<div class="card-overlay">
						<h3>Image 6</h3>
					</div>
				</a>
			</div>
		</div>
	</div>

	@include('footer')

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>

	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script>
		$(document).ready(function() {
			$('.image-popup').magnificPopup({
				type: 'image',
				gallery: {
					enabled: true
				}
			});
		});
	</script>



	<!-- jQuery -->
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<!-- Bootstrap JS -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<!-- Magnific Popup JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>

	<!-- Initialize Magnific Popup -->
	<script>
		$(document).ready(function() {
			$('.image-popup').magnificPopup({
				type: 'image',
				gallery: {
					enabled: true
				},
				zoom: {
					enabled: true,
					duration: 300
				}
			});
		});
	</script>

</body>
</html>
