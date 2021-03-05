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
                                        <form action="" method="post">
											<div class="form-group">
												<label>Nik</label>
												<input type="text" name="nik" class="form-control" value="<?= $query->nik;?>">
											</div>
											<div class="form-group">
												<label>Username</label>
												<input type="text" name="username" class="form-control" value="<?= $query->username;?>">
											</div>
											<div class="form-group">
												<label>Nama</label>
												<input type="text" name="nama" class="form-control" value="<?= $query->nama;?>">
											</div>
											<div class="form-group">
												<label>Alamat</label>
												<textarea name="alamat" class="form-control" rows="3"><?= $query->alamat;?></textarea>
											</div>
											<div class="form-group">
												<label>Jenis Kelamin</label>
												<select name="jenis_kelamin" class="form-control">
													<option value="<?= $query->jenis_kelamin;?>"><?= $query->jenis_kelamin;?></option>
													<option value="Laki-laki">Laki-laki</option>
													<option value="Perempuan">Perempuan</option>
												</select>
											</div>
											<div class="form-group">
												<label>Agama</label>
												<select name="agama" class="form-control">
													<option value="<?= $query->agama;?>"><?= $query->agama;?></option>
													<option value="Islam">Islam</option>
													<option value="Kristen">Kristen</option>
													<option value="Hindu">Hindu</option>
													<option value="Budha">Budha</option>
												</select>
											</div>
											<div class="form-group">
												<label>Pendidikan</label>
												<input type="text" name="pendidikan" class="form-control" value="<?= $query->pendidikan;?>">
											</div>
											<div class="form-group">
												<label>Asal Sekolah</label>
												<input type="text" name="asal_sekolah" class="form-control" value="<?= $query->asal_sekolah;?>">
											</div>
											<div class="form-group">
												<label>Jabatan</label>
												<select name="id_pekerjaan" class="form-control">
													<option value="<?= $query->id_pekerjaan ?>"><?= $query->pekerjaan;?></option>
													<?php 
													$sql = $this->db->get('pekerjaan');
													foreach ($sql->result() as $row) {
													?>
													<option value="<?= $row->id_pekerjaan;?>"><?= $row->pekerjaan;?></option>
													<?php } ?>
												</select>
											</div>
                                            <button type="submit" class="btn btn-primary">Submit</button>
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
