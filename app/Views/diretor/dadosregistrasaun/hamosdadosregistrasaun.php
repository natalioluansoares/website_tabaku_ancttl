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
         <?php 
            $jumlah_data = count($akunancttl);
            if ($jumlah_data > 0 )
        { ?>
        <div class="row">
            <?php foreach($akunancttl as $k): ?>
            <div class="col-lg-6">
                <div class="card profile-widget">
                  <div class="profile-widget-header gallery">
                    <div class="gallery-item profile-widget-picture" style="width: 130px; height:80px ;" 
                    data-image="<?= base_url('uploads/fotodiresaun/'.$k->foto_diresaun); ?>" data-title="Imagem "></div>
                </div>
                  <div class="profile-widget-description pb-0">
                    <p><strong>Naran <b class="mr-4"></b></strong>:<?= $k->naran_kompleto_diresaun; ?></p>
                    <p><strong>Sexo  <b class="mr-4"></b></strong>  :<?= $k->sexo; ?></p>
                    <p><strong>Profisaun :</strong>Diretor ANCT-TL</p>
                    <p><strong>Status <b class="mr-3"></b></strong> :<?= $k->status_servisu; ?></p>
                    <p><strong>Fatin <b class="mr-4"></b></strong> :<?= $k->fatin_moris; ?></p>
                    <p><strong>Data <b class="mr-4"></b></strong> :<?= $k->loron_moris; ?></p>
                    <p><strong>Diresaun</strong> :<?= $k->regulamento; ?></p>

                  </div>
                  <div class="card-footer text-center pt-0">
                    <a href="<?= base_url('akundiretor');?>" title="Fila Fali Ba Akun Diretor" class="btn btn-info">
                    <i class="fas fa-sharp fa-regular fa-backward"></i></a>
                    <form action="<?= site_url('akunancttltemporario')?>" method="post" autocomplete="off" class="d-inline"
                        onsubmit="return confirm('Ita Boot Hakarak Hamos Dados ?')">
                            <?= csrf_field(); ?>
                            <!-- <input type="hidden" name="_method" value="DELETE"> -->
                            <input type="hidden" name="id_diresaun" value="<?=$k->id_diresaun?>">
                            <button type="submit" class="btn btn-danger" title="Transforma Dados Temporario Ba Dados Permanente">
                              <i class="fa fa-solid fa-eraser"></i></button>
                    </form>
                    <form action="<?= site_url('akunancttlhamoshotu/'.$k->id_diresaun)?>" method="post" autocomplete="off" class="d-inline"
                        onsubmit="return confirm('Ita Boot Hakarak Hamos Dados ?')">
                            <?= csrf_field(); ?>
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" class="btn btn-dark" title="Hamos Akun Diretor"><i class="fas fa-solid fa-trash"></i></button>
                    </form>
            </div>
          </div>
        </div>
        <?php endforeach;?>
        <?php }else{ ?>
            <center>
              <span class="badge bg-danger"><i class="fas fa-info-circle"></i> Dados Temporario Transforma Ona Ba Dados Permanente
            Sei Mamuk</span>
            <p><br><a href="<?= base_url('akunancttl');?>" title="Fila Fali Ba Akun Diretor" class="btn btn-info">
              Fila Fali Ba Akun Diresaun</a></p>
            </center>
        <?php } ?>
</section>
<?= $this->endSection();?>