<?php echo $map['js']; ?>
<script type="text/javascript">
    function setText(newLat, newLng)
    {
      document.getElementById('lat').value = newLat;
      document.getElementById('long').value = newLng;
    }
</script> 
        <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                             <h1>Tambah Wisata</h1>
                          </header>
                          <div class="panel-body">
                              <div class="stepy-tab">
                                  <ul id="default-titles" class="stepy-titles clearfix">
                                      <li id="default-title-0" class="current-step">
                                          <div>Step 1</div>
                                      </li>
                                      <li id="default-title-1" class="">
                                          <div>Step 2</div>
                                      </li>
                                  </ul>
                              </div>
                              <form class="form-horizontal" id="default" method="post" action="<?php echo base_url().'/wisata/save' ?>">
                                  <fieldset title="Step1" class="step" id="default-step-0">
                                      <legend> </legend>
                                      <div class="form-group ">
                                          <label for="kategori" class="control-label col-lg-2">Nama</label>
                                          <div class="col-lg-10">
                                              <input class=" form-control" id="nama" name="nama" type="text" required />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="kategori" class="control-label col-lg-2">Kategori</label>
                                          <div class="col-lg-10">
                                               <select class="form-control" id="kategori" name="kategori">
                                                  <?php 

                                                  foreach($kategoris as $row)
                                                  { 
                                                    echo '<option value="'.$row->kategori.'">'.$row->kategori.'</option>';
                                                  }
                                                  ?>
                                                  </select>
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="kategori" class="control-label col-lg-2">Foto</label>
                                          <div class="col-lg-10">
                                              <input class=" form-control" id="foto" name="foto" type="text" required />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="kategori" class="control-label col-lg-2">Telepon</label>
                                          <div class="col-lg-10">
                                              <input class=" form-control" id="telepon" name="telepon" type="text" required />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="kategori" class="control-label col-lg-2">Harga Tiket</label>
                                          <div class="col-lg-10">
                                              <input class=" form-control" id="harga" name="harga" type="text" required />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="kategori" class="control-label col-lg-2">Buka</label>
                                          <div class="col-lg-10">
                                              <input class=" form-control" id="buka" name="buka" type="text" required />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="kategori" class="control-label col-lg-2">Tutup</label>
                                          <div class="col-lg-10">
                                              <input class=" form-control" id="tutup" name="tutup" type="text" required />
                                          </div>
                                      </div>

                                  </fieldset>
                                  <fieldset title="Step 2" class="step" id="default-step-1" >
                                      <legend> </legend>
                                      <div class="form-group ">
                                          <label for="kategori" class="control-label col-lg-2">Alamat</label>
                                          <div class="col-lg-10">
                                              <input class=" form-control" id="alamat" name="alamat" type="text" required />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="kategori" class="control-label col-lg-2">Latitude</label>
                                          <div class="col-lg-10">
                                              <input class=" form-control" id="lat" name="lat" type="text" required />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="kategori" class="control-label col-lg-2">Longitude</label>
                                          <div class="col-lg-10">
                                              <input class=" form-control" id="long" name="long" type="text" required />
                                          </div>
                                      </div>
                                      
                                  </fieldset>
                                  <input type="submit" class="finish btn btn-danger" value="Finish"/>
                              </form>
                          </div>

                        </section>
                  </div>

                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                             <h1>Peta Wisata</h1>
                          </header>
                          <div class="panel-body">
                              <?php echo $map['html']; ?>
                          </div>
                      </section>
                  </div>
              </div>
              
              