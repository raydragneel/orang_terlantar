<!-- Default box -->
<div class="card">
  <div class="card-body">
    <?= form_open(str_replace("_", "", $_view)); ?>
    <div class="row">
      <div class="col-lg-4">
        <div class="form-group">
          <label for="tempat_tinggal_nama">Nama Tempat Tinggal</label>
          <input type="text" class="form-control <?= (form_error('tempat_tinggal_nama') != null) ? 'is-invalid' : '' ?>" id="tempat_tinggal_nama" name="tempat_tinggal_nama" placeholder="Masukkan Nama Tempat Tinggal" value="<?= ($this->input->post('tempat_tinggal_nama') ? $this->input->post('tempat_tinggal_nama') : ""); ?>">
          <div class="invalid-feedback">
            <?= form_error('tempat_tinggal_nama'); ?>
          </div>
        </div>
        <button type="submit" class="btn btn-primary" name='simpan'>Simpan</button>
      </div>
    </div>
    <?= form_close(); ?>
  </div>
</div>
<!-- /.card -->