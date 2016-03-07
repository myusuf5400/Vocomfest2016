<ul class="action">
    <li>
        <form action="<?php echo e(url('admin/anggota/delete/'.$anggota->id)); ?>" method="POST">
            <?php echo e(csrf_field()); ?>

            <?php echo e(method_field('DELETE')); ?>

            <button class="btn btn-danger">
                Hapus
            </button>
        </form>
    </li>
    <li>
        <a href="<?php echo e(url('admin/anggota/edit/'.$anggota->id)); ?>">
            <button class="btn btn-warning">
                Edit
            </button>
        </a>
    </li>
</ul>
