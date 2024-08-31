<!DOCTYPE html>
<html lang="en-us">

<head>
	<meta charset="utf-8">
	<title>WestNile | Login</title>
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
</head>

<body>
<main>
        <?php include_once 'Include/sidebar.php';?>
        <?php include_once 'Include/menu.php';?>
        <div class="container d-flex flex-column">
                <div class="row">
                    <div class="col-sm-10 col-md-8 col-lg-6 col-xl-5 mx-auto d-table h-100">
                        <div class="d-table-cell align-middle">
    
                            <div class="text-center">
                                <h1 class="fw-bolder mt-5">Register</h1>
                            </div>
    
                            <div class="card">
                                <div class="card-body">
                                    <div class="m-sm-3">
                                        <form action="verification.php" method="POST">
                                            <?php
                                                if(isset($_GET['error'])){
                                                echo '<div class="alert alert-danger" role="alert">Fill all forms correctly</div>';
                                                }
                                            ?>
                                            <div class="mb-3">
                                                <label class="form-label">Username</label>
                                                <input class="form-control form-control-lg" style="font-size: 12px;" type="text" name="username" placeholder="Enter your username" />
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Email</label>
                                                <input class="form-control form-control-lg" style="font-size: 12px;" type="text" name="email" placeholder="Enter your username" />
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Password</label>
                                                <input class="form-control form-control-lg" style="font-size: 12px;" type="password" name="password" placeholder="Enter your password" />
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Re-enter password</label>
                                                <input class="form-control form-control-lg" style="font-size: 12px;" type="password" name="password_confirm" placeholder="Re-enter your password" />
                                            </div>
                                            <div class="d-grid gap-2 mt-3">
                                                <input type="submit" name="register" class="btn btn-primary form-control" value="Register">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center mb-3 nav-item">
                                Already registered? <a href="login.php">Login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </main>
</body>

<!-- # JS Plugins -->
<script src="plugins/jquery/jquery.min.js"></script>
<script src="plugins/bootstrap/bootstrap.min.js"></script>

<!-- Main Script -->
<script src="js/script.js"></script>

</body>
</html>