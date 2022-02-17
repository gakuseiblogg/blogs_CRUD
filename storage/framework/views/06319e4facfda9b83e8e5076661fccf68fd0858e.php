<!DOCTYPE HTML>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
        integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
        <script src="<?php echo e(asset('js/menu.js')); ?>"></script>
</head>
<script src="/js/app.js" defer></script>
</head>

<body>
    <header>
        <?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </header>
    <br>
    <div class="container">
        <?php echo $__env->yieldContent('content'); ?>
    </div>
    <footer class="footer bg-dark fixed-bottom">
       <?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </footer>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</body>

</html><?php /**PATH /Applications/MAMP/htdocs/blogs/resources/views/blog/layout.blade.php ENDPATH**/ ?>