<?= $this->extend('layout/app') ?>

<?= $this->section('breadcrumb') ?>
<li class="breadcrumb-item"><a href="#">Home</a></li>
<li class="breadcrumb-item active" aria-current="page">Dashboard</li>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="row">
    <!-- Column -->
    <div class="col-sm-6">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Data Santri</h4>
                <div class="text-end">
                    <h2 class="font-light mb-0">
                         <?= $count_santri;?></h2>
                    <span class="text-muted">Total Santri</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Column -->
    <!-- Column -->
    <div class="col-sm-6">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Data Order</h4>
                <div class="text-end">
                    <h2 class="font-light mb-0">
                    <?= $count_order?>
                </h2>
                    <span class="text-muted">Total Order</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Column -->
</div>
<!-- ============================================================== -->
<!-- Sales chart -->
<!-- ============================================================== -->
<div class="row">
    <!-- column -->
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Data Order</h4>
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
                                <!-- <th>Aksi</th> -->
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- column -->
</div>
<!-- ============================================================== -->
<?= $this->endSection() ?>

<?= $this->section('javascript') ;?>
<!-- CODE HERE -->
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
                // {
                //     data: 'action',
                //     name: 'aksi'
                // }
            ]
        });
    });
</script>

<?= $this->endSection() ;?>

