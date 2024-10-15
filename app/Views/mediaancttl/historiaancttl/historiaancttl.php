<?= $this->extend('templatenotisia/header') ?>
<?= $this->section('content') ?>
<div class="row">
    <div class="col-lg-12">
            <div class="card" style="width: 100%;">
                <div class="carousel-item active">
                    <img class="d-block img-fluid" src="<?= base_url('assets')?>/ancttl/sigaru_1.png" alt="First slide"style="width: 100%; height:510px ;">
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
    </div>
</div><br>
<div class="container-fluid">
<h4 class="page-title"><strong><i class="ion-chatbox-working mr-2"></i><?= lang('homemediaancttl.homeHistoria')?></strong></h4>
<div class="row">
    <div class="col-lg-12">
        <div class="card m-b-30" style="background-color: lightblue;">
            <div class="card-body">
                <?php foreach($historia as $diretor):?>
                <div class="media m-b-30">
                    <div class="media-body">
                        <h5 class="mt-0 font-18"><?= lang('homemediaancttl.homeHistoria')?></h5>
                        <a class="image-popup-no-margins rounded" href="<?= base_url('assets')?>/sigaru/logo.jpg">
                            <img class="img-responsive mr-3 rounded mb-2" src="<?= base_url('assets')?>/sigaru/logo.jpg" style="width:280px;" >
                        </a>
                        <p><strong><?= lang('homemediaancttl.homeHistoriaPendek')?></strong></p>
                        <strong><hr></strong>
                        <?=$diretor->historia ?>
                    </div>
                </div>
                <?php endforeach;?>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>