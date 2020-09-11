<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SJAH-Online</title>

  <!-- Custom fonts for this template-->
  <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="<?= base_url('assets/'); ?>https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?= base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet">

  <!-- font saya-->
  <link href="https://fonts.googleapis.com/css?family=Viga&display=swap" rel="stylesheet">

</head>

<body id="page-top">
  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color:#3F729B ;">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('c_homeadmin')?>">
        <img style="height: 50px;"class="img" src="<?= base_url('assets/image/lolo.png')?>">
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('c_homeadmin');?>">
          <i style="color: black;" class="fas fa-fw fa-tachometer-alt"></i>
          <span style="font-family: Viga;">Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider"style="margin-top: 10px;">

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i style="color: black;" class="fas fa-desktop"></i>
          <span style="font-family: Viga;">Monitoring Pengguna</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a style="font-family: Viga;" class="collapse-item" href="<?= base_url('c_admin_daftaradmin');?>">Data Admin</a>
            <a style="font-family: Viga;" class="collapse-item" href="<?= base_url('c_admin_daftarhotel');?>">Data Hotel</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block" style="margin-top: 10px; padding-top: 10px;">

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseberkas" aria-expanded="true" aria-controls="collapseberkas">
          <i style="color: black;" class="fas fa-desktop"></i>
          <span style="font-family: Viga;">Monitoring Berkas</span>
        </a>
        <div id="collapseberkas" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a style="font-family: Viga;" class="collapse-item" href="<?= base_url('c_admin_daftarkuesioner');?>">Data Kuesioner</a>
            <a style="font-family: Viga;" class="collapse-item" href="<?= base_url('c_admin_daftarsurvei');?>">Data Survei</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block" style="margin-top: 10px; padding-top: 10px;">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
 
      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light topbar mb-4 static-top shadow" style="background-color:#3F729B;">

           <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">
            
            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span style="font-family: Viga; font-size: 15px;" class="mr-2 d-none d-lg-inline text-white small"><?= $admin['nama_admin'] ;?></span>
                <img class="img-profile rounded-circle" src="<?= base_url('assets/image/profil/') . $admin['foto']; ?>">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a style="font-family: Viga;" class="dropdown-item" href="<?= base_url('c_admin_profiladmin') ?>">
                  <i style="color: black;" class="fas fa-user fa-sm fa-fw mr-2 "></i>
                  Profil Saya
                </a>
                <a style="font-family: Viga;" class="dropdown-item" href="<?= base_url('c_admin_editprofil') ?>">
                  <i style="color: black;" class="fas fa-cogs fa-sm fa-fw mr-2 "></i>
                  Edit Profil
                </a>
                <div class="dropdown-divider"></div>
                <a style="font-family: Viga;" class="dropdown-item" href="<?= base_url('c_login/logout');?>" data-toggle="modal" data-target="#logoutModal">
                  <i style="color: black;" class="fas fa-sign-out-alt fa-sm fa-fw mr-2 "></i>
                  Keluar
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

  <link rel="stylesheet" href="<?php echo base_url('assets/css/home/home.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/oneui/js/plugins/datatables/dataTables.bootstrap4.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/oneui/js/plugins/datatables/buttons-bs4/buttons.bootstrap4.min.css') ?>">
  <link rel="stylesheet" id="css-main" href="<?php echo base_url('assets/oneui/css/oneui.min.css') ?>">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">
</head>

<body>
  <!-- <div class="tab-pane fade fade-up" id="departemen" role="tabpanel"> -->
  <div class="container-fluid">
    <div class="block block-mode-loading-oneui">
      <div class="col-2 float-right mt-2 mr-1">
        <select name="filter-status-task" id="filter-tahun" class="form-control">
          <option class="font-w700" disabled="disabled" selected value="">Tahun</option>
          <option value="">Seluruh Data</option>
          <?php
          $year = [];
          foreach ($tahun as $value) {
            array_push($year, $value["tahun"]);
          ?>
            <option value="<?= $value["tahun"] ?>"><?php echo $value["tahun"] ?></option>
          <?php }
          ?>
        </select>
      </div>
      <div style="clear:both"></div>
      <div class="block-content block-content-full">
        <table class="table table-bordered table-hover table-vcenter font-size-sm mb-0 w-100" id="tabla">
          <thead class="thead-dark">
            <tr class="text-uppercase">
              <th class="font-w700 text-center" style="width: 12%;">ID Berkas</th>
              <th class="font-w700 text-center" style="width: 12%;">Tahun</th>
              <th class="font-w700 text-center" style="width: 12%;">Bulan</th>
              <th class="font-w700 text-center" style="width: 12%;">Pengirim</th>
              <th class="font-w700 text-center" style="width: 12%;">Asal Hotel</th>
              <th class="font-w700 text-center" style="width: 16%;">Dokumen</th>
              <th class="font-w700 text-center" style="width: 12%;">Hapus</th>
              <th class="font-w700 text-center" style="width: 12%;">Unduh</th>
            </tr>
          </thead>
          <tbody>
          <tbody>
        </table>
        <!-- </div> -->
      </div>
    </div>
  </div>

  <script src="<?php echo base_url('assets/oneui/js/oneui.core.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/oneui/js/oneui.app.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/oneui/js/plugins/datatables/jquery.dataTables.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/oneui/js/plugins/datatables/dataTables.bootstrap4.min.js') ?>"></script>
  <script>
    $(document).ready(function() {
      var table = null;
      table = $('#tabla').DataTable({
        "processing": true,
        "serverSide": true,
        "ordering": true,
        "order": [
          [0, 'asc']
        ],
        "ajax": {
          "url": "<?= base_url('c_admin_daftarsurvei/bulan/' . $bulan) ?>",
          "type": "POST",
          'data': function(data) {
            data.searchStatus = $('#filter-tahun').val();;
          }
        },
        "deferRender": true,
        "aLengthMenu": [
          [5, 10, 30, 50, 100],
          [5, 10, 30, 50, 100]
        ],
        "columns": [{
            "data": "id_berkas",
            className: 'text-center font-weight-bold'

          },
          {
            "data": "tahun",
            className: 'font-weight-bold text-center'
          },
          {
            "data": "bulan",
            className: 'text-center font-weight-bold'
          },
          {
            "data": "pengirim",
            className: 'text-center font-weight-bold'
          },
          {
            "data": "asal_hotel",
            className: 'text-center font-weight-bold'
          },
          {
            "data": "file",
            className: 'text-center'
          },
          {
            "data": "id_berkas",
            className: 'text-center',
            "orderable": false,
            render: function(data) {
              let html = "<a href='<?= base_url('c_admin_daftarsurvei/delete/') ?>" + data + "'>Hapus </a>";
              return html;
            }
          },
          {
            "data": "file",
            className: 'text-center',
            "orderable": false,
            render: function(data) {
              let html = "<a href='<?= base_url('assets/berkas/') ?>" + data + "'>Unduh </a>";
              return html;
            }
          }
        ],
      });
      $("#filter-tahun").change(function() {
        table.ajax.reload();
      });
    });
  </script>
    <!-- Footer -->
  <footer class="footer " style=" margin-top: 250px; bottom: 0;">
        <div class="container "style=" box-shadow: 0px -3px 5px 0px rgba(0,0,0,5); margin-top: 100px;">
          <div class="copyright text-center" style="color: black; font-family: Viga; background-color:#DCDCDC; padding-top: 15px; padding-bottom:15px;">
            <h7>Badan Pusat Statistik Kota Bandar Lampung</h7>
            <br>
            <h7>Jl. Sutan Syahrir No. 30, Pahoman, Bandar Lampung, 35215.</h7>
            <h7>Telp. (0721)255980. Mailbox : bps1871@bps.go.id</h7>
            <br>
            <h7>Copyright © 2020</h7>
            <br>
            <h7>Built by © Mahasiswa Kerja Praktik <a href="http://if.itera.ac.id/">Prodi Teknik Informatika - <a href="https://www.itera.ac.id/">Institut Teknologi Sumatera</h7>
          </div>
        </div>
      </footer>
  <!-- End of Footer -->
</body>