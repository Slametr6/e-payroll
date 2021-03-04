<div class="main-content-inner">
			<div class="container">	
                <div class="row">
                    <div class="col-lg-12 col-ml-12">
                        <div class="row">
                            <!-- basic form start -->
                            <div class="col-12 mt-5">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title"><?= $judul;?></h4>
                                        <form action="<?= $action;?>" method="post">
										<div class="form-row">
											<div class="form-group col-md-6">
												<label for="varchar">Nik <?= form_error('nik') ?></label>
												<input type="text" class="form-control" name="nik" id="nik" placeholder="Nik" value="<?= $nik; ?>" />
											</div>
											<div class="form-group col-md-6">
												<label for="varchar">Username <?= form_error('username') ?></label>
												<input type="text" class="form-control" name="username" id="username" placeholder="Username" value="<?= $username; ?>" />
											</div>
										</div>

										<div class="form-row">
											<div class="form-group col-md-6">
												<label for="varchar">Password <?= form_error('password') ?></label>
												<input type="text" class="form-control" name="password" id="password" placeholder="Password" value="<?= $password; ?>" />
											</div>
											<div class="form-group col-md-6">
												<label for="varchar">Nama <?= form_error('nama') ?></label>
												<input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" value="<?= $nama; ?>" />
											</div>
										</div>

										<div class="form-row">
											<div class="form-group col-md-6">
												<label for="alamat">Alamat <?= form_error('alamat') ?></label>
												<textarea class="form-control" rows="2" name="alamat" id="alamat" placeholder="Alamat"><?= $alamat; ?></textarea>
											</div>
											<div class="form-group col-md-6">
												<label for="varchar">Jenis Kelamin <?= form_error('jenis_kelamin') ?></label>
												<select name="jenis_kelamin" class="form-control">
													<option value="">--Pilih Jenis Kelamin--</option>
													<option value="Laki-laki">Laki-laki</option>
													<option value="Perempuan">Perempuan</option>
												</select>
											</div>
										</div>

										<div class="form-row">
											<div class="form-group col-md-6">
												<label>Agama</label>
												<select name="agama" class="form-control">
													<option value="<?= $agama ?>"><?= $agama ?></option>
													<option value="Islam">Islam</option>
													<option value="Kristen">Kristen</option>
													<option value="Hindu">Hindu</option>
													<option value="Budha">Budha</option>
												</select>
											</div>
											<div class="form-grou col-md-6">
												<label>Pendidikan</label>
												<input type="text" name="pendidikan" class="form-control" value="<?= $pendidikan ?>">
											</div>
										</div>

										<div class="form-row">
											<div class="form-group col-md-6">
												<label>Asal Sekolah</label>
												<input type="text" name="asal_sekolah" class="form-control" value="<?= $asal_sekolah ?>">
											</div>
											<div class="form-group col-md-6">
												<label for="int">Jabatan <?= form_error('id_pekerjaan') ?></label>
												<select name="id_pekerjaan" class="form-control">
													<option value="<?= $id_pekerjaan ?>"><?= $id_pekerjaan ?></option>
													<?php 
													$sql = $this->db->get('pekerjaan');
													foreach ($sql->result() as $row) {
														?>
													<option value="<?= $row->id_pekerjaan; ?>"><?= $row->pekerjaan; ?></option>
													<?php } ?>
												</select>
											</div>
										</div>
											<input type="hidden" name="id_karyawan" value="<?= $id_karyawan; ?>" /> 										
                                            <button type="submit" class="btn btn-primary"><?= $button;?></button>
											<a href="<?= site_url('karyawan') ?>" class="btn btn-warning">Cancel</a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- basic form end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- main content area end -->
