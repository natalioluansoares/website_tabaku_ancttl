<?= $this->extend('TemplateDiresaun/headerdiresaun')?>
<?= $this->section('title'); ?>
<title><?= $show ?>&mdash; ANCT-TL</title>
<?= $this->endSection() ?>
<?= $this->section('content');?>
<section class="section">
    <div class="section-header">
        <h1><strong style="color: black;">Detail Profile <?=helperDiresaun()->regulamento ?></strong></h1>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
            <article class="article article-style-c">
                <div class="article-details">
                    <center>
                    </center><br>
                <p><?= $profile->profile_diresaun?></p>
                <div class="article-user">
                        <table>
                            <tbody>
                                <tr>
                                    <td>
                                        <a href="<?= base_url('profilediresaunancttl') ?>" class="btn btn-primary" title="Fila">Fila</a>
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