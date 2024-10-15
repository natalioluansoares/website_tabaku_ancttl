<?= $this->extend('TemplateDiretor/headerdiretor')?>
<?= $this->section('title'); ?>
<title><?= $show ?>&mdash; ANCT-TL</title>
<?= $this->endSection() ?>
<?= $this->section('content');?>
<section class="section">
    <div class="section-header">
    <h1><?= $title; ?></h1>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
            <article class="article article-style-c">
                <div class="article-details">
                    <center>
                        <h3><strong style="color: black;"><?= $show;?></strong></h3>
                        <img alt="image" src="<?= base_url();?>template/assets/img/avatar/avatar-1.png" style="width: 150px;" class="rounded-circle mr-1">
                        <a><h5 style="color: black;"><?= $carta->naran_kompleto?></h5></a>
                        <a><h6><?= $carta->diretorregulamento?></h6></a>
                        <a><h6><?= $carta->periode_carta?></h6></a>
                    </center><br>
                <p><?= $carta->carta?></p>
                <div class="article-user">
                        <table>
                            <tbody>
                                <tr>
                                    <td>
                                        <a href="<?= base_url('cartadiretorancttl/lingua/'.$carta->lingua) ?>" class="btn btn-primary" title="Fila">Fila</a>
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
</section>
<?= $this->endSection();?>