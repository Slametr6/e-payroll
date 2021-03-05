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
										<?= anchor(base_url('user/create'),'Create', 'class="btn btn-sm btn-primary"');?>
									</div>
									<div class="col-md-4 text-center">
										<div style="margin-top: 8px" id="message">
											<?= $this->session->userdata('message') <> '' ? $this->session->userdata('message') : '';?>
										</div>
									</div>
									<div class="col-md-1 text-right">
									</div>
									<div class="col-md-3 text-right">
										<form action="<?= base_url('pekerjaan/index'); ?>" class="form-inline" method="get">
											<div class="input-group">
												<input type="text" class="form-control" name="q" value="<?= $q;?>">
												<span class="input-group-btn">
													<?php 
														if ($q <> '')
														{
															?>
															<a href="<?= base_url('user');?>" class="btn btn-default">Reset</a>
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
											<th>Nama</th>
											<th>Username</th>
											<th>Action</th>
										</tr>
										<?php
										foreach ($user_data as $user) {
										?>
										<tr>
											<td width="80px"><?= ++$start;?></td>
											<td><?= $user->nama;?></td>
											<td><?= $user->username;?></td>
											<td style="text-align:center" width="200px"></td>
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
        