<!doctype html>
	<html lang="en">
	  <head>
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <title>IMAGE UPLOAD ASSIGNMENT</title>
	    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	  </head>
	  <body>
	    <div class="container">
	    	<div class="panel panel-primary">
	    		<div class="panel-heading">
	    			<h2>IMAGE UPLOAD ASSIGNMENT</h2>
	    		</div>
	    		<div class="panel-body">
	    			<?php if($message = Session::get('success')): ?>
	    				<div class="alert alert-success alert-block">
	    					<button type="button" class="close" data-dismiss="alert">x</button>
	    					<strong><?php echo e($message); ?></strong>
	    				</div>
	    				<?php $__currentLoopData = \Session::get('image'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $imgs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	    					<img src="images/<?php echo e($imgs); ?>">
	    				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	    			<?php endif; ?>
	    			<form action="<?php echo e(route('image.store')); ?>" method="post" enctype="multipart/form-data">
	    				<?php echo csrf_field(); ?>
	    				<div class="mb-3">
	    					<label class="form-label">Image:</label>
	    					<input type="file" name="image[]" class="form-control <?php $__errorArgs = ['image.*'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" multiple>

	    					<?php $__errorArgs = ['image.*'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
	    					<span class="text-danger"><?php echo e($message); ?></span>
	    					<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
	    				</div>
	    				<div class="mb-3">
	    					<button type="submit" class="btn btn-success">Upload</button>
	    				</div>
	    			</form>
	    		</div>
	    	</div>
	    </div>
	  </body>
	</html><?php /**PATH C:\Users\PARAG\Dropbox\My PC (LAPTOP-T1I2DVAM)\Desktop\laravel-projects\ourfirstapp\resources\views/image.blade.php ENDPATH**/ ?>