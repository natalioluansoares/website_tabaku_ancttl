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
        <a href="<?= base_url('historiaancttl');?>" 
        class="btn btn-primary mb-3" title="Fila Fali Ba Misaun Visaun"><i class="fa fa-solid fa-backward"></i></a>
        <a href="<?= base_url('historiaancttl/temporario');?>" 
        class="btn btn-dark mb-3" title="Troka Dados Temporario"><i class="fa fa-solid fa-eraser"></i></a>
        <form action="<?= site_url('historiaancttl/hamos_hotu')?>" method="post" autocomplete="off" class="d-inline"
            onsubmit="return confirm('Ita Boot Hakarak Hamos Hotu Dados Temporario ?')">
                <?= csrf_field(); ?>
                <input type="hidden" name="_method" value="DELETE">
                <button type="submit" class="btn btn-secondary mb-3" title="Hamos Dados Temporario"><i class="fas fa-solid fa-trash"></i></button>
        </form>
        <div class="row">
          <?php foreach($historia as $mv):?>
              <div class="col-md-12 col-sm-12 col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Historia ANCT-TL</h4>
                  </div>
                  <div class="card-body">
                        <p><?= $mv->historia?></p>
                        <table>
                            <thead>
                                <tr>
                                    <th>
                                        <a href="<?= base_url('historiaancttl/temporario/'.$mv->id_historia);?>" 
                                        class="btn" style="background-color: grey;" title="Troka Dados Temporario"><i class="fa fa-solid fa-eraser"></i></a>
                                    </th>
                                    <th>
                                        <form action="<?= site_url('historiaancttl/hamos_hotu/'.$mv->id_historia)?>" method="post" autocomplete="off" 
                                        onsubmit="return confirm('Ita Hakarak Hamos Dados ?')">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <?= csrf_field(); ?>
                                        <button class="btn btn-danger" title="Hamos Dados The Union">
                                                <i class="fas fa-solid fa-trash"></i></button>
                                        </form>
                                    </th>
                                </tr>
                            </thead>
                        </table>
                        
                  </div>
                </div>
              </div>
            <?php endforeach;?>
          </div>
</section>
<?= $this->endSection();?>