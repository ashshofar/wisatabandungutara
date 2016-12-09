				<div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                             <h1>Detail Pengguna Android</h1>
                          </header>
                          <div class="panel-body">
                              <div class="form">
                              <?php foreach ($data_edit as $data) { ?>
                                  <form class="cmxform form-horizontal tasi-form">
                                      <div class="form-group ">
                                          <label for="firstname" class="control-label col-lg-2">Nama</label>
                                          <label for="firstname" class="control-label col-lg-2"><?php echo $data->name ?></label>
                                      </div>
                                      <div class="form-group ">
                                          <label for="lastname" class="control-label col-lg-2">Username</label>
                                          <label for="lastname" class="control-label col-lg-2"><?php echo $data->username ?></label>
                                      </div>
                                     <div class="form-group">
                                          <div class="col-lg-offset-2 col-lg-10">
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