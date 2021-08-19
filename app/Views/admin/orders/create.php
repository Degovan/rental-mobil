<?= $this->extend('layout/app') ?>

<?= $this->section('breadcrumb') ?>
<li class="breadcrumb-item"><a href="/">Home</a></li>
<li class="breadcrumb-item"><a href="/orders">Orders</a></li>
<li class="breadcrumb-item active" aria-current="page">Tambah</li>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Form</h5>
        <div class="row">
            <div class="col-md-6">
                <form action="<?= route_to('order') ?>" method="post">
                    <?= csrf_field() ?>
                    <div class="form-floating mb-3">
                        <input type="text" name="fullname" id="fullname" class="form-control <?= ($errors['fullname'] ?? null) ? 'is-invalid' : '' ?>">
                        <label for="fullname">Nama Lengkap</label>
                        <div class="invalid-feedback">
                            <?= $errors['fullname'] ?? '' ?>
                        </div>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="number" readonly name="registration_number" id="registration" class="form-control <?= ($errors['registration_number'] ?? null) ? 'is-invalid' : '' ?>">
                        <label for="registration">Nomor Induk</label>
                        <div class="invalid-feedback">
                            <?= $errors['registration_number'] ?? '' ?>
                        </div>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" readonly name="born_place" id="born_place" class="form-control <?= ($errors['born_place'] ?? null) ? 'is-invalid' : '' ?>">
                        <label for="born_place">Tempat Lahir</label>
                        <div class="invalid-feedback">
                            <?= $errors['born_place'] ?? '' ?>
                        </div>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="date" readonly name="born_date" id="born_date" class="form-control <?= ($errors['born_date'] ?? null) ? 'is-invalid' : '' ?>">
                        <label for="born_date">Tanggal Lahir</label>
                        <div class="invalid-feedback">
                            <?= $errors['born_date'] ?? '' ?>
                        </div>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" readonly name="domicile_block" id="domicile_block" class="form-control <?= ($errors['domicile_block'] ?? null) ? 'is-invalid' : '' ?>">
                        <label for="domicile_block">Blok Domisili</label>
                        <div class="invalid-feedback">
                            <?= $errors['domicile_block'] ?? '' ?>
                        </div>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" readonly name="educational_institute" id="educational_institute" class="form-control <?= ($errors['educational_institute'] ?? null) ? 'is-invalid' : '' ?>">
                        <label for="educational_institute">Lembaga Pendidikan</label>
                        <div class="invalid-feedback">
                            <?= $errors['educational_institute'] ?? '' ?>
                        </div>
                    </div>
                   
           
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Mobil</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                        <option>ELF</option>
                        <option>APV</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlSelect1">Harga Perjam</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    </select>
                </div>

                
                <div class="form-floating mb-3">
                    <input type="text" readonly name="educational_institute" id="educational_institute" class="form-control <?= ($errors['educational_institute'] ?? null) ? 'is-invalid' : '' ?>">
                    <label for="educational_institute">Nominal</label>
                    <div class="invalid-feedback">
                        <?= $errors['educational_institute'] ?? '' ?>
                    </div>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" readonly name="educational_institute" id="educational_institute" class="form-control <?= ($errors['educational_institute'] ?? null) ? 'is-invalid' : '' ?>">
                    <label for="educational_institute">Honor Sopir</label>
                    <div class="invalid-feedback">
                        <?= $errors['educational_institute'] ?? '' ?>
                    </div>
                </div>

                <h4>Total Harga: </h4>
                <p>Rp.40.000,00</p>
                
            </div>
            <div class="mb-3 d-flex justify-content-between">
                        <a href="<?= route_to('orders') ?>" class="btn btn-danger text-white"><i class="fa fa-arrow-left"></i> Kembali</a>
                        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save</button>
                    </div>
            </form>
            <!-- /form -->
        </div>
    </div>
</div>
<?= $this->endSection() ?>

<?= $this->section('javascript') ;?>
<script>
     $( function() {
    var availableTags = [
      "ActionScript",
      "AppleScript",
      "Asp",
      "BASIC",
      "C",
      "C++",
      "Clojure",
      "COBOL",
      "ColdFusion",
      "Erlang",
      "Fortran",
      "Groovy",
      "Haskell",
      "Java",
      "JavaScript",
      "Lisp",
      "Perl",
      "PHP",
      "Python",
      "Ruby",
      "Scala",
      "Scheme"
    ];
    $( "#fullname" ).autocomplete({
      source: availableTags
    });
  } );
  </script>
</script>
<?= $this->endSection() ;?>
