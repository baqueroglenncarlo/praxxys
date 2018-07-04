
<div class="d-flex align-items-center p-3 my-3 text-white-50 bg-dark rounded box-shadow">
	<img src="<?php echo e(asset('image/'.$post->user->image)); ?>" class="mr-3" alt="" width="48" height="48">
	<div class="lh-100">
		<h6 class="mb-0 text-white lh-100">

			<?php if(Auth::user()->id === $post->user->id): ?>
				<h6 class="mb-0 text-white lh-100">Me</h6>
			<?php else: ?>
				<?php echo e($post->user->firstname); ?> <?php echo e($post->user->lastname); ?>

			<?php endif; ?>
		</h6>
		<small>
			<?php echo e($post->post); ?><br>
			<?php echo e($post->created_at->diffForHumans()); ?>


			<?php if(Auth::user()->id === $post->user->id): ?>
				<a href="/destroy/<?php echo e($post->id); ?>">Delete</a>
			<?php endif; ?>
		</small>
	</div>

</div>
<div>
<h4>Comments</h4>

<?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<?php if($comment->post_id === $post->id): ?>
		<div class="pl-3 pr-3 bg-white rounded box-shadow">
			<div class="media text-muted pt-3">
				<img data-src="<?php echo e(asset('image/'.$comment->user->image)); ?>" alt="" class="mr-2 rounded">
				<p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
					<strong class="d-block text-gray-dark">
						<?php if(Auth::user()->id === $post->user->id): ?>
							Me
						<?php else: ?>
							<?php echo e($comment->user->firstname); ?> <?php echo e($comment->user->lastname); ?>

						<?php endif; ?>
						
					</strong>
					<?php echo e($comment->comment); ?><br>
					<?php echo e($post->created_at->diffForHumans()); ?>

				</p>
			</div>
		</div>
	<?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<form method="post" action="/comment/<?php echo e($post->id); ?>">
	<?php echo e(csrf_field()); ?>

	<div class="form-group col-md-12">
		<input type="text" name="comment" class="form-control" placeholder="Add comment">
		<button class="btn btn-primary">Add Comment</button>
	</div>
</form>
</div>