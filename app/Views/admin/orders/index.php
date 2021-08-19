<?= $this->extend('layout/app') ?>

<?= $this->section('breadcrumb') ?>
<li class="breadcrumb-item"><a href="/">Home</a></li>
<li class="breadcrumb-item active" aria-current="page">Order</li>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="row">
    <div class="col-md-10">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-end">
                    <a href="<?= route_to('order.create') ?>" class="btn btn-success mb-3 text-white">
                        <i class="fa fa-plus"></i> Tambah Data
                    </a>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped table-hover" id="santri-table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Santri</th>
                                <th>Mobil</th>
                                <th>Harga Sewa</th>
                                <th>Honor Sopir</th>
                                <th>Total</th>
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
                url: '/orders/datatable'
            },
            columns: [{
                    render: function(data, type, row, meta) {
                        return meta.row + meta.settings._iDisplayStart + 1;
                    }
                },
                {
                    data: 'santri',
                    name: 'Santri'
                },
                {
                    data: 'car',
                    name: 'Mobil'
                },
                {
                    data: 'price',
                    name: 'Harga Sewa'
                },
                {
                    data: 'honorer',
                    name: 'Honor Sopir'
                },
                {
                    data: 'total_price',
                    name: 'Total'
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
