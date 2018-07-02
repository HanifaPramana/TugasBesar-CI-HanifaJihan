<?php $this->load->view('header') ?>
<?php $this->load->view('menu') ?>
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-12">
              <span class="d-flex align-items-center purchase-popup">
                <p>Like what you see? Check out our premium version for more.</p>
                <a href="https://github.com/BootstrapDash/PurpleAdmin-Free-Admin-Template" target="_blank" class="btn ml-auto download-button">Download Free Version</a>
                <a href="https://www.bootstrapdash.com/product/purple-bootstrap-4-admin-template/" target="_blank" class="btn purchase-button">Upgrade To Pro</a>
                <i class="mdi mdi-close popup-dismiss"></i>
              </span>
            </div>
          </div>
          <div class="page-header">
            <h3 class="page-title">
              <span class="page-title-icon bg-gradient-primary text-white mr-2">
                <i class="mdi mdi-home"></i>                 
              </span>
              Dashboard
            </h3>
            <nav aria-label="breadcrumb">
              <ul class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">
                  <span></span>Overview
                  <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                </li>
              </ul>
            </nav>
          </div>
          <div class="row">
              <div class="col-md-6">
                <div class="card bg-gradient-danger card-img-holder text-white">
                <div class="card-body">
                  <img src="<?php echo base_url('assets_admin/') ?>images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image">
                  <h4 class="font-weight-normal mb-3">Kamar
                    <i class="mdi mdi-chart-line mdi-24px float-right"></i>
                  </h4>
                  <h2 class="mb-5"><?php echo $kamar ?></h2>
                  <h6 class="card-text">Jumlah Kamar</h6>
                </div>
              </div>
              </div>
              <div class="col-md-6">
                <div class="card bg-gradient-primary card-img-holder text-white">
                <div class="card-body">
                  <img src="<?php echo base_url('assets_admin/') ?>images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image">
                  <h4 class="font-weight-normal mb-3">Penghuni
                    <i class="mdi mdi-chart-line mdi-24px float-right"></i>
                  </h4>
                  <h2 class="mb-5"><?php echo $penghuni_kos ?></h2>
                  <h6 class="card-text">Jumlah Penghuni</h6>
                </div>
              </div>
              
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2017 <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap Dash</a>. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i></span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
  
    <!-- page-body-wrapper ends -->

  <!-- container-scroller -->

  <!-- plugins:js -->
<?php $this->load->view('footer') ?>  