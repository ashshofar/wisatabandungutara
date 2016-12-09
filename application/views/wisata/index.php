<!-- page start-->
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                             <h1>Wisata</h1>
                        </header>
                        <div class="panel-body">
                            <?php echo anchor(base_url().'wisata/create/','<button type="button" class="btn btn-primary">Tambah Wisata</button>'); ?>
                            
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
                                                <th>Kategori</th>
                                                <th>Nama</th>
                                                <th>Alamat</th>
                                                <th>Operasi</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                               
                                            
                                            <?php
                                            foreach ($wisatas->result() as $wisata) { ?>
                                            <tr>
                                                <td><?php echo $wisata->kategori; ?></td>
                                                <td><?php echo $wisata->nama; ?></td>
                                                <td><?php echo $wisata->alamat; ?></td>
                                                <td>
                                                  
                                                <?php echo anchor(base_url().'wisata/view/'.$wisata->id,'<button class="btn btn-success btn-xs"><i class="icon-eye-open"></i></button>'); ?>

                                                <?php echo anchor(base_url().'wisata/edit/'.$wisata->id,'<button class="btn btn-primary btn-xs"><i class="icon-pencil"></i></button>'); ?>

                                                <?php echo anchor(base_url().'wisata/delete/'.$wisata->id,'<button class="btn btn-danger btn-xs"><i class="icon-trash "></i></button>'); ?>

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