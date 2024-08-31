<!DOCTYPE html>
<html lang="en-us">

<head>
	<meta charset="utf-8">
	<title>WestNile | Delete Account</title>
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
<div class="container d-flex flex-column">
    <div class="row">
        <div class="col-sm-10 col-md-8 col-lg-6 col-xl-5 mx-auto d-table h-100">
            <div class="d-table-cell align-middle">
                <div class="text-center">
                    <h1 class="fw-bolder mt-5">Delete account</h1>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="m-sm-3">
                            <form action="trash.php" method="POST">
                                <div class="mb-3">
                                    <label class="form-label">Username</label>
                                    <input class="form-control" style="font-size: 12px;" type="text" name="username" placeholder="Enter your username" />
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Password</label>
                                    <input class="form-control" style="font-size: 12px;" type="password" name="password" placeholder="Enter your password" />
                                </div>
                                <div class="mt-3">
                                    <button class="btn btn-danger form-control" type="submit" name="submit">Delete</button>
                                </div>
                            </form>
                         </div>
                     </div>
                </div>
            </div>
        </div>
    </div>
</div>
</main>
<?php include_once 'include/footer.php'?>

<!-- # JS Plugins -->
<script src="plugins/jquery/jquery.min.js"></script>
<script src="plugins/bootstrap/bootstrap.min.js"></script>

<!-- Main Script -->
<script src="js/script.js"></script>

</body>
</html>