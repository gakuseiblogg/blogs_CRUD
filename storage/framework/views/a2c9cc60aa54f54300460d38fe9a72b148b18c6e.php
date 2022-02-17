<?php $__env->startSection('title','ブログ詳細'); ?>
<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <h2><?php echo e($blog->title); ?></h2>
        <span>作成日:<?php echo e($blog->created_at); ?></span>
        <span>更新日:<?php echo e($blog->updated_at); ?></span>
        <p><?php echo e($blog->content); ?></p>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('blog.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/blogs/resources/views/blog/detail.blade.php ENDPATH**/ ?>