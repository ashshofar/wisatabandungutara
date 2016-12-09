<?php echo $map['js']; ?>
				<div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                             <h1>Detail Wisata</h1>
                          </header>
                          <div class="panel-body">
                              <div class="form">
                              <?php foreach ($data_edit as $data) { ?>
                                  <form class="cmxform form-horizontal tasi-form">
                                      <div class="form-group ">
                                          <label for="firstname" class="control-label col-lg-2">Nama</label>
                                          <label for="firstname" class="control-label col-lg-2"><?php echo $data->nama ?></label>
                                      </div>
                                      <div class="form-group ">
                                          <label for="firstname" class="control-label col-lg-2">Kategori</label>
                                          <label for="firstname" class="control-label col-lg-2"><?php echo $data->kategori ?></label>
                                      </div>
                                      <div class="form-group ">
                                          <label for="firstname" class="control-label col-lg-2">Alamat</label>
                                          <label for="firstname" class="control-label col-lg-2"><?php echo $data->alamat ?></label>
                                      </div>
                                      <div class="form-group ">
                                          <label for="firstname" class="control-label col-lg-2">Latitude</label>
                                          <label for="firstname" class="control-label col-lg-2"><?php echo $data->lat ?></label>
                                      </div>
                                      <div class="form-group ">
                                          <label for="firstname" class="control-label col-lg-2">Longitude</label>
                                          <label for="firstname" class="control-label col-lg-2"><?php echo $data->long ?></label>
                                      </div>
                                      <div class="form-group ">
                                          <label for="firstname" class="control-label col-lg-2">Foto</label>
                                          <label for="firstname" class="control-label col-lg-2"><?php echo $data->foto ?></label>
                                      </div>
                                      <div class="form-group ">
                                          <label for="firstname" class="control-label col-lg-2">Telepon</label>
                                          <label for="firstname" class="control-label col-lg-2"><?php echo $data->telepon ?></label>
                                      </div>
                                      <div class="form-group ">
                                          <label for="firstname" class="control-label col-lg-2">Harga</label>
                                          <label for="firstname" class="control-label col-lg-2"><?php echo $data->harga ?></label>
                                      </div>
                                      <div class="form-group ">
                                          <label for="firstname" class="control-label col-lg-2">Buka</label>
                                          <label for="firstname" class="control-label col-lg-2"><?php echo $data->buka ?></label>
                                      </div>
                                      <div class="form-group ">
                                          <label for="firstname" class="control-label col-lg-2">Tutup</label>
                                          <label for="firstname" class="control-label col-lg-2"><?php echo $data->tutup ?></label>
                                      </div>
                                      
                                     <div class="form-group">
                                          <div class="col-lg-offset-2 col-lg-10">
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
              </div>