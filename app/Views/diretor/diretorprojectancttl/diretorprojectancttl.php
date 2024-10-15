<?= $this->extend('TemplateDiretor/headerdiretor')?>
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
                        <table>
                                <tbody>
                                    <tr>
                                        <form class="form-inline" method="get">
                                        <td>
                                            <div class="form-group">
                                               <input type="date" class="form-control" name="start">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="date" class="form-control" name="end">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <button type="submit" name="filter-data" class="btn btn-primary">
                                                    <i class="fas fa-eye"></i></button>
                                            </div>
                                        </td>
                                    </form>
                                    </tr>
                                </tbody>
                            </table>
                    </div>
                    <div class="col-lg-6">
                        <table>
                            <tbody>
                                <tr>
                                        <form action="" method="get" autocomplete="off">
                                        <td>
                                            <input class="form-control" type="text" placeholder="Search" name="keyword" aria-label="Search" data-width="250">
                                        </td>
                                        <td>
                                            <button class="btn btn-success" type="submit"><i class="fas fa-search"></i></button>
                                        </td>
                                    </form>
                                    </tr>
                                </tbody>
                            </table>
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
        <a href="<?= base_url('diretorprojectancttl');?>" class="btn btn-info mb-3">
        <i class="fas fa-sharp fa-regular fa-backward"></i></a>
        <a href="<?= base_url('diretorprojectancttl/hamos/'.$regulamento->id_regulamento);?>" 
        class="btn btn-dark mb-3" title="Troka Dados Temporario"><i class="fa fa-solid fa-eraser"></i></a>
        <a href="<?= base_url('diretorprojectancttl/new') ?>" class="btn btn-primary mb-3" 
        title="Aumenta Media"><i class="fas fa-plus"></i></a>
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
                    <h2><a href="<?= base_url('diretorprojectancttl/'.$me->id_projeito) ?>" title="Detail Notisia" style="color: blue;"><?= $me->titulo_projeito?></a></h2>
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
                                    <a href="<?= base_url('diretorprojectancttl/download/'.$me->id_projeito) ?>"
                                    title="Download File Project" class="btn btn-dark"><i class="fas fa-download"></i></a>
                                    <a href="<?= base_url('diretorprojectancttl/troka/'.$me->id_projeito) ?>" title="Troka Projeito" class="btn btn-success"><i class="fas fa-user-edit"></i></a>
                                    <!-- <a href="<?= base_url('projectancttl/download/'.$me->id_projeito) ?>" target="_blank" title="Download Project" class="btn btn-dark"><i class="fas fa-download"></i></a> -->
                                    <a href="https://www.ilovepdf.com/pdf_to_word" title="Konvert Pdf Ba Word" class="btn btn-info"><i class="fas fa-link"></i></a>
                                    <form action="<?= site_url('diretorprojectancttl/trokarelatorio/'.$me->id_projeito)?>" method="post" autocomplete="off" 
                                    onsubmit="return confirm('Ita Hakarak Hamos Dados ?')">
                                    <?= csrf_field(); ?>
                                    <input type="hidden" name="id_projeito" value="<?= $me->id_projeito?>">
                                        <td><button class="btn btn-danger"  title="Hamos Media"><i class="fas fa-solid fa-trash"></i></button></td>
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
<?= $this->endSection();?>