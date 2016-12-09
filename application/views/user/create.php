				<div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                             <h1>Tambah Pengguna</h1>
                          </header>
                          <div class="panel-body">
                              <div class="form">
                                  <form class="cmxform form-horizontal tasi-form" method="post" action="<?php echo base_url().'/user/save' ?>">
                                      <div class="form-group ">
                                          <label for="firstname" class="control-label col-lg-2">NIK</label>
                                          <div class="col-lg-10">
                                              <input class=" form-control" id="nik" name="nik" type="text" required />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="lastname" class="control-label col-lg-2">Nama</label>
                                          <div class="col-lg-10">
                                              <input class=" form-control" id="nama" name="nama" type="text" required />
                                          </div>
                                      </div>
                                     <div class="form-group ">
                                          <label for="password" class="control-label col-lg-2">Tempat Lahir</label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="tempat_lahir" name="tempat_lahir" type="text" required />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="password" class="control-label col-lg-2">Tanggal Lahir</label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="tanggal_lahir" name="tanggal_lahir" type="text" required/>
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="text" class="control-label col-lg-2">Alamat</label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="alamat" name="alamat" type="text" required/>
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="telepon" class="control-label col-lg-2">Telepon</label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="telp" name="telp" type="text" required />
                                          </div>
                                      </div>
                                      
                                      <div class="form-group">
                                          <div class="col-lg-offset-2 col-lg-10">
                                          	<button class="btn btn-primary" type="submit">Simpan</button>
                                            <?php echo anchor(base_url().'user/','<button class="btn btn-default" type="button">Kembali</button>'); ?>
                                          </div>
                                      </div>
                                  </form>
                              </div>
                          </div>
                      </section>
                  </div>
              </div>