<?= $this->extend('TemplateDiretor/headerdiretor') ?>

<?= $this->section('title'); ?>
<title><?= $show ?>&mdash; ANCT-TL</title>
<?= $this->endSection();?>
<?= $this->section('content') ?>
<section class="section">
    <div class="section-header">
    <h1><?= $title; ?></h1>
    </div>
    <div class="section-body">
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
            <div class="col-12 col-md-12">
                <?php $errors = session()->getFlashdata('errors'); ?>
                <div class="card">
                    <div class="card-header">
                    <h4><?= $show;?></h4>
                    </div>
                    <div class="card-body">
                    <form action="<?= base_url('diretormedia')?>" method="post" autocomplete="off" enctype="multipart/form-data">
                     <?= csrf_field(); ?>
                        <div class="form-group">
                        <label for="lian">Lian *</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fas fa-paper-plane"></i>
                            </div>
                            </div>
                            <select name="lian" id="lian" class="form-control <?=isset($errors['lian']) ? 'is-invalid' : null ?>" >
                                <option value="">Hili Lian</option>
                                <option value="Tetum">Tetum</option>
                                <option value="Portuguesa">Portuguesa</option>
                                <option value="English">English</option>
                                <option value="Indonesia">Indonesia</option>
                            </select>
                            <div class="invalid-feedback">
                                <?=isset($errors['lian']) ?  $errors['lian'] : null ?>
                            </div>
                        </div><br>
                        <div class="form-group">
                        <label for="naran_intervista">Fontes*</label>
                        <div class="input-group">
                            <textarea id="" name="naran_intervista" value="<?= old('naran_intervista')?>" 
                            class="form-control <?=isset($errors['naran_intervista']) ? 'is-invalid' : null ?>" 
                            placeholder="Fontes" rows="3"><?= old('naran_intervista')?></textarea>

                            <div class="invalid-feedback">
                                <?=isset($errors['naran_intervista']) ?  $errors['naran_intervista'] : null ?>
                            </div>
                        </div><br>
                        <div class="form-group">
                        <label for="topiko">Topiko*</label>
                        <div class="input-group">
                            <textarea name="topiko" id="" placeholder="Topiko" class="form-control 
                            <?=isset($errors['topiko']) ? 'is-invalid' : null ?>" value=""  rows="3"><?= old('topiko')?></textarea>
                            <div class="invalid-feedback">
                                <?=isset($errors['topiko']) ?  $errors['topiko'] : null ?>
                            </div>
                        </div><br>
                        <div class="form-group">
                        <label for="descripsaun">Descripsaun*</label>
                        <div class="input-group">
                            <textarea name="descripsaun" id="" placeholder="Descripsaun" class="form-control 
                            <?=isset($errors['descripsaun']) ? 'is-invalid' : null ?>"
                             value=""  rows="3"><?= old('descripsaun')?></textarea>
                            <div class="invalid-feedback">
                                <?=isset($errors['descripsaun']) ?  $errors['descripsaun'] : null ?>
                            </div>
                        </div><br>
                        <div class="form-group">
                        <label for="conteudo">Konteudo*</label>
                        <div class="input-group">
                            <textarea name="conteudo" id="conteudo" placeholder="Konteudo" class="form-control
                            <?=isset($errors['conteudo']) ? 'is-invalid' : null ?>"
                             value=""  rows="3"><?= old('conteudo')?></textarea>
                            <div class="invalid-feedback">
                                <?=isset($errors['conteudo']) ?  $errors['conteudo'] : null ?>
                            </div>
                        </div><br>
                        <div class="form-group">
                        <label for="link_youtube">Link Video YouTube *</label>
                        <div class="input-group">
                            <textarea id="" name="link_video_youtube" value="" 
                            class="form-control <?=isset($errors['link_video_youtube']) ? 'is-invalid' : null ?>" 
                            placeholder="Link Video YouTube" cols="30" rows="10"><?= old('link_video_youtube')?></textarea>
                            <div class="invalid-feedback">
                                <?=isset($errors['link_video_youtube']) ?  $errors['link_video_youtube'] : null ?>
                            </div>
                        </div><br>
                        <div class="form-group">
                        <label for="link_youtube">Link YouTube *</label>
                        <div class="input-group">
                            <textarea id="" name="link_youtube"
                            class="form-control <?=isset($errors['link_youtube']) ? 'is-invalid' : null ?>" 
                            placeholder="Link YouTube" cols="30" rows="10"><?= old('link_youtube')?></textarea>
                            <div class="invalid-feedback">
                                <?=isset($errors['link_youtube']) ?  $errors['link_youtube'] : null ?>
                            </div>
                        </div><br>
                        <div class="form-group">
                        <label for="link_facebook">Link Facebook *</label>
                        <div class="input-group">
                                <textarea id="" name="link_facebook" 
                            class="form-control <?=isset($errors['link_facebook']) ? 'is-invalid' : null ?>" 
                            placeholder="Link Facebook" cols="30" rows="10"><?= old('link_facebook')?></textarea>
                            <div class="invalid-feedback">
                                <?=isset($errors['link_facebook']) ?  $errors['link_facebook'] : null ?>
                            </div>
                        </div><br>
                        <div class="form-group">
                        <label for="link_tik_tok">Link Tik Tok *</label>
                        <div class="input-group">
                            <textarea id="" name="link_tik_tok"  
                            class="form-control <?=isset($errors['link_tik_tok']) ? 'is-invalid' : null ?>" 
                            placeholder="Link Tik Tok" cols="30" rows="10"><?= old('link_tik_tok')?></textarea>
                            <div class="invalid-feedback">
                                <?=isset($errors['link_tik_tok']) ?  $errors['link_tik_tok'] : null ?>
                            </div>
                        </div><br>
                        <div class="form-group">
                        <label for="fatin">Fatin Intervista*</label>
                        <div class="input-group">
                           <textarea id="" name="fatin" 
                            class="form-control <?=isset($errors['fatin']) ? 'is-invalid' : null ?>" 
                            placeholder="Fatin Intervista" rows="3"><?= old('fatin')?></textarea>
                            <div class="invalid-feedback">
                                <?=isset($errors['fatin']) ?  $errors['fatin'] : null ?>
                            </div>
                        </div><br>
                        <div class="form-group">
                        <label for="data">Data Intervista*</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fas fa-paper-plane"></i>
                            </div>
                            </div>
                            <input type="date" id="" name="data" value="<?= old('data')?>" 
                            class="form-control <?=isset($errors['data']) ? 'is-invalid' : null ?>" 
                            placeholder="Data Intervista">
                            <div class="invalid-feedback">
                                <?=isset($errors['data']) ?  $errors['data'] : null ?>
                            </div>
                        </div>
                    </div>
                        <div class="form-group">
                            <label for="gambar">Foto  Media*</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fas fa-file"></i>
                                </div>
                                </div>
                                <input type="file" id="" name="foto" value="" 
                                class="form-control <?=isset($errors['foto']) ? 'is-invalid' : null ?>">
                                <div class="invalid-feedbackfoto">
                                    <?=isset($errors['foto']) ?  $errors['foto'] : null ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                        <label for="gambar">Foto Multi Media*</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fas fa-file"></i>
                            </div>
                            </div>
                            <input type="file" id="" name="gambar[]" value="<?= old('gambar')?>" 
                            class="form-control <?=isset($errors['gambar']) ? 'is-invalid' : null ?>" multiple="true">
                            <div class="invalid-feedback">
                                <?=isset($errors['gambar']) ?  $errors['gambar'] : null ?>
                            </div>
                        </div>
                    </div>
                         <button type="submit" class="btn btn-primary mb-3"><i class="fas fa-solid fa-user-plus"></i></button>
                        <a href="<?= base_url('diretormedia');?>" class="btn btn-info mb-3">
                        <i class="fas fa-sharp fa-regular fa-backward"></i></a>
                        </div>
                    </div>
                    </form>
                </div>
                </div>
            </div>
            </div>
        </div>
    </section>
    <script src="<?= base_url()?>/template/node_modules/jquery/dist/jquery.min.js"></script>
    <script src="<?= base_url(); ?>template/assets/ckeditores/ckeditor/ckeditor.js"></script>
    <!-- <script src="<?= base_url(); ?>template/assets/ckfinder/ckfinder.js"></script> -->
    <script>
        // var editor = CKEDITOR.replace( 'conteudo' );
        // CKFinder.setupCKEditor( editor );
    //     $("#conteudo").each(function(){
    //         CKEDITOR.replace(this.id, {
    //         filebrowserBrowseUrl: 'template/assets/ckfinder/ckfinder.js',
    //         filebrowserImageBrowseUrl: 'template/assets/ckfinder/ckfinder.js?type=Images',
    //         filebrowserFlashBrowseUrl: 'template/assets/ckfinder/ckfinder.js?type=Flash',
    //         filebrowserUploadUrl: 'new/core/connector/php/connector.php?command=QuickUpload&type=Files',
    //         filebrowserImageUploadUrl: 'new/core/connector/php/connector.php?command=QuickUpload&type=Images',
    //         filebrowserFlashUploadUrl: 'new/core/connector/php/connector.php?command=QuickUpload&type=Flash',
    //         language:"en"
    //     });
    // });
    
    CKEDITOR.replace('conteudo', {
        extraPlugins: 'filebrowser',
        filebrowserBrowseUrl: '',
        filebrowserUploadMethd: 'form',
        filebrowserUploadUrl: 'views/diresaun/diretormedia/upload.php',
    });

    </script>
    <script>
      CKEDITOR.replace('topiko');
      CKEDITOR.replace('naran_intervista');
      CKEDITOR.replace('fatin');
      CKEDITOR.replace('descripsaun');
     
    //   CKEDITOR.replace('introdusaun');
      // CKEDITOR.replace('titulo_projeito');
      // CKEDITOR.replace('objectivo_projeito');
      // CKEDITOR.replace('durante_projeito');
      // CKEDITOR.replace('implementasaun_projeito');
      // CKEDITOR.replace('benefisiariu_projeito');
      // CKEDITOR.replace('logical_frame_work');
      // CKEDITOR.replace('project_cycle_managament');
      // CKEDITOR.replace('project_managament_risk');
      // CKEDITOR.replace('result_based_managament');
      // CKEDITOR.replace('monitoring_indereita_direita');
      // CKEDITOR.replace('relatorio');
      // CKEDITOR.replace('lian_maktaka');
    </script>
<?= $this->endSection() ?>