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
                <table class="table table-hover table-bordered" id="example">
              <thead>
                <th>#</th>
                <th>No Kamar</th>
                <th>Fasilitas</th>
                <th>Biaya Per Bulan</th>
                <th>Status</th>
                <th>Foto</th>
                <th>Aksi</th>
              </thead>
              <tbody>
                <?php foreach ($kamar as $key => $value): ?>
                  <tr>
                    <td><?php echo ++$key ?></td>
                    <td><?php echo $value['no_kamar'] ?></td>
                    <td><?php echo $value['fasilitas'] ?></td>
                    <td><?php echo $value['biaya_per_bulan'] ?></td>
                    <td><?php echo ($value['nama']!=null ? 'Tidak tersedia':'Tersedia');  ?></td> 
                    <td><img src="<?php echo base_url('assets/img/kamar/'.$value['image']) ?>" width='100px'></td> 
                    <td>
                      <a href="<?php echo base_url('Kamar/update/'.$value['id']) ?>" class="btn btn-sm btn-success">Update</a>
                      <a href="<?php echo base_url('Kamar/delete/'.$value['id']) ?>" class="btn btn-sm btn-danger">Delete</a>
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