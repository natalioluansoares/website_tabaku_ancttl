<?= $this->extend('TemplateDiretor/headerdiretor')?>
<?= $this->section('title'); ?>
<title><?= $show ?>&mdash; ANCT-TL</title>
<?= $this->endSection() ?>
<?= $this->section('content');?>
<section class="section">
    <div class="section-header">
    <h1><?= $title; ?></h1>
    </div>
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
        <a href="<?= base_url('misaunvisaunancttl');?>" class="btn btn-info mb-3"><i class="fas fa-sharp fa-regular fa-backward"></i></a>
        <a href="<?= site_url('misaunvisaunancttl/new');?>" class="btn btn-primary mb-3" 
        title="Aumenta Dados Kode The Union"><i class="fas fa-solid fa-plus"></i></a>
        <a href="<?= site_url('misaunvisaunancttl/hamos');?>" class="btn btn-dark mb-3" 
        title="Hare Dados Ne'e Mak Hamos Temporario"><i class="fa fa-regular fa-eraser"></i></a>
        <div class="row">
          <?php foreach($misaunvisaun as $mv):?>
              <div class="col-md-6 col-sm-6 col-12">
                <div class="card">
                  <div class="card-header">
                    <h4><?=$showmission ?> ANCTTL</h4>
                  </div>
                  <div class="card-body">
                        <p><?= $mv->misaun?></p>
                        <a href="<?= site_url('misaunvisaunancttl/'.$mv->id_misaunvisaun.'/edit') ?>" 
                        class="btn btn-success" title="Troka Dados Kode The Union"><i class="fas fa-user-edit"></i></a>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-sm-6 col-12">
                <div class="card">
                  <div class="card-header">
                    <h4><?=$showmission ?> ANCTTL</h4>
                  </div>
                  <div class="card-body">
                        <p><?= $mv->misaun?></p>
                        <form action="<?= site_url('misaunvisaunancttl/'.$mv->id_misaunvisaun)?>" method="post" autocomplete="off" 
                        onsubmit="return confirm('Ita Hakarak Hamos Dados ?')">
                        <input type="hidden" name="_method" value="DELETE">
                        <?= csrf_field(); ?>
                        <button class="btn btn-danger" title="Hamos Dados The Union">
                                <i class="fas fa-solid fa-trash"></i></button>
                        </form>
                      </div>
                    </div>
              </div>
            <?php endforeach;?>
          </div>
</section>
<?= $this->endSection();?>