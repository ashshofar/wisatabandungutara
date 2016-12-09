				<div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                             <h1>Edit Wisata</h1>
                          </header>
                          <div class="panel-body">
                              <div class="form">
                              <?php foreach ($data_edit as $data) { ?>
                                  <form class="cmxform form-horizontal tasi-form" method="post" action="<?php echo base_url().'/wisata/update' ?>">
                                     <div class="form-group ">
                                          <label for="kategori" class="control-label col-lg-2">Id</label>
                                          <div class="col-lg-10">
                                              <input class=" form-control" id="id" name="id" type="text" readonly value="<?php echo $data->id ?>" />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="kategori" class="control-label col-lg-2">Nama</label>
                                          <div class="col-lg-10">
                                              <input class=" form-control" id="nama" name="nama" type="text" required value="<?php echo $data->nama ?>"/>
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="kategori" class="control-label col-lg-2">Kategori</label>
                                          <div class="col-lg-10">
                                              <input class=" form-control" id="kategori" name="kategori" type="text" required value="<?php echo $data->kategori ?>"/>
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="kategori" class="control-label col-lg-2">Alamat</label>
                                          <div class="col-lg-10">
                                              <input class=" form-control" id="alamat" name="alamat" type="text" required value="<?php echo $data->alamat ?>"/>
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="kategori" class="control-label col-lg-2">Latitude</label>
                                          <div class="col-lg-10">
                                              <input class=" form-control" id="lat" name="lat" type="text" required value="<?php echo $data->lat ?>"/>
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="kategori" class="control-label col-lg-2">Longitude</label>
                                          <div class="col-lg-10">
                                              <input class=" form-control" id="long" name="long" type="text" required value="<?php echo $data->long ?>"/>
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="kategori" class="control-label col-lg-2">Foto</label>
                                          <div class="col-lg-10">
                                              <input class=" form-control" id="foto" name="foto" type="text" required value="<?php echo $data->foto ?>"/>
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="kategori" class="control-label col-lg-2">Telepon</label>
                                          <div class="col-lg-10">
                                              <input class=" form-control" id="telepon" name="telepon" type="text" required value="<?php echo $data->telepon ?>"/>
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="kategori" class="control-label col-lg-2">Harga Tiket</label>
                                          <div class="col-lg-10">
                                              <input class=" form-control" id="harga" name="harga" type="text" required value="<?php echo $data->harga ?>"/>
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="kategori" class="control-label col-lg-2">Buka</label>
                                          <div class="col-lg-10">
                                              <input class=" form-control" id="buka" name="buka" type="text" required value="<?php echo $data->buka ?>"/>
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="kategori" class="control-label col-lg-2">Tutup</label>
                                          <div class="col-lg-10">
                                              <input class=" form-control" id="tutup" name="tutup" type="text" required value="<?php echo $data->tutup ?>" />
                                          </div>
                                      </div>
                                      
                                      <div class="form-group">
                                          <div class="col-lg-offset-2 col-lg-10">
                                          	<button class="btn btn-primary" type="submit">Simpan</button>
                                            <?php echo anchor(base_url().'wisata/','<button class="btn btn-default" type="button">Kembali</button>'); ?>
                                          </div>
                                      </div>
                                  </form>
                                  <?php
                                    }
                                  ?>
                              </div>
                          </div>
                      </section>
                  </div>
              </div>