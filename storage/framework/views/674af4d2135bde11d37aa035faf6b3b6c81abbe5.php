<?php $__env->startSection('title','ブログ一覧'); ?>
<?php $__env->startSection('content'); ?>

<div class="row">
  <div class="col-md-10 col-md-offset-2">
    <h2>ブログ記事一覧</h2>
    <?php if(session('err_msg')): ?>
    <p class="text-danger">
      <?php echo e(session('err_msg')); ?>

    </p>
    <?php endif; ?>
    <table class="table table-striped">
      <tr>
        <th>記事番号</th>
        <th>タイトル</th>
        <th>日付</th>
        <th></th>
        <th></th>
      </tr>
      <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
        <td><?php echo e($blog->id); ?></td>
        <td><a href="/blog/<?php echo e($blog->id); ?>"><?php echo e($blog->title); ?></a></td>
        <td><?php echo e($blog->updated_at); ?></td>
        <td><button type="button" class="btn btn-primary"
            onclick="location.href='/blog/edit/<?php echo e($blog->id); ?>'">編集</button></td>
            <form method="POST" action="<?php echo e(route('delete', $blog->id)); ?>" onSubmit="return checkDelete()">
          <?php echo csrf_field(); ?>
          <td><button type="submit" class="btn btn-primary" onclick=>削除</button></td>
      </tr>
    </form>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
  </div>
</div>

<script>
  function checkDelete(){
if(window.confirm('削除してよろしいですか？')){
  return true;
} else {
  return false;
}
}
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('blog.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/blogs/resources/views/blog/list.blade.php ENDPATH**/ ?>