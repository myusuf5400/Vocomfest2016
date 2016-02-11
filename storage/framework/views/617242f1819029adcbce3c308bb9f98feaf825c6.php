<?php $__env->startSection('title', 'Upload'); ?>
<?php $__env->startSection('content'); ?>
<div>

    <?php echo $transloadit; ?>

    <input name="server" type="text" value="<?php echo $server; ?>" style="display:none">
    <input name="tipe" type="text" value="<?php echo $tipe; ?>" style="display:none">
    <input name="example_upload" type="file"/>
    <input type="submit" value="Upload"/>
</form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>