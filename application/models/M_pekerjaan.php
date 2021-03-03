<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pekerjaan extends CI_Model 
{
	public $table = 'pekerjaan';
    public $id = 'id_pekerjaan';
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

	function total_rows($q = NULL) {
        $this->db->like('id_pekerjaan', $q);
		$this->db->or_like('pekerjaan', $q);
		$this->db->or_like('gapok', $q);
		$this->db->or_like('tukes', $q);
		$this->db->or_like('tutra', $q);
		$this->db->or_like('tupen', $q);
		$this->db->from($this->table);
        return $this->db->count_all_results();
    }

	function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('id_pekerjaan', $q);
		$this->db->or_like('pekerjaan', $q);
		$this->db->or_like('gapok', $q);
		$this->db->or_like('tukes', $q);
		$this->db->or_like('tutra', $q);
		$this->db->or_like('tupen', $q);
		$this->db->limit($limit, $start);
        return $this->db->get($this->table);
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
