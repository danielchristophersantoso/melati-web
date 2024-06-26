<div class="modal fade" id="alamatDetail" tabindex="-1"  role="dialog" aria-labelledby="modal1Label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Alamat Saya</h5>
                <button class="btn" data-dismiss="modal" aria-label="Close">
                    <img class="x_icon" src="{{asset('assets/cross.svg')}}">
                </button>
            </div>
            <div class="modal-body">
                @for ($i = 0; $i <10; $i++)
                <button class="no-bootstrap flex">
                  <div class="address-card">
                      <h6>Grace | (+62)123456789</h6>
                      <p>Jalan Pakuan No.3<br>
                      Sentul, Kabupaten Bogor<br>
                      Jawa Barat</p>
                  </div>
                </button>
                @endfor
            </div>
            <div class="modal-footer">
                <div class="tambah-alamat">
                    <button class="btn-add-popup" data-bs-toggle="modal" data-bs-target="#tambahAlamat">
                      <img class="add_icon" src="{{asset('assets/add.svg')}}">
                      Tambah Alamat
                    </button>
                </div>
                <button class=btn-submit-popup type="button" class="btn btn-submit" data-dismiss="modal" aria-label="Close">Pilih</button>
            </div>
        </div>
    </div>
</div>
