<ul class="action">
    <li>
        <form action="<?php echo e(url('admin/team/delete/'.$tim->id)); ?>" method="POST">
            <?php echo e(csrf_field()); ?>

            <?php echo e(method_field('DELETE')); ?>

            <button class="btn btn-danger">
                Hapus
            </button>
        </form>
    </li>
    <li>
        <form action="<?php echo e(url('admin/team/edit/'.$tim->id)); ?>" method="POST">
            <?php echo e(csrf_field()); ?>

            <button class="btn btn-warning">
                Edit
            </button>
        </form>
    </li>
    <li>
        <form action="<?php echo e(url('admin/team/anggota/'.$tim->id)); ?>" method="POST">
            <?php echo e(csrf_field()); ?>

            <button class="btn btn-info">
                Detail
            </button>
        </form>
    </li>
