<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand"  href="<?php echo URLROOT; ?>">Minishop</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa-solid fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active"> <a class="nav-link" href="<?php echo URLROOT; ?>">Home</a>
                <li class="nav-item active"> <a class="nav-link" href="<?php echo URLROOT; ?>/pages/shop">Shop</a>
                <li class="nav-item"><a class="nav-link" href="<?php echo URLROOT; ?>/pages/about">About</a></li>
                <li class="nav-item"><a href="<?php echo URLROOT; ?>/pages/blog" class="nav-link">Blog</a></li>
                <li class="nav-item"><a href="<?php echo URLROOT; ?>/pages/contact" class="nav-link">Contact</a></li>
<!--                <li class="nav-item cta cta-colored"><a href="--><?php //echo URLROOT; ?><!--/pages/cart" class="nav-link"><img src="--><?php //echo URLROOT; ?><!--/images/shopping-cart.png" style="width: 22px"></a></li>-->

                <li class="nav-item cta cta-colored"><a href="<?php echo URLROOT; ?>/pages/wishlist" class="nav-link"><img src="<?php echo URLROOT; ?>/images/wishlist.png" style="width: 22px"></a></li>

            </ul>

            <ul class="navbar-nav ml-auto">
                <?php if(isset($_SESSION['user_id'])) : ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo URLROOT; ?>/pages/myProfile">Welcome <?php echo $_SESSION['user_name']; ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"  href="<?php echo URLROOT; ?>/users/logout">Logout</a>
                    </li>
                <?php else : ?>
                    <li class="nav-item"><a href="<?php echo URLROOT; ?>/users/login" class="nav-link">Login</a></li>
                    <li class="nav-item"><a href="<?php echo URLROOT; ?>/users/register" class="nav-link">Sign Up</a></li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->

