
   <?= $this->extend('layout/app') ?>
   
   <?= $this->section('content')?>
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-md-6 col-8 align-self-center">
                        <h3 class="page-title mb-0 p-0"><?= $thumb; ?></h3>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Mobil</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="col-md-6 col-4 align-self-center">
                        <div class="text-end upgrade-btn">
                            <a href="javascript:void(0)"
                                class="btn btn-success d-none d-md-inline-block text-white" data-toggle="modal" data-target="#exampleModal3">Tambah</a>
                        </div>
                        <!-- pop up -->

                        <?= $this->include('admin/cars/utilities/modal-add') ;?>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                            <table id="example" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <td>No.</td>
                                        <td>Nama.</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1.</td>
                                        <td>Dafrin</td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td>No.</td>
                                        <td>Nama.</td>
                                    </tr>
                                </tfoot>
                            </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Content -->
                <!-- ============================================================== -->
            </div>
        </div>

<!-- Scrtips Modal -->
<script>
    
</script>
            <?= $this->endSection() ?>

