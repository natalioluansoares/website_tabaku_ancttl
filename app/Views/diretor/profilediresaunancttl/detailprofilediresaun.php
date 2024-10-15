<?= $this->extend('TemplateDiretor/headerdiretor')?>
<?= $this->section('title'); ?>
<title><?= $show ?>&mdash; ANCT-TL</title>
<?= $this->endSection() ?>
<?= $this->section('content');?>
<section class="section">
    <div class="section-header">
        <?php if ($profile->lingua_profile == 'Tetum') { ?>
            <h1><strong style="color: black;">Detalhes Do perfil Do diretor Da ANCTTL</strong></h1>
        <?php }elseif ($profile->lingua_profile == 'Indonesia') {?>
            <h1><strong style="color: black;">Detail Profil Direktur ANCTTL</strong></h1>
        <?php  }elseif ($profile->lingua_profile == 'English') { ?>
            <h1><strong style="color: black;">ANCTTL Director Profile Details</strong></h1>
        <?php }elseif ($profile->lingua_profile == 'Portuguesa') { ?>
            <h1><strong style="color: black;">Detalhes Do perfil Do diretor Da ANCTTL</strong></h1>
        <?php } ?>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
            <article class="article article-style-c">
                <div class="article-details">
                    <center>
                        <?php if ($profile->lingua_profile == 'Tetum') { ?>
                            <h4><strong style="color: black;">Perfil Do Diretor Da ANCTTL</strong></h4>
                        <?php }elseif ($profile->lingua_profile == 'Indonesia') {?>
                            <h4><strong style="color: black;">Profil Direktur ANCTTL</strong></h4>
                        <?php  }elseif ($profile->lingua_profile == 'English') { ?>
                            <h4><strong style="color: black;">ANCTTL Director Profile</strong></h4>
                        <?php }elseif ($profile->lingua_profile == 'Portuguesa') { ?>
                            <h4><strong style="color: black;">Perfil Do Diretor Da ANCTTL</strong></h4>
                       <?php } ?>
                        <img alt="image" src="<?= base_url('uploads/fotodiretor/'.$profile->foto_diretor); ?>" style="width: 200px;">
                        <a><br><h5 style="color: black;"><?= $profile->naran_kompleto?></h5></a>
                        <?php if ($profile->lingua_profile == 'Tetum' && $profile->status_servisu == 'Aktivo') { ?>
                            <a><h6>Diretor ANCTTL</h6></a>
                            <a><h6>Diretor Ativo</h6></a>
                        <?php }elseif ($profile->lingua_profile == 'Indonesia'&& $profile->status_servisu == 'Aktivo') {?>
                            <a><h6>Direktur ANCTTL</h6></a>
                            <a><h6>Direktur Aktif</h6></a>
                        <?php  }elseif ($profile->lingua_profile == 'English' && $profile->status_servisu == 'Aktivo') { ?>
                            <a><h6>ANCTTL Director</h6></a>
                            <a><h6>Active Director</h6></a>
                        <?php }elseif ($profile->lingua_profile == 'Portuguesa' && $profile->status_servisu == 'Aktivo') { ?>
                            <a><h6>Direktur ANCTTL</h6></a>
                            <a><h6>Diretor Ativo</h6></a>
                       <?php } ?>

                        <?php if ($profile->lingua_profile == 'Tetum' && $profile->status_servisu == 'La Aktivo') { ?>
                            <a><h6>Diretor ANCTTL</h6></a>
                            <a><h6>Diretor Inativo</h6></a>
                        <?php }elseif ($profile->lingua_profile == 'Indonesia'&& $profile->status_servisu == 'La Aktivo') {?>
                            <a><h6>Direktur ANCTTL</h6></a>
                            <a><h6>Direktur Tidak Aktif</h6></a>
                        <?php  }elseif ($profile->lingua_profile == 'English' && $profile->status_servisu == 'La Aktivo') { ?>
                            <a><h6>ANCTTL Director</h6></a>
                            <a><h6>Inactive Director</h6></a>
                        <?php }elseif ($profile->lingua_profile == 'Portuguesa' && $profile->status_servisu == 'La Aktivo') { ?>
                            <a><h6>Direktur ANCTTL</h6></a>
                            <a><h6>Diretor Inativo</h6></a>
                       <?php } ?>
                    </center><br>
                <p><?= $profile->profile?></p>
                <div class="article-user">
                        <table>
                            <tbody>
                                <tr>
                                    <td>
                                        <a href="<?= base_url('profilediretor/'.$profile->lingua_profile) ?>" class="btn btn-primary" title="Fila">Fila</a>
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