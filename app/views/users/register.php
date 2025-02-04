<?php require APPROOT . '/views/inc/header.php'; ?>
<div class="container marginlogin" style="margin-top: 130px; margin-bottom: 80px;">
<div class="row">
    <div class="col-lg-6 col-md-8 mx-auto">
        <div class="card card-body bg-light mt-5">
            <h2>Create An Account</h2>
            <p>pleas fill out this form to register with us </p>

            <form action="<?php echo URLROOT ?>/users/register" method="post">
                <div class="form-group">
                    <label for="username">Name: <sup>*</sup></label>
                    <input
                            type="text"
                            name="username"
                            class="form-control form-control-lg
                          <?php echo (!empty($data['username_err'])) ? 'is-invalid' : '' ?>"
                            value="<?php echo $data['username'] ?>"
                    />
                    <span class="invalid-feedback"><?php echo $data['username_err']?></span>
                </div>
                <div class="form-group">
                    <label for="email">Email: <sup>*</sup></label>
                    <input
                            type="email"
                            name="email"
                            class="form-control form-control-lg
                                   <?php echo (!empty($data['email_err'])) ? 'is-invalid' : '' ?>"
                            value="<?php echo $data['email'] ?>"
                    />
                    <span class="invalid-feedback"><?php echo $data['email_err']?></span>
                </div>
                <div class="form-group">
                    <label for="name">Phone: <sup>*</sup></label>
                    <input
                            type="text"
                            name="phone_number"
                            class="form-control form-control-lg
                          <?php echo (!empty($data['phone_number_err'])) ? 'is-invalid' : '' ?>"
                            value="<?php echo $data['phone_number'] ?>"
                    />
                    <span class="invalid-feedback"><?php echo $data['phone_number_err']?></span>
                </div>
                <div class="form-group">
                    <label for="password">Password: <sup>*</sup></label>
                    <input
                            type="password"
                            name="password"
                            class="form-control form-control-lg
                                   <?php echo (!empty($data['password_err'])) ? 'is-invalid' : '' ?>"
                            value="<?php echo $data['password'] ?>"
                    />
                    <span class="invalid-feedback"><?php echo $data['password_err']?></span>
                </div>
                <div class="form-group">
                    <label for="confirm_password">Confirm Password: <sup>*</sup></label>
                    <input
                            type="password"
                            name="confirm_password"
                            class="form-control form-control-lg
                                   <?php echo (!empty($data['confirm_password_err'])) ? 'is-invalid' : '' ?>"
                            value="<?php echo $data['confirm_password'] ?>"
                    />
                    <span class="invalid-feedback"><?php echo $data['confirm_password_err']?></span>
                </div>
                <div class="row">
                    <div class="col">
                        <input type="submit" value="Register" class="btn btn-primary btn-block"/>
                    </div>
                    <div class="col">
                        <a href="<?php echo URLROOT ?>/users/login" class="btn btn-light btn-block">Have an account? Login</a>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>
</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>

