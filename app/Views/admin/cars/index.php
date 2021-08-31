<?= $this->extend('layout/app') ?>

<?= $this->section('breadcrumb') ?>
<li class="breadcrumb-item"><a href="/">Home</a></li>
<li class="breadcrumb-item active" aria-current="page">Mobil</li>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-end mb-4">
                    <a href="<?= route_to('car.create') ?>" class="btn btn-success text-white">
                        <i class="fas fa-plus"></i> Tambah Data
                    </a>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped table-hover" id="cars-table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>

<?= $this->section('javascript') ?>
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
<script>
    $('#cars-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: {
            url: '<?= route_to('car.datatable') ?>'
        },
        columns: [{
            render: function(data, type, row, meta) {
                return meta.row + meta.settings._iDisplayStart + 1;
            }
        }, {
            data: 'name',
            name: 'name'
        }, {
            data: 'action',
            name: 'action',
            orderable: false
        }]
    });
</script>
<?= $this->endSection() ?>
