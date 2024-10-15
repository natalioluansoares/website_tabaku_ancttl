<?= $this->extend('TemplateDiretor/headerdiretor')?>
<?= $this->section('title'); ?>
<title>Total Saldo&mdash; ANCT-TL</title>
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
                    <a href="<?= site_url('totalsaldoancttl/new');?>" class="btn btn-primary mb-3" title="Aumenta Dados Regulamento Sistema"><i class="fas fa-solid fa-plus"></i></a>
                <div class="table-responsive">
                <table class="table table-bordered table-md" id="table1">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Kode Osan</th>
                        <th>Total Saldo</th>
                        <th>Instituisaun</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php 
                    $no=1;
                    $total = 0;
                    foreach($saldo as $sistema): 
                    ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $sistema->kode_osan ?></td>
                        <td>$ <?= number_format($sistema->total_saldo,2)?></td>
                        <td><?= $sistema->instituisaun ?></td>
                        <td><a href="<?= site_url('totalsaldoancttl/'.$sistema->id_saldo.'/edit') ?>" class="btn btn-success"><i class="fas fa-user-edit"></i></a></td>
                        <form action="<?= site_url('totalsaldoancttl/'.$sistema->id_saldo)?>" method="post" autocomplete="off" 
                         onsubmit="return confirm('Ita Hakarak Hamos Dados ?')">
                          <input type="hidden" name="_method" value="DELETE">
                            <?= csrf_field(); ?>
                            <td><button class="btn btn-danger"><i class="fas fa-solid fa-trash"></i></button></td>
                        </form>
                    </tr>
                    <?php 
                    $total += $sistema->total_saldo; 
                    endforeach; 
                    ?>
                </tbody>
                <tbody id="table1">
                    <tr>
                        <td colspan="2" ><h4>Total Osan</h4></td>
                        <td title="$ <?= number_format($total, 2)?>"><strong>$ <?= number_format($total, 2)?></strong></td>
                    </tr>
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