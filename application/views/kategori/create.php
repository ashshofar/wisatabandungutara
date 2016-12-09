				<div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                             <h1>Tambah Kategori</h1>
                          </header>
                          <div class="panel-body">
                              <div class="form">
                                  <form class="cmxform form-horizontal tasi-form" method="post" action="<?php echo base_url().'/kategori/save' ?>">
                                      <div class="form-group ">
                                          <label for="kategori" class="control-label col-lg-2">Kategori</label>
                                          <div class="col-lg-10">
                                              <input class=" form-control" id="kategori" name="kategori" type="text" required />
                                          </div>
                                      </div>
                                     <div class="form-group ">
                                          <label for="deskripsi" class="control-label col-lg-2">Deskripsi</label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="deskripsi" name="deskripsi" type="text" required />
                                          </div>
                                      </div>
                                     
                                     <div class="form-group">
                                          <div class="col-lg-offset-2 col-lg-10">
                                          	<button class="btn btn-primary" type="submit">Simpan</button>
                                            <?php echo anchor(base_url().'kategori/','<button class="btn btn-default" type="button">Kembali</button>'); ?>
                                          </div>
                                      </div>
                                  </form>
                              </div>
                          </div>
                      </section>
                  </div>
              </div>