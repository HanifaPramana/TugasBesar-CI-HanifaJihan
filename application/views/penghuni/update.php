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
              <a href="<?php echo base_url('penghuni/insert') ?>" class="btn btn-sm btn-primary mb-3">Input</a>
              <div class="card">
              <div class="card-body">
                <?php echo validation_errors(); ?>
               <?php echo form_open('penghuni/update/'.$penghuni_row['id']) ?>
               <div class="form-group">
                 <label for="">Nama penghuni</label>
                 <input type="text" name="nama" class="form-control" value="<?php echo $penghuni_row['nama'] ?>">
               </div>
               <div class="form-group">
                 <label for="">Alamat</label>
                 <input type="text" name="alamat" class="form-control" value="<?php echo $penghuni_row['alamat'] ?>">
               </div>
              <div class="form-group">
                 <label for="">No Tlp</label>
                 <input type="text" name="notelp" class="form-control" value="<?php echo $penghuni_row['notelp'] ?>">
               </div>
               <div class="form-group">
                 <label for="">email</label>
                 <input type="text" name="email" class="form-control" value="<?php echo $penghuni_row['email'] ?>">
               </div>
               <div class="form-group">
                 <label for="">Username</label>
                 <input type="text" name="username" class="form-control" value="<?php echo $penghuni_row['username'] ?>">
               </div>
               <div class="form-group">
                 <label for="">password</label>
                 <input type="text" name="password" class="form-control" value="<?php echo $penghuni_row['password'] ?>">
               </div>
               <div class="form-group">
                 <label for="">Status</label>
                 <input type="text" name="Status" class="form-control" value="<?php echo $penghuni_row['status'] ?>">
               </div>
               <div class="form-group">
                 <label for="">Kamar</label>
                 <select name="fk_id_kamar" id="" class="form-control">
                   <?php foreach ($kamar as $key => $value): ?>
                     <option value="<?php echo $value['id'] ?>"><?php echo $value['no_kamar'] ?></option>
                   <?php endforeach ?>
                 </select>
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