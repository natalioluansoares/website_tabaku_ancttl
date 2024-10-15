<?= $this->extend('TemplateDiresaun/headerdiresaun')?>
<?= $this->section('title'); ?>
<title><?= $title ?>&mdash; Sistema</title>
<?= $this->endSection() ?>
<?= $this->section('content');?>
<section class="section">
    <div class="section-header">
    <h1><?= $title; ?></h1>
    </div>
     <div class="card-body">
    <div class="card mb-3">
        <div class="card-header bg-primary text-white">Filter <?= $show?></div>
            <div class="card-body">
                <form class="form-inline">
                    <div class="form-group ml-0">
                        <select class="form-control ml-0 mr-2" name="fulan">
                            
                            
                            <option value="">---Pilih Fulan---</option>
                            <option value="01">Januario</option>
                            <option value="02">Februario</option>
                            <option value="03">Marco</option>
                            <option value="04">Abri</option>
                            <option value="05">Maio</option>
                            <option value="06">Junho</option>
                            <option value="07">Julho</option>
                            <option value="08">Agosto</option>
                            <option value="09">Setembro</option>
                            <option value="10">Outubro</option>
                            <option value="11">Novembro</option>
                            <option value="12">Desembro</option>
                            
                            </select>
                    </div>
                    <div class="form-group ml-0">
                        <select class="form-control ml-0 mr-2" name="tinan">
                            
                            
                            <option value="">---Pilih Tinan---</option>

                                <?php $tahu = date('Y');
                                    for($i=2019;$i<$tahu+2;$i++) { 
                                ?>

                                    <option value="<?= $i ?>"><?= $i ?></option>
                                    
                                <?php } ?>
                            
                            </select>
                    </div>
                    <div class="form-group ml-4">
                        <button type="submit" class="btn btn-success mr-2">
                            <i class="fas fa-eye"></i></button>
                    <a href="<?= site_url('salariodiresaunancttl/new');?>" class="btn btn-primary" title="Aumenta Salario Diresaun ANCT-TL"><i class="fas fa-solid fa-plus"></i></a>
                    </div>
                </form>
        </div>
    </div>
    <?php 
        if ((isset($_GET['tinan']) && $_GET['tinan']!='')|| (isset($_GET['fulan']) && $_GET['fulan']!='')){

            $fulan              = $_GET['fulan'];
            $tinan              = $_GET['tinan'];
            $absensidiresaun   = $fulan.$tinan;
        }else{

            $fulan      = date('m');
            $tinan      = date('Y');
            $absensidiresaun   = $fulan.$tinan;
        }

    ?>

    <div class="alert alert-info">Filter <?= $show?> Fulan: 
        <span class="font-weight-bold mr-2"><?= $fulan  ?></span>Tinan:<span class="font-weight-bold mr-2"><?= $tinan  ?>
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
                <div class="card-body">
                <div class="table-responsive">
                     <?php
                    $jumlah_data = count($salario);
                    if ($jumlah_data > 0 )
                    { ?>
                <table class="table table-bordered table-md" id="table1">
                <thead class="table-primary">
                    <tr>
                        <th>#</th>
                        <th>Naran</th>
                        <th>Data</th>
                        <th>Horas</th>
                        <th>Freq</th>
                        <th>Qty</th>
                        <th>Unit</th>
                        <th>Total</th>
                        <th>Delete</th>
                        <th>Update</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php 
                    $no=1;
                    $saldo =0;
                    $total =0;
                    foreach($salario as $sistema): 
                    ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $sistema->naran_kompleto_diresaun?></td>
                        <td><?= $sistema->data_salario?></td>
                        <td><?=$sistema->horas_salario?></td>
                        <td><?=$sistema->freq_salario?></td>
                        <td><?=$sistema->qty_saldo?></td>
                        <td>$<?= number_format($sistema->unit_saldo /$sistema->qty_saldo, 2)?></td>
                        <td>$<?= number_format($sistema->unit_saldo, 2)?></td>
                        <td><a href="<?= site_url('salariodiresaunancttl/'.$sistema->id_salario.'/edit') ?>" class="btn btn-success"><i class="fas fa-user-edit"></i></a></td>
                        <form action="<?= site_url('salariodiresaunancttl/'.$sistema->id_salario)?>" method="post" autocomplete="off" 
                         onsubmit="return confirm('Ita Hakarak Hamos Dados ?')">
                          <input type="hidden" name="_method" value="DELETE">
                            <?= csrf_field(); ?>
                            <td><button class="btn btn-danger"><i class="fas fa-solid fa-trash"></i></button></td>
                        </form>
                    </tr>
                    <?php 
                     $saldo +=$sistema->unit_saldo /$sistema->qty_saldo;
                     $total += $sistema->unit_saldo; 
                    endforeach; 
                    ?>
                </tbody>
                <tbody id="table1">
                    <tr>
                        <td colspan="6" ><h4>Total Osan</h4></td>
                        <td title="$ <?= number_format($saldo, 2)?>" colspan="1"><strong>$<?= number_format($saldo, 2)?></strong></td>
                        <td title="$ <?= number_format($total, 2)?>"><strong>$<?= number_format($total, 2)?></strong></td>
                    </tr>
                </tbody>
                    </table>
                    <?php }else{ ?>
                    <center>
                        <span class="badge bg-danger"><i class="fas fa-info-circle"></i>Salario Tinan No Fulan Ida Ne'e Seidauk Simu, No Bele Buka Salario Iha Tinan No Fulan Seluk....Obrigado !</span>
                    </center>
                <?php } ?> 
                </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection();?>