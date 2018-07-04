<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/css/bootstrap.css')); ?>">
</head>
<body class="mt-5">
	<div class="container row mx-auto">
		<div class="col-md-8 bg-light h-75">
			
			<form method="post" action="/register" class="row">
				<?php echo e(csrf_field()); ?>

				<div class="form-group col-md-12 mx-auto">
					<h2>Sign up</h2>
				</div>
				<div class="form-group col-md-4">
					<label>Firstname *</label>
					<input type="text" name="firstname" class="form-control" required>
				</div>
				<div class="form-group col-md-4">
					<label>Lastname *</label>
					<input type="text" name="lastname" class="form-control" required>
				</div>
				<div class="form-group col-md-4">
					<label>Middle Name (Optional)</label>
					<input type="text" name="middlename" class="form-control">
				</div>
				<div class="form-group col-md-12">
					<label>Username *</label>
					<input type="text" name="username" class="form-control" required>
				</div>
				<div class="form-group col-md-6">
					<label>Password *</label>
					<input type="password" name="password" class="form-control" required>
				</div>
				<div class="form-group col-md-6">
					<label>Confirm Password *</label>
				<input type="password" name="password_confirmation" class="form-control" required>
				</div>

				<button type="submit" class="btn btn-outline-success mx-auto w-75">Register</button>
			</form>
		</div>
		<div class="col-md-4">

			<form method="post" action="/login">
				<?php echo e(csrf_field()); ?>

				<div class="form-group">
					<h2 class="mx-auto">Login</h2>
				</div>
				<div class="form-group">
					<label>Username *</label>
					<input type="text" name="username" class="form-control" required>
				</div>
				<div class="form-group">
					<label>Password *</label>
					<input type="password" name="password" class="form-control" required>
				</div>
				<button class="btn btn-outline-primary ">Login</button>
			</form>
		</div>
		
	</div>
	<script type="text/javascript" src="<?php echo e(asset('js/js/jquery-3.1.1.min.js')); ?>"></script>
	<script type="text/javascript" src="<?php echo e(asset('js/js/bootstrap.js')); ?>"></script>
</body>
</html>