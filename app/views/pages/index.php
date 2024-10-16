<?php require APPROOT . '/views/inc/header.php'; ?>
<section id="home-section" class="hero">
    <div class="home-slider owl-carousel">
        <?php if (isset($data['banners']) && is_array($data['banners'])): ?>
            <?php foreach ($data['banners'] as $banners): ?>
                <div class="slider-item js-fullheight">
                    <div class="overlay"></div>
                    <div class="container-fluid p-0">
                        <div class="row d-md-flex no-gutters slider-text align-items-center justify-content-end"
                             data-scrollax-parent="true">
                            <img class="one-third order-md-last img-fluid"
                                 src="<?php echo 'images/' . $banners->img_url; ?>" alt="HomePage">
                            <div class="one-forth d-flex align-items-center ftco-animate"
                                 data-scrollax=" properties: { translateY: '70%' }">
                                <div class="text">
                                    <span class="subheading">#New Arrival</span>
                                    <div class="horizontal">
                                        <h1 class="mb-4 mt-3"><?php echo $banners->tittle ?></h1>
                                        <p class="mb-4"><?php echo $banners->description ?></p>
                                        <p><a href="#discount" class="btn-custom">Discount</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p>no banners found</p>
        <?php endif; ?>
    </div>
</section>

<section class="ftco-section ftco-no-pt ftco-no-pb">
    <div class="container">
        <div class="row no-gutters ftco-services">
            <div class="col-lg-4 text-center d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services p-4 py-md-5">
                    <div class="icon d-flex justify-content-center align-items-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50px" viewBox="0 0 640 512">
                            <path d="M112 0C85.5 0 64 21.5 64 48l0 48L16 96c-8.8 0-16 7.2-16 16s7.2 16 16 16l48 0 208 0c8.8 0 16 7.2 16 16s-7.2 16-16 16L64 160l-16 0c-8.8 0-16 7.2-16 16s7.2 16 16 16l16 0 176 0c8.8 0 16 7.2 16 16s-7.2 16-16 16L64 224l-48 0c-8.8 0-16 7.2-16 16s7.2 16 16 16l48 0 144 0c8.8 0 16 7.2 16 16s-7.2 16-16 16L64 288l0 128c0 53 43 96 96 96s96-43 96-96l128 0c0 53 43 96 96 96s96-43 96-96l32 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l0-64 0-32 0-18.7c0-17-6.7-33.3-18.7-45.3L512 114.7c-12-12-28.3-18.7-45.3-18.7L416 96l0-48c0-26.5-21.5-48-48-48L112 0zM544 237.3l0 18.7-128 0 0-96 50.7 0L544 237.3zM160 368a48 48 0 1 1 0 96 48 48 0 1 1 0-96zm272 48a48 48 0 1 1 96 0 48 48 0 1 1 -96 0z"/>
                        </svg>
                    </div>
                    <div class="media-body">
                        <h3 class="heading">Free Shipping</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                            there live the blind texts.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 text-center d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services p-4 py-md-5">
                    <div class="icon d-flex justify-content-center align-items-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50px" viewBox="0 0 640 512">
                            <!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                            <path d="M96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM0 482.3C0 383.8 79.8 304 178.3 304l91.4 0C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7L29.7 512C13.3 512 0 498.7 0 482.3zM609.3 512l-137.8 0c5.4-9.4 8.6-20.3 8.6-32l0-8c0-60.7-27.1-115.2-69.8-151.8c2.4-.1 4.7-.2 7.1-.2l61.4 0C567.8 320 640 392.2 640 481.3c0 17-13.8 30.7-30.7 30.7zM432 256c-31 0-59-12.6-79.3-32.9C372.4 196.5 384 163.6 384 128c0-26.8-6.6-52.1-18.3-74.3C384.3 40.1 407.2 32 432 32c61.9 0 112 50.1 112 112s-50.1 112-112 112z"/>
                        </svg>
                    </div>
                    <div class="media-body">
                        <h3 class="heading">Support Customer</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                            there live the blind texts.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 text-center d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services p-4 py-md-5">
                    <div class="icon d-flex justify-content-center align-items-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50px" viewBox="0 0 576 512">
                            <!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                            <path d="M512 80c8.8 0 16 7.2 16 16l0 32L48 128l0-32c0-8.8 7.2-16 16-16l448 0zm16 144l0 192c0 8.8-7.2 16-16 16L64 432c-8.8 0-16-7.2-16-16l0-192 480 0zM64 32C28.7 32 0 60.7 0 96L0 416c0 35.3 28.7 64 64 64l448 0c35.3 0 64-28.7 64-64l0-320c0-35.3-28.7-64-64-64L64 32zm56 304c-13.3 0-24 10.7-24 24s10.7 24 24 24l48 0c13.3 0 24-10.7 24-24s-10.7-24-24-24l-48 0zm128 0c-13.3 0-24 10.7-24 24s10.7 24 24 24l112 0c13.3 0 24-10.7 24-24s-10.7-24-24-24l-112 0z"/>
                        </svg>
                    </div>
                    <div class="media-body">
                        <h3 class="heading">Secure Payments</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                            there live the blind texts.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="ftco-section bg-light">
        <div class="col justify-content-center mb-3 pb-3">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <h2 class="mb-4">Categories</h2>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <?php if (isset($data['Categories']) && is_array($data['Categories'])): ?>
                    <?php foreach ($data['Categories'] as $Categories): ?>
                        <div class="col-sm-6 col-md-4 col-lg-3 mb-4 ">
                            <div class="product d-flex flex-column h-75">
                                <a href="<?php echo URLROOT . '/pages/shop/?category_id=' . $Categories->id . '&page=1'; ?>"
                                   class="img-prod h-100">
                                    <img style="object-fit: cover;width: 100%;height: 100%;"
                                         class="w-100 h-100 mg-fluid"
                                         src="<?php echo 'images/' . $Categories->image_url; ?>" alt="Product Image">
                                    <div class="overlay "></div>
                                </a>
                                <div class="text py-3 pb-4 px-3 h-25">
                                    <div class="d-flex">
                                        <div class="cat">
                                            <span><?php echo $Categories->name; ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p>No categories available.</p>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-choose ftco-no-pb ftco-no-pt">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-4">
                    <div class="choose-wrap divider-one img p-5 d-flex align-items-end"
                         style="background-image: url(<?php echo URLROOT; ?>/images/macbook-pro.jpg);">

                        <div class="text text-center text-white px-2">

                            <h2>Laptop</h2>
                            <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large
                                language ocean.</p>
                            <p><a href="<?php echo URLROOT; ?>/pages/shop" class="btn btn-black px-3 py-2">Shop now</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row no-gutters choose-wrap divider-two align-items-stretch">
                        <div class="col-md-12">
                            <div class="choose-wrap full-wrap img align-self-stretch d-flex align-item-center justify-content-end"
                                 style="background-image: url(<?php echo URLROOT; ?>/images/pc-setup2.jpg);">
                                <div class="col-md-7 d-flex align-items-center">
                                    <div class="text text-white px-5">
                                        <h2>Computer's</h2>
                                        <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a
                                            large language ocean.</p>
                                        <p><a href="<?php echo URLROOT; ?>/pages/shop" class="btn btn-black px-3 py-2">Shop
                                                now</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row no-gutters">
                                <div class="col-md-6">
                                    <div class="choose-wrap full-wrap img align-self-stretch d-flex align-item-center justify-content-end"
                                         style="background-image: url(<?php echo URLROOT; ?>/images/post-item5.jpg);">
                                        <div class="text text-center px-5" style="margin-top: 50px">
                                            <span class="subheading">Summer Sale</span>
                                            <h2>Extra 50% Off</h2>
                                            <p>Separated they live in Bookmarksgrove right at the coast of the
                                                Semantics, a large language ocean.</p>
                                            <p><a href="<?php echo URLROOT; ?>/pages/shop" class="btn btn-black px-3 py-2">Shop now</a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="choose-wrap wrap img align-self-stretch d-flex align-items-center"
                                         style="background-image: url(<?php echo URLROOT; ?>/images/insta-item1.jpg);">
                                        <div class="text text-center text-white px-5">
                                            <span class="subheading">Shoes</span>
                                            <h2>Best Sellers</h2>
                                            <p>Separated they live in Bookmarksgrove right at the coast of the
                                                Semantics, a large language ocean.</p>
                                            <p><a href="<?php echo URLROOT; ?>/pages/shop"
                                                  class="btn btn-black px-3 py-2">Shop now</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
    <div id="discount"  >
        <div class="container" >
                <!-- Timer Column -->
                <div class="col-lg-12 d-flex flex-column align-items-center" style="background-color: #dbcc8f">
                   <div>
                       <div class="heading-section heading-section-white">
                           <h2 class="my-3">Deal of the month</h2>
                       </div>

                       <div id="timer" class="d-flex mb-4 border pl-4 py-2">
                           <div class="time font-weight-light" id="days"></div>
                           <div class="time font-weight-light pl-4" id="hours"></div>
                           <div class="time font-weight-light pl-4" id="minutes"></div>
                           <div class="time font-weight-light pl-4 pr-5" id="seconds"></div>
                       </div>
                   </div>

                <!-- Banner Slider Column -->
<!--                    <div class="home-slider owl-carousel w-50">-->
<!--                        --><?php //if (isset($data['banners']) && is_array($data['banners'])): ?>
<!--                            --><?php //foreach ($data['banners'] as $banners): ?>
<!--                                <div class="slider-item js-fullheight">-->
<!--                                    <div class="overlay"></div>-->
<!--                                    <div class="container-fluid p-0">-->
<!--                                        <div class="row d-md-flex no-gutters slider-text align-items-center justify-content-end"-->
<!--                                             data-scrollax-parent="true">-->
<!--                                            <div class="one-forth d-flex align-items-center ftco-animate"-->
<!--                                                 data-scrollax=" properties: { translateY: '70%' }">-->
<!--                                                <div class="text">-->
<!--                                                    <div class="horizontal">-->
<!--                                                        <div class="col-md-6">-->
<!--                                                            <img src="--><?php //echo 'images/' . $banners->img_url; ?><!--"-->
<!--                                                                 class="img-fluid" alt="">-->
<!--                                                        </div>-->
<!--                                                        <h2 class="mb-4 mt-3">--><?php //echo $banners->tittle ?><!--</h2>-->
<!--                                                        <h4 class="mb-4">Extra --><?php //echo $banners->Discount ?><!--  Off</h4>-->
<!--                                                        <p><a href="--><?php //echo URLROOT; ?><!--/pages/shop" class="btn-custom">Shop</a></p>-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            --><?php //endforeach; ?>
<!--                        --><?php //else: ?>
<!--                            <p>No banners found</p>-->
<!--                        --><?php //endif; ?>
<!--                    </div>-->
<!--                </div>-->
<!--                          end banner-->
<!--            </div>-->

    </div>
</section>
    <section class="ftco-section ftco-no-pt  ">
    <div class="container mt-5 product" >
        <h2>Leave a Comment</h2>
        <form action="<?php echo URLROOT ?>/pages/addcomments" method="POST">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Enter your name" required>
                <span class="invalid-feedback"><?php echo $data['name_err']; ?></span>
            </div>
            <div class="form-group">
                <label for="position">Position</label>
                <input type="text" class="form-control" name="position" id="position" placeholder="Enter your position" required>
                <span class="invalid-feedback"><?php echo $data['Position_err']; ?></span>
            </div>
            <div class="form-group">
                <label for="comment">Comment</label>
                <textarea class="form-control" name="comment" id="comment" rows="4" placeholder="Enter your comment" required></textarea>
                <span class="invalid-feedback"><?php echo $data['comment_err']; ?></span>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
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
                           style="color:#dbcc8f;font-size:18px; background-image: url('<?php echo 'images/' . htmlspecialchars($Categories->image_url); ?>');">
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
