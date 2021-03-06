<!-- Default box -->
<div class="card">
  <div class="card-body">
    <?= form_open(str_replace("_", "", $_view) . "/" . $_kategori_ot['kategori_ot_id']); ?>
    <div class="row">
      <div class="col-lg-4">
        <div class="form-group">
          <label for="kategori_ot_nama">Nama Kategori Orang Terlantar</label>
          <input type="text" class="form-control <?= (form_error('kategori_ot_nama') != null) ? 'is-invalid' : '' ?>" id="kategori_ot_nama" name="kategori_ot_nama" placeholder="Masukkan Nama Kategori Orang Terlantar" value="<?= ($this->input->post('kategori_ot_nama') ? $this->input->post('kategori_ot_nama') : $_kategori_ot['kategori_ot_nama']); ?>">
          <div class="invalid-feedback">
            <?= form_error('kategori_ot_nama'); ?>
          </div>
        </div>
        <button type="submit" class="btn btn-primary" name='simpan'>Simpan</button>
      </div>
    </div>
    <?= form_close(); ?>
  </div>
</div>
<!-- /.card -->