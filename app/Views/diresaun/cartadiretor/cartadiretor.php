<?= $this->extend('TemplateDiresaun/headerdiresaun')?>
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
                    <?php if (helperDiresaun()->regulamento_diresaun == 6) { ?>
                        <a href="<?= base_url('cartadiretor');?>" class="btn btn-info mb-3"><i class="fas fa-sharp fa-regular fa-backward"></i></a>
                        <a href="<?= site_url('cartadiretor/new');?>" class="btn btn-primary mb-3" title="Aumenta Dados Regulamento Sistema"><i class="fas fa-solid fa-plus"></i></a>
                   <?php } ?>
                <div class="table-responsive">
                <table class="table table-bordered table-md" id="table1">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Naran Diretor</th>
                        <th>Profisaun</th>
                        <th>Detail</th>
                        <?php if (helperDiresaun()->regulamento_diresaun == 6) { ?>
                            <th>Update</th>
                            <th>Delete</th>
                       <?php } ?>
                        
                    </tr>
                    </thead>
                    <tbody>
                    <?php 
                    $no=1;
                    foreach($carta as $sistema): 
                    ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $sistema->naran_kompleto?></td>
                        <td><?= $sistema->diretorregulamento?></td>
                        <td><a href="<?= site_url('cartadiretor/detail/'.$sistema->id_carta) ?>" title="Detail Carta Diretor" class="btn btn-info"><i class="fas fa-book-open"></i></a></td>
                        <?php if (helperDiresaun()->regulamento_diresaun == 6) { ?>
                            <td><a href="<?= site_url('cartadiretor/'.$sistema->id_carta.'/edit') ?>" title="Troka Carta Diretor" class="btn btn-success"><i class="fas fa-user-edit"></i></a></td>
                            <form action="<?= site_url('cartadiretor/'.$sistema->id_carta)?>" method="post" autocomplete="off" 
                             onsubmit="return confirm('Ita Hakarak Hamos Dados ?')">
                              <input type="hidden" name="_method" value="DELETE">
                                <?= csrf_field(); ?>
                                <td><button class="btn btn-danger" title="Hamos Carta Diretor"><i class="fas fa-solid fa-trash"></i></button></td>
                            </form>
                       <?php } ?>
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