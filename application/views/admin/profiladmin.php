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
											<div class="form-group col-md-6">
												<label>nama</label>
												<input type="text" name="nama" class="form-control" value="<?= $query->nama;?>">
											</div>
											<div class="form-group col-md-6">
												<label>username</label>
												<input type="text" name="username" class="form-control" value="<?= $query->username;?>">
											</div>
											<div class="form-group col-md-6">
												<label>password</label>
												<input type="text" name="password" class="form-control" value="<?= $query->password;?>">
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
