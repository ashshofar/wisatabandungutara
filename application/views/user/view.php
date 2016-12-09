				<div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                             <h1>Detail Pengguna</h1>
                          </header>
                          <div class="panel-body">
                              <div class="form">
                              <?php foreach ($data_edit as $data) { ?>
                                  <form class="cmxform form-horizontal tasi-form">
                                      <div class="form-group ">
                                          <label for="firstname" class="control-label col-lg-2">NIK</label>
                                          <label for="firstname" class="control-label col-lg-2"><?php echo $data->nik ?></label>
                                      </div>
                                      <div class="form-group ">
                                          <label for="lastname" class="control-label col-lg-2">Nama</label>
                                          <label for="lastname" class="control-label col-lg-2"><?php echo $data->nama ?></label>
                                      </div>
                                     <div class="form-group ">
                                          <label for="password" class="control-label col-lg-2">Tempat Lahir</label>
                                          <label for="password" class="control-label col-lg-2"><?php echo $data->tempat_lahir ?></label>
                                      </div>
                                      <div class="form-group ">
                                          <label for="password" class="control-label col-lg-2">Tanggal Lahir</label>
                                          <label for="password" class="control-label col-lg-2"><?php echo $data->tanggal_lahir ?></label>
                                      </div>
                                      <div class="form-group ">
                                          <label for="text" class="control-label col-lg-2">Alamat</label>
                                          <label for="text" class="control-label col-lg-2"><?php echo $data->alamat ?></label>
                                      </div>
                                      <div class="form-group ">
                                          <label for="telepon" class="control-label col-lg-2">Telepon</label>
                                          <label for="telepon" class="control-label col-lg-2"><?php echo $data->telp ?></label>
                                      </div>
                                      
                                      <div class="form-group">
                                          <div class="col-lg-offset-2 col-lg-10">
                                          	<?php echo anchor(base_url().'user/','<button class="btn btn-default" type="button">Kembali</button>'); ?>
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