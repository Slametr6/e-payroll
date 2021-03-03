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
											<div class="form-group">
												<label for="varchar">Nama <?= form_error('nama') ?></label>
												<input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" value="<?= $nama; ?>" />
											</div>
											<div class="form-group">
												<label for="varchar">Username <?= form_error('username') ?></label>
												<input type="text" class="form-control" name="username" id="username" placeholder="Username" value="<?= $username; ?>" />
											</div>
											<div class="form-group">
												<label for="varchar">Password <?= form_error('password') ?></label>
												<input type="text" class="form-control" name="password" id="password" placeholder="Password" value="<?= $password; ?>" />
											</div>
											<input type="hidden" name="id_user" value="<?= $id_user; ?>" /> 
											<button type="submit" class="btn btn-primary"><?= $button ?></button> 
											<a href="<?= base_url('user') ?>" class="btn btn-default">Cancel</a>	
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
