        <!-- page title area end -->
        <div class="main-content-inner">
            <div class="container">
                <div class="row">
				<!-- table light start -->
					<div class="col-lg-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Data Karyawan <?= $query->nama; ?></h4>
                                <div class="single-table">
                                    <div class="table-responsive">
                                        <table class="table">
											<tr>
												<th>Nik</th>
												<th>:</th>
												<th><?= $query->nik; ?></th>
											</tr>
											<tr>
												<th>Nama Lengkap</th>
												<th>:</th>
												<th><?= $query->nama; ?></th>
											</tr>
											<tr>
												<th>Username</th>
												<th>:</th>
												<th><?= $query->username; ?></th>
											</tr>
											<tr>
												<th>Alamat</th>
												<th>:</th>
												<th><?= $query->alamat; ?></th>
											</tr>
											<tr>
												<th>Jenis Kelamin</th>
												<th>:</th>
												<th><?= $query->jenis_kelamin; ?></th>
											</tr>
											<tr>
												<th>Agama</th>
												<th>:</th>
												<th><?= $query->agama; ?></th>
											</tr>
											<tr>
												<th>Pendidikan</th>
												<th>:</th>
												<th><?= $query->pendidikan; ?></th>
											</tr>
											<tr>
												<th>Asal Sekolah</th>
												<th>:</th>
												<th><?= $query->asal_sekolah; ?></th>
											</tr>
											<tr>
												<th>Jabatan</th>
												<th>:</th>
												<th><?= $query->pekerjaan; ?></th>
											</tr>
											<tr>
												<td></td>
												<td></td>
												<td>
													<a href="<?= base_url();?>app/profiluser/<?= $this->session->userdata('id_user'); ?>">
														<button class="btn btn-primary">Ubah Profil</button>
													</a>
													<a href="<?= base_url();?>app/ubahpass/<?= $this->session->userdata('id_user'); ?>">
														<button class="btn btn-primary">Ubah Password</button>
													</a>
												</td>
											</tr>
                                        </table>
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
        <!-- footer area start-->
        