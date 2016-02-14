<nav class="navbar navbar-default def-style navbar-fixed-top">
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
			<a href="<?php echo e(url('/')); ?>" class="navbar-brand">
                <img src="<?php echo e(url('assets/img/logo.png')); ?>" alt="Vocomfest 2016" title="Vocomfest 2016" class="logo"/>
            </a>
        </div>
        <div class="collapse navbar-collapse" id="menu">
            <ul class="nav navbar-nav navbar-right">
            	<li>
                    <a href="<?php echo e(url('/user')); ?>">
                    DASHBOARD
                    </a>
                </li> 
            	<li>
                    <a href="<?php echo e(url('/user/upload')); ?>">
                        UPLOAD <?php if(Auth::user()->team->kategori==0): ?>WEB <?php else: ?> PROPOSAL <?php endif; ?>
                    </a>
                </li>       
                <li>
                    <a href="<?php echo e(url('/logout')); ?>">
                        LOGOUT
                    </a>
                </li>
            </ul>
        </div>
	</div>
</nav>