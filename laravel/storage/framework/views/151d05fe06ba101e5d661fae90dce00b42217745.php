<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
<title>BookStore</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap
/3.3.4/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <?php echo $__env->yieldContent('content'); ?>
    </div>
</body>
</html>