<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
	<link rel="stylesheet" href="assets/bootstrap/style/simple-sidebar.css">
	<link rel="stylesheet" href="assets/fontawesome/css/all.min.css">
	<title>se connecter</title>
</head>

<body style="background-color: #f5f5f5" class="">
	<main class="position-absolute top-50 start-50 translate-middle">
		<div class="card bg-secondary" style="min-width: 450px;">
			<h4 class="card-header text-white fw-bold text-capitalize">s' authentifier</h4>
			<div class="card-body">
				
				<form action="login.php" class="container" method="post">
					<div class="row justify-content-center">
						<div class="col-6"><img src="assets/img/logo2.png" alt="" style="width:180px;height:140px"></div>
					</div>
					<!-- //error messages 
						<div class="message-line error" style="margin-top: -10px;text-align:center">Error Text goes here</div>
					!-->	
				<!-- //success messages 
						<div class="message-line success">Success Text goes here</div>
				!-->	
					<div class="form-floating mb-3">
						<input type="text" class="form-control" id="in_email" autocomplete="n"
							style="background-color: #f5f5f5;" name="username">
						<label for="in_email">Email address</label>
					</div>
					<div class="form-floating mt-3 mb-5">
						<input type="password" class="form-control" id="in_pawd" autocomplete="n"
							style="background-color: #f5f5f5;" name="password">
						<label for="in_pawd">Password</label>
					</div>
				
					<div class="d-grid gap-2 d-md-flex justify-content-md-end mt-5">
						<button class="btn btn-primary" type="submit" name="login">Se connecter <i
								class="fa fa-chevron-right"></i></button>
					</div>
				</form>

			</div>
		</div>
	</main>
	<script src="assets/fontawesome/js/all.js"></script>
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>