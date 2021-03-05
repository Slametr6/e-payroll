<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_gaji extends CI_Model 
{
	public $table = 'gaji';
	public $id = 'id_gaji';
	public $order = 'DESC';

	function get_all()
	{
		$this->db->order_by($this->id, $this->order);
		return $this->db->get($this->table)->result();
	}

	function get_by_id($id)
	{
		$this->db->where($this->id, $id);
		return $this->db->get($this->table)->row();
	}

	function total_rows($q = NULL)
	{
		$this->db->like('id_gaji', $q);
		$this->db->or_like('tgl', $q);
		$this->db->or_like('nik', $q);
		$this->db->from($this->table);
		return $this->db->count_all_results();
	}

	function get_limit_data($limit, $start = 0, $q = NULL)
	{
		$this->db->order_by($this->id, $this->order);
        $this->db->like('id_gaji', $q);
		$this->db->or_like('tgl', $q);
		$this->db->or_like('nik', $q);
		$this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
	}

	function insert($data)
	{
		$this->db->insert($this->table, $data);
	}

	function update($id, $data)
    {
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
    }

	function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
    }
}
