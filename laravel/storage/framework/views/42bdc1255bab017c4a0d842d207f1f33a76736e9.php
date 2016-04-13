<?php $__env->startSection('content'); ?>
    <h1>Book Show</h1>

    <form class="form-horizontal">
        <div class="form-group">
            <label for="image" class="col-sm-2 control-label">Cover</label>
            <div class="col-sm-10">
                <img src="<?php echo e(asset('img/'.$book->image.'.jpg')); ?>" height="180" width="150" class="img-rounded">
            </div>
        </div>
        <div class="form-group">
            <label for="compName" class="col-sm-2 control-label">Bedrijfsnaam</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="compName" placeholder=<?php echo e($book->compName); ?> readonly>
            </div>
        </div>
        <div class="form-group">
            <label for="title" class="col-sm-2 control-label">Title</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="title" placeholder=<?php echo e($book->title); ?> readonly>
            </div>
        </div>
        <div class="form-group">
            <label for="author" class="col-sm-2 control-label">Author</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="author" placeholder=<?php echo e($book->author); ?> readonly>
            </div>
        </div>
        <div class="form-group">
            <label for="publisher" class="col-sm-2 control-label">Publisher</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="publisher" placeholder=<?php echo e($book->publisher); ?> readonly>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <a href="<?php echo e(url('books')); ?>" class="btn btn-primary">Back</a>
            </div>
        </div>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>