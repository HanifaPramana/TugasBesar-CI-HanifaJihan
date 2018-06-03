<?php $this->load->view('header'); ?>
<div class="content-wrapper d-flex align-items-center auth">
        <div class="row w-100">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left p-5">
              <div class="brand-logo">
                <h1 class="text-success">Register</h1>
              </div>
              <?php echo validation_errors() ?>
              <?php echo form_open('Login/register'); ?>
                <div class="form-group">
                  <input type="text" name="username" class="form-control form-control-lg" id="username" placeholder="Username">
                </div>
                <div class="form-group">
                  <input type="password" name="password" class="form-control form-control-lg" id="password" placeholder="password">
                </div>
                <div class="form-group">
                  <input type="password" name="re-password" class="form-control form-control-lg" id="re-password" placeholder="re-Password">
                </div>
                <div class="mt-3">
                  <button type="submit" class="btn btn-block btn-gradient-success btn-lg font-weight-medium auth-form-btn">Register</button>
                </div>
                <div class="text-center mt-4 font-weight-light">
                  Already have an account? <a href="<?php echo base_url('Login') ?>" class="text-primary">Login</a>
                </div>
                <?php echo form_close(); ?>
            </div>
          </div>
        </div>
      </div>
      <?php $this->load->view('footer'); ?>