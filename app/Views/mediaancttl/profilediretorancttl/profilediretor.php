<?= $this->extend('templatenotisia/header') ?>
<?= $this->section('content') ?>
<div class="row">
    <div class="col-lg-12">
        <div class="card" style="width: 100%;">
            <div class="carousel-item active">
                        <img class="d-block img-fluid" src="<?= base_url('assets')?>/ancttl/lider.jpg" alt="First slide"style="width: 100%; height:510px ;">
                        <div class="banner-text" aling="center">
                            <h4>ALian Nasional Controlo Tabaku</h4>
                            <p>Ita Tenki KOntrolu Ita Nia Saude Tamba Saude Importante Tebes Iha Ita Nia Moris</p>
                            <p>Ita Tenki KOntrolu Ita Nia Saude Tamba Saude Importante Tebes Iha Ita Nia Moris</p>
                            <p>Ita Tenki KOntrolu Ita Nia Saude Tamba Saude Importante Tebes Iha Ita Nia Moris</p>
                            <p>Ita Tenki KOntrolu Ita Nia Saude Tamba Saude Importante Tebes Iha Ita Nia Moris</p>
                        </div>
                    </div>
        </div>
    </div>
</div><br>
<div class="container-fluid">  
    <h4 class="page-title"><strong><i class="fas fa fa-book mr-2"></i><?php echo lang('homemediaancttl.profileDiretor');?></strong></h4>
    <div class="row">
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-body">
                    <form class="form-inline" method="get">
                        <table style="width: 100%;">
                            <thead>
                                <tr>
                                    <td>
                                        <div class="form-group">
                                            <input type="date" class="form-control" name="start">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group ml-0">
                                            <input type="date" class="form-control" name="end">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group ml-0">
                                            <button type="submit" name="filter-data" class="btn btn-primary">
                                                <i class="fas fa fa-eye"></i></button>
                                        </div>
                                    </td>
                                </tr>
                            </thead>
                        </table>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-body">
                    <form action="<?= base_url(lang('homemediaancttl.homeUrlProfileDiretor'))?>" method="get" autocomplete="off" >
                        <table style="width: 100%;">
                            <thead>
                                <tr>
                                    <td>
                                        <input class="form-control" type="text" placeholder="Search" name="keyword" aria-label="Search" data-width="250">
                                    </td>
                                    <td>
                                        <button class="btn btn-success" type="submit"><i class="fas fa fa-search"></i></button>
                                    </td>
                                </tr>
                            </thead>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
     <?php if (session()->getFlashdata('error')): ?>
            <div class="alert alert-danger alert-dismissible show fade">
                <div class="alert-body">
                    <button class="close" data-dismiss="alert">x</button>
                    <b>Error !</b>
                    <?= session()->getFlashdata('error') ?>
                </div>
            </div>
    <?php endif; ?>
    <?php 
        $jumlah_data = count($profile);
        if ($jumlah_data > 0 )
    { ?>
    <div class="row">
    <?php 
    $page = isset($_GET['page']) ? $_GET['page'] : 1;
                        $no = 1 +(6 * ($page - 1));
    foreach($profile as $mv): ?>
    <div class="col-lg-6">
        <div class="card m-b-30" style="background-color: lightblue;">
            <div class="card-body">
                <small class="mt-0 "><strong><?= $mv->naran_kompleto?></strong></small>
                <div class="media m-b-30">
                    <a class="image-popup-no-margins" href="<?= base_url('uploads/fotodiretor/'.$mv->foto_diretor)?>">
                        <img class="img-responsive rounded  mr-3" src="<?= base_url('uploads/fotodiretor/'.$mv->foto_diretor)?>" style="width:150px;" >
                        <p style="color: black;"><strong><?= lang('homemediaancttl.homeDay') ?> <b class="mr-2"></b>:</strong><?= $mv->data_profile?></p>
                    </a>
                    <div class="media-body">
                        <strong><?= substr($mv->profile, 0, 300) ?></strong>
                        <a href="<?= base_url(lang('homemediaancttl.homeUrlProfileDetail').$mv->id_profile)?>" style="color: blue;">
                        <?=lang('homemediaancttl.profileDiretorDetail') ?>>>></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
    </div>
    <div class="float-left">
        <span>Showing <?=  $no = 1 +(6 * ($page - 1)); ?> to <?= $no-1 ?> of <?= $pager->getTotal()?> Entries </span>
    </div>
    <div class="float-right">
        <?= $pager->links('default','pagination') ?>
    </div>
 </div>
 <?php }else{ ?>
    <div class="table-responsive">
    <center>
        <span class="badge bg-danger"><i class="fas fa fa-info-circle"></i> 
        <?= lang('homemediaancttl.homeErrorMedia') ?>   
    </span>
    </center>
    </div><br>
<?php } ?>
</div>
<?= $this->endSection() ?>
