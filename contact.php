<!DOCTYPE html>
<html lang="en-us">

<head>
	<meta charset="utf-8">
	<title>WestNile | Contact us</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5">
	<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
	<link rel="icon" href="images/favicon.png" type="image/x-icon">

	<!-- # Google Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Neuton:wght@700&family=Work+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

	<!-- # CSS Plugins -->
	<link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">

	<!-- # Main Style Sheet -->
	<link rel="stylesheet" href="css/style.css">
</head>

<body>
<?php include_once 'include/header.php'?>

<main>
	<section class="section">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="breadcrumbs mb-4"> <a href="index.php">Home</a>
						<span class="mx-1">/</span>  <a href="about.php">Contact us</a>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="pr-0 pr-lg-4">
						<div class="content">Ociba coast, Arua city, Westnile, Uganda and call me Mbale Prince
							<div class="mt-5">
								<p class="h3 mb-3 font-weight-normal"><a class="text-dark" href="mailto:mbaleprince@hotmail.com">mbaleprince@hotmail.com</a>
								</p>
								<p class="mb-3"><a class="text-dark" href="tel:&#43;256784010039">&#43;256784010039</a>
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 mt-4 mt-lg-0">
					<form method="POST" action="#!" class="row">
						<div class="col-md-6">
							<input type="text" class="form-control mb-4" placeholder="Name" name="name" id="name">
						</div>
						<div class="col-md-6">
							<input type="email" class="form-control mb-4" placeholder="Email" name="email" id="email">
						</div>
						<div class="col-12">
							<input type="text" class="form-control mb-4" placeholder="Subject" name="subject" id="subject">
						</div>
						<div class="col-12">
							<textarea name="message" id="message" class="form-control mb-4" placeholder="Type You Message Here" rows="5"></textarea>
						</div>
						<div class="col-12">
							<button class="btn btn-outline-primary" type="submit">Send Message</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
</main>
<?php include_once 'include/footer.php'?>

<!-- # JS Plugins -->
<script src="plugins/jquery/jquery.min.js"></script>
<script src="plugins/bootstrap/bootstrap.min.js"></script>

<!-- Main Script -->
<script src="js/script.js"></script>

</body>
</html>