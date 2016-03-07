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
        <a href="<?php echo e(url('admin/team/edit/'.$tim->id)); ?>">
            <button class="btn btn-warning">
                Edit
            </button>
        </a>
    </li>
    <li>
        <a href="<?php echo e(url('admin/team/detail/'.$tim->id)); ?>">
            <button class="btn btn-info">
                Detail
            </button>
        </a>
    </li>
</ul>
