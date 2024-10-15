<?= $this->extend('TemplateDiretor/headerdiretor')?>
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
            <?php foreach($akun as $k): ?>
            <div class="col-lg-6">
                <div class="card profile-widget">
                  <div class="profile-widget-header gallery">
                    <div class="gallery-item profile-widget-picture" style="width: 130px; height:80px ;" 
                    data-image="<?= base_url('uploads/fotodiretor/'.$k->foto_diretor); ?>" data-title="Imagem "></div>
                </div>
                  <div class="profile-widget-description pb-0">
                    <p><strong>Naran <b class="mr-4"></b></strong>:<?= $k->naran_kompleto; ?></p>
                    <p><strong>Sexo  <b class="mr-4"></b></strong>  :<?= $k->sexo; ?></p>
                    <p><strong>Profisaun :</strong>Diretor ANCT-TL</p>
                    <p><strong>Status <b class="mr-3"></b></strong> :<?= $k->status_servisu; ?></p>
                    <p><strong>Fatin <b class="mr-4"></b></strong> :<?= $k->fatin_moris; ?></p>
                    <p><strong>Data <b class="mr-4"></b></strong> :<?= $k->loron_moris; ?></p>

                  </div>
                  <div class="card-footer text-center pt-0">
                    <a href="<?= base_url('akundiretor/troka/'.$k->id_diretor)?>" class="btn btn-success">
                      <i class="fas fa-user-plus"></i>
                    </a>
                    <form action="<?= site_url('akundiretor/'.$k->id_diretor)?>" method="post" autocomplete="off" class="d-inline"
                        onsubmit="return confirm('Ita Boot Hakarak Hamos Dados ?')">
                            <?= csrf_field(); ?>
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" class="btn btn-danger" title="Hamos Akun Diretor"><i class="fas fa-solid fa-trash"></i></button>
                    </form>
                    <a href="<?= base_url('akundiretor/hamos');?>" 
                    class="btn btn-dark" title="Troka Dados Temporario"><i class="fa fa-solid fa-eraser"></i></a>
                    <a href="<?= base_url('akundiretor/'.$k->id_diretor.'/edit')?>" class="btn mr-1" style="background-color: darkgrey;">
                      <i class="fas fa-key"></i>
                    </a>
                  </div>
                  <center>
                    <div class="dropdown">
                        <button class="btn btn-dark dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Hili Lian Profile <?= helperDiretor()->regulamento ?>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-dark"  style="height: 200px; width: 50%; overflow-y: scroll;">
                            <li><a class="dropdown-item" href="<?= base_url('profilediretor/Tetum')?>">Profile Lingua Tetum</a></li>
                            <li><a class="dropdown-item" href="<?= base_url('profilediretor/Portuguesa')?>">Profile Lingua Portuguesa</a></li>
                            <li><a class="dropdown-item" href="<?= base_url('profilediretor/English')?>">Profile Lingua English</a></li>
                            <li><a class="dropdown-item" href="<?= base_url('profilediretor/Indonesia')?>">Profile Lingua Indonesia</a></li>
                        </ul>
                   </div><br>
                    <div class="dropdown">
                        <button class="btn btn-dark dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Hili Lian Profile Diresaun ANCTTL
                        </button>
                        <ul class="dropdown-menu dropdown-menu-dark"  style="height: 200px; width: 70%; overflow-y: scroll;">
                        <?php foreach($akundiresaun as $re): ?>
                            <li><a class="dropdown-item" href="<?= base_url('profilediresaundiretor/'.$re->id_diresaun)?>"><?=$re->naran_kompleto_diresaun ?><sub class="text-danger">(<?=$re->regulamento ?>)</sub></a></li>
                        <?php endforeach; ?>
                        </ul>
                   </div>
                  </center><br>
              </div>
        </div>
          <?php endforeach;?>
</section>
<?= $this->endSection();?>