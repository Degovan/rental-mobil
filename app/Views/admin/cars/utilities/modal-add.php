<!-- Modal -->
<div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModal3Label" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModal3Label">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="" method="POST" enctype="multipart/form-data" id="formAdd">
        <div class="form-group row">
          <label for="" class="col-md-2">Nama</label>
          <div class="col-md-10">
            <input type="text" class="form-control" name="title" id="title" value="">
          </div>
        </div>
        <div class="form-group row">
          <label for="" class="col-md-2">Photo</label>
          <div class="col-md-10">
            <input type="file" class="form-control" id="photo" value=""  accept="image/*">
          </div>
        </div>
        <div class="form-group row">
          <label for="" class="col-md-2">Harga</label>
          <div class="col-md-10">
            <input type="text" class="form-control" id="price" value="">
          </div>
        </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary save">Simpan</button>
      </div>
    </div>
  </div>
</div>