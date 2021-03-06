<div class="d-none">
    <button type="button" class="prosesModal" data-toggle="modal" data-target="#prosesModal"></button>
</div>
<!-- Proses Modal -->
<div class="modal fade" id="prosesModal" tabindex="-1" role="dialog" aria-labelledby="prosesModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="prosesModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="sumber_dana_id">Sumber Dana</label>
                    <select name="sumber_dana_id" id="sumber_dana_id" class="form-control"></select>
                </div>
                <div class="form-group bansos_id d-none">
                    <label for="bansos_id">Bantuan Sosial</label>
                    <select name="bansos_id" id="bansos_id" class="form-control"></select>
                </div>
                <div class="form-group sumber_dana_lainnya d-none">
                    <label for="sumber_dana_lainnya">Sumber Dana Lainnya</label>
                    <input type="text" class="form-control" id="sumber_dana_lainnya" name="sumber_dana_lainnya" placeholder="Masukkan Nama Sumber Dana">
                </div>
                <div class="form-group sumber_dana_lainnya d-none">
                    <label for="bansos_lainnya">Bantuan Sosial Lainnya</label>
                    <input type="text" class="form-control" id="bansos_lainnya" name="bansos_lainnya" placeholder="Masukkan Nama dan jumlah bantuan sosial">
                </div>
                <div class="form-group">
                    <label for="keterangan">Keterangan</label>
                    <textarea class="form-control" id="keterangan" name="keterangan" rows="3" placeholder="Isi Keterangan"></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary batalProses" data-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-primary" onclick="prosesAjax()">Proses</button>
            </div>
        </div>
    </div>
</div>
<div class="d-none">
    <button type="button" class="detailModal" data-toggle="modal" data-target="#detailModal"></button>
</div>
<!-- Detail Modal -->
<div class="modal fade" id="detailModal" tabindex="-1" role="dialog" aria-labelledby="detailModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="detailModalLabel">Detail</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row w-25 mx-auto">
                    <div class="col">
                        <img class="img-fluid foto" alt="foto terlantar">
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        Jenis Orang Terlantar
                    </div>
                    <div class="col">
                        : <span class="jenis_orang_terlantar"></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        Alamat
                    </div>
                    <div class="col">
                        : <span class="terlantar_alamat"></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        NIK
                    </div>
                    <div class="col">
                        : <span class="terlantar_nik"></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        NO KK
                    </div>
                    <div class="col">
                        : <span class="terlantar_no_kk"></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        NO DTKS / BDT
                    </div>
                    <div class="col">
                        : <span class="terlantar_no_dtks"></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        Tempat, Tanggal Lahir
                    </div>
                    <div class="col">
                        : <span class="terlantar_tempat_lahir"></span>, <span class="terlantar_tanggal_lahir"></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        Jenis Kelamin
                    </div>
                    <div class="col">
                        : <span class="terlantar_jenis_kelamin"></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        Agama
                    </div>
                    <div class="col">
                        : <span class="agama"></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        RT / RW
                    </div>
                    <div class="col">
                        : <span class="terlantar_rt"></span>/<span class="terlantar_rw"></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        Kecamatan
                    </div>
                    <div class="col">
                        : <span class="terlantar_kecamatan"></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        Kabupaten
                    </div>
                    <div class="col">
                        : <span class="terlantar_kabupaten"></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        No Telp. (WA)
                    </div>
                    <div class="col">
                        : <span class="terlantar_telp"></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        Tempat Tinggal
                    </div>
                    <div class="col">
                        : <span class="tempat_tinggal"></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        Kondisi Tempat Tinggal
                    </div>
                    <div class="col">
                        : <span class="kondisi_tempat_tinggal"></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        Kategori Orang Terlantar
                    </div>
                    <div class="col">
                        : <span class="kategori_ot"></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        Fasilitas Kesehatan
                    </div>
                    <div class="col">
                        : <span class="fasilitas_kesehatan"></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        Kondisi Orang Terlantar
                    </div>
                    <div class="col">
                        : <span class="kondisi_ot"></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        Kebutuhan Yang Diperlukan
                    </div>
                    <div class="col">
                        : <span class="kebutuhan_diperlukan"></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        Permasalahan Yang Dihadapi
                    </div>
                    <div class="col">
                        : <span class="alasan_terlantar"></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        Tujuan Alamat
                    </div>
                    <div class="col">
                        : <span class="tujuan_alamat"></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        Tujuan RT / RW
                    </div>
                    <div class="col">
                        : <span class="tujuan_rt"></span>/<span class="tujuan_rw"></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        Tujuan Desa
                    </div>
                    <div class="col">
                        : <span class="tujuan_desa"></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        Tujuan Kecamatan
                    </div>
                    <div class="col">
                        : <span class="tujuan_kecamatan"></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        Tujuan Kabupaten
                    </div>
                    <div class="col">
                        : <span class="tujuan_kabupaten"></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        Tujuan Provinsi
                    </div>
                    <div class="col">
                        : <span class="tujuan_provinsi"></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        Diajukan Pada
                    </div>
                    <div class="col">
                        : <span class="created_at"></span>
                    </div>
                </div>
                <div class="row status">
                    <div class="col-4">
                        Status
                    </div>
                    <div class="col">
                        : <span class="status-text"></span>
                    </div>
                </div>
                <div class="row verif">
                    <div class="col-4">
                        Bantuan Yang Diterima
                    </div>
                    <div class="col">
                        : <span class="verif-text"></span>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<script>
    var id = null;
    var datas = [];
    var tabel = null;
    var start = null;
    var end = null;
    var date = null;
    var nama = "";
    var nik = "";
    var no_kk = "";
    var desa = "";
    var kecamatan = "";
    var kabupaten = "";
    var tempat_tinggal_id = "";
    var kondisi_tempat_tinggal_id = "";
    var kategori_ot_id = "";
    var fasilitas_kesehatan_id = "";
    var kondisi_ot_id = "";
    var kebutuhan_diperlukan_id = "";



    // function deleteData(id) {
    //     var cek = confirm('Yakin ingin menghapus data ini?');
    //     if (cek) {
    //         $('.deleteData').attr('action', "<?= base_url('admin/orangterlantar/delete/') ?>" + id)
    //         $('.deleteData').submit();
    //     }
    // }

    function tolakData(id) {
        var cek = confirm('Yakin ingin menolak data ini?');
        if (cek) {
            $('.tolakData').attr('action', "<?= base_url('admin/orangterlantar/tolak/') ?>" + id)
            $('.tolakData').submit();
        }
    }

    function prosesData(index) {
        id = index;
        var data = datas[index];
        $('#prosesModalLabel').html("Proses Data Terlantar " + data.terlantar_nama)
        var sumberDanas = <?= $_sumber_danas ?>;
        var datasumberDanas = sumberDanas.map((data) => {
            return {
                id: data.sumber_dana_id,
                nama: data.sumber_dana_nama
            }
        })
        updateSelect('Sumber Dana', 'sumber_dana_id', datasumberDanas)
        $('#sumber_dana_id').append('<option value="0">Lain - Lain</option>')
        $('#sumber_dana_id').change(function(e) {
            var val = $(this).val();
            if (val != 0 && val != "") {
                var bansoss = <?= $_bansoss ?>;
                $('.bansos_id').removeClass('d-none');
                $('.sumber_dana_lainnya').addClass('d-none');
                bansoss = bansoss.filter(function(bansos) {
                    return bansos.sumber_dana_id == val;
                });
                var html = "<option value=''>Pilih Bantuan Sosial</option>";
                bansoss.forEach((item, index) => {
                    html = html + "<option value='" + item.bansos_id + "'>" + item.bansos_nama + " " + formatRupiah(item.bansos_total, "Rp.") + "</option>";
                })
                $('#bansos_id').html(html)
            } else {
                $('.bansos_id').addClass('d-none');
            }
            if (val == "") {
                $('.sumber_dana_lainnya').addClass('d-none');
            }
            if (val == 0 && val != "") {
                $('.sumber_dana_lainnya').removeClass('d-none');
            }
        })
        $('.prosesModal').click()
    }

    function updateSelect(title, selected, iter) {
        var html = "<option value=''>Pilih " + title + "</option>";
        iter.forEach((item, index) => {
            html = html + "<option value='" + item.id + "'>" + item.nama + "</option>";
        })
        $('#' + selected).html(html)
    }

    function showData(index) {
        $('.status').addClass('d-none');
        $('.verif').addClass('d-none');
        $('.detailModal').click()
        var data = datas[index]
        $('.status').removeClass('d-none');
        var status = '<span class="badge badge-info"><i class="fa fa-fw fa-clock"></i> DiProses</span>'
        $('.status-text').html('Sedang Diproses')
        if (data.verif_id != null) {
            $('.verif').removeClass('d-none');
            status = '<span class="badge badge-success"><i class="fa fa-fw fa-check"></i> Diverifikasi</span>'
            $('.status-text').html('Diverifikasi Oleh ' + data.admin_verif_nama + ' Pada ' + toLocaleDate(data.verif_at))
            var verif_text = data.sumber_dana_lainnya + " " + data.bansos_lainnya;
            if (data.sumber_dana_id != null) {
                verif_text = data.sumber_dana_nama + ", " + data.bansos_nama + " " + formatRupiah(data.bansos_total, true)
            }
            $('.verif-text').html(verif_text)
        }
        if (data.tolak_id != null) {
            status = '<span class="badge badge-danger"><i class="fa fa-fw fa-times"></i> Ditolak</span>'
            $('.status-text').html('Ditolak Oleh ' + data.admin_tolak_nama + ' Pada ' + toLocaleDate(data.tolak_at))
        }
        $('#detailModalLabel').html('Detail Orang Terlantar ' + data.terlantar_nama + " " + status)
        $('.foto').attr('src', "<?= base_url('uploads/') ?>" + data.foto)
        $('.jenis_orang_terlantar').html(data.orang_terlantar_nama)
        $('.terlantar_alamat').html(data.terlantar_alamat)
        $('.terlantar_nik').html(data.terlantar_nik)
        $('.terlantar_no_kk').html(data.terlantar_no_kk)
        $('.terlantar_no_dtks').html(data.terlantar_no_dtks)
        $('.terlantar_tempat_lahir').html(data.terlantar_tempat_lahir)
        $('.terlantar_tanggal_lahir').html(toLocaleDate(data.terlantar_tanggal_lahir))
        $('.terlantar_jenis_kelamin').html(data.terlantar_jenis_kelamin)
        $('.agama').html(data.agama_nama)
        $('.terlantar_rt').html(data.terlantar_rt)
        $('.terlantar_rw').html(data.terlantar_rw)
        $('.terlantar_kecamatan').html(data.terlantar_kecamatan)
        $('.terlantar_kabupaten').html(data.terlantar_kabupaten)
        $('.terlantar_telp').html(data.terlantar_telp)
        $('.tempat_tinggal').html(data.tempat_tinggal_nama)
        $('.kondisi_tempat_tinggal').html(data.kondisi_tempat_tinggal_nama)
        $('.kategori_ot').html(data.kategori_ot_nama)
        $('.fasilitas_kesehatan').html(data.fasilitas_kesehatan_nama)
        $('.kondisi_ot').html(data.kondisi_ot_nama)
        $('.kebutuhan_diperlukan').html(data.kebutuhan_diperlukan_nama)
        if (data.kebutuhan_diperlukan_id == null) {
            $('.kebutuhan_diperlukan').html(data.kebutuhan_diperlukan_lainnya)
        }
        $('.alasan_terlantar').html(data.alasan_terlantar)
        $('.tujuan_alamat').html(data.tujuan_alamat)
        $('.tujuan_rt').html(data.tujuan_rt)
        $('.tujuan_rw').html(data.tujuan_rw)
        $('.tujuan_desa').html(data.tujuan_desa)
        $('.tujuan_kecamatan').html(data.tujuan_kecamatan)
        $('.tujuan_kabupaten').html(data.tujuan_kabupaten)
        $('.tujuan_provinsi').html(data.tujuan_provinsi)
        $('.created_at').html(toLocaleDate(data.created_at))

    }
    $(document).ready(function() {
        tabel = $('#datatable').DataTable({
            "processing": true,
            "serverSide": true,
            "scrollX": true,
            "scrollY": "<?= $_datatable_scroll_y ?>",
            "scrollCollapse": true,
            "ordering": true, // Set true agar bisa di sorting
            "order": [
                [14, 'desc']
            ], // Default sortingnya berdasarkan kolom / field ke 0 (paling pertama)
            "searching": false,
            'columnDefs': [{
                "targets": [0, 15],
                "orderable": false
            }],
            "ajax": {
                "url": "<?= base_url(str_replace("/$_status/", "/", str_replace("_", "", $_datatable_view))) . "/" . $_id . "/" . $_status ?>", // URL file untuk proses select datanya
                "type": "POST",
                "data": function(d) {
                    d.date = date;
                    d.nama = nama;
                    d.nik = nik;
                    d.no_kk = no_kk;
                    d.desa = desa;
                    d.kecamatan = kecamatan;
                    d.kabupaten = kabupaten;
                    d.tempat_tinggal_id = tempat_tinggal_id;
                    d.kondisi_tempat_tinggal_id = kondisi_tempat_tinggal_id;
                    d.kategori_ot_id = kategori_ot_id;
                    d.fasilitas_kesehatan_id = fasilitas_kesehatan_id;
                    d.kondisi_ot_id = kondisi_ot_id;
                    d.kebutuhan_diperlukan_id = kebutuhan_diperlukan_id;
                }
            },
            "searching": false,
            "deferRender": true,
            "aLengthMenu": [
                [10, 50],
                [10, 50]
            ], // Combobox Limit
            "initComplete": function(settings, json) {
                datas = json.data
            },
            "columns": [{
                    'data': 'terlantar_id'
                },
                {
                    "data": "terlantar_nama"
                }, // Tampilkan nama
                {
                    "data": "terlantar_nik"
                },
                {
                    "data": "terlantar_no_kk"
                },
                {
                    "data": "terlantar_desa"
                },
                {
                    "data": "terlantar_kecamatan"
                },
                {
                    "data": "terlantar_kabupaten"
                },
                {
                    "data": "user_pendaftar_nama"
                },
                {
                    "data": "tempat_tinggal_nama"
                },
                {
                    "data": "kondisi_tempat_tinggal_nama",
                    "render": function(data, type, row) {
                        var html = row.kondisi_tempat_tinggal_nama;
                        if (row.kondisi_tempat_tinggal_id == null) {
                            html = "Tidak Ada"
                        }
                        return html
                    }
                },
                {
                    "data": "kategori_ot_nama"
                },
                {
                    "data": "fasilitas_kesehatan_nama"
                },
                {
                    "data": "kondisi_ot_nama"
                },
                {
                    "data": "kebutuhan_diperlukan_nama",
                    "render": function(data, type, row) {
                        var html = row.kebutuhan_diperlukan_nama;
                        if (row.kebutuhan_diperlukan_id == null) {
                            html = row.kebutuhan_diperlukan_lainnya
                        }
                        return html
                    }
                },
                {
                    "data": "created_at",
                    "render": function(data, type, row) {
                        return toLocaleDate(row.created_at)
                    }
                },
                {
                    "render": function(data, type, row, meta) { // Tampilkan kolom aksi
                        var html = '<button type="button" class="btn btn-sm float-left" onClick="showData(' + meta.row + ')"><div class="badge badge-info"><i class="fa fa-fw fa-eye"></i> Detail</div></button>'
                        var textProses = '<i class="fa fa-fw fa-check"></i> Proses'
                        var classBadge = "badge-success";
                        html += '<button type="button" class="btn btn-sm" onClick="prosesData(' + meta.row + ')"><div class="badge ' + classBadge + '">' + textProses + '</div></button>'
                        html += '<form method="POST" class="tolakData float-left"><button type="button" class="btn btn-sm" onClick="tolakData(' + row.terlantar_id + ')"><div class="badge badge-danger"><i class="fa fa-fw fa-times"></i> Tolak</div></form>'
                        // html += '<form method="POST" class="deleteData float-left"><button type="button" class="btn btn-sm" onClick="deleteData(' + row.terlantar_id + ')"><div class="badge badge-danger"><i class="fa fa-fw fa-trash"></i> Hapus</div></form>'
                        return html
                    }
                },
            ],
        });
        tabel.on('order.dt search.dt draw.dt', function() {
            tabel.column(0, {
                search: 'applied',
                order: 'applied'
            }).nodes().each(function(cell, i) {
                cell.innerHTML = i + 1;
            });
        }).draw();
        $('.filtered').each(function(i) {
            if (i == 0 || i == 7) {
                $(this).removeClass('col-md-3')
            }
            var title = $(this).text();
            if (i == 1 || i == 2 || i == 3) {
                var input = $('<input class="form-control form-control-sm" type="text" placeholder="' + title + '"/>').appendTo($(this).empty());
                if (i == 2 || i == 3) {
                    var input = $('<input class="form-control form-control-sm" type="text" data-inputmask-alias="9" data-inputmask-repeat="16" placeholder="' + title + '"/>').appendTo($(this).empty());
                }
                input.on('keyup change clear', function() {
                    var term = $(this).val();
                    if (i == 1) {
                        nama = term;
                    }
                    if (i == 2) {
                        nik = term;
                    }
                    if (i == 3) {
                        no_kk = term;
                    }
                    tabel.ajax.reload(null, false)
                });
            } else if (i >= 4 && i <= 6 || i >= 8 && i <= 13) {
                var select = $('<select class="form-control form-control-sm"><option value="">-- Pilih ' + title + ' --</option></select>').appendTo($(this).empty()).on('change', function() {
                    var term = $(this).val();
                    if (i == 4) {
                        desa = term
                    }
                    if (i == 5) {
                        kecamatan = term
                    }
                    if (i == 6) {
                        kabupaten = term
                    }
                    if (i == 8) {
                        tempat_tinggal_id = term
                    }
                    if (i == 9) {
                        kondisi_tempat_tinggal_id = term
                    }
                    if (i == 10) {
                        kategori_ot_id = term
                    }
                    if (i == 11) {
                        fasilitas_kesehatan_id = term
                    }
                    if (i == 12) {
                        kondisi_ot_id = term
                    }
                    if (i == 13) {
                        kebutuhan_diperlukan_id = term
                    }
                    tabel.ajax.reload(null, true)
                });
                var options = []
                if (i == 4) {
                    options = <?= $_desas ?>;
                }
                if (i == 5) {
                    options = <?= $_kecamatans ?>;
                }
                if (i == 6) {
                    options = <?= $_kabupatens ?>;
                }
                if (i == 8) {
                    options = <?= $_tempat_tinggals ?>;
                }
                if (i == 9) {
                    options = <?= $_kondisi_tempat_tinggals ?>;
                }
                if (i == 10) {
                    options = <?= $_kategori_ots ?>;
                }
                if (i == 11) {
                    options = <?= $_fasilitas_kesehatans ?>;
                }
                if (i == 12) {
                    options = <?= $_kondisi_ots ?>;
                }
                if (i == 13) {
                    options = <?= $_kebutuhan_diperlukans ?>;
                }
                if (i >= 4 && i <= 6) {
                    options.map((d) => {
                        select.append('<option value="' + d.nama + '">' + d.nama + '</option>')
                    })
                } else {
                    options.map((d) => {
                        select.append('<option value="' + d.id + '">' + d.nama + '</option>')
                    })
                }
            } else if (i == 14) {
                var daterange = '<div id="reportrange" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc; width: 100%"><i class="fa fa-calendar"></i>&nbsp;<span>Pilih Tanggal</span> <i class="fa fa-caret-down"></i></div>';
                $(this).empty().append(daterange);
            } else {
                $(this).empty();
            }
        });

        start = moment();
        end = moment();

        function cb(start, end) {
            date = start.format('YYYY-MM-D') + '/' + end.format('YYYY-MM-D');
            $('.date-text').html("Data Dari tanggal " + start.format('D MMMM, YYYY') + ' - ' + end.format('D MMMM, YYYY'))
            tabel.ajax.reload(function(json) {
                datas = json.data
            })
        }

        $('#reportrange').daterangepicker({
            showDropdowns: true,
            autoApply: false,
            startDate: start,
            endDate: end,
            locale: {
                customRangeLabel: 'Tentukan Sendiri',
                cancelLabel: 'Batal',
                applyLabel: 'Pilih',
            },
            ranges: {
                'Hari ini': [moment(), moment()],
                'Kemarin': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                '7 Hari terakhir': [moment().subtract(6, 'days'), moment()],
                '30 Hari terakhir': [moment().subtract(29, 'days'), moment()],
                'Bulan ini': [moment().startOf('month'), moment().endOf('month')],
                'Bulan sebelumnya': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
            }
        }, cb);
        cb(start, end)
        $('#reportrange').on('apply.daterangepicker', function(ev, picker) {
            cb(picker.startDate, picker.endDate)
        })
        $('.refreshData').on('click', function() {
            date = null;
            $('.date-text').html("Semua Data");
            tabel.ajax.reload(function(json) {
                datas = json.data
            })
        })
    });

    function prosesAjax() {
        var data = datas[id];
        var sumber_dana_id = $('#sumber_dana_id').val()
        var bansos_id = $('#bansos_id').val()
        var sumber_dana_lainnya = $('#sumber_dana_lainnya').val()
        var bansos_lainnya = $('#bansos_lainnya').val()
        var keterangan = $('#keterangan').val()
        $.ajax({
            url: "<?= base_url('admin/orangterlantar/proses/') ?>" + data.terlantar_id,
            method: "POST",
            data: {
                sumber_dana_id,
                bansos_id,
                sumber_dana_lainnya,
                bansos_lainnya,
                keterangan
            },
            statusCode: {
                400: function(data) {
                    toastr["error"](data.responseJSON)
                }
            },
            beforeSend: function() {
                toastr["info"]("Sedang memproses...")
            },
        }).done(function(data) {
            $(this).closest('.toast').remove();
            $('.batalProses').click()
            toastr["success"](data)
            tabel.ajax.reload(null, false)
            $('#sumber_dana_id').empty()
            $('#bansos_id').empty()
            $('.bansos_id').addClass("d-none")
            $('#sumber_dana_lainnya').empty()
            $('#bansos_lainnya').empty()
            $('#keterangan').val('')
        });
    }
</script>