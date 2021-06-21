<?php if (isset($component)) { $__componentOriginal3d62dbed0010cc6c2e3e99ed543a0ae1086554a4 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\TemplateLayout::class, []); ?>
<?php $component->withName('template-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<h3>Mau tau cara budidaya tanaman sayuran daftar disini</h3>
<form class=" form-horizontal " action=" ">
                <div class="form-group ">
                    <label class="control-label col-sm-3 colom1 ">NIK:</label>
                    <div class="col-sm-9 ">
                        <input type="text" class="formcontrol " required placeholder="Masukkan NIK " name="nik">
                    </div>
                </div>
                <div class="form-group ">
                    <label class="control-label col-sm-3 colom1 ">No.KK:</label>
                    <div class="col-sm-9 ">
                        <input type="text" class="formcontrol " required placeholder="Masukkan No.KK " name="no.kk ">
                    </div>
                </div>
                <div class="form-group ">
                    <label class="control-label col-sm-3 colom1 ">Nama:</label>
                    <div class="col-sm-9 ">
                        <input type="text" class="formcontrol " required placeholder="Masukkan Nama " name="nama ">
                    </div>
                </div>
                <div class="form-group ">
                    <label class="control-label col-sm-3 colom1 ">Alamat:</label>
                    <div class="col-sm-9 ">
                        <input type="text" class="formcontrol " required placeholder="Masukkan Alamat " name="alamat">
                    </div>
                </div>
                <div class="form-group ">
                    <label class="control-label col-sm-3 colom1 ">Provinsi:</label>
                    <div class="col-sm-9 ">
                        <input type="text" class="formcontrol " required placeholder="Masukkan Provinsi " name="provinsi">
                    </div>
                </div>
                <div class="form-group ">
                    <label class="control-label col-sm-3 colom1 ">No.HP:</label>
                    <div class="col-sm-9 ">
                        <input type="text" class="formcontrol " required placeholder="Masukkan No.hp " name="no.hp">
                    </div>
                </div>
                <div class="form-group ">
                    <label class="control-label col-sm-3 colom1 ">E-mail:</label>
                    <div class="col-sm-9 ">
                        <input type="text" class="formcontrol " required placeholder="Masukkan E-mail " name="e-mail">
                    </div>
                <div class="form-group ">
                    <div class="col-sm-offset-3 col-sm-9 ">
                        <button type="submit " class="btn btn-default ">Submit</button>
                    </div>
                </div>
                </div>
                </form>
 <?php if (isset($__componentOriginal3d62dbed0010cc6c2e3e99ed543a0ae1086554a4)): ?>
<?php $component = $__componentOriginal3d62dbed0010cc6c2e3e99ed543a0ae1086554a4; ?>
<?php unset($__componentOriginal3d62dbed0010cc6c2e3e99ed543a0ae1086554a4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\farhanlvl\resources\views/admin/form.blade.php ENDPATH**/ ?>