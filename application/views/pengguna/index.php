<!-- page start-->
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                             <h1>Pengguna Android</h1>
                        </header>
                        <div class="panel-body">
                            <?php echo anchor(base_url().'pengguna/create/','<button type="button" class="btn btn-primary">Tambah Pengguna Android</button>'); ?>
                            
                        </div>
                    </section>
                </div>
            </div>

              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <div class="panel-body">
                                <div class="adv-table">
                                     <table class="table table-striped table-advance table-hover" id="example">
                                            <thead>
                                            <tr>
                                                <th>id</th>
                                                <th>Nama</th>
                                                <th>Username</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                               
                                            
                                            <?php
                                            foreach ($penggunas->result() as $pengguna) { ?>
                                            <tr>
                                                <td><?php echo $pengguna->id; ?></td>
                                                <td><?php echo $pengguna->name; ?></td>
                                                <td><?php echo $pengguna->username; ?></td>
                                                <td>
                                                  
                                                <?php echo anchor(base_url().'pengguna/view/'.$pengguna->id,'<button class="btn btn-success btn-xs"><i class="icon-eye-open"></i></button>'); ?>

                                                <?php echo anchor(base_url().'pengguna/edit/'.$pengguna->id,'<button class="btn btn-primary btn-xs"><i class="icon-pencil"></i></button>'); ?>

                                                <?php echo anchor(base_url().'pengguna/delete/'.$pengguna->id,'<button class="btn btn-danger btn-xs"><i class="icon-trash "></i></button>'); ?>

                                                </td>
                                            </tr>
                                            <?php } ?>

                                            </tbody>
                                        </table>
                                    </div>
                          </div>
                      </section>
                  </div>
              </div>