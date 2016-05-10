<?php $__env->startSection('content'); ?>
    <h1>Create Group</h1>
    <?php echo Form::open(['url' => 'groups']); ?>

    <div class="form-group">
        <?php echo Form::label('name', 'name:'); ?>

        <?php echo Form::text('name',null,['class'=>'form-control']); ?>

    </div>
    <div class="form-group">
        <?php echo Form::submit('Save', ['class' => 'btn btn-primary form-control']); ?>

    </div>
    <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>