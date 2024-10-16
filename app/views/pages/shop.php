
<?php require APPROOT . '/views/inc/header.php'; ?>
<div class="hero-wrap hero-bread" style="background-image: url(<?php echo URLROOT; ?>/images/post-item7.jpg)">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <h1 class="mb-0 bread" >Shop</h1>
                <a href="<?php echo URLROOT ?>/product/add" style="border-radius: 13px;font-size: 22px" class="btn bg-black text-light py-2 px-3"><span>Add Product </span></a>

            </div>
        </div>
    </div>
</div>
    <section class="ftco-section bg-light">
    <?php flash('Product_message') ; ?>
    <div class="container" style="display:flex" >
        <div class="row" style="margin-right: 100px;">
            <div class="col-md-4 col-lg-2">
                <div class="sidebar">
                    <div class="sidebar-box-2">
                        <h2 class="heading" style="color:#dbcc8f;">Categories</h2>
                        <div class="fancy-collapse-panel">
                            <?php if (isset($data['Categories']) && is_array($data['Categories'])): ?>
                                <ul class="category-list" >
                                    <?php foreach ($data['Categories'] as $category): ?>
                                        <li>
                                            <a  style="color:#dbcc8f;font-size:18px; " href="?category_id=<?php echo $category->id; ?>&page=1">
                                                <?php echo $category->name; ?>
                                            </a>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            <?php else: ?>
                                <p>No categories available.</p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-lg-10 order-md-last">

                <div class="row">
                    <?php  foreach ($data['shops'] as $product): ?>
                        <div class="col-sm-10 col-md-12 col-lg-6 ftco-animate d-flex">
                            <div class="product d-flex flex-column" style="align-items: center">
                                <!--                           to add photo-->
                                <a href="#" class="img-prod"> <img class="img-fluid" style="width:250px;height: 200px;" src="<?php echo URLROOT ."/images/". $product->image_url ?>" alt="some alt text" >
                                    <div class="overlay"></div>
                                </a>

                                <div class="text py-3 pb-2 px-3">
                                    <div class="d-flex">
                                        <div class="cat">
                                            <h3><?php echo $product->name; ?></h3>
                                        </div>
                                    </div>
                                    <h3><a href="#"><?php echo "price of product : ".$product->price. "jd"; ?></a></h3>
                                    <div class="pricing">
                                        <p class="price"><span><?php echo $product->description . '  and i have ' . $product->quantity . '  for this product'; ?></span></p>
                                    </div>
                                    <p class="bottom-area d-flex px-3">
                                    <form action="<?php echo URLROOT; ?>/pages/addToWoWishlist" method="POST" style=" justify-content: center;  align-items: center;  display: flex;   height: 10vh " >
                                        <input type="hidden" name="product_id" value="<?php echo $product->id; ?>"/>
                                        <button type="submit"  class="btn btn-primary btn-block" style="font-size: 15px ; border-radius: 13px ; width: 70px;">
                                            <span><i class="fa-regular fa-heart"></i></span>
                                        </button>
                                    </form>
                                    </p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
</section>
<section style="margin-top: -50px; height: 150px;" class="bg-light">
    <div class="page-info">
        <!-- Page Info Content Here -->
    </div>
    <div class="row mt-5">
        <div class="col">
            <!-- Display Products Here -->
        </div>
    </div>
    <div class="row mt-5">
        <div class="col text-center">
            <div class="block-27">
                <ul>
                    <!-- Previous Page Link -->
                    <?php if ($currentPage > 1): ?>
                        <li><a href="?page=<?php echo $currentPage - 1; ?>">&lt;</a></li>
                    <?php else: ?>
                        <li><span>&lt;</span></li>
                    <?php endif; ?>

                    <!-- Page Number Links -->
                    <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                        <li class="<?php echo $i == $currentPage ? 'active' : ''; ?>">
                            <a href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
                        </li>
                    <?php endfor; ?>

                    <!-- Next Page Link -->
                    <?php if ($currentPage < $totalPages): ?>
                        <li><a href="?page=<?php echo $currentPage + 1; ?>">&gt;</a></li>
                    <?php else: ?>
                        <li><span>&gt;</span></li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </div>
</section>

<?php require APPROOT . '/views/inc/footer.php'; ?>















