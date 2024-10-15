<?= $this->extend('TemplateDiresaun/headerdiresaun')?>
<?= $this->section('title'); ?>
<title>Dados Media&mdash; ANCT-TL</title>
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
                                            <div class="form-group ml-1">
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
                                        </td>
                                        <?php if (helperDiresaun()->regulamento_diresaun == 6) :?>
                                            <td>
                                                <a href="<?= base_url('mediaancttl/new') ?>" class="btn btn-primary" title="Aumenta Media"><i class="fas fa-plus"></i></a>
                                            </td>
                                        <?php endif; ?>
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
        <a href="<?= base_url('mediaancttl');?>" class="btn btn-info mb-3">
                        <i class="fas fa-sharp fa-regular fa-backward"></i></a>
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
            foreach($media as $me):?>
            <div class="col-12 col-md-6 col-lg-6">
            <article class="article article-style-c">
                <div class="article-header">
                <div class="article-image" data-background="<?= base_url('uploads/fotoancttl/'.$me->foto);?>">
                </div>
                </div>
                <div class="article-details">
                <div class="article-category"><a href="#">Data</a> <div class="bullet"></div> <a href="#"><?= $me->data?></a></div>
                <div class="article-category"><a href="#">Lian</a> <div class="bullet"></div> <a href="#"><?= $me->lian?></a></div>
                <div class="article-category"><div class="bullet"></div><a href="#" class="text-center">Topiko</a></div>
                <div class="article-title">
                    <?php if (helperDiresaun()->regulamento_diresaun == 6) { ?>
                        <h2><a href="<?= base_url('mediaancttl/'.$me->id_media) ?>" title="Detail Notisia" style="color: blue;"><?= $me->topiko?></a></h2>
                    <?php }else {?>
                        <h2><a href="<?= base_url('detailmedia/'.$me->id_media) ?>" title="Detail Notisia" style="color: blue;"><?= $me->topiko?></a></h2>

                    <?php }?>
                </div>
                <div class="article-category"><div class="bullet"></div><a href="#" class="text-center">Descripsaun</a></div>
                <p><?= $me->descripsaun?></p>
                <center>
                    <a href="<?=$me->link_facebook ?>" class="btn btn-social-icon mr-1 btn-facebook">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href=""<?=$me->link_youtube ?>" class="btn btn-social-icon mr-1 btn-twitter" style="background-color: red;">
                    <i class="fab fa-youtube"></i>
                    </a>
                    <a href=""<?=$me->link_tik_tok ?>" class="btn btn-social-icon mr-1" style="background-color: lightgrey;">
                    <i class="fab fa-tiktok"></i>
                    </a>
                    <a href="#" class="btn btn-social-icon mr-1 btn-instagram">
                    <i class="fab fa-instagram"></i>
                    </a>
                </center>
                <div class="article-user">
                    <img alt="image" src="<?= base_url('uploads/fotoancttl/'.$me->foto);?>" style="width: 60px;">
                    <div class="article-user-details">
                    <div class="user-detail-name">
                        <a href="#"><?= $me->naran_intervista?>
                        </a>
                    </div>
                    <?php if (helperDiresaun()->regulamento_diresaun == 6) { ?>
                    <center>
                        <table>
                            <tbody>
                                <tr>
                                    <td>
                                        <a href="<?= base_url('mediaancttl/troka/'.$me->id_media) ?>" class="btn btn-success"><i class="fas fa-user-edit"></i></a>
                                        <form action="<?= site_url('mediaancttl/'.$me->id_media)?>" method="post" autocomplete="off" 
                                        onsubmit="return confirm('Ita Hakarak Hamos Dados ?')">
                                        <input type="hidden" name="_method" value="DELETE">
                                            <?= csrf_field(); ?>
                                            <td><button class="btn btn-danger"  title="Hamos Media"><i class="fas fa-solid fa-trash"></i></button></td>
                                        </form>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </center>
                    <?php }else {?>

                    <?php }?>
                    </div>
                </div>
                <div class="text-job"><?= $me->fatin?></div>
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