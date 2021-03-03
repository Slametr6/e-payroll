        <!-- header area start -->
        <div class="header-area header-bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-9  d-none d-lg-block">
                        <div class="horizontal-menu">
                            <nav>
                                <ul id="nav_menu">
									<?php
									if ($this->session->userdata('level') == 'admin') {
									?>
									<li><a href="<?= base_url('app');?>"><i class="fa fa-home"></i><span>Home</span></a></li>
                                    <li><a href="<?= base_url();?>karyawan"><i class="fa fa-users"></i><span>Data Karyawan</span></a></li>
                                    <li><a href="<?= base_url();?>pekerjaan"><i class="fa fa-briefcase"></i><span>Data Pekerjaan</span></a></li>
                                    <li><a href="<?= base_url();?>gaji"><i class="fa fa-money"></i><span>Gaji Karyawan</span></a></li>
                                    <li>
                                        <a href="#"><i class="fa fa-file"></i><span>Laporan</span></a>
                                        <ul class="submenu">
                                            <li><a href="<?= base_url();?>app/lap_karyawan">Laporan Data Karyawan</a></li>
                                            <li><a href="<?= base_url();?>app/lap_gajikaryawan">Laporan Gaji Karyawan</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="user"><i class="fa fa-user-plus"></i> <span>Manajemen User</span></a></li>

									<?php } elseif ($this->session->userdata('level') == 'user') {
										$iduser = $this->session->userdata('id_user');
										$data = $this->db->query("SELECT * FROM karyawan, gaji WHERE karyawan.nik=gaji.nik and karyawan.id_karyawan='$iduser' ORDER BY gaji.tgl DESC")->row();
									?>
									<li><a href="<?= base_url();?>app/tampilprofil/<?= $this->session->userdata('id_user');?>"><i class="fa fa-user"></i><span>Profil</span></a></li>
                                    <li><a href="<?= base_url();?>app/slip_gaji/<?= $data->nik;?>/<?= $data->tgl;?>"><i class="fa fa-money"></i><span>Lihat Gaji</span></a></li>
									<?php } ?>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!-- nav and search button -->
                    <!-- mobile_menu -->
                    <div class="col-12 d-block d-lg-none">
                        <div id="mobile_menu"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- header area end -->
