<?php
class Pensum extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}


	public function get_departamento()
	{
		$this->db->select(array('id', 'nombre'));
		$this->db->from('departamento');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function get_carrera($id_departamento)
	{
		$this->db->select(array('id', 'nombre'));
		$this->db->from('carrera');
		$this->db->where('departamento_id', $id_departamento);
		$query = $this->db->get();
		return $query->result_array();
	}
}
?>