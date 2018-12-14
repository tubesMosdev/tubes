<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Beranda</title>
  
  <!-- My Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Viga" rel="stylesheet">
  <!-- Akhir Fonts -->
  
  <!-- My Css -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/libs/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url()?>application/views/disaster/style.css">
  


  <style>
    body {
      background-color: #F2F3F4;
    }
  </style>
</head>
<body>
  
  <!-- Navbar -->
  
  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
      <a class="navbar-brand" href="#">DONASIKU</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto">
          <a class="nav-item nav-link active" href="#">Home<span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link" href="#">Donasi</a>
          <a class="nav-item nav-link" href="#">About</a>
          <a href="<?php echo site_url('user/index')?>" class="nav-item btn btn-primary tombol" href="#">Join Us</a>
        </div>
      </div>
    </div>
  </nav>
  <br>
  <!-- Akhir Navbar -->

  <div class="container">
    <h4 style="text-align: center">Anda Akan Berdonasi Untuk <?php //title ?></h4>

    <div class="card shadow p-3 mb-5 bg-white rounded" style="width:50%; margin: 0 auto" ng-app="">
        <div class="card-body">            
            <form action="<?php echo $action; ?>" method="post">
                <div class="form-group">
                      <label for="int">User Id <?php echo form_error('user_id') ?></label>
                      <input type="text" class="form-control" name="user_id" id="user_id" placeholder="User Id" value="<?php echo $user_id; ?>" />
                  </div>
                <div class="form-group">
                      <label for="varchar">Name <?php echo form_error('name') ?></label>
                      <input type="text" class="form-control" name="name" id="name" placeholder="Name" value="<?php echo $name; ?>" />
                  </div>
                <div class="form-group">
                      <label for="int">Qty <?php echo form_error('qty') ?></label>
                      <input type="number" class="form-control" name="qty" id="qty" placeholder="Qty" value="<?php echo $qty; ?>" ng-model="qty"/>
                  </div>
                <div class="form-group">
                      <label for="int">Address <?php echo form_error('address') ?></label>
                      <input type="text" class="form-control" name="address" id="address" placeholder="Address" value="<?php echo $address; ?>" />
                  </div>
                  
                 
                      <p class="text-center">Anda Akan Mendonasikan <span class="btn btn-warning"><b>{{qty}}</b></span> Barang </p>
                  

                <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
                <button type="submit" class="btn btn-primary" style="width: 100%;">Kirim Donasi</button> 
          </form>
      </div>
    </div>
  </div>       

    <script src="<?php echo base_url()?>assets/js/jquery-3.3.1.min.js"></script>
    <script src="<?php echo base_url()?>assets/libs/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url()?>assets/libs/angular/angular.min.js"></script>

</body>
</html>