<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class App extends CI_Controller 
{
	public function index()
	{
		if ($this->session->userdata('username') == "") {
			redirect('auth');
		}
		$data = array (
			'konten' => 'home',
			'judul' => 'Home',
		);
		$this->load->view('index', $data);
	}

	public function lap_karyawan()
	{
		$data = array (
			'query' => $this->db->query("SELECT * FROM karyawan, pekerjaan WHERE karyawan.id_pekerjaan=pekerjaan.id_pekerjaan"),
			'konten' => 'lapkaryawan',
			'judul' => 'Laporan Data Karyawan',
		);
		$this->load->view('admin/lapkaryawan', $data);
	}

	public function lap_gajikaryawan()
	{
		$data = array (
			'query' => $this->db->query("SELECT * FROM karyawan, pekerjaan WHERE karyawan.id_pekerjaan=pekerjaan.id_pekerjaan"),
			'konten' => 'lapgajikaryawan',
			'judul' => 'Laporan Gaji Karyawan',
		);
		$this->load->view('admin/lapgajikaryawan', $data);
	}

	public function tampilprofil($id)
	{
		$q = $this->db->query("SELECT * FROM karyawan, pekerjaan WHERE karyawan.id_pekerjaan=pekerjaan.id_pekerjaan and id_karyawan='$id'")->row();
		$data = array (
			'query' => $q,
			'konten' => 'emp/tampilprofil',
			'judul' => 'Data User',
		);
		$this->load->view('index', $data);
	}

	public function profiluser($id)
	{
		if ($_POST == NULL) {
			$q = $this->db->query("SELECT * FROM karyawan, pekerjaan WHERE karyawan.id_pekerjaan=pekerjaan.id_pekerjaan and id_karyawan='$id'")->row();
			$data = array (
				'query' => $q,
				'konten' => 'emp/profiluser',
				'judul' => 'Data Profil',
			);
			$this->load->view('index', $data);
		} else {
			$data = array(
				'nik' => $this->input->post('nik'),
				'username' => $this->input->post('username'),
				'nama' => $this->input->post('nama'),
				'alamat' => $this->input->post('alamat'),
				'jenis_kelamin' => $this->input->post('jenis_kelamin'),
				'agama' => $this->input->post('agama'),
				'pendidikan' => $this->input->post('pendidikan'),
				'asal_sekolah' => $this->input->post('asal_sekolah'),
				'id_pekerjaan' => $this->input->post('id_pekerjaan'),
			);
			$this->db->where('id_karyawan', $id);
			$this->db->update('karyawan', $data);
			?>
			<script type="text/javascript">
				alert('Data berhasil dirubah !');
				window.location='<?= base_url()?>app/profiluser/<?= $id; ?>';
			</script>
			<?php
		}
	}

	public function profiladmin($id)
	{
		if ($_POST == NULL) {
			$q = $this->db->query("SELECT * FROM user WHERE id_user='$id'")->row();
			$data = array (
				'query' => $q,
				'konten' => 'admin/profiladmin',
				'judul' => 'Data Profil',
			);
			$this->load->view('index', $data);

		} else {
			$data = array(
				'nama' => $this->input->post('nama'),
				'username' => $this->input->post('username'),
				'password' => $this->input->post('password'),				
			);
			$this->db->where('id_user', $id);
			$this->db->update('user', $data);
			?>
			<script type="text/javascript">
				alert('Data berhasil dirubah !');
				window.location='<?= base_url()?>app/profiladmin/<?= $id; ?>';
			</script>
			<?php
		}
	}

	public function slip_gaji($nik, $tgl)
	{
		$data = array(
			'nik' => $nik,
			'tgl' => $tgl,
		);
		$this->load->view('emp/slipgaji', $data);
	}
}
