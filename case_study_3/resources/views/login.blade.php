<!Doctype html>
<html lang="en">

<head>
	<title>Admin Login</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="backend/login/css/style.css">

</head>

<body class="img js-fullheight" style="background-image: url(backend/login/images/bg.jpg)">
	<section class=" ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
						<h3 class="mb-4 text-center">Login</h3>
						<form action="" class="signin-form" method="POST">
							@csrf
							<div class="form-group">
								<input type="email" class="form-control" placeholder="Email" id="email" name="email" required>
							</div>
							<div class="form-group">
								<input id="password" name="password" type="password" class="form-control" placeholder="Password" required>
							</div>
							@if(Session::has('failed'))
							<p aria-hidden="true" class="text-danger"> {{Session::get('failed')}}</p>
							@endif
							<div class="form-group">
								<button type="submit" class="form-control btn btn-primary submit px-3">Sign In</button>
							</div>
							<div class="return text-center">
								<a href="home">Return to Home</a>
							</div>
						</form>


					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="backend/login/js/jquery.min.js"></script>
	<script src="backend/login/js/popper.js"></script>
	<script src="backend/login/js/bootstrap.min.js"></script>
	<script src="backend/login/js/main.js"></script>

</body>

</html>