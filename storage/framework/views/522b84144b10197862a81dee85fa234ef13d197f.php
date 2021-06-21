<?php if (isset($component)) { $__componentOriginal3d62dbed0010cc6c2e3e99ed543a0ae1086554a4 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\TemplateLayout::class, []); ?>
<?php $component->withName('template-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<style>.justify { text-align: justify;}</style>
    <h1 class="text-3xl text-black pb-6 justify ">Selamat Datang di Website Sistem Informasi Budidaya Tanaman Sayuran</h1>
    <p class="justify">Disini anda dapat mengetahui cara membudidayakan tanaman sayuran yang 
        nantinya anda bisa terapkan di kebun anda</p>
 <?php if (isset($__componentOriginal3d62dbed0010cc6c2e3e99ed543a0ae1086554a4)): ?>
<?php $component = $__componentOriginal3d62dbed0010cc6c2e3e99ed543a0ae1086554a4; ?>
<?php unset($__componentOriginal3d62dbed0010cc6c2e3e99ed543a0ae1086554a4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\farhanlvl\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>