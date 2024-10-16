<?php require APPROOT . '/views/inc/header.php'; ?>
<div class="hero-wrap hero-bread" style="background-image: url(<?php echo URLROOT; ?>/images/post-item7.jpg)">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <h1 class="mb-0 bread" style="text-shadow: 12px 7px 14px #dbcc8f;">Contact Us</h1>
            </div>
        </div>
    </div>
</div>
<section class="ftco-section contact-section bg-light">
    <?php flash('contact_message'); ?>
    <div class="container">
        <div class="row d-flex mb-5 contact-info">
            <div class="w-100"></div>
            <div class="col-md-3 d-flex">
                <div class="info bg-white p-4">
                    <p><i class="fas fa-home mr-3"></i><span>Address:</span> Jordan Amman</p>
                </div>
            </div>
            <div class="col-md-3 d-flex">
                <div class="info bg-white p-4">
                    <p><i class="fas fa-phone mr-3"></i><span>Phone:</span> <a href="tel://1234567920">+ 9628877643</a></p>
                </div>
            </div>
            <div class="col-md-3 d-flex">
                <div class="info bg-white p-4">
                    <p><i class="fas fa-envelope mr-3"></i><span>Email:</span> <a href="mailto:info@yoursite.com">back@gmail.com</a></p>
                </div>
            </div>
            <div class="col-md-3 d-flex">
                <div class="info bg-white p-4">
                    <p><i  class="fas fa-print mr-3"></i><span>Website</span> <a href="#">backend.com</a></p>
                </div>
            </div>
        </div>
        <div class="row block-9">
            <div class="col-md-6 order-md-last d-flex">

                <form
                        action="<?php echo URLROOT; ?>/pages/contact"
                        class="bg-white p-5 contact-form" method="POST">
                    <div class="form-group">

                        <input type="text" class="form-control" name="full_name" placeholder="Your Name" required>

                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="subject" placeholder="Subject" required>
                    </div>
                    <div class="form-group">
                        <textarea cols="30" rows="7" class="form-control" name="message"
                                  placeholder="Message" maxlength="500" required></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                    </div>
                </form>
            </div>

            <div class="col-md-6 d-flex">
<!--               <img src="--><?php //echo URLROOT; ?><!--/images/OSK.jpg" style="width: 500px">-->
                <img src="<?php echo URLROOT; ?>/images/map2.webp" style="width: 500px">
            </div>
        </div>
    </div>
</section>
<section class="ftco-gallery" style="display: flex">
    <?php if (isset($data['Categories']) && is_array($data['Categories'])): ?>
        <?php
        $categoriesToShow = array_slice($data['Categories'], 0, 5);
        ?>
        <?php foreach ($categoriesToShow as $Categories): ?>

            <div class="container-fluid px-0">
                <div class="row no-gutters">
                    <div class=" col-md-12 col-lg-12 ftco-animate">
                        <a href="#"
                           class="gallery image-popup img d-flex align-items-center"
                           style="color:#dbcc8f;font-size:18px; background-image: url('<?php echo URLROOT . "/images/" . $Categories->image_url ?>');">
                        </a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <p>No categories available.</p>
    <?php endif; ?>
</section>
<?php require APPROOT . '/views/inc/footer.php'; ?>