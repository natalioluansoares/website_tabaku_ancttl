<?= $this->extend('TemplateDiretor/headerdiretor')?>
<?= $this->section('title'); ?>
<title><?=$show ?>&mdash; Sistema</title>
<?= $this->endSection();?>
<?= $this->section('content') ?>
<section class="section">
    <div class="section-header">
    <h1><?= $title; ?></h1>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-12 col-md-12">
                <?php $errors = session()->getFlashdata('errors'); ?>
                <div class="card">
                    <div class="card-header">
                    <h4><?= $show;?></h4>
                    </div>
                    <div class="card-body">
                    <form action="<?= base_url('diretorchannelyoutube/'.$mediasosial->id_link)?>" method="post" autocomplete="off">
                     <?= csrf_field(); ?>
                     <input type="hidden" name="_method" value="PATCH">
                        <div class="form-group">
                        <label>Naran Media Sosial*</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fas fa-paper-plane"></i>
                            </div>
                            </div>
                            <input type="text" name="link_title" value="<?= $mediasosial->link_title?>" 
                            class="form-control phone-number <?=isset($errors['link_title']) ? 'is-invalid' : null ?>" 
                            placeholder="Naran Media Sosial">
                            <div class="invalid-feedback">
                                <?=isset($errors['link_title']) ?  $errors['link_title'] : null ?>
                            </div>
                        </div>
                        </div>
                        <div class="form-group">
                        <label>Link Koding*</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fas fa-paper-plane"></i>
                            </div>
                            </div>
                            <input type="text" name="link_coding" value="<?= $mediasosial->link_coding?>" 
                            class="form-control phone-number <?=isset($errors['link_coding']) ? 'is-invalid' : null ?>" 
                            placeholder="Link Koding">
                            <div class="invalid-feedback">
                                <?=isset($errors['link_coding']) ?  $errors['link_coding'] : null ?>
                            </div>
                        </div>
                        </div>
                        <div class="form-group">
                        <label>Link Media Sosial*</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fas fa-paper-plane"></i>
                            </div>
                            </div>
                            <textarea name="link_media" value="" 
                            class="form-control phone-number <?=isset($errors['link_media']) ? 'is-invalid' : null ?>" 
                            placeholder="Link Media" cols="30" rows="10"><?= $mediasosial->link_media?></textarea>
                            <div class="invalid-feedback">
                                <?=isset($errors['link_media']) ?  $errors['link_media'] : null ?>
                            </div>
                        </div>
                        </div>
                        <div class="form-group">
                        <label>Link Style *</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fas fa-paper-plane"></i>
                            </div>
                            </div>
                            <textarea name="link_style" value=""
                            class="form-control phone-number <?=isset($errors['link_style']) ? 'is-invalid' : null ?>" 
                            placeholder="Link Style" cols="30" rows="10"><?= $mediasosial->link_style?></textarea>
                            <div class="invalid-feedback">
                                <?=isset($errors['link_style']) ?  $errors['link_style'] : null ?>
                            </div>
                        </div>
                        </div>
                         <button type="submit" class="btn btn-primary mb-3"><i class="fas fa-solid fa-user-plus"></i></button>
                        <a href="<?= base_url('diretorchannelyoutube');?>" class="btn btn-info mb-3"><i class="fas fa-sharp fa-regular fa-backward"></i></a>
                        </div>
                    </div>
                    </form>
                </div>
                </div>
            </div>
            </div>
        </div>
    </section>
<?= $this->endSection() ?>