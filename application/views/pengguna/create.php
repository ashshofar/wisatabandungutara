				<div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                             <h1>Tambah Pengguna Android</h1>
                          </header>
                          <div class="panel-body">
                              <div class="form">
                                  <form class="cmxform form-horizontal tasi-form" method="post" action="<?php echo base_url().'/pengguna/save' ?>">
                                      <div class="form-group ">
                                          <label for="kategori" class="control-label col-lg-2">Nama</label>
                                          <div class="col-lg-10">
                                              <input class=" form-control" id="name" name="name" type="text" required />
                                          </div>
                                      </div>
                                     <div class="form-group ">
                                          <label for="deskripsi" class="control-label col-lg-2">Username</label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="username" name="username" type="text" required />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="deskripsi" class="control-label col-lg-2">Password</label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="password" name="password" type="text" required />
                                          </div>
                                      </div>
                                     
                                     <div class="form-group">
                                          <div class="col-lg-offset-2 col-lg-10">
                                          	<button class="btn btn-primary" type="submit">Simpan</button>
                                            <?php echo anchor(base_url().'pengguna/','<button class="btn btn-default" type="button">Kembali</button>'); ?>
                                          </div>
                                      </div>
                                  </form>
                              </div>
                          </div>
                      </section>
                  </div>
              </div>