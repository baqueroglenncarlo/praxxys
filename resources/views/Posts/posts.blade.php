
<div class="d-flex align-items-center p-3 my-3 text-white-50 bg-dark rounded box-shadow">
	<img src="{{asset('image/'.$post->user->image)}}" class="mr-3" alt="" width="48" height="48">
	<div class="lh-100">
		<h6 class="mb-0 text-white lh-100">
			@if(Auth::user()->id === $post->user->id)
				<h6 class="mb-0 text-white lh-100">Me</h6>
			@else
				{{$post->user->firstname}} {{$post->user->lastname}}
			@endif
		</h6>

		<small>
			{{$post->post}}<br>
			{{$post->created_at->diffForHumans()}}

			@if(Auth::user()->id === $post->user->id)
				<a href="/destroy/{{$post->id}}">Delete</a>
			@endif
		</small>
	</div>

</div>
<div>

<h4>Comments</h4>

@foreach($comments as $comment)
	@if($comment->post_id === $post->id)
		<div class="pl-3 pr-3 bg-white rounded box-shadow">
			<div class="media text-muted pt-3">
				<img data-src="{{asset('image/'.$comment->user->image)}}" alt="" class="mr-2 rounded">
				<p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
					<strong class="d-block text-gray-dark">
						@if(Auth::user()->id === $post->user->id)
							Me
						@else
							{{$comment->user->firstname}} {{$comment->user->lastname}}
						@endif
					</strong>
					{{$comment->comment}}<br>
					{{$post->created_at->diffForHumans()}}
				</p>
			</div>
		</div>
	@endif
@endforeach

<form method="post" action="/comment/{{$post->id}}">
	{{csrf_field()}}
	<div class="form-group col-md-12">
		<input type="text" name="comment" class="form-control" placeholder="Add comment">
		<button class="btn btn-primary">Add Comment</button>
	</div>
</form>
</div>