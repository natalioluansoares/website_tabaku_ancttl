<?= $this->extend('templatenotisia/header') ?>
<?= $this->section('content') ?>
<div class="row">
    <div class="col-lg-12">
        <div class="card m-b-30">
            <div class="card-body">
                <!-- 21:9 aspect ratio -->
                <div class="embed-responsive embed-responsive-21by9">
                    <iframe class="embed-responsive-item" <?=$mediadetail->link_video_youtube; ?>></iframe>
                </div>

            </div>
        </div>
    </div>
</div>
<div class="container">
    <h4 class="page-title"><strong><i class="fas fa fa-newspaper-o mr-2"></i><?= lang('homemediaancttl.homeMedia')?></strong></h4>
    <div class="row">
        <div class="col-lg-12">
            <div class="card m-b-30">
                <div class="card-body">
                    <div class="media m-b-60">
                        <div class="media-body">
                            <small class="mt-0 font-18"><?=$mediadetail->naran_intervista ?></small>
                            <small class="mt-0 font-18"><?=$mediadetail->fatin ?></small>
                            <table>
                                <thead>
                                    <th>
                                        <h3><a href="<?=$mediadetail->link_youtube ?>"target="_blank" class="btn btn-danger mr-2" title="Youtube"><i class="fas fa fa-youtube-play"></i></a></h3>
                                    </th>
                                    <th>
                                        <h3><a href="<?=$mediadetail->link_facebook ?>"target="_blank" title="Facebook"  class="btn btn-primary mr-2"><i class="fas fa fa-facebook-official"></i></a></h3>
                                    </th>
                                    <th>
                                        <h3><a href="<?=$mediadetail->link_instagram ?>"target="_blank" class="btn btn-danger" 
                                        title="Instagram"><i class="fas fa fa-instagram"></i></a></h3>
                                    </th>
                                </thead>
                            </table>
                            <a class="image-popup-no-margins rounded" href="<?= base_url('uploads/fotoancttl/'.$mediadetail->foto);?>">
                                <img class="img-responsive mr-3 rounded mb-2" src="<?= base_url('uploads/fotoancttl/'.$mediadetail->foto);?>" style="width:280px;" >
                            </a>

                            <?php if ($mediadetail->lian =='Indonesia') {?>
                            <p><strong>Bahasa <b class="mr-3"></b></strong> :<?=$mediadetail->lian ?></p>
                            <p><strong>Tanggal <b class="mr-3"></b></strong>:<?=$mediadetail->data ?></p>
                            <p><strong>Pimpinan <b class="mr-1"></b></strong>  :Media ANCTTL</p>
                            <strong><hr></strong>
                            <h4><?= $mediadetail->topiko ?></h4><br>
                            <h5>Isi</h5>
                            <?= $mediadetail->descripsaun ?>
                            <center>
                                <?php foreach($galeria as $gale):?>
                                 <a class="image-popup-no-margins rounded" href="<?= base_url('uploads/foto_anct_tl/'.$gale->galeria); ?>">
                                    <img class="img-responsive mr-3 rounded mb-2" src="<?= base_url('uploads/foto_anct_tl/'.$gale->galeria); ?>" style="width: 330px; height:150px ;">
                                </a>
                                <?php endforeach;?>
                            </center>
                            <h5>Content</h5>
                            <?= $mediadetail->conteudo ?>
                            <center>
                                <?php foreach($multigaleria as $gale):?>
                                <a class="image-popup-no-margins rounded" href="<?= base_url('uploads/foto_anct_tl/'.$gale->galeria); ?>">
                                    <img class="img-responsive mr-3 rounded mb-2" src="<?= base_url('uploads/foto_anct_tl/'.$gale->galeria); ?>" style="width: 330px; height:150px ;">
                                </a>
                            <?php endforeach;?>
                            </center>
                           <?php }elseif($mediadetail->lian =='English'){ ?>
                            <p><strong>Language <b class="mr-2"></b></strong> :<?=$mediadetail->lian ?></p>
                            <p><strong>Date <b class="mr-5"></b></strong>:<?=$mediadetail->data ?></p>
                            <p><strong>Direction <b class="mr-2"></b></strong>:Media ANCTTL</p>
                            <strong><hr></strong>
                            <h4><?= $mediadetail->topiko ?></h4><br>
                            <h5>Description</h5>
                            <?= $mediadetail->descripsaun ?>
                            <center>
                                <?php foreach($galeria as $gale):?>
                                 <a class="image-popup-no-margins rounded" href="<?= base_url('uploads/foto_anct_tl/'.$gale->galeria); ?>">
                                    <img class="img-responsive mr-3 rounded mb-2" src="<?= base_url('uploads/foto_anct_tl/'.$gale->galeria); ?>" style="width: 330px; height:150px ;">
                                </a>
                                <?php endforeach;?>
                            </center>
                            <h5>Content</h5>
                            <?= $mediadetail->conteudo ?>
                            <center>
                                <?php foreach($multigaleria as $gale):?>
                                <a class="image-popup-no-margins rounded" href="<?= base_url('uploads/foto_anct_tl/'.$gale->galeria); ?>">
                                    <img class="img-responsive mr-3 rounded mb-2" src="<?= base_url('uploads/foto_anct_tl/'.$gale->galeria); ?>" style="width: 330px; height:150px ;">
                                </a>
                            <?php endforeach;?>
                            </center>
                           <?php }elseif($mediadetail->lian =='Portuguesa'){ ?>
                            <p><strong>Lingua <b class="mr-2"></b></strong> :<?=$mediadetail->lian ?></p>
                            <p><strong>Data <b class="mr-4"></b></strong>:<?=$mediadetail->data ?></p>
                            <p><strong>Direção <b class="mr-1"></b></strong>:Media ANCTTL</p>
                            <strong><hr></strong>
                            <h4><?= $mediadetail->topiko ?></h4><br>
                            <h5>Descrição</h5>
                            <?= $mediadetail->descripsaun ?>
                            <center>
                                <?php foreach($galeria as $gale):?>
                                 <a class="image-popup-no-margins rounded" href="<?= base_url('uploads/foto_anct_tl/'.$gale->galeria); ?>">
                                    <img class="img-responsive mr-3 rounded mb-2" src="<?= base_url('uploads/foto_anct_tl/'.$gale->galeria); ?>" style="width: 330px; height:150px ;">
                                </a>
                                <?php endforeach;?>
                            </center>
                            <h5>Conteúdo</h5>
                            <?= $mediadetail->conteudo ?>
                            <center>
                                <?php foreach($multigaleria as $gale):?>
                                <a class="image-popup-no-margins rounded" href="<?= base_url('uploads/foto_anct_tl/'.$gale->galeria); ?>">
                                    <img class="img-responsive mr-3 rounded mb-2" src="<?= base_url('uploads/foto_anct_tl/'.$gale->galeria); ?>" style="width: 330px; height:150px ;">
                                </a>
                                <?php endforeach;?>
                            </center>
                           <?php }elseif($mediadetail->lian =='Tetum'){ ?>
                            <p><strong>Lian <b class="mr-5"></b></strong> :<?=$mediadetail->lian ?></p>
                            <p><strong>Data <b class="mr-5"></b></strong>:<?=$mediadetail->data ?></p>
                            <p><strong>Diresaun <b class="mr-2"></b></strong>:Media ANCTTL</p>
                            <strong><hr></strong>
                            <h4><?= $mediadetail->topiko ?></h4><br>
                            <h5>Descrisaun</h5>
                            <?= $mediadetail->descripsaun ?>
                            <center>
                                <?php foreach($galeria as $gale):?>
                                 <a class="image-popup-no-margins rounded" href="<?= base_url('uploads/foto_anct_tl/'.$gale->galeria); ?>">
                                    <img class="img-responsive mr-3 rounded mb-2" src="<?= base_url('uploads/foto_anct_tl/'.$gale->galeria); ?>" style="width: 330px; height:150px ;">
                                </a>
                                <?php endforeach;?>
                            </center>
                            <h5>Konteudo</h5>
                            <?= $mediadetail->conteudo ?>
                            <center>
                            <?php foreach($multigaleria as $gale):?>
                                <a class="image-popup-no-margins rounded" href="<?= base_url('uploads/foto_anct_tl/'.$gale->galeria); ?>">
                                    <img class="img-responsive mr-3 rounded mb-2" src="<?= base_url('uploads/foto_anct_tl/'.$gale->galeria); ?>" style="width: 330px; height:150px ;">
                                </a>
                            <?php endforeach;?>
                            </center>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <h4 class="page-title"><strong><i class="fas fa fa-book mr-2"></i><?=$show ?></strong></h4>
    <div class="row">
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-body">
                    <form class="form-inline" method="get">
                        <table style="width: 100%;">
                            <thead>
                                <tr>
                                    <td>
                                        <div class="form-group">
                                            <input type="date" class="form-control" name="start">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group ml-0">
                                            <input type="date" class="form-control" name="end">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group ml-0">
                                            <button type="submit" name="filter-data" class="btn btn-primary">
                                                <i class="fas fa fa-eye"></i></button>
                                        </div>
                                    </td>
                                </tr>
                            </thead>
                        </table>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-body">
                    <form method="get" autocomplete="off" >
                        <table style="width: 100%;">
                            <thead>
                                <tr>
                                    <td>
                                        <input class="form-control" type="text" placeholder="Search" name="keyword" aria-label="Search" data-width="250">
                                    </td>
                                    <td>
                                        <button class="btn btn-success" type="submit"><i class="fas fa fa-search"></i></button>
                                    </td>
                                </tr>
                            </thead>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
     <?php if (session()->getFlashdata('error')): ?>
            <div class="alert alert-danger alert-dismissible show fade">
                <div class="alert-body">
                    <button class="close" data-dismiss="alert">x</button>
                    <b>Error !</b>
                    <?= session()->getFlashdata('error') ?>
                </div>
            </div>
    <?php endif; ?>
    <div class="row">
    <?php 
    $page = isset($_GET['page']) ? $_GET['page'] : 1;
                        $no = 1 +(10 * ($page - 1));
    foreach($media as $mv): ?>
    <div class="col-lg-6">
        <div class="card m-b-30" style="background-color: lightblue;">
            <div class="card-body">
                <small class="mt-0 "><strong><?= $mv->naran_intervista?></strong></small>
                <div class="media m-b-30">
                    <a class="image-popup-no-margins" href="<?= base_url('uploads/fotoancttl/'.$mv->foto)?>">
                        <img class="img-responsive rounded  mr-3" src="<?= base_url('uploads/fotoancttl/'.$mv->foto)?>" style="width:150px;" >
                        <p style="color: black;"><strong>Data <b class="mr-2"></b>:</strong><?= $mv->data?></p>
                    </a>
                    <div class="media-body">
                        <a href="<?= base_url(lang('homemediaancttl.homeUrlDetail').$mv->id_media)?>" style="color: black;"><strong><?= $mv->topiko ?></strong></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
    </div>
    <div class="float-left">
        <span>Showing <?=  $no = 1 +(10 * ($page - 1)); ?> to <?= $no-1 ?> of <?= $pager->getTotal()?> Entries </span>
    </div>
    <div class="float-right">
        <?= $pager->links('default','pagination') ?>
    </div>
 </div>
 </div>
</div>
<?= $this->endSection() ?>