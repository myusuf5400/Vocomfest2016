<nav id="main-nav" class="navbar navbar-default transparent">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu" aria-expanded="false">
                <span class="sr-only">
                    Toggle navigation
                </span>
                <span class="icon-bar">
                </span>
                <span class="icon-bar">
                </span>
                <span class="icon-bar">
                </span>
            </button>
            <a href="<?php echo e(url('/#home')); ?>" class="navbar-brand">
                <img src="assets/img/logo.png" alt="Vocomfest 2016" title="Vocomfest 2016" class="logo"/>
            </a>
        </div>
        <div class="collapse navbar-collapse" id="menu">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="<?php echo e(url('/#home')); ?>">
                        HOME
                    </a>
                </li>
                <li>
                    <a href="<?php echo e(url('/#about')); ?>">
                        ABOUT
                    </a>
                </li>
                <li>
                    <a href="<?php echo e(url('/#events')); ?>">
                        EVENTS
                    </a>
                </li>
                <li>
                    <a href="<?php echo e(url('/#timeline')); ?>">
                        TIMELINE
                    </a>
                </li>
                <li>
                    <a href="<?php echo e(url('/#testimoni')); ?>">
                        TESTIMONIALS
                    </a>
                </li>
                <li>
                    <a href="<?php echo e(url('/#contact')); ?>">
                        CONTACT
                    </a>
                </li>
                <?php if(Auth::guest()): ?>
                <li>
                    <a href="<?php echo e(url('/register')); ?>">
                        REGISTER
                    </a>
                </li>
                <li>
                    <a href="<?php echo e(url('/login')); ?>">
                        LOGIN
                    </a>
                </li>
                <?php else: ?>
                <?php if(Auth::user()->
                level==6): ?>
                <li>
                    <a href="<?php echo e(url('admin')); ?>">
                        ADMIN
                    </a>
                </li>
                <?php else: ?>
                <li>
                    <a href="<?php echo e(url('user')); ?>">
                        PESERTA
                    </a>
                </li>
                <?php endif; ?>
                <li>
                    <a href="<?php echo e(url('/logout')); ?>">
                        LOGOUT
                    </a>
                </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>
