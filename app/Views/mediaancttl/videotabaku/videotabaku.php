<?= $this->extend('templatenotisia/header') ?>
<?= $this->section('content') ?>
<div class="row">
    <div class="col-lg-12">
            <div class="card" style="width: 100%;">
                <div class="carousel-item active">
                    <img class="d-block img-fluid" src="<?= base_url('assets')?>/ancttl/sigaru_5.jpg" alt="First slide"style="width: 100%; height:510px ;">
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
    </div>
</div><br>
<div class="container-fluid">
    <h4 class="page-title"><strong><i class="fas fa fa-video-camera mr-2"></i><?= lang('homemediaancttl.homeVideoTabaku')?></strong></h4>
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
                    <form action="" method="get" autocomplete="off" >
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
        $jumlah_data = count($tabaku);
        if ($jumlah_data > 0 )
    { ?>
    <div class="row">
         <?php
         $page = isset($_GET['page']) ? $_GET['page'] : 1;
                        $no = 1 +(6 * ($page - 1));
         foreach($tabaku as $md): ?>
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-body">
                    <h4 class="mt-0 header-title"><strong><?=$md->topiko ?></strong></h4>
                    <!-- 21:9 aspect ratio -->
                    <div class="embed-responsive embed-responsive-21by9">
                        <iframe class="embed-responsive-item" <?= $md->link_video_youtube?>></iframe>
                    </div>
                    <h6><strong><?=$md->naran_intervista ?></strong></h6>
                    <h6><strong><i class="ion-ios7-time mr-2"></i><?=$md->data ?></strong></h6>

                </div>
            </div>
        </div> <!-- end col -->
        <?php endforeach; ?>
    </div>
    <div class="float-left" style="color: darkgrey;">
        <span>Showing <?=  $no = 1 +(6 * ($page - 1)); ?> to <?= $no-1 ?> of <?= $pager->getTotal()?> Entries </span>
    </div>
    <div class="float-right" style="color: darkgrey;">
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