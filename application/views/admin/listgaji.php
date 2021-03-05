        <!-- page title area end -->
        <div class="main-content-inner">
            <div class="container">
                <div class="row">
				<!-- table light start -->
					<div class="col-lg-12 mt-5">
                        <div class="card">
                            <div class="card-body">
								<h4><?= $judul;?></h4>
								<div class="row" style="margin-bottom: 10px">
									<div class="col-md-4 mt-3">
										<?= anchor(base_url('gaji/create'),'Create', 'class="btn btn-sm btn-primary"');?>
									</div>
									<div class="col-md-4 text-center">
										<div style="margin-top: 8px" id="message">
											<?= $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
										</div>
									</div>
									<div class="col-md-1 text-right">
									</div>
									<div class="col-md-3 text-right">
										<form action="<?= base_url('gaji/index');?>" class="form-inline" method="get">
											<div class="input-group">
												<input type="text" class="form-control" name="q" value="<?= $q;?>">
												<span class="input-group-btn">
													<?php 
														if ($q <> '')
														{
															?>
															<a href="<?= base_url('gaji');?>" class="btn btn-default">Reset</a>
															<?php
														}
													?>
												<button class="btn btn-primary" type="submit">Search</button>
												</span>
											</div>
										</form>
									</div>
								</div>
                                <div class="single-table">
                                    <div class="table-responsive">
                                        <table class="table">
										<tr>
											<th>No</th>
											<th>Tanggal</th>
											<th>Nik</th>
											<th>Action</th>
										</tr><?php
										foreach ($gaji_data as $gaji)
										{
										?>
										<tr>
											<td width="80px"><?= ++$start;?></td>
											<td><?= $gaji->tgl;?></td>
											<td><?= $gaji->nik;?></td>
											<td style="text-align:center" width="200px">
												<?php  
												echo anchor(base_url('app/slip_gaji/'.$gaji->nik.'/'.$gaji->tgl),'<i class="fa fa-print"> Cetak</i>'); 
												echo ' | '; 
												echo anchor(base_url('gaji/update/'.$gaji->id_gaji),'<i class="fa fa-pencil-square-o"> Edit</i>'); 
												echo ' | '; 
												echo anchor(base_url('gaji/delete/'.$gaji->id_gaji),'<i class="fa fa-trash"> Delete</i>','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
												?>
											</td>
										</tr>
										<?php } ?>
                                        </table>
										<div class="row">
											<div class="col-md-6">
												<a href="#" class="btn btn-sm btn-primary">Total Record : <?= $total_rows;?></a>
											</div>
											<div class="col-md-6 text-right">
												<?= $pagination;?>
											</div>
										</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- table light end -->
                </div>
            </div>
        </div>
        <!-- main content area end -->
        