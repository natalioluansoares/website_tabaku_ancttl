<?= $this->extend('TemplateDiresaun/headerdiresaun')?>
<?= $this->section('title'); ?>
<title><?= $show ?>&mdash; Sistema</title>
<?= $this->endSection() ?>
<?= $this->section('content');?>
<section class="section">
    <div class="section-header">
    <h1><?= $title; ?></h1>
    </div>
    <div class="card-body">
    <div class="section-body">
        <?php if (session()->getFlashdata('success')): ?>
            <div class="alert alert-success alert-dismissible show fade">
                <div class="alert-body">
                    <button class="close" data-dismiss="alert">x</button>
                    <b>Success !</b>
                    <?= session()->getFlashdata('success') ?>
                </div>
            </div>
        <?php endif; ?>
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
            <div class="col-lg-6">
                <div class="card profile-widget">
                  <div class="profile-widget-header gallery">
                    <div class="gallery-item profile-widget-picture" style="width: 130px; height:80px ;" 
                    data-image="<?= base_url('uploads/fotodiresaun/'.helperDiresaun()->foto_diresaun); ?>" data-title="Imagem "></div>
                </div>
                  <div class="profile-widget-description pb-0">
                    <p><strong>Naran <b class="mr-4"></b></strong>:<?= helperDiresaun()->naran_kompleto_diresaun ?></p>
                    <p><strong>Sexo  <b class="mr-4"></b></strong>  :<?= helperDiresaun()->sexo ?></p>
                    <p><strong>Status <b class="mr-3"></b></strong> :<?= helperDiresaun()->status_servisu ?></p>
                    <p><strong>Fatin <b class="mr-4"></b></strong> :<?= helperDiresaun()->fatin_moris ?></p>
                    <p><strong>Data <b class="mr-4"></b></strong> :<?= helperDiresaun()->loron_moris ?></p>
                    <p><strong>Diresaun</strong> :<?= helperDiresaun()->regulamento ?></p>

                  </div>
                  <div class="card-footer text-center pt-0">
                    <a href="<?= base_url('profilediresaun/password/')?>" class="btn mr-2" style="background-color: darkgrey;">
                      <i class="fas fa-key"></i></a>
                  </div>
                  <center>
                    <div class="dropdown">
                        <button class="btn btn-dark dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Hili Lian Profile <?= helperDiresaun()->regulamento ?>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-dark"  style="height: 40px; width: 50%; overflow-y: scroll;">
                            <li><a class="dropdown-item" href="<?= base_url('profilediresaunancttl')?>"><?= helperDiresaun()->naran_kompleto_diresaun ?></a></li>
                        </ul>
                   </div><br>
                  </center>
          </div>
        </div>
</section>
<?= $this->endSection();?>