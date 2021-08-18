<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah order</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="box-order-sewa">
       <form action="" method="POST">
        <div class="order-body">
            <label for="nama">Nama Penyewa</label>
            <br>
            <input type="text" placeholder="" name="" class="form-control" autocomplete>
            <br><br>
             <label for="nomor">Nomor Telepon</label>
            <br>
            <input type="text" placeholder="" name="" class="form-control" max="12" autocomplete>
            <br><br>
            <label for="nomor">Alamat</label>
            <br>
            <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
            <br><br>
            <label for="kategori_sewa">Kategori Sewa</label>
            <br>
            <select name="kategori_sewa" id="" class="form-control">
                <option value="SEWA MOBIL">SEWA MOBIL</option>
                <option value="HONOR SOPIR">HONOR SOPIR</option>
            </select>
            <br><br>
             <label for="kategori_mobil">Pilih Mobil</label>
            <br>
            <select name="kategori_mobil" id="" class="form-control">
                <option value="APV">APV</option>
                <option value="ELF">ELF</option>
            </select>
            <br><br>
             <label for="kategori_durasi">Durasi Sewa</label>
            <br>
            <select name="kategori_durasi" id="" class="form-control">
                <option value="3">3 Jam</option>
                <option value="6">6 Jam</option>
                <option value="12">12 Jam</option>
                <option value="15">15 Jam</option>
                <option value="18">18 Jam</option>
                <option value="21">21 Jam</option>
                <option value="24">24 Jam</option>
            </select>
            <br><br>
            <h2>Total harga : Rp.0</h2>
        </div>
       </form>
   </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>