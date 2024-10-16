<?php require APPROOT . '/views/inc/header.php'; ?>

<div class="container marginlogin" style="margin-top: 130px; margin-bottom: 80px;">
<div>
    <h1 class="mb-0 bread" style=" color: #dbcc8f;">My Profile</h1>
    <P style=" color: black">Welcome to Smart_Shop! 🌟</P>
    <P style=" color: black">this page contains the products you published</P>
    <a href="<?php echo URLROOT ?>/pages/shop"  class="btn btn-light" style="color:#dbcc8f; ">
        ADD PRODUCT </a>
</div>
    <br>
    <?php if (isset($data['posts']) && is_array($data['posts'])): ?>
        <?php foreach ($data['posts'] as $post): ?>
            <?php flash('post_message'); ?>
            <?php flash('Product_message') ; ?>
            <div class="col-sm-12 col-md-12 col-lg-12 ftco-animate d-flex">
                <div class="product d-flex flex">
                    <!-- Add photo -->
                    <a href="#" class="img-prod">
                        <img style="width:250px;height:200px;" class="img-fluid"
                             src="<?php echo URLROOT . "/images/" . $post->image_url; ?>" alt="Product Image">
                        <div class="overlay"></div>
                    </a>
                    <div class="text py-3 pb-4 px-3">
                        <div class="d-flex">
                            <div class="cat">
                                <h3><?php echo $post->name; ?></h3>
                            </div>
                        </div>
                        <h3><a href="#"><?php echo "Price of product: " . $post->price . " JD"; ?></a></h3>
                        <div class="pricing">
                            <p class="price">
                                <span><?php echo $post->description . ' and I have ' . $post->quantity . ' of this product'; ?></span>
                            </p>
                        </div>
                        <p class="top-area d-flex px-3">
                            <a href="<?php echo URLROOT; ?>/Pages/deletePost?id=<?php echo $post->id; ?>"
                               style="margin-left:20px; " class="add-to-cart text-center py-2 mr-1">Delete Post</a>
                            <a href="<?php echo URLROOT ?>/product/edit/<?php echo $post->id; ?>" style="margin-left:20px;" class="buy-now text-center py-2">Edit Post</a>
                        </p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <p>No Posts available.</p>
    <?php endif; ?>
    <?php require APPROOT . '/views/inc/footer.php'; ?>
</div>