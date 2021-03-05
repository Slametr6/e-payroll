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
										<?= anchor(base_url('karyawan/create'),'Create', 'class="btn btn-sm btn-primary"'); ?>
									</div>
									<div class="col-md-4 text-center">
										<div style="margin-top: 8px" id="message">
											<?= $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
										</div>
									</div>
									<div class="col-md-1 text-right">
									</div>
									<div class="col-md-3 text-right">
										<form action="<?= base_url('karyawan/index'); ?>" class="form-inline" method="get">
											<div class="input-group">
												<input type="text" class="form-control" name="q" value="<?= $q; ?>">
												<span class="input-group-btn">
													<?php 
														if ($q <> '')
														{
															?>
															<a href="<?= base_url('karyawan'); ?>" class="btn btn-default">Reset</a>
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
											<th>Nik</th>
											<th>Username</th>
											<th>Password</th>
											<th>Nama</th>
											<th>Alamat</th>
											<th>Jenis Kelamin</th>
											<th>Agama</th>
											<th>Pendidikan</th>
											<th>Asal Sekolah</th>
											<th>Jabatan</th>
											<th>Action</th>
										</tr><?php

										if ($karyawan_data->num_rows() > 0) {

										foreach ($karyawan_data->result() as $karyawan)
										{
										?>
										<tr>
											<td width="80px"><?= ++$start;?></td>
											<td><?= $karyawan->nik;?></td>
											<td><?= $karyawan->username;?></td>
											<td><?= $karyawan->password;?></td>
											<td><?= $karyawan->nama;?></td>
											<td><?= $karyawan->alamat;?></td>
											<td><?= $karyawan->jenis_kelamin;?></td>
											<td><?= $karyawan->agama;?></td>
											<td><?= $karyawan->pendidikan;?></td>
											<td><?= $karyawan->asal_sekolah;?></td>
											<td><?= $karyawan->id_pekerjaan;?></td>
											<td style="text-align:center" width="200px">
												<?php  
												echo anchor(base_url('karyawan/update/'.$karyawan->id_karyawan),'<i class="fa fa-pencil-square-o"> Edit</i>'); 
												echo ' | '; 
												echo anchor(base_url('karyawan/delete/'.$karyawan->id_karyawan),'<i class="fa fa-trash"> Delete</i>','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
												?>
											</td>
										</tr>
										<?php }
										} else {
										?>
										<tr>
											<th colspan="12"><center>DATA TIDAK DI TEMUKAN</center></th>
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
        