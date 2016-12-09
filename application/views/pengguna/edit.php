				<div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                             <h1>Edit Pengguna Android</h1>
                          </header>
                          <div class="panel-body">
                              <div class="form">
                              <?php foreach ($data_edit as $data) { ?>
                                  <form class="cmxform form-horizontal tasi-form" method="post" action="<?php echo base_url().'/pengguna/update' ?>">
                                     <div class="form-group ">
                                          <label for="kategori" class="control-label col-lg-2">Id</label>
                                          <div class="col-lg-10">
                                              <input class=" form-control" id="id" name="id" type="text" readonly value="<?php echo $data->id ?>" />
                                          </div>
                                      </div>
                                      <input type="hidden" value="<?php echo $data->id?>">
                                      <div class="form-group ">
                                          <label for="kategori" class="control-label col-lg-2">Nama</label>
                                          <div class="col-lg-10">
                                              <input class=" form-control" id="name" name="name" type="text" required value="<?php echo $data->name ?>"/>
                                          </div>
                                      </div>
                                     <div class="form-group ">
                                          <label for="deskripsi" class="control-label col-lg-2">Username</label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="username" name="username" type="text" required value="<?php echo $data->username ?>"/>
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="deskripsi" class="control-label col-lg-2">Password</label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="password" name="password" type="text" required value="<?php echo $data->password ?>"/>
                                          </div>
                                      </div>
                                      
                                      <div class="form-group">
                                          <div class="col-lg-offset-2 col-lg-10">
                                          	<button class="btn btn-primary" type="submit">Simpan</button>
                                            <?php echo anchor(base_url().'pengguna/','<button class="btn btn-default" type="button">Kembali</button>'); ?>
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