<?php $__env->startSection('content'); ?>
 <h1>Stageview admin</h1>
 <hr>
 <table class="table table-striped table-bordered table-hover">
     <thead>
     <tr class="bg-info">
         <th>Id</th>
         <th>Bedrijfsnaam</th>
         <th>Title</th>
         <th>Author</th>
         <th>Publisher</th>
         <th>Thumb</th>
         <th colspan="3">Actions</th>
     </tr>
     </thead>
     <tbody>
     <?php foreach($user as $users): ?>
         <tr>
             <td><?php echo e($users->name); ?></td>
             <td><?php echo e($users->email); ?></td>
             <td><?php echo e($users->created_at); ?></td>
             <td><?php echo e($users->role); ?></td>
             <td><?php echo e($users->active); ?></td>
             <td><a href="<?php echo e(route('users.edit',$users->id)); ?>" class="btn btn-warning">Update</a></td>
             <td>
             <?php echo Form::open(['method' => 'DELETE', 'route'=>['users.destroy', $users->id]]); ?>

             <?php echo Form::submit('Delete', ['class' => 'btn btn-danger']); ?>

             <?php echo Form::close(); ?>

             </td>
         </tr>
     <?php endforeach; ?>



     </tbody>

 </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>