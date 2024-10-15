<?= $this->extend('TemplateDiretor/headerdiretor')?>
<?= $this->section('title'); ?>
<title>Detail Dasos projeito&mdash; ANCT-TL</title>
<?= $this->endSection() ?>
<?= $this->section('content');?>
<section class="section">
    <div class="section-header">
    <h1><?= $title; ?></h1>
    </div>
    <div class="card mb-3">
        <div class="card-header">
                    <h4><?= $show;?></h4>
                    </div>
    <div class="card-body">
    <div class="section-body">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
            <article class="article article-style-c">
                <div class="article-header">
                <div class="article-image" data-background="<?= base_url();?>template/assets/img/news/img13.jpg">
                </div>
                </div>
                <div class="article-details">
                <div class="article-category"><a href="#">Data</a> <div class="bullet"></div> <a href="#"><?= $projeito->created?></a></div>
                <div class="article-user">
                    <img alt="image" src="<?= base_url();?>template/assets/img/avatar/avatar-1.png">
                    <div class="article-user-details">
                    <div class="user-detail-naprojeito">
                        <a href="#"><?= $projeito->naran_kompleto_diresaun?></a>
                    </div>
                    <div class="text-job mb-4"><?=$projeito->regulamento ?> </div>
                    </div>
                </div>
                <div class="article-category"><div class="bullet"></div><a href="#" class="text-center">Introdusaun</a></div>
                <div class="article-title">
                    <p><?= $projeito->introdusaun?></p>
                </div>
                <div class="article-category"><div class="bullet"></div><a href="#" class="text-center">Titulo Projeito</a></div>
                <p><?= $projeito->titulo_projeito?></p>

                <div class="article-category"><div class="bullet"></div><a href="#" class="text-center">Objectivo Projeito</a></div>
                <p><?= $projeito->objectivo_projeito?></p>
                
                <div class="article-category"><div class="bullet"></div><a href="#" class="text-center">Durasaun Projeito</a></div>
                <p><?= $projeito->durasaun_projeito?></p>

                <div class="article-category"><div class="bullet"></div><a href="#" class="text-center">Localidade Implementasaun Projeito</a></div>
                <p><?= $projeito->implementasaun_projeito?></p>

                <div class="article-category"><div class="bullet"></div><a href="#" class="text-center">Benefisiariu Projeito</a></div>
                <p><?= $projeito->benefisiariu_projeito?></p>

                <div class="article-category"><div class="bullet"></div><a href="#" class="text-center">Lian Maktaka</a></div>
                <p><?= $projeito->lian_maktaka?></p><br><br>
                <center>
                    <div class="row">
                        <div class="col-lg-6">
                           <h5>Prepara husi</h5><br>
                           <p><strong>(<?= $projeito->naran_kompleto_diresaun?>)</strong></p>
                        </div><br>
                        <div class="col-lg-6">
                           <h5>Aprova Husi</h5><br>
                           <?php foreach ($diretor as $key => $value) :?>
                           <p><strong>(<?= $value->naran_kompleto?>)</strong></p>
                           <?php endforeach; ?>
                        </div>
                    </div>
                </center>
                
                <div class="article-user">
                        <table>
                            <tbody>
                                <tr>
                                    <td>
                                        <a href="<?= base_url('diretorprojectancttl/detail/'.$projeito->diresaun) ?>" class="btn btn-primary" title="Fila">
                                        <i class="fas fa-sharp fa-regular fa-backward"></i></a>
                                        <a href="<?= base_url('diretorprojectancttl/download/'.$projeito->id_projeito) ?>"
                                    title="Download File Project" class="btn btn-dark"><i class="fas fa-download"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                </div>
            </article>
        </div>
        </div>
        </div>
    </div>
</section>
<?= $this->endSection();?>