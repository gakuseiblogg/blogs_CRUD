<?php $__env->startSection('title', 'ブログ編集'); ?>
<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <h2>ブログ編集フォーム</h2>
        <form method="POST" action="<?php echo e(route('update')); ?>" onSubmit="return checkSubmit()">
            <?php echo csrf_field(); ?>
            <input type="hidden" name="id" class="form-control" value="<?php echo e($blog->id); ?>">
            <div class="form-group">
                <label for="title">
                    タイトル
                </label>
                <input id="title" name="title" class="form-control" value="<?php echo e($blog->title); ?>" type="text">
                <?php if($errors->has('title')): ?>
                <div class="text-danger">
                    <?php echo e($errors->first('title')); ?>

                </div>
                <?php endif; ?>
            </div>
            <div class="form-group">
                <label for="content">
                    本文
                </label>
                <textarea id="content" name="content" class="form-control" rows="4"><?php echo e($blog->content); ?></textarea>
                <?php if($errors->has('content')): ?>
                <div class="text-danger">
                    <?php echo e($errors->first('content')); ?>

                </div>
                <?php endif; ?>
            </div>
            <div class="mt-5">
                <a class="btn btn-secondary" href="<?php echo e(route('blogs')); ?>">
                    キャンセル
                </a>
                <button type="submit" class="btn btn-primary">
                    更新する
                </button>
            </div>
        </form>
    </div>
</div>
<script>
    function checkSubmit(){
if(window.confirm('送信してよろしいですか？')){
    return true;
} else {
    return false;
}
}
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('blog.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/blogs/resources/views/blog/edit.blade.php ENDPATH**/ ?>