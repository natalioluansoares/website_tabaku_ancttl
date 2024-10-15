<?= $this->extend('TemplateDiretor/headerdiretor')?>
<?= $this->section('title'); ?>
<title><?=$show ?>&mdash; ANCT-TL</title>
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
                <div class="article-category"><a href="#">Data</a> <div class="bullet"></div> <a href="#"><?= $narativa->data?>/<?= $narativa->horas?></a></div>
                <div class="article-user">
                    <img alt="image" src="<?= base_url('uploads/fotodiresaun/'.$narativa->foto_diresaun)?>">
                    <div class="article-user-details">
                    <div class="user-detail-nanarativa">
                        <a href="#"><?= $narativa->naran_kompleto_diresaun?></a>
                    </div>
                    <div class="text-job mb-4"><?=$narativa->regulamento ?> </div>
                    </div>
                </div>
                <div class="article-category"><div class="bullet"></div><a href="#" class="text-center">Topiko</a></div>
                <div class="article-title">
                    <p><?= $narativa->topiko_narativa?></p>
                </div>

                <div class="article-category"><div class="bullet"></div><a href="#" class="text-center">Konteudo Relatorio Narativa</a></div>
                <p><?= $narativa->conteudo_narativa?></p><br><br>
                <center>
                    <div class="row">
                        <div class="col-lg-6">
                           <h5>Prepara husi</h5><br>
                           <p><strong>(<?= $narativa->naran_kompleto_diresaun?>)</strong></p>
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
                                        <a href="<?= base_url('diretorelatorionarativa/relatorionarativaadministrasaun/'.$narativa->kode_narativa.'/'.$narativa->diresaun_narativa) ?>" class="btn btn-primary" title="Fila">
                                        <i class="fas fa-sharp fa-regular fa-backward"></i></a>
                                        <a href="<?= base_url('relatorionarativa/download/'.$narativa->id_narativa) ?>"
                                                    title="Download File Relatorio Narativa" class="btn btn-dark"><i class="fas fa-download"></i></a>
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