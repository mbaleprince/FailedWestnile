<!DOCTYPE html>
<html lang="en-us">

<head>
	<meta charset="utf-8">
	<title>WestNile | Write</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5">
	<meta name="description" content="This is meta description">
	<meta name="author" content="Themefisher">
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
    
    <!-- # SimpleMDE Sheet -->
    <link rel="stylesheet" href="css/simplemde.min.css">

    <!-- # SimpleMDE Script -->
    <script src="js/simplemde.min.js"></script>
</head>

<body>
<?php include_once 'include/header.php'?>

<main>
	<section class="section">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="breadcrumbs mb-4"> <a href="index.php">Home</a>
						<span class="mx-1">/</span>  <a href="write.php">Write</a>
					</div>
				</div>
				<div class="col-12">
					<form method="POST" action="#!" class="row">
						<div class="col-12">
							<input type="text" class="form-control mb-4" placeholder="Heading" name="heading">
						</div>
                        <div class="col-12">
							<input class="form-control mb-4" type="file" id="formFile" name="coverart">
						</div>
						<div class="col-12">
							<textarea name="message" id="message" class="form-control mb-4" placeholder="Type Your Content Here" rows="5"></textarea>
						</div>
                        <script>
                            var simplemde = new SimpleMDE({ element: document.getElementById("message") });
                        </script>
						<div class="col-12">
							<button class="btn btn-primary form-control mb-4" type="submit">Publish</button>
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