<?= $this->extend('layout/app') ?>

<?= $this->section('breadcrumb') ?>
<li class="breadcrumb-item"><a href="/">Home</a></li>
<li class="breadcrumb-item active" aria-current="page">Santri</li>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-hover" id="santri-table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>No Induk</th>
                                <th>Nama Lengkap</th>
                                <th>Tempat Lahir</th>
                                <th>Tanggal Lahir</th>
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
    $(document).ready(function() {
        $('#santri-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: '/santri/datatable'
            },
            columns: [{
                    render: function(data, type, row, meta) {
                        return meta.row + meta.settings._iDisplayStart + 1;
                    }
                },
                {
                    data: 'registration_number',
                    name: 'No Induk'
                },
                {
                    data: 'fullname',
                    name: 'Nama Lengkap'
                },
                {
                    data: 'born_place',
                    name: 'Tempat Lahir'
                },
                {
                    data: 'born_date',
                    name: 'Tanggal Lahir'
                },
                {
                    data: 'action',
                    name: 'aksi'
                }
            ]
        });
    });
</script>
<?= $this->endSection() ?>
