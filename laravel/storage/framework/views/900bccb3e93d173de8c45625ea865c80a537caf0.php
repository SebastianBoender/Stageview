<?php $__env->startSection('content'); ?>
 <h1>Stageview admin</h1>
 <a href="/books/admin" class="btn btn-success">Go back</a>
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
     <?php foreach($books as $book): ?>
          <?php
            $id = $book->id;
         ?>
         <tr>
             <td><?php echo e($book->id); ?></td>
             <td><?php echo e($book->compName); ?></td>
             <td><?php echo e($book->title); ?></td>
             <td><?php echo e($book->author); ?></td>
             <td><?php echo e($book->publisher); ?></td>
             <td><img src="<?php echo e(asset('img/'.$book->image.'')); ?>" height="45" width="45"></td>
             <?php echo Form::open(['method'=>'POST', 'url' => '/trashed-books/restore/'.$id]); ?>

             <td><?php echo Form::submit('Undelete', ['class' => 'btn btn-warning']); ?></td>
             <?php echo Form::close(); ?>

             <td>
             <?php echo Form::open(['method' => 'DELETE', 'route'=>['trashed-books.destroy', $book->id]]); ?>

             <?php echo Form::submit('Delete', ['class' => 'btn btn-danger']); ?>

             <?php echo Form::close(); ?>

             </td>
         </tr>
     <?php endforeach; ?>



     </tbody>

 </table>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>