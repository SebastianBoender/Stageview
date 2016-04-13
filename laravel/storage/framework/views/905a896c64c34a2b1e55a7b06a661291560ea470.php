

<?php $__env->startSection('main'); ?>

<h1>Create User</h1>

<?php echo Form::open(array('route' => 'users.store')); ?>

    <ul>

        <li>
            <?php echo Form::label('name', 'Name:'); ?>

            <?php echo Form::text('name'); ?>

        </li>

        <li>
            <?php echo Form::label('username', 'Username:'); ?>

            <?php echo Form::text('username'); ?>

        </li>

        <li>
            <?php echo Form::label('password', 'Password:'); ?>

            <?php echo Form::password('password'); ?>

        </li>

        <li>
            <?php echo Form::label('password', 'Confirm Password:'); ?>

            <?php echo Form::password('password_confirmation'); ?>

        </li>        

        <li>
            <?php echo Form::label('email', 'Email:'); ?>

            <?php echo Form::text('email'); ?>

        </li>

        <li>
            <?php echo Form::label('phone', 'Phone:'); ?>

            <?php echo Form::text('phone'); ?>

        </li>


        <li>
            <?php echo Form::submit('Submit', array('class' => 'btn')); ?>

        </li>
    </ul>
<?php echo Form::close(); ?>




<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.users', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>