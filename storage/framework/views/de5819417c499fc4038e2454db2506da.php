<?php $__env->startSection('title', 'Project'); ?>

<?php $__env->startSection('content'); ?>
<div class="container py-1 pb-5">
    
    <div class="mb-4 fade-in-up text-center text-md-start">
        <h4 class="fw-bold" style="font-size: 1.8rem; color: rgb(65, 88, 194); letter-spacing: 2px;">WORKS</h4>
    </div>

    <form action="<?php echo e(url()->current()); ?>" method="GET" class="mb-5 fade-in-up" id="filterForm">
        <div class="row g-3 justify-content-center">
            
            <div class="col-12 col-md-6">
                <input type="text" name="search" id="searchInput" class="form-control rounded-3 shadow-sm border-0 bg-light" placeholder="Search anime title..." value="<?php echo e(request('search')); ?>">
            </div>
            
            <div class="col-12 col-md-3">
                <select name="musim" id="musimSelect" class="form-select rounded-3 shadow-sm border-0 bg-light">
                    <option value="">All Seasons</option>
                    <?php $__currentLoopData = $musims; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($m); ?>" <?php echo e(request('musim') == $m ? 'selected' : ''); ?>><?php echo e($m); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            
            <div class="col-12 col-md-3">
                <select name="tipe" id="tipeSelect" class="form-select rounded-3 shadow-sm border-0 bg-light">
                    <option value="">All Types</option>
                    <?php $__currentLoopData = $tipes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($t); ?>" <?php echo e(request('tipe') == $t ? 'selected' : ''); ?>><?php echo e($t); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            
        </div>
    </form>

    <div class="row row-cols-2 row-cols-md-3 row-cols-lg-5 g-4">
        <?php $__empty_1 = true; $__currentLoopData = $works; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $work): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <div class="col fade-in-up">
                <a href="<?php echo e(route('project.detail', $work->id)); ?>" class="text-decoration-none">
                    <div class="card bg-transparent border-0 h-100 poster-card" style="cursor: pointer;">
                        <div class="overflow-hidden position-relative rounded-3 shadow-sm" style="aspect-ratio: 2/3;">
                            <img src="<?php echo e(asset('images/' . $work->nama_file_gambar)); ?>"
                                class="img-fluid w-100 h-100 object-fit-cover"
                                style="transition: transform 0.4s ease, filter 0.4s ease;"
                                onmouseover="this.style.transform='scale(1.08)'; this.style.filter='brightness(0.7)';"
                                onmouseout="this.style.transform='scale(1)'; this.style.filter='brightness(1)';"
                                alt="<?php echo e($work->judul_anime); ?>">
                            
                            <div class="position-absolute top-0 start-0 p-2">
                                <span class="badge bg-danger shadow-sm" style="font-size: 0.7rem;"><?php echo e($work->tipe); ?></span>
                            </div>
                            
                            <div class="position-absolute bottom-0 start-0 w-100 p-2 bg-dark bg-opacity-75 text-white" style="backdrop-filter: blur(4px);">
                                <div class="fw-bold mb-1 text-truncate" title="<?php echo e($work->judul_anime); ?>" style="font-size: 0.85rem;"><?php echo e($work->judul_anime); ?></div>
                                <div class="text-light fw-medium" style="font-size: 0.75rem;"><?php echo e($work->musim_rilis); ?></div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <div class="col-12 text-center py-5">
                <h5 class="text-muted fw-bold mt-4">No works found matching your criteria.</h5>
                <a href="<?php echo e(url()->current()); ?>" class="btn btn-outline-primary mt-3 rounded-pill px-4">Reset Filter</a>
            </div>
        <?php endif; ?>
    </div>

    <div class="d-flex justify-content-center mt-5 fade-in-up">
        <?php echo e($works->links('pagination::bootstrap-5')); ?>

    </div>

</div>

<style>
    .fade-in-up { animation: fadeInUp 0.8s ease-out forwards; opacity: 0; }
    @keyframes fadeInUp { from { opacity: 0; transform: translateY(20px); } to { opacity: 1; transform: translateY(0); } }
    .object-fit-cover { object-fit: cover; }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('filterForm');
        const searchInput = document.getElementById('searchInput');
        const musimSelect = document.getElementById('musimSelect');
        const tipeSelect = document.getElementById('tipeSelect');

        musimSelect.addEventListener('change', function() {
            form.submit();
        });

        tipeSelect.addEventListener('change', function() {
            form.submit();
        });

        let typingTimer;
        const doneTypingInterval = 500;

        searchInput.addEventListener('input', function() {
            clearTimeout(typingTimer);
            typingTimer = setTimeout(function() {
                form.submit();
            }, doneTypingInterval);
        });

        const end = searchInput.value.length;
        searchInput.setSelectionRange(end, end);
        searchInput.focus();
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\Documents\Pendidikan\KULIAH\SEMESTER III\Rekayasa Web\soal\resources\views/page/works.blade.php ENDPATH**/ ?>