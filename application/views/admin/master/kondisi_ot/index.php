<!-- Default box -->
<div class="card">
  <div class="card-header">
    <div class="card-tools">
      <button type="button" class="btn btn-success" onClick="window.location='<?= base_url('admin/master/kondisiot/add') ?>'">Tambah Kondisi Orang Terlantar <i class="fas fa-fw fa-plus"></i></button>
    </div>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="datatable">
        <thead>
          <tr>
            <th>#</th>
            <th>Nama Kondisi Orang Terlantar</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody></tbody>
      </table>
    </div>
  </div>
</div>
<!-- /.card -->