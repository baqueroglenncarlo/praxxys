<!DOCTYPE html>
<html>
<head>
	<title>Praxxys Exam</title>
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/css/bootstrap.css')); ?>">
</head>
<body>
	<?php echo $__env->make('Navbar.nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<br><br><br>
	<div class="container-fluid mx-auto h-100">
	<!-- 	<div class="col-md-2">
			<img src="<?php echo e(asset('image/sample_picture.png')); ?>" class="rounded-circle h-50 responsive">
		</div> -->
		<div class="container-fluid">
			<div class="bg-light">
				<form method="post" action="/post">
					<?php echo e(csrf_field()); ?>

					<div class="input-group input-lg">
						<textarea class="form-control w-75" name="post" placeholder="Write a post" required></textarea>
					</div>
					<button class="btn btn-outline-success ">Share</button>
				</form>	
			</div>

			<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<?php echo $__env->make('Posts.posts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</div>
	</div>

	<script type="text/javascript" src="<?php echo e(asset('js/js/jquery-3.1.1.min.js')); ?>"></script>
	<script type="text/javascript" src="<?php echo e(asset('js/js/bootstrap.js')); ?>"></script>
</body>
</html>