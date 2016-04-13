<?php $__env->startSection('content'); ?>
    <h1>Create Book</h1>
    <?php echo Form::open(['url' => 'books']); ?>

    <div class="form-group">
        <?php echo Form::label('compName', 'Bedrijfsnaam:'); ?>

        <?php echo Form::text('compName',null,['class'=>'form-control']); ?>

    </div>
    <div class="form-group">
        <?php echo Form::label('Title', 'Beschrijving:'); ?>

        <?php echo Form::text('title',null,['class'=>'form-control']); ?>

    </div>
    <div class="form-group">
        <?php echo Form::label('Author', 'Contactpersoon:'); ?>

        <?php echo Form::text('author',null,['class'=>'form-control']); ?>

    </div>
    <div class="form-group">
        <?php echo Form::label('Publisher', 'Email-adres:'); ?>

        <?php echo Form::text('publisher',null,['class'=>'form-control']); ?>

    </div>
    <div class="form-group">
        <?php echo Form::label('Image', 'Afbeelding:'); ?>

        <?php echo Form::text('image',null,['class'=>'form-control']); ?>

    </div>
    <div class="form-group">
        <?php echo Form::label('review', 'Review:'); ?>

        <?php echo Form::text('review',null,['class'=>'form-control']); ?>

    </div>
    <div class="form-group">
        <?php echo Form::label('location', 'Locatie'); ?>

        <?php echo Form::text('location',null,['class'=>'form-control']); ?>

    </div>
    <div class="form-group">
        <?php echo Form::label('tags', 'Tags, gescheiden door een komma'); ?>

        <?php echo Form::text('tags',null,['class'=>'form-control']); ?>

    </div>
    <div class="form-group">
        <?php echo Form::submit('Save', ['class' => 'btn btn-primary form-control']); ?>

    </div>
    <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>