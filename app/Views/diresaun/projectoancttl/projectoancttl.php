<?= $this->extend('TemplateDiresaun/headerdiresaun')?>
<?= $this->section('title'); ?>
<title>Dados Media&mdash; ANCT-TL</title>
<?= $this->endSection() ?>
<?= $this->section('content');?>
<?php if (helperDiresaun()->regulamento_diresaun == 2) {?>
    <section class="section">
    <div class="section-header">
    <h1><?= $title; ?></h1>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-12 col-md-12">
            <div class="card">
                <div class="card-header">
                <h4><?= $show;?></h4>
                </div>
                <div class="card-body">
                <div class="card mb-3">
		        <div class="alert alert-info"><?= $show ?> 
                    <span class="font-weight-bold mr-2"></span>
	            </div>
                 
                    <div class="dropdown">
                        <button class="btn btn-dark dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <?= $show ?> 
                        </button>
                        <ul class="dropdown-menu dropdown-menu-dark"  style="height: 200px; width: 40%; overflow-y: scroll;">
                        <?php foreach($regulamento as $sistema): ?>
                            <li><a class="dropdown-item" href="<?= base_url('projectancttl/detail/'.$sistema->id_regulamento)?>"><?= $sistema->regulamento?></a></li>
                            <?php endforeach;?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
</section>
<?php }else { ?>
    <section class="section">
    <div class="section-header">
    <h1><?= $title; ?></h1>
    </div>
     <div class="card-body">
    <div class="card mb-3">
        <div class="card-header bg-primary text-white">Filter <?= $show; ?></div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <form class="form-inline" method="get">
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
                                            <div class="form-group ml-4">
                                                <button type="submit" name="filter-data" class="btn btn-primary">
                                                    <i class="fas fa-eye"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </form>
                    </div>
                    <div class="col-lg-6">
                        <form action="" method="get" autocomplete="off">
                            <table>
                                <tbody>
                                    <tr>
                                        <td>
                                            <input class="form-control" type="text" placeholder="Search" name="keyword" aria-label="Search" data-width="250">
                                        </td>
                                        <td>
                                            <button class="btn btn-success" type="submit"><i class="fas fa-search"></i></button>
                                            <a href="<?= base_url('projectancttl/new') ?>" class="btn btn-primary" title="Aumenta Media"><i class="fas fa-plus"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </form>
                    </div>
                </div>
        </div>
    </div>
    <div class="alert alert-info"><?= $show?></div>
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
            <?php 
            $page = isset($_GET['page']) ? $_GET['page'] : 1;
                        $no = 1 +(6 * ($page - 1));
            foreach($projeito as $me):?>
            <div class="col-12 col-md-6 col-lg-6">
            <article class="article article-style-c">
                <div class="article-header">
                <div class="article-image" data-background="<?= base_url();?>template/assets/img/news/img13.jpg">
                </div>
                </div>
                <div class="article-details">
                <div class="article-category"><a href="#">Data</a><div class="bullet"></div> <a href="#"><?= $me->created?></a></div>
                <div class="article-category"><div class="bullet"></div><a href="#" class="text-center">Titulo Projeito</a></div>
                <div class="article-title">
                    <h2><a href="<?= base_url('projectancttl/'.$me->id_projeito) ?>" title="Detail Notisia" style="color: blue;"><?= $me->titulo_projeito?></a></h2>
                </div>
                <div class="article-category"><div class="bullet"></div><a href="#" class="text-center">Objectivo Projeito</a></div>
                <p><?= $me->objectivo_projeito?></p>
                <div class="article-user">
                    <img alt="image" src="<?= base_url();?>template/assets/img/avatar/avatar-1.png">
                    <div class="article-user-details">
                    <div class="user-detail-name">
                        <a href="#"><?= $me->naran_kompleto_diresaun?></a>
                    </div>
                </div>
                <div class="text-job"><?= $me->regulamento?></div><br>
                <center>
                    <table>
                        <tbody>
                            <tr>
                                <td>
                                    <a href="<?= base_url('projectancttl/'.$me->id_projeito.'/edit') ?>" title="Troka Projeito" class="btn btn-success"><i class="fas fa-user-edit"></i></a>
                                    <a href="<?= base_url('projectancttl/download/'.$me->id_projeito) ?>" target="_blank" title="Download Project" class="btn btn-dark"><i class="fas fa-download"></i></a>
                                    <!-- <a href="<?= base_url('projectancttl/mypdfproject/'.$me->id_projeito) ?>" target="_blank" title="Download Project" class="btn btn-dark"><i class="fas fa-download"></i></a> -->
                                    <a href="https://www.ilovepdf.com/pdf_to_word" title="Konvert Pdf Ba Word" class="btn btn-info"><i class="fas fa-link"></i></a>
                                    <form action="<?= site_url('projectancttl/trokaproject/'.$me->id_projeito)?>" method="post" autocomplete="off" 
                                    onsubmit="return confirm('Ita Hakarak Hamos Dados ?')">
                                    <!-- <input type="hidden" name="_method" value="DELETE"> -->
                                        <?= csrf_field(); ?>
                                        <input type="hidden" name="id_projeito" value="<?=$me->id_projeito?>">
                                        <td><button class="btn btn-danger" type="submit" title="Hamos Project"><i class="fas fa-solid fa-trash"></i></button></td>
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                   
                </center>
                </div>
                </div>
            </article>
        </div>
        <?php endforeach;?>
        </div>
       <div class="float-left">
            <span>Showing <?=  $no = 1 +(6 * ($page - 1)); ?> to <?= $no-1 ?> of <?= $pager->getTotal()?> Entries </span>
        </div>
        <div class="float-right">
            <?= $pager->links('default','pagination') ?>
        </div>
    </div>
</section>
    
<?php } ?>
<?= $this->endSection();?>