
   <?= $this->extend('layout/app') ?>
   
   <?= $this->section('breadcrumb') ?>
<li class="breadcrumb-item"><a href="/">Home</a></li>
<li class="breadcrumb-item active" aria-current="page">Car</li>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="row">
    <div class="col-md-5">
    <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#exampleModal3">
        Tambah
    </button>
    <!-- modal -->
    <?= $this->include('admin/cars/utilities/modal-add') ;?>
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">

                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>

<?= $this->section('javascript') ;?>
<!-- CODE HERE -->
    <script>
        $('.save').on('click', function(e){
            e.preventDefault();
            var form_data = new FormData($('#formAdd')[0]);

            $.ajax({
                 method: "POST",
                 url: "<?php echo base_url();?>/CarController/store",
                 dataType: 'json',
                 success: function(ress){
                     console.log(res.success);
                 }
            });
        });

        // validation photo
        $('#photo').on('change', function(){
            var numb = $(this)[0].files[0].size / 1024 /1024;
            numb = numb.toFixed(2);
            if (numb > 2) {
                alert('Ukuran file maksimal 2MB. FIle anda berukuran: ' + numb + ' MB');
                event.target.value = '';
            }
        });
    </script>
<?= $this->endSection() ;?>


