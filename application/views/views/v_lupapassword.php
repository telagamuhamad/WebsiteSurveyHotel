<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SJAH - Lupa Password</title>

  <!-- Custom fonts for this template-->
  <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="<?= base_url('assets/'); ?>https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?= base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet">

  <!-- My Fonts -->
    <link href="https://fonts.googleapis.com/css?family=PT+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans|Viga&display=swap" rel="stylesheet">


</head>

<body style="background-image: url(<?php echo base_url('assets/image/hotel1.jpg')?>); background-size: 100% 100%">
  


  <div class="container" style=" margin-top: 73px; ">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-5 col-lg-12 col-md-9">

        
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
    
              <div class="col-lg" >
                <div class="p-5" >
                  <div class="text-center">
                    <img src="assets/image/BPS.png" style="margin-left: 20px;" width="70px" height="70px" >
                    <h1 class="h4 " style="font-family: Viga; color: white;">Lupa Password?</h1>
                     <p style="color: white; margin-bottom: 20px; font-family: Viga;"><em>"Atur ulang password anda sekarang!"</em></p>
                    
                  </div>

                  <?= $this->session->flashdata('message'); ?>
                  
                  <form class="user" method="post" action="<?=base_url('c_lupapassword'); ?>">
                    <div class="form-group">
                      <input style="font-family: Viga;" type="text" class="form-control form-control-user" id="username" name="username" autocomplete="off" placeholder="Username" value="<?= set_value('username')?>">
                      <?=form_error('username','<small class="text-danger pl-3">','</small>');?>
                    </div>
                    <div class="form-group">
                    <input style="font-family: Viga;" type="text" class="form-control form-control-user" id="kode" name="kode" autocomplete="off" placeholder="Kode Rahasia" value="<?= set_value('kode')?>">
                      <?=form_error('kode','<small class="text-danger pl-3">','</small>');?>
                    </div>
                    <div class="form-group">
                      <input style="font-family: Viga;" type="password" class="form-control form-control-user" id="password" name="password" autocomplete="off" placeholder="New Password">
                      <?=form_error('password','<small class="text-danger pl-3">','</small>');?>
                      
          
                    </div>

                  <br>
                    <button style="margin-bottom: 20px; margin-top: 20px; font-family: Viga;" type="submit" class="btn btn-primary btn-user btn-block">
                      Atur ulang password
                    </button>
                  </form>

                  <div class="text-center">
                    
                  <a class="large text-center" href="<?= base_url() ?>" style="color: white; font-family: Viga;"><i class="fas fa-fw fa-arrow-alt-circle-left"></i>Kembali</a>

                  </div>


                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>


</body>

</html>
