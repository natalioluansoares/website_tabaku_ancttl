<?= $this->extend('TemplateDiretor/headerdiretor')?>
<?= $this->section('title'); ?>
<title><?=$title ?>&mdash; Sistema</title>
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
        <div class="row">
            <div class="col-12 col-md-12">
            <div class="card">
                <div class="card-header">
                <h4><?= $show;?></h4>
                </div>
                <div class="card-body">
                    <a href="<?= base_url('akundiretor');?>" class="btn btn-info mb-3" title="<?=$fila ?>"><i class="fas fa-sharp fa-regular fa-backward"></i></a>
                    <a href="<?= site_url('profilediretor/temporario');?>" class="btn btn-dark mb-3" title="<?=$temporario ?>"><i class="fa fa-regular fa-eraser"></i></a>
                    <form action="<?= site_url('profilediretor/hamos_hotu')?>" method="post" autocomplete="off" class="d-inline"
                        onsubmit="return confirm('Ita Boot Hakarak Hamos Hotu Dados Temporario ?')">
                            <?= csrf_field(); ?>
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" class="btn btn-danger mb-3" title="Hamos Dados Temporario"><i class="fas fa-solid fa-trash"></i></button>
                    </form>
                <div class="table-responsive">
                <table class="table table-bordered table-md" id="table1">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Naran Diretor</th>
                        <th>Profisaun</th>
                        <th>Data Moris</th>
                        <th>Status Servisu</th>
                        <th>Temporario</th>
                        <th>Hamos</th>
                        
                    </tr>
                    </thead>
                    <tbody>
                    <?php 
                    $no=1;
                    foreach($lingua as $sistema): 
                    ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $sistema->naran_kompleto?></td>
                        <td><?= $sistema->regulamento?></td>
                        <td><?= $sistema->loron_moris?></td>
                        <td><?= $sistema->status_servisu?></td>
                        <td><a href="<?= site_url('profilediretor/temporario/'.$sistema->id_profile_diretor) ?>" title="<?=$detail ?>" class="btn btn-dark"><i class="fa fa-regular fa-eraser"></i></a></td>
                        <form action="<?= site_url('profilediretor/hamos_hotu/'.$sistema->id_profile)?>" method="post" autocomplete="off" 
                            onsubmit="return confirm('Ita Hakarak Hamos Dados ?')">
                            <input type="hidden" name="_method" value="DELETE">
                            <?= csrf_field(); ?>
                            <td><button class="btn btn-danger" title="<?=$hamos ?>"><i class="fas fa-solid fa-trash"></i></button></td>
                        </form>
                    </tr>
                    <?php endforeach; ?>
                    </tbody>
                    </table>
                </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection();?>