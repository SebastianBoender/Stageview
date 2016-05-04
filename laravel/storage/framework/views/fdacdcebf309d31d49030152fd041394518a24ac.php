<?php $__env->startSection('content'); ?>
    <h1>Update bedrijf</h1>
    <?php echo Form::model($user,['url'=>'apply/upload', 'method' => 'PATCH', 'files'=>true, 'route'=>['users.update',$user->id]]); ?>


    <div class="form-group">
        <?php echo Form::label('name', 'name:'); ?>

        <?php echo Form::text('name',null,['class'=>'form-control']); ?>

    </div>

    <div class="form-group">
        <?php echo Form::label('email', 'email:'); ?>

        <?php echo Form::text('email',null,['class'=>'form-control']); ?>

    </div>

    <div class="form-group">
        <?php echo Form::label('active', 'active:'); ?>

        <?php echo Form::select('role', array('Student' => 'Student', 'Teacher' => 'Teacher', Admin' => 'Admin' ));; ?>

    </div>

    <div class="form-group">
        <?php echo Form::label('active', 'active:'); ?>

        <?php echo Form::select('role', array('Inactive' => 'Inactive', 'Active' => 'Active'));; ?>

    </div>

    <div class="form-group">
        <?php echo Form::submit('Update', ['class' => 'btn btn-primary']); ?>

    </div>
    <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>