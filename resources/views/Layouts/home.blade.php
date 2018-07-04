<!DOCTYPE html>
<html>
<head>
	<title>Praxxys Exam</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/css/bootstrap.css')}}">
</head>
<body>
	@include('Navbar.nav')
	<br><br><br>
	<div class="container-fluid mx-auto h-100">
	<!-- 	<div class="col-md-2">
			<img src="{{asset('image/sample_picture.png')}}" class="rounded-circle h-50 responsive">
		</div> -->
		<div class="container-fluid">
			<div class="bg-light">
				<form method="post" action="/post">
					{{csrf_field()}}
					<div class="input-group input-lg">
						<textarea class="form-control w-75" name="post" placeholder="Write a post" required></textarea>
					</div>
					<button class="btn btn-outline-success ">Share</button>
				</form>	
			</div>

			@foreach($posts as $post)
				@include('Posts.posts')
			@endforeach
		</div>
	</div>

	<script type="text/javascript" src="{{asset('js/js/jquery-3.1.1.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/js/bootstrap.js')}}"></script>
</body>
</html>