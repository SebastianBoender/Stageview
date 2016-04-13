<h1>All Users</h1>

<?php echo link_to_route('users.create', 'Add new user'); ?>


<?php if($users->count()): ?>
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Username</th>
                <th>Password</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Name</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($users as $user): ?>
            <tr>
                <td><?php echo e($user->username); ?></td>
                <td><?php echo e($user->password); ?></td>
                <td><?php echo e($user->email); ?></td>
                <td><?php echo e($user->phone); ?></td>
                <td><?php echo e($user->name); ?></td>
                <td><?php echo link_to_route('users.edit', 'Edit', array($user->id), array('class' => 'btn btn-info')); ?></td>
                <td>
                <?php echo Form::open(array('method' => 'DELETE', 'route' => array('users.destroy', $user->id))); ?>                       
                <?php echo Form::submit('Delete', array('class' => 'btn btn-danger')); ?>

                <?php echo Form::close(); ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php else: ?>
    There are no users
<?php endif; ?>
