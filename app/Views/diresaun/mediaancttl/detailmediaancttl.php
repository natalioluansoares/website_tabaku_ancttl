<?= $this->extend('TemplateDiresaun/headerdiresaun')?>
<?= $this->section('title'); ?>
<title><?= $show ?>&mdash; ANCT-TL</title>
<?= $this->endSection() ?>
<?= $this->section('content');?>
<section class="section">
    <div class="section-header">
    <h1><?= $title; ?></h1>
    </div>
    <div class="card mb-3">
        <div class="card-header">
                    <h4><?= $show;?></h4>
                    </div>
    <div class="card-body">
    <div class="section-body">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
            <article class="article article-style-c">
                    <div class="iframe-container">
                        <iframe <?=$media->link_video_youtube?>></iframe>
                   </div>
                <div class="article-details">
                    <center>
                       <a href="<?= $media->link_facebook?>" class="btn btn-social-icon mr-1 btn-facebook">
                           <i class="fab fa-facebook-f"></i>
                       </a>
                       <a href="<?= $media->link_youtube?>" class="btn btn-social-icon mr-1 btn-twitter" style="background-color: red;">
                       <i class="fab fa-youtube"></i>
                       </a>
                       <a href="<?= $media->link_tik_tok?>" class="btn btn-social-icon mr-1 btn-github">
                       <i class="fas fa-tiktok"></i>
                       </a>
                       <a href="#" class="btn btn-social-icon mr-1 btn-instagram">
                       <i class="fab fa-instagram"></i>
                       </a>
                   </center><br>
                <div class="article-category"><a href="#">Data</a> <div class="bullet"></div> <a href="#"><?= $media->data?></a></div>
                <div class="article-category"><a href="#">Lian</a> <div class="bullet"></div> <a href="#"><?= $media->lian?></a></div>
                <div class="article-user">
                    <img alt="image" src="<?= base_url();?>template/assets/img/avatar/avatar-1.png">
                    <div class="article-user-details">
                        <div class="user-detail-namedia">
                            <a href="#"><?= $media->naran_intervista?></a>
                        </div>
                    </div>
                </div>
                <div class="text-job"><?= $media->fatin?> </div>
                <div class="article-category"><div class="bullet"></div><a href="#" class="text-center">Topiko</a></div>
                <div class="article-title">
                    <h2><a href="#" style="color: blue;"><?= $media->topiko?></a></h2>
                </div>
                <div class="article-category"><div class="bullet"></div><a href="#" class="text-center">Descripsaun</a></div>
                <p><?= $media->descripsaun?></p>
                <div class="row">
                    <div class="col-12 col-sm-12 col-lg-12">
                      <div class="card-body">
                        <div class="gallery" >
                            <?php $no=1; foreach($galeria as $gale):?>
                          <div class="gallery-item" style="width: 240px; height:150px ;" data-image="<?= base_url('uploads/foto_anct_tl/'.$gale->galeria); ?>" data-title="Imagem "></div>
                          <?php endforeach;?>
                        </div>
                    </div>
                  </div>
                </div>
                <div class="article-category"><div class="bullet"></div><a href="#" class="text-center">Konteudo</a></div>
                <p><?= $media->conteudo?></p>
                <div class="article-category"><div class="bullet"></div><a href="#" class="text-center">Multi Imagem</a></div>
                <div class="row">
                    <div class="col-12 col-sm-12 col-lg-12">
                      <div class="card-body">
                        <div class="gallery" >
                            <?php $no=1; foreach($multigaleria as $gale):?>
                          <div class="gallery-item" style="width: 240px; height:150px ;" data-image="<?= base_url('uploads/foto_anct_tl/'.$gale->galeria); ?>" data-title="Imagem "></div>
                          <?php endforeach;?>
                        </div>
                    </div>
                  </div>
                </div>
                <div class="article-user">
                        <table>
                            <tbody>
                                <tr>
                                    <td>
                                        <a href="<?= base_url('mediaancttl/'.$media->lian) ?>" class="btn btn-primary" title="Fila">Fila</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                </div>
            </article>
        </div>
        </div>
        </div>
    </div>
</section>
<?= $this->endSection();?>