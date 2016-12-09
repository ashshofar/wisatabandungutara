<!-- page start-->
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                             <h1>Kategori</h1>
                        </header>
                        <div class="panel-body">
                            <?php echo anchor(base_url().'kategori/create/','<button type="button" class="btn btn-primary">Tambah Kategori</button>'); ?>
                            
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
                                                <th>Deskripsi</th>
                                                <th>Operasi</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                               
                                            
                                            <?php
                                            foreach ($kategoris->result() as $kategori) { ?>
                                            <tr>
                                                <td><?php echo $kategori->kategori; ?></td>
                                                <td><?php echo $kategori->deskripsi; ?></td>
                                                <td>
                                                  
                                                <?php echo anchor(base_url().'kategori/view/'.$kategori->id,'<button class="btn btn-success btn-xs"><i class="icon-eye-open"></i></button>'); ?>

                                                <?php echo anchor(base_url().'kategori/edit/'.$kategori->id,'<button class="btn btn-primary btn-xs"><i class="icon-pencil"></i></button>'); ?>

                                                <?php echo anchor(base_url().'kategori/delete/'.$kategori->id,'<button class="btn btn-danger btn-xs"><i class="icon-trash "></i></button>'); ?>

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