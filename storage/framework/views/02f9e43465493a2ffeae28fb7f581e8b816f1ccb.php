<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">ブログ</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-item nav-link active" href="<?php echo e(route ('blogs')); ?>">ブログ一覧 <span class="sr-only"></span></a>
            <a class="nav-item nav-link" href="<?php echo e(route ('create')); ?>">ブログ投稿</a>
            <a class="nav-item nav-link active" href="https://prog-8.com/">Progate <span class="sr-only"></span></a>
            <a class="nav-item nav-link active" href="https://qiita.com/hirotototototo/items/08acae28a99c1fcfb785">参考文献 <span class="sr-only"></span></a>
        </div>
    </div>
</nav>
<?php /**PATH /Applications/MAMP/htdocs/blogs/resources/views/header.blade.php ENDPATH**/ ?>