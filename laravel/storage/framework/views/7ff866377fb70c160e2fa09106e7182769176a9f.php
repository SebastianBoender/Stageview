<?php
    $users = DB::table('users')->get();
?>

<?php $__env->startSection('content'); ?>
 <h1>Stageview admin</h1>
 <a href="<?php echo e(url('/users/create')); ?>" class="btn btn-success">Creëer gebruiker</a>
 <hr>
 <table class="table table-striped table-bordered table-hover">
     <thead>
     <tr class="bg-info">
         <th>Id</th>
         <th>Name</th>
         <th>Email</th>
         <th>Creation Date</th>
         <th>Active</th>
         <th colspan="3">Actions</th>
     </tr>
     </thead>
     <tbody>
     <?php foreach($users as $user): ?>
         <tr>
             <td><?php echo e($user->id); ?></td>
             <td><?php echo e($user->name); ?></td>
             <td><?php echo e($user->email); ?></td>
             <td><?php echo e($user->created_at); ?></td>
             <?php if($user->active == 0): ?>
             <td>No</td>
             <?php else: ?>
             <td>Yes</td>
             <?php endif; ?>
             <td>
             <?php echo Form::open(['method' => 'DELETE', 'route'=>['books.destroy', $user->id]]); ?>

             <?php if($user->active == 1): ?>
             <?php echo Form::submit('Disable', ['class' => 'btn btn-danger']); ?>

             <?php else: ?>
             <?php echo Form::submit('Enable', ['class' => 'btn btn-success']); ?>

             <?php endif; ?>
             <?php echo Form::close(); ?>

             </td>
         </tr>
     <?php endforeach; ?>



     </tbody>

 </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>