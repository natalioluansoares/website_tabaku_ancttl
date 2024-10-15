<?= $this->extend('TemplateDiresaun/headerdiresaun')?>
<?= $this->section('title'); ?>
<title>Total Saldo&mdash; ANCT-TL</title>
<?= $this->endSection() ?>
<?= $this->section('content');?>
<section class="section">
    <div class="section-header">
    <h1><?= $title; ?></h1>
    </div>
    <div class="section-body">
        <div class="card mb-3">
            <div class="card-header bg-primary text-white">Filter <?= $show; ?></div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <form class="form-inline" action="<?= base_url('printsaldodonator/filterpdf')?>" method="get">
                            <table>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="form-group ml-0">
                                               <input type="date" class="form-control" name="start">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group ml-0">
                                                <input type="date" class="form-control" name="end">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group ml-1">
                                                <button type="submit" name="filter-data" title="Print Tuir Data" 
                                                class="btn btn-danger">
                                                    <i class="fas fa-file"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </form>
                    </div>
                    <div class="col-lg-6">
                        <form class="form-inline" action="<?= base_url('printsaldodonator/pdf')?>" method="get">
                            <table>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="form-group ml-0">
                                               <input type="date" class="form-control" name="start">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group ml-0">
                                                <input type="date" class="form-control" name="end">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group ml-1">
                                                <button type="submit" name="filter-data" title="Cek Data Donator" class="btn btn-success">
                                                    <i class="fas fa-eye"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </form>
                    </div>
                </div>
        </div>
        </div>
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
                <div class="card-body">
                <div class="table-responsive">
                <table class="table table-bordered table-md" id="table1">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Kode </th>
                        <th>Instituisaun </th>
                        <th>Diresaun</th>
                        <th>Data <sub>(Horas)</sub></th>
                        <th>Saldo Apoia</th>
                        <th>Total Saldo</th>
                        <th>Print Hotu</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $saldo=0; 
                    $total=0; 
                    $no=1; foreach($donator as $osan): ?>
                        <tr>
                            <td><?= $no++;?></td>
                            <td><?= $osan->kode_osan ?></td>
                            <td><?= $osan->instituisaun ?></td>
                            <td><?= $osan->naran_kompleto_diresaun?></td>
                            <td><?= $osan->data_osan_tama_donator?><sub>(<?= $osan->horas_osan_tama_donator?>)</sub></td>
                            <td>$ <?= number_format($osan->saldo_tama_donator, 2) ?></td>
                            <td>$ <?= number_format($osan->total_saldo,2)?></td>
                            <td align="center">
                                 <a href="<?= base_url('printsaldodonator/cetakpdf') ?>" target="_blank"
                                 title="Print Hotu Dados Donator" class="btn btn-dark"><i class="fas fa-download"></i></a>
                            </td>
                        </tr>
                    <?php
                    $saldo += $osan->saldo_tama_donator; 
                    $total = $osan->total_saldo; 
                    endforeach; 
                    ?>
                    </tbody>
                    <tbody id="table1">
                        <tr>
                            <td colspan="5" ><h6>Total Osan</h6></td>
                           <td title="$ <?= number_format($saldo, 2)?>" colspan="1"><strong>$ <?= number_format($saldo, 2)?></strong></td>
                           <td title="$ <?= number_format($total, 2)?>"><strong>$ <?= number_format($total, 2)?></strong></td>
                        </tr>
                    </tbody>
                    </table>
                </div>
                </div>
            </div>
        </div>
</section>
<?= $this->endSection();?>