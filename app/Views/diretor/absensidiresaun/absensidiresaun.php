<?= $this->extend('TemplateDiretor/headerdiretor')?>
<?= $this->section('title'); ?>
<title>Dados Absensi&mdash; Sistema</title>
<?= $this->endSection() ?>
<?= $this->section('content');?>
<section class="section">
    <div class="section-header">
    <h1><?= $title; ?></h1>
    </div>
    <div class="card-body">
    <div class="card mb-3">
        <div class="card-header bg-primary text-white">Filter Dados Absensi Diresaun</div>
            <div class="card-body">
                <form class="form-inline">
                    <div class="form-group ml-0">
                        <select class="form-control ml-0" name="tinan">
                            
                            
                            <option value="">---Pilih Tinan---</option>

                                <?php $tahu = date('Y');
                                    for($i=2023;$i<$tahu+2;$i++) { 
                                ?>

                                    <option value="<?= $i ?>"><?= $i ?></option>
                                    
                                <?php } ?>
                            
                            </select>
                    </div>
                    <div class="form-group ml-4">
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-eye"></i></button>
                    </div>
                </form>
        </div>
    </div>
    <?php 
        if ((isset($_GET['tinan']) && $_GET['tinan']!='')){

            $tinan              = $_GET['tinan'];
            $propinastinan   = $tinan;
        }else{

            $tinan      = date('Y');
            $propinastinan   = $tinan;
        }

    ?>

    <div class="alert alert-info">Filter Absensi Diresaun Tinan: 
        <span class="font-weight-bold mr-2"><?= $propinastinan  ?></span>Bulan:
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
                    <a href="<?= base_url('absensidiresaun');?>" class="btn btn-info mb-3"><i class="fas fa-sharp fa-regular fa-backward"></i></a>
                    <a href="<?= site_url('regulamentosistema/new');?>" class="btn btn-primary mb-3" title="Aumenta Dados Regulamento Sistema"><i class="fas fa-solid fa-plus"></i></a>
                    <a href="<?= site_url('regulamentosistemahamos');?>" class="btn btn-dark mb-3" title="Hare Dados Ne'e Mak Hamos Temporario"><i class="fa fa-regular fa-eraser"></i></a>
                <div class="table-responsive">
                <table class="table table-bordered table-md" id="table1">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Naran</th>
                        <th>Loron</th>
                        <th>Horas</th>
                        <th>Tama</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php 
                    $no=1;
                    foreach($absensi as $sistema): 
                    ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $sistema->naran_kompleto_diresaun?></td>
                        <td><?=$sistema->data_tama?></td>
                        <td><?=$sistema->horas_tama?></td>
                        <td><?=$sistema->absensi_diresaun?></td>
                        <td><a href="<?= site_url('regulamentosistema/'.$sistema->id_absensi.'/edit') ?>" class="btn btn-success"><i class="fas fa-user-edit"></i></a></td>
                        <form action="<?= site_url('regulamentosistema/'.$sistema->id_absensi)?>" method="post" autocomplete="off" 
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