<?= $this->extend('TemplateDiresaun/headerdiresaun')?>
<?= $this->section('title'); ?>
<title><?= $show?>&mdash; ANCT-TL</title>
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
                    <!-- <a href="<?= site_url('totalsaldoancttl/new');?>" class="btn btn-primary mb-3" title="Aumenta Dados Regulamento Sistema"><i class="fas fa-solid fa-plus"></i></a> -->
                <div class="table-responsive">
                <table class="table table-bordered table-md" id="table1">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Total Saldo</th>
                        <th>Instituisaun</th>
                        <th class="text-center">Download PDF</th>
                        <th class="text-center">Download EXCEL</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php 
                    $no=1;
                    foreach($saldo as $sistema): 
                    ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td>$ <?= number_format($sistema->total_saldo,2)?></td>
                        <td><?= $sistema->instituisaun ?></td>
                        <td align="center">
                            <a href="<?= base_url('printtotalsaldo/downloadpdf') ?>" target="_blank" title="Print Hotu Saldo ANCT-TL" class="btn btn-dark"><i class="fas fa-download"></i></a>
                        </td>
                        <td align="center">
                            <a href="<?= base_url('printtotalsaldo/downloadexcel') ?>" target="_blank" title="Print Hotu Saldo ANCT-TL" class="btn btn-danger"><i class="fas fa-download"></i></a>
                        </td>
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