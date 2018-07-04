<nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top border-bottom stroke">
	<div class="container-fluid">
	<a href="/" class="navbar-brand">FB</a>
	
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbar">
		<ul class="navbar-nav ml-auto">
			<li class="nav-item">
				<a href="/" class="nav-link" data-toggle="modal" data-target="#modal"><?php echo e(Auth::user()->firstname); ?></a>
			</li>
			<li class="nav-item">
				<a href="/" class="nav-link">Home<span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item dropdown">
				<a href="/" class="nav-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Notication</a>
				<div class="dropdown-menu dropdown-menu-right">
					<a href="/" class="dropdown-item w-auto rounded-0">LogoutLogoutLogoutLogoutLogoutLogoutLogoutLogoutL</a>
				</div>
			</li>
			<li class="nav-item dropdown">
				<a href="/" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
				<div class="dropdown-menu dropdown-menu-right">
					<a href="/logout" class="dropdown-item">Logout</a>
				</div>
			</li>
		</ul>
	</div>
	</div>
</nav>


<?php echo $__env->make('Modal.user_modal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>