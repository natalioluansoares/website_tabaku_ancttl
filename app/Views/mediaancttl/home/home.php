<?= $this->extend('templatenotisia/header') ?>
<?= $this->section('content') ?>
    <div class="row">
    <div class="col-lg-12">
        <div class="card" style="height: 100%;">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img class="d-block img-fluid" src="<?= base_url('assets')?>/sigaru/logo.jpg" alt="First slide"style="width: 100%; height:510px ;">
                            <div class="banner-text" aling="center">
                                <h4>ALian Nasional Controlo Tabaku</h4>
                                <p>Ita Tenki KOntrolu Ita Nia Saude Tamba Saude Importante Tebes Iha Ita Nia Moris</p>
                                <p>Ita Tenki KOntrolu Ita Nia Saude Tamba Saude Importante Tebes Iha Ita Nia Moris</p>
                                <p>Ita Tenki KOntrolu Ita Nia Saude Tamba Saude Importante Tebes Iha Ita Nia Moris</p>
                                <p>Ita Tenki KOntrolu Ita Nia Saude Tamba Saude Importante Tebes Iha Ita Nia Moris</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="<?= base_url('assets')?>/ancttl/ancttl.jpg" alt="Second slide"style="width: 100%; height:510px ;">
                            <div class="banner-text" aling="center">
                                <h4>ALian Nasional Controlo Tabaku</h4>
                                <p>Ita Tenki KOntrolu Ita Nia Saude Tamba Saude Importante Tebes Iha Ita Nia Moris</p>
                                <p>Ita Tenki KOntrolu Ita Nia Saude Tamba Saude Importante Tebes Iha Ita Nia Moris</p>
                                <p>Ita Tenki KOntrolu Ita Nia Saude Tamba Saude Importante Tebes Iha Ita Nia Moris</p>
                                <p>Ita Tenki KOntrolu Ita Nia Saude Tamba Saude Importante Tebes Iha Ita Nia Moris</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="<?= base_url('assets')?>/ancttl/ancttl_1.jpg" alt="Second slide"style="width: 100%; height:510px ;">
                            <div class="banner-text">
                                <h4>ALian Nasional Controlo Tabaku</h4>
                                <p>Ita Tenki KOntrolu Ita Nia Saude Tamba Saude Importante Tebes Iha Ita Nia Moris</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="<?= base_url('assets')?>/ancttl/ancttl_2.jpg" alt="Third slide"style="width: 100%; height:510px ;">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="<?= base_url('assets')?>/ancttl/ancttl_3.jpg" alt="Third slide"style="width: 100%; height:510px ;">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
        </div>
    </div>
    </div><br>
     <div class="container-fluid">
        <h4 class="page-title" style="color: gray;"><strong><i class="fas fa fa-book mr-2"></i><?php echo lang('homemediaancttl.homeCarta');?></strong></h4>
            <div class="row">
            <div class="col-lg-12">
                <div class="card m-b-30" style="background-color: cornflowerblue;">
                    <div class="card-body">
                        <?php foreach($carta as $diretor):?>
                        <div class="media m-b-1">
                            <div class="media-body" style="color: aliceblue;">
                                <h5 class="mt-0 font-18"><?php echo lang('homemediaancttl.homeCarta');?></h5>
                                <a class="image-popup-no-margins rounded" href="<?=base_url ('uploads/fotodiretor/'.$diretor->foto_diretor)?>">
                                    <img class="img-responsive mr-3 rounded mb-2" src="<?= base_url('uploads/fotodiretor/'.$diretor->foto_diretor); ?>" style="width:280px;" >
                                </a>
                                <p><strong><?php echo lang('homemediaancttl.homeNome');?> <b class="mr-4"></b></strong>:<?=$diretor->naran_kompleto ?></p>
                                <p><strong><?php echo lang('homemediaancttl.homeProficao');?> :</strong><?=$diretor->diretorregulamento ?></p>
                                <p><strong><?php echo lang('homemediaancttl.homePeriode');?><b class="mr-3"></b></strong>:<?=$diretor->periode_carta ?></p>
                                <strong><hr></strong>
                                <?= substr($diretor->carta, 0, 600) ?> <a style="color: black;" 
                                href="<?= base_url(lang('homemediaancttl.homeUrlDetailCarta').$diretor->id_carta) ?>">
                                <?php echo lang('homemediaancttl.homeDetailCarta');?>>>></a>
                            </div>
                        </div>
                        <?php endforeach;?>
                        <ul class="list-inline" style="color: aliceblue;">
                        <li class="list-inline-item"><a class="btn mb-2" style="background-color: aliceblue;"
                        title="<?= lang('homemediaancttl.sidebarSubAbout')?>" 
                        href="<?= base_url(lang('homemediaancttl.homeUrlMissionVision'))?>">
                        <i class="fas fa fa-folder mr-2"></i><?= lang('homemediaancttl.sidebarSubAbout')?></a> </li>

                        <li class="list-inline-item"><a class="btn mb-2" style="background-color: aliceblue;"
                        title="<?= lang('homemediaancttl.sidebarSubHistory')?>" 
                        href="<?= base_url(lang('homemediaancttl.homeUrlHistoria'))?>">
                        <i class="fas fa fa-folder-open mr-2"></i><?= lang('homemediaancttl.sidebarSubHistory')?></a> </li>

                        <li class="list-inline-item"><a class="btn mb-2" style="background-color: aliceblue;"
                        title="Video Media" 
                        href="<?= base_url(lang('homemediaancttl.homeUrlVideo'))?>">
                        <i class="fas fa fa-video-camera mr-2"></i>Video Media</a> </li>

                        <li class="list-inline-item"><a class="btn mb-2" style="background-color: aliceblue;"
                        title="Album Media" 
                        href="<?= base_url(lang('homemediaancttl.homeUrlAlbum'))?>">
                        <i class="mdi mdi-folder-image mr-2"></i>Album Media</a> </li>
                        <li class="list-inline-item"><a class="btn mb-2" style="background-color: aliceblue;"
                        title="<?= lang('homemediaancttl.sidebarLider')?>" 
                        href="<?= base_url(lang('homemediaancttl.homeUrlProfileAncttl'))?>">
                        <i class="fas fa fa-users mr-2"></i><?= lang('homemediaancttl.sidebarLider')?></a> </li>

                        <li class="list-inline-item"><a class="btn mb-2" style="background-color: aliceblue;"
                        title="<?= lang('homemediaancttl.homeMedia')?>" 
                        href="<?= base_url(lang('homemediaancttl.homeUrlMedia'))?>">
                        <i class="fas fa fa-newspaper-o mr-2"></i><?= lang('homemediaancttl.homeMedia')?></a> </li>
                        
                    </ul>
                    </div>
                </div>
            </div>
            
        </div>
        <h4 class="page-title" style="color: gray;"><strong><i class="ion-ios7-world mr-2"></i>
        <?php echo lang('homemediaancttl.homeMissionVision');?></strong></h4>
        <div class="row">
        <?php foreach($misaunvisaun as $mv): ?>
        <div class="col-lg-6">
            <div class="card m-b-30" style="background-color: cornflowerblue;">
                <div class="card-body">
                    <h4 class="mt-0 header-title"><strong><i class="ion-ios7-world mr-2"></i><?php echo lang('homemediaancttl.homeMission');?></strong></h4>
                    <div class="media m-b-30">
                        <a class="image-popup-no-margins" href="<?=base_url('assets')?>/sigaru/logo.jpg">
                                    <img class="img-responsive rounded  mr-3" src="<?=base_url('assets')?>/sigaru/logo.jpg" style="width:150px;" >
                            </a>
                        <div class="media-body" style="color: aliceblue;">
                            <?= $mv->misaun ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card m-b-30" style="background-color: cornflowerblue;">
                <div class="card-body">
                    <h4 class="mt-0 header-title"><strong><i class="ion-ios7-world mr-2"></i><?php echo lang('homemediaancttl.homeVision');?></strong></h4>
                    <div class="media m-b-30">
                        <a class="image-popup-no-margins" href="<?=base_url('assets')?>/sigaru/logo.jpg">
                            <img class="img-responsive rounded  mr-3" src="<?=base_url('assets')?>/sigaru/logo.jpg" style="width:150px;" >
                            </a>
                        <div class="media-body" style="color: aliceblue;">
                            <?= $mv->visaun ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
        </div>
        <h4 class="page-title" style="color: gray;"><strong><i class="fas fa fa-newspaper-o mr-2"></i>
        <?= lang('homemediaancttl.homeMedia'); ?></strong></h4>
         <?php 
            $jumlah_data = count($media);
            if ($jumlah_data > 0 )
        { ?>
        <div class="row">
            <?php foreach($media as $lian): ?>
            <div class="col-lg-4">
                <a href="<?= base_url(lang('homemediaancttl.homeUrlDetail'). $lian->id_media) ?>" style="color: black;" style="color: black;">
                <div class="card m-b-30" style="background-color: cornflowerblue;">
                    <img class="card-img img-fluid" src="<?= base_url('uploads/fotoancttl/'.$lian->foto)?>" alt="Card image">
                    <div class="card-img-overlay">
                        <h6 class="card-title text-white font-15 mt-0"><strong><i class="fas fa fa-calendar-check-o"></i><?= $lian->data?></strong></h6>
                    </div>
                    <div class="card-body">
                        <p class="card-text"><strong style="color: aliceblue;">
                            <?= $lian->topiko?>
                        </strong></p>
                    </div>
                </div>
                </a>
            </div>
            <?php endforeach; ?>
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
        <a href="<?= base_url(lang('homemediaancttl.homeUrlMedia'))?>" class="btn" title="<?= lang('homemediaancttl.homeMediaDetail'); ?>"
        style="background-color: cornflowerblue;color: aliceblue;"><?= lang('homemediaancttl.homeMediaDetail'); ?> >>></a><br><br>
        
        <h4 class="page-title" style="color: gray;"><strong><i class="fas fa fa-newspaper-o mr-2"></i>
        <?= lang('homemediaancttl.homeTabaku'); ?></strong></h4>
        <?php 
            $jumlah_data = count($tabaku);
            if ($jumlah_data > 0 )
        { ?>
        <div class="row">
            <?php foreach($tabaku as $lian): ?>
            <div class="col-lg-4">
                <a href="<?= base_url(lang('homemediaancttl.homeUrlTabakuDetail'). $lian->id_tabaku) ?>" style="color: black;" style="color: black;">
                <div class="card m-b-30" style="background-color: cornflowerblue;">
                    <img class="card-img img-fluid" src="<?= base_url('uploads/fototabaku/'.$lian->foto)?>" alt="Card image">
                    <div class="card-img-overlay">
                        <h6 class="card-title text-white font-15 mt-0"><strong><i class="fas fa fa-calendar-check-o"></i><?= $lian->data?></strong></h6>
                    </div>
                    <div class="card-body">
                        <p class="card-text"><strong style="color: aliceblue;">
                            <?= $lian->topiko?>
                        </strong></p>
                    </div>
                </div>
                </a>
            </div>
            <?php endforeach; ?>
        </div>
        <?php }else{ ?>
            <div class="table-responsive">
            <center>
              <span class="badge bg-danger"><i class="fas fa fa-info-circle"></i> 
                <?= lang('homemediaancttl.homeErrorTabaku') ?>  
            </span>
            </center>
            </div><br>
        <?php } ?>
        <a href="<?= base_url(lang('homemediaancttl.homeUrlMedia'))?>" class="btn" title="<?= lang('homemediaancttl.homeTabakuDetail'); ?>"
        style="background-color: cornflowerblue;color: aliceblue;"><?= lang('homemediaancttl.homeTabakuDetail'); ?> >>></a><br><br>
        
        <h4 class="page-title" style="color: gray;"><strong><i class="fas fa fa-video-camera mr-2"></i>Video Notisia</strong></h4>
        <div class="row">
            <?php foreach($video as $vd):?>
            <div class="col-lg-6">
                <div class="card m-b-30" style="background-color: cornflowerblue;">
                    <div class="card-body">
                        <h4 class="mt-0 header-title"><strong style="color: aliceblue;"><?= $vd->topiko?></strong></h4>
                        <!-- 21:9 aspect ratio -->
                        <div class="embed-responsive embed-responsive-21by9">
                            <iframe class="embed-responsive-item" <?=$vd->link_video_youtube; ?>></iframe>
                        </div>

                    </div>
                </div>
            </div>
            <?php endforeach;?>
        </div>
         <a href="<?= base_url('videoancttl')?>" class="btn" style="background-color: cornflowerblue;color: aliceblue;">
         Detail Video ANCT-TL</a><br><br>
        </div> 
    <?= $this->endSection() ?>