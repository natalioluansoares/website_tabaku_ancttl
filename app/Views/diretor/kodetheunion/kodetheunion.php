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
                    <a href="<?= site_url('kodenarativatheunion/new');?>" class="btn btn-primary mb-3" 
                    title="Aumenta Dados Kode The Union"><i class="fas fa-solid fa-plus"></i></a>
                    <a href="<?= site_url('kodenarativatheunion/hamos');?>" class="btn btn-dark mb-3" 
                    title="Hare Dados Ne'e Mak Hamos Temporario"><i class="fa fa-regular fa-eraser"></i></a>
                <div class="table-responsive">
                <table class="table table-bordered table-md" id="table1">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Kode Narattiva The Union</th>
                        <th>created</th>
                        <th>Updated</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php 
                    $no=1;
                    foreach($kodetheunion as $sistema): 
                    ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $sistema->kode_the_union?></td>
                        <td><?=($sistema->created_at)?></td>
                        <td><?=($sistema->updated_at)?></td>
                        <td><a href="<?= site_url('kodenarativatheunion/'.$sistema->id_kode_union.'/edit') ?>" 
                        class="btn btn-success" title="Troka Dados Kode The Union"><i class="fas fa-user-edit"></i></a></td>
                        <form action="<?= site_url('kodenarativatheunion/'.$sistema->id_kode_union)?>" method="post" autocomplete="off" 
                         onsubmit="return confirm('Ita Hakarak Hamos Dados ?')">
                          <input type="hidden" name="_method" value="DELETE">
                            <?= csrf_field(); ?>
                            <td><button class="btn btn-danger" title="Hamos Dados The Union"><i class="fas fa-solid fa-trash"></i></button></td>
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