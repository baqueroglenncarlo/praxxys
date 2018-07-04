<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labeledby="label" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="label">Hi, <?php echo e(Auth::user()->firstname); ?> <?php echo e(Auth::user()->lastname); ?> !</h4>
				<button type="button" class="close" id="close_error_message" data-dismiss="modal" data-toggle="modal">
					<span aria-hidden="true">&times;</span>
					<span class="sr-only">Close</span>
				</button>
			</div>
			<div class="modal-body">
				<img src="<?php echo e(asset('image/'.Auth::user()->image)); ?>" class="responsive w-50 h-50" alt="">

				<form method="post" action="/update/<?php echo e(Auth::user()->id); ?>" enctype="multipart/form-data">	

					<?php echo e(csrf_field()); ?>			
					<div class="form-group">
						<label class="btn btn-primary btn-file">
						Browse <input type="file" name="image" style="display: none;">
						</label>
					</div>
					<button type="submit" class="btn btn-primary">Save</button>
				</form>

			</div>
		</div>
	</div>
</div>