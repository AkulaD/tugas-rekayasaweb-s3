<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>A-1 Picture</title>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
</head>
<body class="d-flex flex-column min-vh-100">
    <?php echo $__env->make('partials.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <div class="container flex-grow-1" style="padding-top:86px;">
        <?php echo $__env->yieldContent('content'); ?>
    </div>

    <?php echo $__env->make('partials.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
</body>
</html><?php /**PATH D:\Documents\Pendidikan\KULIAH\SEMESTER III\Rekayasa Web\soal\resources\views/layouts/app.blade.php ENDPATH**/ ?>