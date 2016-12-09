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
                                          <label for="firstname" class="control-label col-lg-2">Kategori</label>
                                          <label for="firstname" class="control-label col-lg-2"><?php echo $data->kategori ?></label>
                                      </div>
                                      <div class="form-group ">
                                          <label for="lastname" class="control-label col-lg-2">Deskripsi</label>
                                          <label for="lastname" class="control-label col-lg-2"><?php echo $data->deskripsi ?></label>
                                      </div>
                                     <div class="form-group">
                                          <div class="col-lg-offset-2 col-lg-10">
                                          	<?php echo anchor(base_url().'kategori/','<button class="btn btn-default" type="button">Kembali</button>'); ?>
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