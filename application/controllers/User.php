<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller 
{
	public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'admin/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'admin/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'admin/index.html';
            $config['first_url'] = base_url() . 'admin/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->M_user->total_rows($q);
        $user = $this->M_user->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'user_data' => $user,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
            'konten' => 'admin/listuser',
            'judul' => 'Manajemen User',
        );
        $this->load->view('index', $data);
    }

	public function read($id) 
    {
        $row = $this->M_user->get_by_id($id);
        if ($row) {
            $data = array(
                'id_user' => $row->id_user,
                'nama' => $row->nama,
                'username' => $row->username,
                'password' => $row->password,
            );
            $this->load->view('user/user_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(base_url('user'));
        }
    }

	public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => base_url('user/create_action'),
            'id_user' => set_value('id_user'),
            'nama' => set_value('nama'),
            'username' => set_value('username'),
            'password' => set_value('password'),
            'konten' => 'admin/formuser',
            'judul' => 'Manajemen User',
	    );
        $this->load->view('index', $data);
    }

	public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
                'nama' => $this->input->post('nama',TRUE),
                'username' => $this->input->post('username',TRUE),
                'password' => $this->input->post('password',TRUE),
            );

            $this->M_user->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(base_url('user'));
        }
    }

	public function update($id) 
    {
        $row = $this->M_user->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => base_url('user/update_action'),
                'id_user' => set_value('id_user', $row->id_user),
                'nama' => set_value('nama', $row->nama),
                'username' => set_value('username', $row->username),
                'password' => set_value('password', $row->password),
                'konten' => 'user/user_form',
                'judul' => 'Manajemen User',
	        );
            $this->load->view('v_index', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(base_url('user'));
        }
    }

	public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_user', TRUE));
        } else {
            $data = array(
                'nama' => $this->input->post('nama',TRUE),
                'username' => $this->input->post('username',TRUE),
                'password' => $this->input->post('password',TRUE),
                );

            $this->M_user->update($this->input->post('id_user', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(base_url('user'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->M_user->get_by_id($id);

        if ($row) {
            $this->M_user->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(base_url('user'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(base_url('user'));
        }
    }

    public function _rules() 
    {
		$this->form_validation->set_rules('nama', 'nama', 'trim|required');
		$this->form_validation->set_rules('username', 'username', 'trim|required');
		$this->form_validation->set_rules('password', 'password', 'trim|required');

		$this->form_validation->set_rules('id_user', 'id_user', 'trim');
		$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}
