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
            <div class="col">
              <a href="<?php echo base_url('Kamar/insert') ?>" class="btn btn-sm btn-primary mb-3">Input</a>
              <div class="card">
              <div class="card-body">
                <table class="table table-hover table-bordered">
              <thead>
                <th>#</th>
                <th>No Pembayaran</th>
                <th>Tanggal</th>
                <th>Kode_Token</th>
                <th>Jumlah Bulan</th>
                <th>Status</th>
                <th>Nama Penghuni</th>
                <th>Aksi</th>
              </thead>
              <tbody>
                <?php foreach ($list_data as $key => $value): ?>
                  <tr>
                    <td><?php echo ++$key ?></td>
                    <td><?php echo $value->no_pembayaran ?></td>
                    <td><?php echo $value->tanggal ?></td>
                    <td><?php echo $value->kode_token ?></td>
                    <td><?php echo $value->jumlah_bulan ?></td>
                    <td><?php echo ($value->status == 0 ? 'belum lunas': 'lunas'); ?></td>
                    <td><?php echo $value->nama_penghuni ?></td>
                    <td>
                      <?php if ($value->status == 0): ?>
                        
                      <a href="<?php echo base_url('Pembayaran/set_lunas/'.$value->id) ?>" class="btn btn-sm btn-success">Lunas</a>
                      <?php endif ?>
                    </td>
                  </tr>
                <?php endforeach ?>
              </tbody>
            </table>
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