<!-- Default box -->
<div class="card">
  <div class="card-header">
    <div class="card-tools">
      <button type="button" class="btn btn-success" onClick="window.location='<?= base_url('admin/master/bansos/add') ?>'">Tambah Bantuan Sosial <i class="fas fa-fw fa-plus"></i></button>
    </div>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="datatable">
        <thead>
          <tr>
            <th>#</th>
            <th>Nama Bantuan Sosial</th>
            <th>Sumber Dana</th>
            <th>Total Bantuan Sosial</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody></tbody>
      </table>
    </div>
  </div>
</div>
<!-- /.card -->