<?php require APPROOT . '/views/inc/header.php'; ?>

<div class="hero-wrap hero-bread" style="background-image: url(<?php echo URLROOT; ?>/images/blog5.jpg)">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-7 ftco-animate text-center">

                <h1 class="mb-0 bread" style="text-shadow: 12px 7px 14px #dbcc8f;">Blog</h1>

            </div>
        </div>
    </div>
</div>

<section>
    <div class="container">
        <div class="row">

            <div class="col-lg-10 order-lg-last ftco-animate">
                <?php foreach ($data['bloges'] as $bloge): ?>
                <div class="row">
                    <div class="col-md-9 d-flex ftco-animate">
                        <div class="blog-entry align-self-stretch d-md-flex">
                            <a href="blog-single.html" target="_blank" class="block-20"
                               style="background-image: url('<?php echo URLROOT; ?>/images/image_1.jpg');">
                            </a>
                            <div class="text d-block pl-md-2">
                                <div class="meta mb-3">
                                    <br>

                                    <div><a href="#"> <?php echo $bloge->create_at; ?></a></div>
                                    <div><a href="#" style="color: #d5c37c">Admin</a></div>
                                    <!--                                    <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>-->
                                </div>
                                <h3 style="color: #d5c37c"><?php echo $bloge->name; ?>    </h3>
                                <!--                                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>-->
                                <p> <?php echo $bloge->description . "......... "; ?>
                                    <a href="<?php echo URLROOT; ?>/pages/details">Read more</a>
                                </p>
                                <img src="<?php echo URLROOT . "/images/" . $bloge->image_url ?>" style="width:250px">
                                <br>
                                <br>
                                <a target="_blank" class="btn btn-primary py-2 px-3" href="<?php echo $bloge->action_url; ?>" >more information</a>
                            </div>
                        </div>

                    </div>

                    <?php endforeach; ?>
</section> <!-- .section -->
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
