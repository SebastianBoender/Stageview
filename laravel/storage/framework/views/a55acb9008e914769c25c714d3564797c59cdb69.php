<?php $__env->startSection('content'); ?>
    <h1>Create Book</h1>
    <?php echo Form::open(['url' => 'books']); ?>

    <div class="form-group">
        <?php echo Form::label('compName', 'Bedrijfsnaam:'); ?>

        <?php echo Form::text('compName',null,['class'=>'form-control']); ?>

    </div>
    <div class="form-group">
        <?php echo Form::label('Title', 'Title:'); ?>

        <?php echo Form::text('title',null,['class'=>'form-control']); ?>

    </div>
    <div class="form-group">
        <?php echo Form::label('Author', 'Author:'); ?>

        <?php echo Form::text('author',null,['class'=>'form-control']); ?>

    </div>
    <div class="form-group">
        <?php echo Form::label('Publisher', 'Publisher:'); ?>

        <?php echo Form::text('publisher',null,['class'=>'form-control']); ?>

    </div>
    <div class="form-group">
        <?php echo Form::label('Image', 'Image:'); ?>

        <?php echo Form::text('image',null,['class'=>'form-control']); ?>

    </div>
    <div class="form-group">
        <?php echo Form::file('image'); ?>

    </div>
    <div class="form-group">
        <?php echo Form::submit('Save', ['class' => 'btn btn-primary form-control']); ?>

    </div>
    <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <h1>Creëer bedrijf</h1>
<<<<<<< HEAD:laravel/storage/framework/views/279a15635b1c4966cb2d2b1966b1f61e8686954c.php
    <?php echo Form::open(['url'=>'books','method'=>'POST', 'files'=>true]); ?>
=======
    <?php echo Form::open(['url' => 'books']); ?>
>>>>>>> 23328e205a8c5b2485387d8b1790cd006c0d91fd:laravel/storage/framework/views/a55acb9008e914769c25c714d3564797c59cdb69.php

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

        <?php echo Form::textarea('review',null,['class'=>'form-control']); ?>

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