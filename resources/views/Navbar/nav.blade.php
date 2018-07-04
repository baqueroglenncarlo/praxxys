<nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top border-bottom stroke">
	<div class="container-fluid">
	<a href="/" class="navbar-brand">FB</a>
	
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbar">
		<ul class="navbar-nav ml-auto">
			<li class="nav-item">
				<a href="/" class="nav-link" data-toggle="modal" data-target="#modal">{{Auth::user()->firstname}}</a>
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

@include('Modal.user_modal')