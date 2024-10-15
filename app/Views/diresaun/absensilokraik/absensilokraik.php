<?= $this->extend('TemplateDiresaun/headerdiresaun')?>
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

    <div class="alert alert-info">Filter Absensi Diresaun Fulan: 
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
                <div class="card-header">
                <h4><?= $show;?></h4>
                </div>
                <div class="card-body">
                    <a href="<?= base_url('homediresaun');?>" class="btn btn-info mb-3"><i class="fas fa-sharp fa-regular fa-backward"></i></a>
                    <a href="<?= site_url('absensiloronloron/new');?>" class="btn btn-primary mb-3" title="Aumenta Dados Regulamento Sistema"><i class="fas fa-solid fa-plus"></i></a>
                <div class="table-responsive">
                     <?php
                    $jumlah_data = count($absensi);
                    if ($jumlah_data > 0 )
                    { ?>
                <table class="table table-bordered table-md" id="table1">
                <thead class="table-primary">
                    <tr>
                        <th>#</th>
                        <th>Naran</th>
                        <th>Loron</th>
                        <th>Horas</th>
                        <th>Absensi</th>
                        <th>Tama</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php 
                    $no=1;
                    $presente =0;
                    $alpha =0;
                    foreach($absensi as $sistema): 
                    ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $sistema->naran_kompleto_diresaun?></td>
                        <td><?=$sistema->data_tama?></td>
                        <td><?=$sistema->horas_tama?></td>
                        <?php 
                        if ($sistema->horas_tama == '16:45' || $sistema->horas_tama == '16:46' || $sistema->horas_tama == '16:47' || $sistema->horas_tama == '16:48'
                        || $sistema->horas_tama == '16:49' || $sistema->horas_tama == '16:50' || $sistema->horas_tama == '16:51' || $sistema->horas_tama == '16:52'
                        || $sistema->horas_tama == '16:53' || $sistema->horas_tama == '16:54' || $sistema->horas_tama == '16:55' || $sistema->horas_tama == '16:56'
                        || $sistema->horas_tama == '16:57' || $sistema->horas_tama == '16:58' || $sistema->horas_tama == '16:59' || $sistema->horas_tama == '17:00') {?>
                        <td class="text-primary">Presente</td>
                       <?php }else{ ?>
                            <td class="text-danger">Fila Sedu</td>
                       <?php } ?>
                        
                        <td><?=$sistema->absensi_diresaun?></td>
                    </tr>
                    <?php 
                     $presente += $sistema->presente; 
                     $alpha += $sistema->alpha; 
                    endforeach; ?>
                    </tbody>
                    <tbody>
                        <tr>
                            <td><h6>Presente</h6></td>
                            <td colspan="2"><h6><strong><?= $presente;?></strong></h6></td>
                            <td colspan="2"><h6>Alpha</h6></td>
                            <td><h6><strong><?= $alpha;?></strong></h6></td>
                        </tr>
                    </tbody>
                    </table>
                    <?php }else{ ?>
                    <center>
                        <span class="badge bg-danger"><i class="fas fa-info-circle"></i>Absensi Fulan Ka Tinan Ida Ne'e Seidauk Iha,
                         Bele Hare Fali Absensi Fulan Ho Tinan Seluk !</span>
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