<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- META for optimize the web -->
        <meta charset="UTF-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE-Edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <meta name="description" content="Vocational Computer Festival (Vocomfest) adalah lomba tahunan yang diselenggarakan oleh HIMAKOMSI UGM yang terdiri dari lomba web design untuk SLTA, lomba mmobile apps untuk mahasiswa, dan ditutup dengan sebuah seminar nasional."/>
        <meta name="author" content="Vocomfest 2016 Techincal Support"/>
        <meta name="keywords" content="Lomba web, lomba mobile apps, lomba IT, UGM, Himakomsi, Vocomfest, Vocomfest 2016"/>
        <meta name="robots" content="index,follow"/>
        <meta name="Copyright" content="Vocomfest 2016 adalah website buatan Tim TS Vocomfest 2016"/>
        <title>
            <?php echo $__env->yieldContent('title'); ?>
        </title>
        <!-- CSS Here -->
        <link rel="stylesheet" type="text/css" href="<?php echo e(url('assets/css/vocomfest.css')); ?>"/>
    </head>
    <?php echo $__env->yieldContent('content'); ?>
    <!-- JS Here -->
    <script type="text/javascript" src="<?php echo e(url('assets/js/vocomfest.js')); ?>">
    </script>
    <script type="text/javascript">
    $(document).ready(function() {
    // initialize
        <?php if(count($errors->semnas)>0): ?>
            $('#seminar').show();
            $('#compete').hide();
        <?php else: ?>
            $('#seminar').hide();
        <?php endif; ?>

        $('#mem3').hide();
        $('#tab-event a[href="#comp"]').click(function() {
            $('#compete').fadeIn();
            $('#seminar').fadeOut();
            $('#comp').tab('show');
        });
        $('#tab-event a[href="#semnas"]').click(function() {
            $('#seminar').fadeIn();
            $('#compete').fadeOut();
            $('#semnas').tab('show');
        });
        $("html").niceScroll({
            cursorcolor: 'rgba(0,0,0,0.5)',
            cursorwidth: '7px',
            cursorborder: 'none',
            cursorborderradius: '0px',
            zindex: '101'
        });
        $('.ev-cat').click(function() {
            if ($('#wdc').is(':checked')) {
                $('#mem3').fadeOut();
            } else {
                $('#mem3').fadeIn();
            }
        });
    });
    </script>
</body>
</html>
