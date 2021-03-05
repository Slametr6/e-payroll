<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller 
{
	public function index()
	{
		if ($this->input->post() == NULL) {
			$this->load->view('login');

		} else {
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$cek_user = $this->db->query("SELECT * FROM user WHERE username='$username' and password='$password' ");
			$cek_kry = $this->db->query("SELECT * FROM karyawan WHERE username='$username' and password='$password' ");
			if ($cek_user->num_rows() == 1) {
				foreach ($cek_user->result() as $row) {
					$sess_data['id_user']	= $row->id_user;
					$sess_data['nama']	= $row->nama;
					$sess_data['username']	= $row->username;
					$sess_data['level']	= 'admin';
					$this->session->set_userdata($sess_data);
				}
				redirect('app');

			} elseif ($cek_kry->num_rows() == 1) {
				foreach ($cek_kry->result() as $row) {
					$sess_data['id_user']	= $row->id_karyawan;
					$sess_data['nama']	= $row->nama;
					$sess_data['username']	= $row->username;
					$sess_data['level']	= 'user';
					$this->session->set_userdata($sess_data);
				}
				redirect('app');

			} else {
				?>
				<script type="text/javascript">
					alert('Username dan password salah !');
					windows.location="<?= base_url('auth');?>";
				</script>
				<?php 
			}
		}
	}

	public function ubahpass($id)
	{
		if ($_POST == NULL) {
			$data = array (
				'konten' => 'ubahpass',
				'judul' => 'Ubah Password',
			);
			$this->load->view('index', $data);

		} else {
			$pass_lama = $this->input->post('pass_lama');
			$pass_baru = $this->input->post('pass_baru');
			$cek = $this->db->query("SELECT password FROM karyawan WHERE id_karyawan='$id' ")->row();
			if ($cek->password == $pass_lama) {
				$data = array (
					'password' => $pass_baru,
				);
				$this->db->where('id_karyawan', $id);
				$this->db->update('karyawan', $data);
				?>
				<script>
					alert('Password berhasil dirubah, silahkan login kembali !');
					window.location='<?= base_url('auth/logout');?>';
				</script>
				<?php 
			}
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('id_user');
		$this->session->unset_userdata('nama');
		$this->session->unset_userdata('username');
		session_destroy();
		redirect('auth');
	}
}
