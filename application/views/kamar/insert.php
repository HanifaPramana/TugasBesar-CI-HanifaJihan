<?php $this->load->view('header') ?>
<?php $this->load->view('menu') ?>
      <div class="main-panel">
        <div class="content-wrapper">
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
            <div class="col">
              <a href="<?php echo base_url('Kamar/insert') ?>" class="btn btn-sm btn-primary mb-3">Input</a>
              <div class="card">
              <div class="card-body">
                <?php echo validation_errors(); ?>
               <?php echo form_open_multipart('Kamar/insert') ?>
               <div class="form-group">
                 <label for="">Nomor Kamar</label>
                 <input type="text" name="no_kamar" class="form-control">
               </div>
               <div class="form-group">
                 <label for="">Fasilitas</label>
                 <select class="form-control" name="fasilitas">
                   <option>Kamar Besar</option>
                   <option>Kamar Standart</option>
                   <option>Kamar Kecil</option>
                 </select>
               </div>
               <div class="form-group">
                 <label for="">Biaya per bulan</label>
                 <input type="number" value="0" step="1000" name="biaya_per_bulan" class="form-control">
               </div>
               <div class="form-group">
    <label for="image">Image</label>
    <input type="file" name="image">
    <?php echo (isset($message) ? $message : ''); ?>
  </div>
               <input type="submit" value="Input" class="btn btn-primary">
               <?php echo form_close() ?>
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