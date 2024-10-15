<?= $this->extend('templatenotisia/header') ?>
<?= $this->section('content') ?>
<div class="row">
    <div class="col-lg-12">
        <div class="card m-b-20">
            <div class="card-body">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img class="d-block img-fluid" src="<?= base_url('assets')?>/sigaru/logo.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="<?= base_url('assets')?>/sigaru/images.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="<?= base_url('assets')?>/sigaru/images1.jpg" alt="Third slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="<?= base_url('assets')?>/sigaru/images2.jpg" alt="Third slide">
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
            </div>
        </div>
    </div>
</div>
<div class="container">
    <h4 class="page-title"><strong><i class="fas fa fa-book mr-2"></i><?php echo lang('homemediaancttl.homeCarta');?></strong></h4>
    <div class="row">
        <div class="col-lg-12">
            <div class="card m-b-30">
                <div class="card-body">
                    <div class="media m-b-30">
                        <div class="media-body">
                            <h5 class="mt-0 font-18"><?php echo lang('homemediaancttl.homeCarta');?></h5>
                            <a class="image-popup-no-margins rounded" href="<?=base_url('uploads/fotodiretor/'.$diretor->foto_diretor)?>">
                                <img class="img-responsive mr-3 rounded mb-2" src="<?= base_url('uploads/fotodiretor/'.$diretor->foto_diretor); ?>" style="width:280px;" >
                            </a>
                            <?php if ($diretor->lingua == 'Indonesia') {?>
                                <p><strong>Nama <b class="mr-4"></b></strong> :<?=$diretor->naran_kompleto ?></p>
                                <p><strong>Profisi <b class="mr-4"></b></strong>:<?=$diretor->diretorregulamento ?></p>
                                <p><strong>Periode<b class="mr-3"></b></strong>:<?=$diretor->periode_carta ?></p>
                                <strong><hr></strong>
                                <?= $diretor->carta ?> <a href="<?= base_url(lang('homemediaancttl.homeUrlHome')) ?>">
                                Kembali Ke Halaman Beranda</a>
                            
                            <?php }elseif ($diretor->lingua == 'Portuguesa') {?>
                                <p><strong>Nome <b class="mr-4"></b></strong> :<?=$diretor->naran_kompleto ?></p>
                                <p><strong>Profissão <b class="mr-2"></b></strong>:<?=$diretor->diretorregulamento ?></p>
                                <p><strong>Periode<b class="mr-4"></b></strong>:<?=$diretor->periode_carta ?></p>
                                <strong><hr></strong>
                                <?= $diretor->carta ?> <a href="<?= base_url(lang('homemediaancttl.homeUrlHome')) ?>">
                                Retornar A Página Inicial</a>
                            
                            <?php }elseif ($diretor->lingua == 'English') {?>
                                <p><strong>Name <b class="mr-5"></b></strong> :<?=$diretor->naran_kompleto ?></p>
                                <p><strong>Profession <b class="mr-1"></b></strong>:<?=$diretor->diretorregulamento ?></p>
                                <p><strong>Period</strong><b class="mr-4"></b>:<?=$diretor->periode_carta ?></p>
                                <strong><hr></strong>
                                <?= $diretor->carta ?> <a href="<?= base_url(lang('homemediaancttl.homeUrlHome')) ?>">
                                Return To Home Page</a>
                            
                            <?php }elseif ($diretor->lingua == 'Tetum') {?>
                                <p><strong>Name <b class="mr-4"></b></strong> :<?=$diretor->naran_kompleto ?></p>
                                <p><strong>Profession <b class="mr-4"></b></strong>:<?=$diretor->diretorregulamento ?></p>
                                <p><strong>Period <b class="mr-3"></b></strong>  :<?=$diretor->periode_carta ?></p>
                                <strong><hr></strong>
                                <?= $diretor->carta ?> <a href="<?= base_url(lang('homemediaancttl.homeUrlHome')) ?>">
                                Fila Fali Ba Home</a>
                          <?php  } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 </div>
</div>
<?= $this->endSection() ?>