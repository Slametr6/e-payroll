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
												<label for="varchar">Jabatan <?= form_error('pekerjaan') ?></label>
												<input type="text" class="form-control" name="pekerjaan" id="pekerjaan" placeholder="Pekerjaan" value="<?= $pekerjaan; ?>" />
											</div>
											<div class="form-group col-md-6">
												<label for="int">Gaji Pokok <?= form_error('gapok') ?></label>
												<input type="text" class="form-control" name="gapok" id="gapok" placeholder="Gapok" value="<?= $gapok; ?>" />
											</div>
										</div>

										<div class="form-row">
											<div class="form-group col-md-6">
												<label>Tunjangan Keluarga</label>
												<select name="tukel" class="form-control">
													<option value="<?= $tukel ?>"><?= $tukel ?></option>
													<option value="300000">KK0</option>
													<option value="500000">KK1</option>
													<option value="700000">KK2</option>
													<option value="1000000">KK3</option>
													<option value="1200000">KK4</option>
												</select>
											</div>
											<div class="form-group col-md-6">
												<label for="int">Tunjangan Kesehatan <?= form_error('tukes') ?></label>
												<input type="text" class="form-control" name="tukes" id="tukes" placeholder="Tukes" value="<?= $tukes; ?>" />
											</div>
										</div>

										<div class="form-row">
											<div class="form-group col-md-6">
												<label for="int">Tunjangan Transportasi <?= form_error('tutra') ?></label>
												<input type="text" class="form-control" name="tutra" id="tutra" placeholder="Tutra" value="<?= $tutra; ?>" />
											</div>
											<div class="form-group col-md-6">
												<label for="int">Tunjangan Pendidikan <?= form_error('tupen') ?></label>
												<input type="text" class="form-control" name="tupen" id="tupen" placeholder="Tupen" value="<?= $tupen; ?>" />
											</div>
										</div>
											<input type="hidden" name="id_pekerjaan" value="<?= $id_pekerjaan; ?>" /> 										
                                            <button type="submit" class="btn btn-primary"><?= $button;?></button>
											<a href="<?= base_url('pekerjaan') ?>" class="btn btn-warning">Cancel</a>
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
