<?= $this->extend('templatenotisia/header') ?>
<?= $this->section('content') ?>
<div class="row">
    <div class="col-lg-12">
        <div class="card" style="width: 100%;">
            <div class="carousel-item active">
                        <img class="d-block img-fluid" src="<?= base_url('assets')?>/ancttl/misaunvisaun.jpg" alt="First slide"style="width: 100%; height:510px ;">
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
        <?php foreach($misaunvisaun as $mv): ?>
        <h4 class="page-title" style="color: gray;"><strong><i class="ion-ios7-world mr-2"></i><?php echo lang('homemediaancttl.homeMissionVision');?></strong></h4>
        <div class="card m-b-30" style="background-color: cornflowerblue;">
            <div class="card-body" style="color: aliceblue;">
                <div class="row">
                    <div class="col-lg-6">
                        <h4 class="mt-0 header-title"><strong><i class="ion-ios7-world mr-2"></i>
                        <?php echo lang('homemediaancttl.homeMission');?></strong></h4>
                        <div class="media m-b-30">
                            <a class="image-popup-no-margins" href="<?= base_url('assets')?>/sigaru/logo.jpg">
                                        <img class="img-responsive rounded  mr-3" src="<?= base_url('assets')?>/sigaru/logo.jpg" style="width:150px;" >
                                </a>
                            <div class="media-body">
                                <?= $mv->misaun ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h4 class="mt-0 header-title"><strong><i class="ion-ios7-world mr-2"></i><?php echo lang('homemediaancttl.homeVision');?></strong></h4>
                        <div class="media m-b-30">
                            <a class="image-popup-no-margins" href="<?= base_url('assets')?>/sigaru/logo.jpg">
                                        <img class="img-responsive rounded  mr-3" src="<?= base_url('assets')?>/sigaru/logo.jpg" style="width:150px;" >
                                </a>
                            <div class="media-body">
                                <?= $mv->visaun ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach;?>
                <div class="row">
                    <?php foreach($historia as $diretor):?>
                    <div class="col-lg-6">
                        <div class="media m-b-30">
                            <div class="media-body">
                                <h5 class="mt-0 font-18"><i class="ion-chatbox-working mr-2"></i>
                                <?php echo lang('homemediaancttl.homeHistoria');?></h5>
                                <a class="image-popup-no-margins rounded" href="<?= base_url('assets')?>/images/img/Yesus.jpg">
                                    <img class="img-responsive mr-3 rounded mb-2" src="<?= base_url('assets')?>/sigaru/logo.jpg"" style="width:280px;" >
                                </a>
                                <p><strong><?php echo lang('homemediaancttl.homeHistoriaPendek');?></strong></p>
                                <strong><hr></strong>
                                <?= substr($diretor->historia, 0, 600) ?> <a style="color: black;" 
                                href="<?= base_url(lang('homemediaancttl.homeUrlHistoria')) ?>">
                                <?php echo lang('homemediaancttl.homeHistoriaDetail');?>>>></a>
                            </div>
                        </div>
                    </div>
                        <div class="col-lg-6">
                            <div class="media m-b-30">
                                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active">
                                    <img class="d-block img-fluid rounded" src="<?= base_url('assets')?>/ancttl/ancttl_4.jpg" alt="First slide" style="width: 100%;">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block img-fluid rounded" src="<?= base_url('assets')?>/ancttl/ancttl_1.jpg" alt="Second slide" style="width: 100%;">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block img-fluid rounded" src="<?= base_url('assets')?>/ancttl/ancttl_2.jpg" alt="Third slide" style="width: 100%;">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block img-fluid rounded" src="<?= base_url('assets')?>/ancttl/ancttl_3.jpg" alt="Third slide" style="width: 100%;">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                        <?php endforeach;?>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="media m-b-30">
                            <div class="media-body">
                                <h5 class="mt-0 font-18"><i class="ion-chatbox-working mr-2"></i>
                                <?php echo lang('homemediaancttl.profileDiretor');?></h5>
                                <a class="image-popup-no-margins rounded" href="<?= base_url('assets')?>/images/img/Yesus.jpg">
                                    <img class="img-responsive mr-3 rounded mb-2" src="<?= base_url('assets')?>/sigaru/logo.jpg" style="width:440px;" >
                                </a>
                                <p><strong><?php echo lang('homemediaancttl.profileDiretorSobre');?></strong></p>
                                <strong><hr></strong>
                                <?php echo lang('homemediaancttl.profileDiretor');?><a style="color: black;" 
                                href="<?= base_url(lang('homemediaancttl.homeUrlProfileDiretor')) ?>">
                                <?php echo lang('homemediaancttl.profileDiretorDetail');?>>>></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="media m-b-30">
                            <div class="media-body">
                                <h5 class="mt-0 font-18"><i class="ion-chatbox-working mr-2"></i>
                                <?php echo lang('homemediaancttl.profileDiresaun');?></h5>
                                <a class="image-popup-no-margins rounded" href="<?= base_url('assets')?>/images/img/Yesus.jpg">
                                    <img class="img-responsive mr-3 rounded mb-2" src="<?= base_url('assets')?>/sigaru/logo.jpg" style="width:440px;" >
                                </a>
                                <p><strong><?php echo lang('homemediaancttl.profileDiresaunSobre');?></strong></p>
                                <strong><hr></strong>
                                <?php echo lang('homemediaancttl.profileDiresaun');?><a style="color: black;" 
                                href="<?= base_url(lang('homemediaancttl.homeUrlHistoria')) ?>">
                                <?php echo lang('homemediaancttl.profileDiresaunDetail');?>>>></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
 </div>
</div>
<?= $this->endSection() ?>