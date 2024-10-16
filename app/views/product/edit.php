<?php require APPROOT . '/views/inc/header.php'; ?>
    <div class="container marginlogin" style="margin-top: 130px; margin-bottom: 80px;">
        <div class="card card-body bg-light mt-5">
            <h2 >Edit Product</h2>
            <?php if (isset($_GET['error'])): ?>
                <p><?php echo $_GET['error']; ?></p>
            <?php endif ?>
            <form action="<?php echo URLROOT ?>/product/edit/<?php echo $data['id']; ?>" method="post" enctype="multipart/form-data">
                <input type="hidden" name="product_id" value="<?php echo (isset($data['id']))?$data['id']:'';?>">

                <div class="form-group">
                    <label>
                        <img style="width:250px;height:200px;" class="img-fluid" src="<?php echo URLROOT . "/images/" . $data['image_url']; ?>" alt="Product Image">
                    </label>
                    <br>
                    <input type="file" name="image_url">
                    <br>
                    <label for="name">Name:</label>
                    <input
                            type="text"
                            name="name"
                            class="form-control form-control-lg <?php echo (!empty($data['name_err'])) ? 'is-invalid' : '' ?>"
                            value="<?php echo $data['name']; ?>"
                    />
                    <span class="invalid-feedback"><?php echo $data['name_err']; ?></span>
                </div>

                <div class="form-group">
                    <label for="price">Price:</label>
                    <input
                            type="text"
                            name="price"
                            class="form-control form-control-lg <?php echo (!empty($data['price_err'])) ? 'is-invalid' : '' ?>"
                            value="<?php echo $data['price']; ?>"
                    />
                    <span class="invalid-feedback"><?php echo $data['price_err']; ?></span>
                </div>

                <div class="form-group">
                    <label for="quantity">Quantity:</label>
                    <input
                            type="text"
                            name="quantity"
                            class="form-control form-control-lg <?php echo (!empty($data['quantity_err'])) ? 'is-invalid' : '' ?>"
                            value="<?php echo $data['quantity']; ?>"
                    />
                    <span class="invalid-feedback"><?php echo $data['quantity_err']; ?></span>
                </div>

                <div class="form-group">
                    <label for="category" >Category Type:<sup>*</sup></label>
                    <select id="category" name="category" class="btn btn-primary " required style="color:black;border:none;height: 30px;">
                        <?php foreach($data['Categories'] as $Categories): ?>
                            <option value="<?php echo $Categories->id; ?>"
                                <?php echo ($data['category_id'] == $Categories->id) ? 'selected' : ''; ?>>
                                <?php echo $Categories->name; ?>
                            </option>
                        <?php endforeach; ?>
                    </select>

                </div>

                <div class="form-group">
                    <label for="description">Description:</label>
                    <textarea
                            name="description"
                            class="form-control form-control-lg <?php echo (!empty($data['description_err'])) ? 'is-invalid' : '' ?>"
                    ><?php echo $data['description']; ?></textarea>
                    <span class="invalid-feedback"><?php echo $data['description_err']; ?></span>
                </div>

                <input type="submit" class="btn btn-primary" value="Update Product">
            </form>
        </div>
    </div>

<?php require APPROOT . '/views/inc/footer.php'; ?>