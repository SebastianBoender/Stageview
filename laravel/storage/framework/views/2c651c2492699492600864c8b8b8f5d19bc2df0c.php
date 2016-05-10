<?php $__env->startSection('content'); ?>
 <h1>Stageview admin</h1>
 <a href="/groups" class="btn btn-warning">Go back</a>
 <hr>
 <table class="table table-striped table-bordered table-hover">
     <thead>
     <tr class="bg-info">
         <th>Id</th>
         <th>naam</th>
         <th>Creëer datum</th>
         <th colspan="3">Actions</th>
     </tr>
     </thead>
     <tbody>
     <?php foreach($groups as $group): ?>
         <tr>
             <td><?php echo e($group->id); ?></td>
             <td><?php echo e($group->name); ?></td>
             <td><?php echo e($group->created_at); ?></td>
             <?php echo Form::open(['method'=>'POST', 'url' => '/trashed-groups/restore/'.$group->id]); ?>

             <td><?php echo Form::submit('Undelete', ['class' => 'btn btn-warning']); ?></td>
             <?php echo Form::close(); ?>

             <td>
             <?php echo Form::open(['method' => 'DELETE', 'route'=>['groups.destroy', $group->id]]); ?>

             <?php echo Form::submit('Delete', ['class' => 'btn btn-danger']); ?>

             <?php echo Form::close(); ?>

             </td>
         </tr>
     <?php endforeach; ?>



     </tbody>

 </table>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>