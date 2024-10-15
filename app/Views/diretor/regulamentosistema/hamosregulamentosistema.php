<?= $this->extend('TemplateDiretor/headerdiretor')?>
<?= $this->section('title'); ?>
<title>Dados Temporario&mdash;Regulamento Sistema</title>
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
                    <a href="<?= base_url('regulamentosistema');?>" 
                    class="btn btn-primary mb-3" title="Fila Fali Ba Regulamento Sistema"><i class="fa fa-solid fa-backward"></i></a>
                    <a href="<?= base_url('regulamentosistematemporario');?>" 
                    class="btn btn-dark mb-3" title="Troka Dados Temporario"><i class="fa fa-solid fa-eraser"></i></a>
                    <!-- <form action="<?= site_url('regulamentosistemahamoshotu')?>" method="post" autocomplete="off" class="d-inline"
                        onsubmit="return confirm('Ita Boot Hakarak Hamos Hotu Dados Temporario ?')">
                            <?= csrf_field(); ?>
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" class="btn btn-secondary mb-3"><i class="fas fa-solid fa-trash"></i></button>
                    </form> -->
                    <div class="table-responsive">
                <table class="table table-bordered table-md" id="table1">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Sistema</th>
                        <th>Deleted</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php 
                    $no=1;
                    foreach($regulamento as $sistema): 
                    ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $sistema->regulamento?></td>
                        <td><?=($sistema->deleted)?></td>
                        <td><a href="<?= base_url('regulamentosistematemporario/'.$sistema->id_regulamento) ?>" class="btn btn-success"><i class="fas fa-solid fa-broom"></i></a></td>
                        <form action="<?= base_url('regulamentosistemahamoshotu/'.$sistema->id_regulamento)?>" method="post" autocomplete="off" 
                         onsubmit="return confirm('Ita Hakarak Hamos Dados ?')">
                          <input type="hidden" name="_method" value="DELETE">
                            <?= csrf_field(); ?>
                            <td><button class="btn btn-danger"><i class="fas fa-solid fa-trash"></i></button></td>
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