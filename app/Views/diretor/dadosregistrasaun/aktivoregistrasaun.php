<?= $this->extend('TemplateDiretor/headerdiretor')?>
<?= $this->section('title'); ?>
<title>Aktivo Registrasaun&mdash; Sistema</title>
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
                    <a href="<?= site_url('akunancttl');?>" class="btn btn-primary mb-3" 
                    title="Fila Fali Ba Sistema Diresaun"><i class="fa fa-solid fa-backward"></i></a>

                    <a href="<?= site_url('akunancttltemporario');?>" class="btn btn-dark mb-3" 
                    title="Aktivo / La Aktivo Sistema Servisu"><i class="fa fa-solid fa-power-off"></i></a> 

                    <a href="<?= site_url('akunancttltemporario');?>" class="btn btn-danger mb-3" 
                    title="Aktivo / La Aktivo Sistema Diresaun"><i class="fa fa-solid fa-power-off"></i></a>              
                <div class="table-responsive">
                <table class="table table-bordered table-md" id="table1">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Sistema</th>
                        <th>Sexo</th>
                        <th>Status</th>
                        <th>Diresaun</th>
                        <th class="text-center">Aktivo Servisu</th>
                        <th class="text-center">Aktivo Sistema</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php 
                    $no=1;
                    foreach($akunancttl as $sistema): 
                    ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $sistema->naran_kompleto_diresaun?></td>
                        <td><?= $sistema->sexo?></td>
                        <td><?= $sistema->status_servisu?></td>
                        <td><?= $sistema->regulamento?></td>
                        <td align="center"><a href="<?= site_url('akunancttltemporario/'.$sistema->id_diresaun) ?>" 
                        class="btn btn-dark"><i class="fa fa-solid fa-power-off"></i></a></td>
                        <form action="<?= site_url('akunancttlhamoshotu/'.$sistema->id_diresaun)?>" method="post" autocomplete="off" 
                         onsubmit="return confirm('Ita Hakarak Hamos Dados ?')">
                          <input type="hidden" name="_method" value="DELETE">
                            <?= csrf_field(); ?>
                            <td align="center"><button class="btn btn-danger" ><i class="fa fa-solid fa-power-off"></i></button></td>
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