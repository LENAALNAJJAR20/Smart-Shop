<?php require APPROOT . '/views/inc/header.php'; ?>
<div class="container marginlogin" style="margin-top: 130px; margin-bottom: 80px;">
    <div class="card card-body bg-light mt-5" xmlns="http://www.w3.org/1999/html" >
        <h2  style="color:black;">Add product</h2>
        <?php if (isset($_GET['error'])): ?>
            <p><?php echo $_GET['error']; ?></p>
        <?php endif ?>
        <form action="<?php echo URLROOT ?>/product/add" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label >Image </label>
                <input type="file" name="image_url">
                <br>
                <label for="name">Name:</label>
                <input
                        type="text"
                        name="name"
                        class="form-control form-control-lg
                             <?php echo (!empty($data['name_err'])) ? 'is-invalid' : '' ?>"
                        value="<?php echo $data['name'] ?>"
                />
                <span class="invalid-feedback"><?php echo $data['name_err']?></span>
            </div>

            <div class="form-group">
                <label for="price">Price:<sup></sup></label>
                <input
                        type="text"
                        name="price"
                        class="form-control form-control-lg
                                   <?php echo (!empty($data['price_err'])) ? 'is-invalid' : '' ?>"
                        value="<?php echo $data['price'] ?>"
                />
                <span class="invalid-feedback"><?php echo $data['price_err']?></span>
            </div>

            <div class="form-group">
                <label for="quantity">:Quantity</label>
                <input
                        type="text"
                        name="quantity"
                        class="form-control form-control-lg
                                   <?php echo (!empty($data['quantity_err'])) ? 'is-invalid' : '' ?>"
                        value="<?php echo $data['quantity'] ?>"
                />
                <span class="invalid-feedback"><?php echo $data['quantity_err']?></span>
            </div>

            <div class="form-group">
                <label for="category" >Category Type:<sup></sup></label>
                <select id="category" name="category" class="btn btn-primary " required style="color:black;border:none;height: 30px;">
                    <?php if (isset($data['Categories']) && is_array($data['Categories'])): ?>
                        <?php foreach($data['Categories'] as $Categories): ?>
                            <option value="<?php echo $Categories->id; ?>"><?php echo $Categories->name; ?></option>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <p>No categories available.</p>
                    <?php endif; ?>
                </select>

            </div>

            <div class="form-group">
                <label for="body">Description: <sup></sup></label>
                <textarea
                        name="description"
                        class="form-control form-control-lg
                                   <?php echo (!empty($data['description_err'])) ? 'is-invalid' : '' ?>">
                         <?php echo $data['description']; ?> </textarea>
                <span class="invalid-feedback"><?php echo $data['description_err']?></span>
            </div>
            <input type="submit" class="btn btn-primary" value="Add product">
        </form>
    </div>
</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>
