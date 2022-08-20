<?= $this->extend('templates/index');?>

<?= $this->section('content');?>
<div class="container">
    <h1>Pengajuan Program Kerja</h1>

    <div class="col-xl-12 col-lg-7">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Form Pengajuan</h6>
                                </div>
                                <div class="card-body">
                                <form>
                                <div class="col-xl-12 col-lg-7">
              
                    <div class="form-group">
                      <label for="exampleFormControlInput1">Judul Kegiatan</label>
                      <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlInput1">Tema Kegiatan</label>
                      <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlTextarea1">Dasar Kegiatan</label>
                      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                    <div class="form-group">
                      <label for="exampleFormControlTextarea1">Tujuan Kegiatan</label>
                      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>

                    <div class="form-group">
                      <label for="exampleFormControlInput1">Waktu Pelaksanaan</label>
                      <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                    </div>

                    <div class="form-group">
                      <label for="exampleFormControlInput1">Tempat Pelaksanaan</label>
                      <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                    </div>

                    <div class="form-group">
                      <label for="exampleFormControlInput1">Peserta Kegiatan</label>
                      <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                    </div>

                    <div class="form-group">
                      <label for="exampleFormControlTextarea1">Susunan Acara</label>
                      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>

                    <div class="form-group">
                      <label for="exampleFormControlInput1">Estimasi Dana</label>
                      <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                    </div>

                    <div class="form-group">
                      <label for="exampleFormControlTextarea1">Penutup</label>
                      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>



                    
              </div>
              </div>
      <div class="my-2"></div>
      <a href="home" class="btn btn-success btn-icon-split float-right">
                                        <span class="icon text-white-50">
                                            <!-- <i class="fas fa-check"></i> -->
                                        </span>
                                        <span class="text">submit</span>
                                    </a>
      </div>

</div>
<?= $this->endsection();?>