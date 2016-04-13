

<?php $__env->startSection('content'); ?>

<h1> About </h1>

<?php if(count($people)): ?>
<h3>people i like</h3>
<ul>
	<?php foreach($people as $person): ?>
		<li> <?php echo e($person); ?> </li>
	<?php endforeach; ?>
</ul>
<?php endif; ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>