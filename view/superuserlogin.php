<!------------superuserlogin_page------------->
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/style.css">
	
		<title>Login</title>
	</head>
	<body>
	<!------------------starts first section----------------------->
		<header class="bg-color py-2">
			<h5 class="container">Orisys Academy</h5>
		</header>
		<section>
			<h4 class="py-4 text-dark text-center text-h">AMS - Convenience and the ability to learn at any place and any time.</h4>
			<div class="container-fluid bg-style media1">
			
				<div class="row">
					
					<div class="col-md-12 log-style">
						<form name="login" method="post" class="m-auto py-3 jumbotron text-light p-3 form-style rounded">

							
							<h3 div class="text-center text-dark">Sign In</h3>
								<input type="text" class="form-control inputcomponent mt-md-3 space" name='username' required="required" placeholder="Username">
							
								<input type="password" class="form-control inputcomponent mt-md-3 space" name='password' required="required" placeholder="Password">
							
							<button type="submit" class="btn-primary mt-md-3 px-5 rounded shadow" name="submit">Sign IN</button>
								
								

						</form>
					</div>
				</div>
			</div>
		</section>
<?php
if(isset($_POST['submit']))
{
		include '../controller/MyController.php';
		$obj=new MyController();
		$obj->LoginAct();
}
?>
<!-----------------------------ends first section---------------->
		<script src="js/jquery.min.js"></script>
		<script src="js/validation.js"></script>
		<Script src="js/jquery.validate.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/popper.min.js"></script>
		
		
		
</body>
</html>