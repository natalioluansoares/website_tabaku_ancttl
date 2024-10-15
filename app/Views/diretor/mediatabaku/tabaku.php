<?= $this->extend('TemplateDiretor/headerdiretor')?>
<?= $this->section('title'); ?>
<title><?= $show ?>&mdash; ANCT-TL</title>
<?= $this->endSection() ?>
<?= $this->section('content');?>
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
                        <table>
                                <thead>
                                    <tr>
                                        <form class="form-inline" method="get">
                                        <th>
                                            <div class="form-group ml-0">
                                               <input type="date" class="form-control" name="start">
                                            </div>
                                        </th>
                                        <th>
                                            <div class="form-group ml-0">
                                                <input type="date" class="form-control" name="end">
                                            </div>
                                        </th>
                                        <th>
                                            <div class="form-group ml-1">
                                                <button type="submit" name="filter-data" class="btn btn-primary">
                                                    <i class="fas fa-eye"></i></button>
                                                </div>
                                            </th>
                                        </form>
                                    </tr>
                                </thead>
                            </table>
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
                                        </td>
                                            <td>
                                                <a href="<?= base_url('tabakudiretor/new') ?>" class="btn btn-primary" title="Aumenta Media"><i class="fas fa-plus"></i></a>
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
        <a href="<?= base_url('tabakudiretor');?>" class="btn btn-info mb-3">
        <i class="fas fa-sharp fa-regular fa-backward"></i></a>
            <a href="<?= base_url($lian);?>" 
            class="btn btn-dark mb-3" title="Troka Dados Temporario"><i class="fa fa-solid fa-eraser"></i></a>
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
            foreach($tabaku as $me):?>
            <div class="col-12 col-md-6 col-lg-6">
            <article class="article article-style-c">
                <div class="article-header">
                <div class="article-image" data-background="<?= base_url('uploads/fototabaku/'.$me->foto);?>">
                </div>
                </div>
                <div class="article-details">
                <div class="article-category"><a href="#">Data</a> <div class="bullet"></div> <a href="#"><?= $me->data?></a></div>
                <div class="article-category"><a href="#">Lian</a> <div class="bullet"></div> <a href="#"><?= $me->lian?></a></div>
                <div class="article-category"><div class="bullet"></div><a href="#" class="text-center">Topiko</a></div>
                <div class="article-title">
                    <h2><a href="<?= base_url('tabakudiretor/'.$me->id_tabaku) ?>" title="Detail Notisia" style="color: blue;"><?= $me->topiko?></a></h2>
                </div>
                <div class="article-category"><div class="bullet"></div><a href="#" class="text-center">Descripsaun</a></div>
                <p><?= $me->descripsaun?></p>
                <center>
                    <?php foreach($mediasosial as $link): ?>
                    <a href="<?=$link->link_media ?>" class="btn btn-social-icon mr-1 btn-facebook" target="_blank" style="<?=$link->link_style ?>" title="<?=$link->link_title ?>">
                        <i class="<?=$link->link_coding ?>"></i>
                    </a>
                    <?php endforeach;?>
                </center>
                <div class="article-user">
                    <img alt="image" src="<?= base_url('uploads/fototabaku/'.$me->foto);?>" style="width: 60px;">
                    <div class="article-user-details">
                    <div class="user-detail-name">
                        <a href="#"><?= $me->naran_intervista?>
                        </a>
                    </div>
                    <div class="text-job"><?= $me->fatin?></div>
                    <center>
                        <table>
                            <tbody>
                                <tr>
                                    <td>
                                        <a href="<?= base_url('tabakudiretor/troka/'.$me->id_tabaku) ?>" class="btn btn-success"><i class="fas fa-user-edit"></i></a>
                                        <form action="<?= site_url('tabakudiretor/trokarelatorio/'.$me->id_tabaku)?>" method="post" autocomplete="off" 
                                        onsubmit="return confirm('Ita Hakarak Hamos Dados ?')">
                                        <!-- <input type="hidden" name="_method" value="DELETE"> -->
                                            <?= csrf_field(); ?>
                                            <input type="hidden" name="id_tabaku" class="form-control" value="<?=$me->id_tabaku?>">
                                            <td><button class="btn btn-danger"  title="Hamos Media"><i class="fas fa-solid fa-trash"></i></button></td>
                                        </form>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </center>

                    </div>
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
<?= $this->endSection();?>