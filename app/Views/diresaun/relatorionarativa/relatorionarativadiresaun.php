<?= $this->extend('TemplateDiresaun/headerdiresaun')?>
<?= $this->section('title'); ?>
<title>Dados Media&mdash; ANCT-TL</title>
<?= $this->endSection() ?>
<?= $this->section('content');?>
<?php if (helperDiresaun()->regulamento_diresaun ==2) {?>
    <section class="section">
        <div class="section-header">
        <h1><?= $title; ?></h1>
        </div>
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
                                                    <button type="submit" class="btn btn-primary" name="filter-data">
                                                        <i class="fas fa-eye"></i></button>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group ml-1">
                                                    <a href="<?= base_url('relatorionarativa');?>" class="btn btn-info"><i class="fas fa-sharp fa-regular fa-backward"></i></a>
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
                                            <td>
                                                <a href="<?= base_url('relatorionarativa/new') ?>" class="btn btn-primary" title="Aumenta Media"><i class="fas fa-plus"></i></a>
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
                        foreach($narativa as $me):?>
                        <div class="col-12 col-md-4 col-lg-4">
                        <article class="article article-style-c">
                            <div class="article-header">
                            <div class="article-image" data-background="<?= base_url();?>template/assets/img/news/img13.jpg">
                            </div>
                            </div>
                            <div class="article-details">
                                <div class="article-category"><a href="#">Data</a> <div class="bullet"></div> <a href="#"><?= $me->data?>/<?= $me->horas?></a></div>
                            <div class="article-category"><div class="bullet"></div><a href="#" class="text-center">Topiko</a></div>
                            <div class="article-title">
                                <a href="<?= base_url('relatorionarativa/'.$me->id_narativa) ?>" title="Detail Notisia"><?= $me->topiko_narativa?></a>
                            </div>
                            <div class="article-user">
                                <img alt="image" src="<?= base_url('uploads/fotodiresaun/'.$me->foto_diresaun)?>>
                                <div class="article-user-details">
                                <div class="user-detail-name">
                                    <a href="#"><?= $me->naran_kompleto_diresaun?></a>
                                </div>
                                </div>
                            </div>
                                <div class="text-job mb-4"><?= $me->regulamento?> </div>
                                <center>
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <a href="<?= base_url('relatorionarativa/download/'.$me->id_narativa) ?>"
                                                        title="Download File Relatorio Narativa" class="btn btn-dark"><i class="fas fa-download"></i></a>
                                                        <a href="https://www.ilovepdf.com/pdf_to_word" title="Konvert Pdf Ba Word" 
                                                        class="btn btn-info"><i class="fas fa-link"></i></a>
                                                        <a href="<?= base_url('relatorionarativa/troka/'.$me->id_narativa) ?>" title="Troka Projeito" class="btn btn-success"><i class="fas fa-user-edit"></i></a>
                                                        <form action="<?= site_url('relatorionarativa/trokarelatorio/'.$me->id_narativa)?>" method="post" autocomplete="off" 
                                                        onsubmit="return confirm('Ita Hakarak Hamos Dados ?')">
                                                        <?= csrf_field(); ?>
                                                        <input type="hidden" name="id_narativa" class="form-control" value="<?=$me->id_narativa?>">
                                                        <!-- <input type="hidden" name="_method" value="DELETE"> -->
                                                            <td><button class="btn btn-danger"  title="Hamos Media"><i class="fas fa-solid fa-trash"></i></button></td>
                                                        </form>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    
                                    </center>
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
<?php } else { ?>
   <section class="section">
    <div class="section-header">
    <h1><?= $title; ?></h1>
    </div>
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
                                                <button type="submit" class="btn btn-primary" name="filter-data">
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
                                        <td>
                                            <a href="<?= base_url('relatorionarativa/new') ?>" class="btn btn-primary" title="Aumenta Media"><i class="fas fa-plus"></i></a>
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
        <div class="form-group ml-1">
            <a href="<?= base_url('relatorionarativa');?>" class="btn btn-info"><i class="fas fa-sharp fa-regular fa-backward"></i></a>
        </div>
                <div class="row">
                    <?php 
                    $page = isset($_GET['page']) ? $_GET['page'] : 1;
                                $no = 1 +(6 * ($page - 1));
                    foreach($narativa as $me):?>
                    <div class="col-12 col-md-4 col-lg-4">
                    <article class="article article-style-c">
                        <div class="article-header">
                        <div class="article-image" data-background="<?= base_url();?>template/assets/img/news/img13.jpg">
                        </div>
                        </div>
                        <div class="article-details">
                            <div class="article-category"><a href="#">Data</a> <div class="bullet"></div> <a href="#"><?= $me->data?>/<?= $me->horas?></a></div>
                        <div class="article-category"><div class="bullet"></div><a href="#" class="text-center">Topiko</a></div>
                        <div class="article-title">
                            <a href="<?= base_url('relatorionarativa/'.$me->id_narativa) ?>" title="Detail Notisia"><?= $me->topiko_narativa?></a>
                        </div>
                        <div class="article-user">
                            <img alt="image" src="<?= base_url('uploads/fotodiresaun/'.$me->foto_diresaun)?>">
                            <div class="article-user-details">
                            <div class="user-detail-name">
                                <a href="#"><?= $me->naran_kompleto_diresaun?></a>
                            </div>
                            </div>
                        </div>
                            <div class="text-job mb-4"><?= $me->regulamento?> </div>
                            <center>
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <a href="<?= base_url('relatorionarativa/download/'.$me->id_narativa) ?>"
                                                    title="Download File Relatorio Narativa" class="btn btn-dark"><i class="fas fa-download"></i></a>
                                                    <a href="https://www.ilovepdf.com/pdf_to_word" title="Konvert Pdf Ba Word" 
                                                    class="btn btn-info"><i class="fas fa-link"></i></a>
                                                    <a href="<?= base_url('relatorionarativa/troka/'.$me->id_narativa) ?>" title="Troka Projeito" class="btn btn-success"><i class="fas fa-user-edit"></i></a>
                                                    <form action="<?= site_url('relatorionarativa/trokarelatorio/'.$me->id_narativa)?>" method="post" autocomplete="off" 
                                                    onsubmit="return confirm('Ita Hakarak Hamos Dados ?')">
                                                    <?= csrf_field(); ?>
                                                    <input type="hidden" name="id_narativa" class="form-control" value="<?=$me->id_narativa?>">
                                                    <!-- <input type="hidden" name="_method" value="DELETE"> -->
                                                        <td><button class="btn btn-danger"  title="Hamos Media"><i class="fas fa-solid fa-trash"></i></button></td>
                                                    </form>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                   
                                </center>
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
<?php }?>
    
<?= $this->endSection();?>