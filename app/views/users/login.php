<?php include APPROOT.'/views/inc/header.php'; ?>
<!-- <div class="blog-content">
  <div class="container">
    <div class="row">

      <div class=" col-md-6">
        <div class="card card-body bg-light mt-5 m-5">
          <form action="<?php echo URLROOT; ?>/users/login" method="post">
            <div class="form-group">


              <label for="email">email : <sup>*</sup></label>
              <input type="email" name="email" class="form-control form-control-lg <?php echo (!empty($data['email_err'])) ? 'is-invalid' : '' ?>" value="<?php echo $data['email']; ?>">
              <span class="invalid-feedback"><?php echo $data['email_err']; ?></span>

              <label for="password">password : <sup>*</sup></label>
              <input type="password" name="password" class="form-control form-control-lg <?php echo (!empty($data['password_err'])) ? 'is-invalid' : '' ?>" value="<?php echo $data['password']; ?>">
              <span class="invalid-feedback"><?php echo $data['password_err']; ?></span>


            </div>
            <div class="row mt-3">
              <div class="col">
                <input type="submit" value="connect" class="btn btn-success btn-block">
              </div>
              <div class="col">
                <a href="<?php echo URLROOT; ?>/users/register" class="btn btn-light btn-block">No account ? register</a>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div> -->