<!-- page start-->
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                             <h1>Pengguna</h1>
                        </header>
                        <div class="panel-body">
                            <?php echo anchor(base_url().'user/create/','<button type="button" class="btn btn-primary">Tambah Pengguna</button>'); ?>
                            
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
                                                <th>NIK</th>
                                                <th>Nama</th>
                                                <th>Tanggal Lahir</th>
                                                <th>Tempat Lahir</th>
                                                <th>Alamat</th>
                                                <th>Telepon</th>
                                                <th>Operasi</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                               
                                            
                                            <?php
                                            foreach ($users->result() as $user) { ?>
                                            <tr>
                                                <td><?php echo $user->nik; ?></td>
                                                <td><?php echo $user->nama; ?></td>
                                                <td><?php echo $user->tempat_lahir; ?></td>
                                                <td><?php echo $user->tanggal_lahir; ?></td>
                                                <td><?php echo $user->alamat ?></td>
                                                <td><?php echo $user->telp ?></td>
                                                </td>
                                                <td>
                                                  
                                                <?php echo anchor(base_url().'user/view/'.$user->nik,'<button class="btn btn-success btn-xs"><i class="icon-eye-open"></i></button>'); ?>

                                                <?php echo anchor(base_url().'user/edit/'.$user->nik,'<button class="btn btn-primary btn-xs"><i class="icon-pencil"></i></button>'); ?>

                                                <?php echo anchor(base_url().'user/delete/'.$user->nik,'<button class="btn btn-danger btn-xs"><i class="icon-trash "></i></button>'); ?>

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