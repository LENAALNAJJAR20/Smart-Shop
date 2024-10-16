<?php require APPROOT . '/views/inc/header.php'; ?>

<div class="container marginlogin" style="margin-top: 130px; margin-bottom: 80px;">
    <div>
                        <h1 class="mb-0 bread" style=" color: #dbcc8f;">My WISHLIST</h1>
                        <P style=" color: black">Welcome to Smart_Shop! 🌟</P>
                        <P style=" color: black">this page contains your favivarte product</P>
                        <a href="<?php echo URLROOT ?>/pages/shop"  class="btn btn-light" style="color:#dbcc8f; ">
                            ADD TO YOUR WISHLIST </a>
                    </div>
                    <br>
    <?php flash('wishlist_message') ; ?>
                        <?php  foreach ($data['wishlist'] as $wish): ?>

                            <?php flash('post_message'); ?>
                            <?php flash('Product_message') ; ?>
                            <div class="col-sm-12 col-md-12 col-lg-12 ftco-animate d-flex">
                                <div class="product d-flex flex">
                                    <!-- Add photo -->
                                    <a href="#" class="img-prod">
                                        <img style="width:250px;height:200px;" class="img-fluid"
                                             src="<?php echo URLROOT . "/images/" .  $wish->image_url; ?>" alt="Product Image">
                                        <div class="overlay"></div>
                                    </a>
                                    <div class="text py-3 pb-4 px-3">
                                        <div class="d-flex">
                                            <div class="cat">
                                                <h3><?php echo $wish->name; ?></h3>
                                            </div>
                                            <br>
                                        </div>
                                        <br>
                                        <h3><a href="#"><?php echo "Price of product : " .   $wish->price .  " JD"; ?></a></h3>
                                        <br>
                                        <div class="pricing">
                                            <p class="price">
                                                <span><?php echo $wish->description ; ?></span>
                                            </p>
                                            <br>
                                        </div>
                                        <p class="top-area d-flex px-3">
                                        <form class="float-right" action="<?php echo URLROOT ?>/pages/deletewishlist" method="post">
                                            <input type="hidden" name="product_id" value="<?php echo $wish->id; ?>"/>
                                            <button type="submit" value="Delete" class="btn btn-danger" style="background-color: black;">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>
                                        </form>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>

<!--                        <p>No Posts available.</p>-->

    <?php require APPROOT . '/views/inc/footer.php'; ?>
                </div>

























