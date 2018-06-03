<?php $this->load->view('header') ?>
<div class="content-wrapper d-flex align-items-center auth">
        <div class="row w-100">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left p-5">
              <div class="brand-logo">
                <img src="<?php echo base_url('assets_admin/') ?>images/logo.svg">
              </div>
              <?php echo validation_errors(); ?>
              <?php echo form_open('Login') ?>
                <div class="form-group">
                  <input type="text" name="username" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Username">
                </div>
                <div class="form-group">
                  <input type="password" name="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="mt-3">
                  <button type="submit" class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn">SIGN IN</button>
                </div>
                <div class="text-center mt-4 font-weight-light">
                  Don't have an account? <a href="<?php echo base_url('Login/register') ?>" class="text-primary">Create</a>
                </div>
              <?php echo form_close(); ?>
            </div>
          </div>
        </div>
      </div>
<?php $this->load->view('footer') ?>