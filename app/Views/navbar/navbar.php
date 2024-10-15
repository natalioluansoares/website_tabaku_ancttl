
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Aliansa Nasional Controlo Tabaku</title>

  <!-- General CSS Files -->
    <link rel="stylesheet" href="<?= base_url()?>/template/node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url()?>/template/node_modules/@fortawesome/fontawesome-free/css/all.min.css">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="<?= base_url()?>/template/node_modules/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url()?>/template/node_modules/datatables.net-select-bs4/css/select.bootstrap4.min.css">

    <!-- Template CSS -->
    <link rel="stylesheet" href="<?= base_url()?>/template/assets/css/style.css">
    <link rel="stylesheet" href="<?= base_url()?>/template/assets/css/components.css">
</head>

<body style="background-color: darkgray;">
  <div id="app">
    <div class="main-wrapper">
             <div class="row">
                <div class="col-lg">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead class="table-warning"  style="background-color: #3366cc;">
                        <tr>
                            <th data-priority="1" class="text-center">
                                <img src="<?= base_url()?>/template/assets/img/sigaru/TimorLeste.png"  class="rounded-circle" width="150px">
                            </th>
                            <th data-priority="1">
                                <div class="text-center">
                                    <font size="3" style="font-family:Wide Latin">
                                        <b style="color: black;">Website Aliansa Nasional Controlo Tabaku</b><br>
                                        <span style="font-family:Times New Roman; color: black;">Bairo Pite, Dili, Timor-Leste <br>
                                            Telp.(0380)833395- 831194</span>
                                    </font><br>
                                    <span style="color: black;">Web:</span><span style="font-family:Times New Roman; color:aliceblue">
                                        http//www.anct-tl.ac.id</span>
                                    <span style="color: black;">Email:</span><span style="font-family:Times New Roman; color:aliceblue">
                                        bairopite.aliansanasionalcontroltabaku@gmail.com</span>
                                    <hr width="80%">
                                </div>
                            </th>
                            <th data-priority="1" class="text-center">
                                <img src="<?= base_url()?>/template/assets/img/sigaru/InanMariaFatima.jpg" 
                                class="rounded-circle" width="140px">
                            </th>
                        </tr>
                    </thead>
                </table>
            </div>
     
     <div class="row">
        <div class="col-lg-12">
            <div class="card" style="width: 100%;">
                <div class="sliders">
                    <div class="slider">
                        <img src="<?= base_url()?>/template/assets/img/sigaru/logo.jpg" alt="" style="width: 100%; height:510px ;">
                    </div>
                    <div class="slider">
                        <img src="<?= base_url()?>/template/assets/img/sigaru/sigaru_3.jpg" alt="" style="width: 100%; height:510px ;">
                    </div>
                    <div class="slider">
                        <img src="<?= base_url()?>/template/assets/img/sigaru/ancttl_1.jpg" alt="" style="width: 100%; height:510px ;">
                    </div>
                    <div class="slider">
                        <img src="<?= base_url()?>/template/assets/img/sigaru/ancttl_2.jpg" alt="" style="width: 100%; height:510px ;">
                    </div>
                    <div class="slider">
                        <img src="<?= base_url()?>/template/assets/img/sigaru/ancttl_3.jpg" alt="" style="width: 100%; height:510px ;">
                    </div>
                    <div class="slider">
                        <img src="<?= base_url()?>/template/assets/img/sigaru/ancttl_4.jpg" alt="" style="width: 100%; height:510px ;">
                    </div>
                    <div class="slider">
                        <img src="<?= base_url()?>/template/assets/img/sigaru/hati_1.jpg" alt="" style="width: 100%; height:510px ;">
                    </div>
                    <div class="slider">
                        <img src="<?= base_url()?>/template/assets/img/sigaru/hati_2.jpg" alt="" style="width: 100%; height:510px ;">
                    </div>
                </div>
            </div>
        </div>
    </div>
      <!-- Main Content -->
        <section class="section">
          <div class="section-body">
          </div><br><br><br><br>
          <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card">
                         <img alt="image" src="<?= base_url()?>/template/assets/img/sigaru/REITOR1.jpg" 
                         height="100px">
                        <div class="card-body" align ="center">
                            <h6 class="card-title">DIRETOR</h6>
                            <a href="<?= base_url('diretor') ?>" class="btn btn-warning" style="background-color: coral;">Login</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                         <img alt="image" src="<?= base_url()?>/template/assets/img/sigaru/avatar-2.png" 
                         height="100px">
                        <div class="card-body" align ="center">
                            <h6 class="card-title">ADMINISTRASAUN HO FINANSAS</h6>
                            <a href="<?= base_url('administrasaun') ?>" class="btn btn-success">Login</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                         <img alt="image" src="<?= base_url()?>/template/assets/img/sigaru/avatar-1.png" 
                         height="100px">
                        <div class="card-body" align ="center">
                            <h6 class="card-title">THE UNION</h6>
                            <a href="<?= base_url('theunion') ?>" class="btn btn-primary">Login</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                         <img alt="image" src="<?= base_url()?>/template/assets/img/sigaru/avatar-3.png" 
                         height="100px">
                        <div class="card-body" align ="center">
                            <h6 class="card-title">ADVOKASIA HO MONITORIN</h6>
                            <a href="<?= base_url('advokasia')?>" class="btn btn-info">Login</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                         <img alt="image" src="<?= base_url()?>/template/assets/img/sigaru/avatar-4.png" 
                         height="100px">
                        <div class="card-body" align ="center">
                            <h6 class="card-title">KAMPANHA NO TREINAMENTO</h6>
                            <a href="<?= base_url('kampanha')?>" class="btn btn-warning">Login</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                         <img alt="image" src="<?= base_url()?>/template/assets/img/sigaru/avatar-5.png" 
                         height="100px">
                        <div class="card-body" align ="center">
                            <h6 class="card-title">MEDIA ANCT-TL</h6>
                            <a href="<?= base_url('media')?>" class="btn" style="background-color: crimson;">Login</a>
                        </div>
                    </div>
                </div>
                </div>
            </div>
       
        </section>
      </div>
    </div>
  </div>

 <script src="<?= base_url()?>/template/node_modules/jquery/dist/jquery.min.js"></script>
  <script src="<?= base_url()?>/template/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="<?= base_url()?>/template/node_modules/jquery.nicescroll/dist/jquery.nicescroll.min.js"></script>
  <script src="<?= base_url()?>/template/assets/js/stisla.js"></script>

  <!-- JS Libraies -->
  <script src="<?= base_url()?>/template/node_modules/datatables/media/js/jquery.dataTables.min.js"></script>
  <script src="<?= base_url()?>/template/node_modules/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
  <!-- Template JS File -->
  <script src="<?= base_url()?>/template/assets/js/scripts.js"></script>
  <script src="<?= base_url()?>/template/assets/js/custom.js"></script>
  <script src="<?= base_url()?>/template/assets/js/animasi.js"></script>

  <!-- Page Specific JS File -->
</body>
</html>
