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
                <table id="example" class="table table-striped table-bordered" style="width:100%">
              <thead>
                <th>#</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>No Tlp</th>
                <th>Email</th>
                <th>Username</th>
                <th>Status</th>
                <th>Nomor Kamar</th>
                <th>Action</th>
              </thead>
              <tbody>
                <?php foreach ($penghuni as $key => $value): ?>
                  <tr>
                    <td><?php echo ++$key ?></td>
                    <td><?php echo $value['nama'] ?></td>
                    <td><?php echo $value['alamat'] ?></td>
                    <td><?php echo $value['notelp'] ?></td>
                    <td><?php echo $value['email'] ?></td>
                    <td><?php echo $value['username'] ?></td>
                    <td><?php if ($value['status'] == 1): ?>
                      Aktif
                    <?php else: ?>
                      Tidak Aktif
                    <?php endif ?></td>
                    <td><?php echo ($value['no_kamar'] != null ? $value['no_kamar'] : 'Telah Keluar') ?></td>
                    <td>
                      <a href="<?php echo base_url('penghuni/update_keluar/'.$value['id']) ?>" class="btn btn-sm btn-warning">Exit</a>
                      <a href="<?php echo base_url('penghuni/update/'.$value['id']) ?>" class="btn btn-sm btn-success">Update</a>
                      <a href="<?php echo base_url('penghuni/delete/'.$value['id']) ?>" class="btn btn-sm btn-danger">Delete</a>
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