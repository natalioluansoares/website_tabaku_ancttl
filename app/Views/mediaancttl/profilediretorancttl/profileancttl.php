<?= $this->extend('templatenotisia/header') ?>
<?= $this->section('content') ?>
  <div class="row">
        <div class="col-lg-12">
            <div class="card" style="width: 100%;">
                <div class="carousel-item active">
                            <img class="d-block img-fluid" src="<?= base_url('assets')?>/ancttl/lider.jpg" alt="First slide"style="width: 100%; height:510px ;">
                            <div class="banner-text" aling="center">
                                <h4>ALian Nasional Controlo Tabaku</h4>
                                <p>Ita Tenki KOntrolu Ita Nia Saude Tamba Saude Importante Tebes Iha Ita Nia Moris</p>
                                <p>Ita Tenki KOntrolu Ita Nia Saude Tamba Saude Importante Tebes Iha Ita Nia Moris</p>
                                <p>Ita Tenki KOntrolu Ita Nia Saude Tamba Saude Importante Tebes Iha Ita Nia Moris</p>
                                <p>Ita Tenki KOntrolu Ita Nia Saude Tamba Saude Importante Tebes Iha Ita Nia Moris</p>
                            </div>
                        </div>
            </div>
        </div>
    </div><br>
     <div class="container-fluid">
         <div class="row">
             <div class="col-md-6 col-lg-6 col-xl-6">
                 <h4 class="page-title" style="color: gray;"><strong><i class="fas fa fa-book mr-2"></i>
                 <?php echo lang('homemediaancttl.profileDiretor');?></strong></h4>
                 
                <div class="card m-b-30" style="background-color: cornflowerblue;">
                    <img class="card-img-top img-fluid" src="<?= base_url('assets')?>/sigaru/logo.jpg" alt="Card image cap">
                    <div class="card-body" style="color: aliceblue;">
                        <p class="card-text"><strong><?php echo lang('homemediaancttl.profileDiretorSobre');?></strong></p>
                    </div>
                    <div class="card-body" style="color: aliceblue;">
                        <strong><?php echo lang('homemediaancttl.profileDiretor');?></strong><a style="color: black;" 
                        href="<?= base_url(lang('homemediaancttl.homeUrlProfileDiretor')) ?>">
                        <?php echo lang('homemediaancttl.profileDiretorDetail');?>>>></a>
                    </div>
                </div>

            </div><!-- end col -->
             <div class="col-md-6 col-lg-6 col-xl-6">
                 <h4 class="page-title" style="color: gray;"><strong><i class="fas fa fa-book mr-2"></i>
                 <?php echo lang('homemediaancttl.profileDiresaun');?></strong></h4>
                 
                <div class="card m-b-30" style="background-color: cornflowerblue;">
                    <img class="card-img-top img-fluid" src="<?= base_url('assets')?>/sigaru/logo.jpg" alt="Card image cap">
                    <div class="card-body" style="color: aliceblue;">
                        <p class="card-text"><strong><?php echo lang('homemediaancttl.profileDiresaunSobre');?></strong></p>
                    </div>
                    <div class="card-body" style="color: aliceblue;">
                        <strong><?php echo lang('homemediaancttl.profileDiresaun');?></strong><a style="color: black;" 
                        href="<?= base_url(lang('homemediaancttl.homeUrlProfileDiresaun')) ?>">
                        <?php echo lang('homemediaancttl.profileDiresaunDetail');?>>>></a>
                    </div>
                </div>

            </div><!-- end col -->
        </div>
    </div>
    <?= $this->endSection() ?>