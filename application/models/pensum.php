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

	public function get_departamento_pensum($id)
	{
		$this->db->select(array('DEP.id', 'DEP.nombre'));
		$this->db->from('pensum as PEN');
		$this->db->from('carrera as CAR');
		$this->db->from('departamento as DEP');
		$this->db->where('PEN.carrera_id = CAR.id');
		$this->db->where('CAR.departamento_id = DEP.id');
		$this->db->where('PEN.id', $id);
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

	public function get_carrera_pensum($id)
	{
		$this->db->select(array('CAR.id', 'CAR.nombre'));
		$this->db->from('pensum as PEN');
		$this->db->from('carrera as CAR');
		$this->db->where('PEN.carrera_id = CAR.id');
		$this->db->where('PEN.id', $id);
		$query = $this->db->get();
		return $query->result_array();
	}

	public function get_seminario()
	{
		$this->db->select(array('id', 'nombre'));
		$this->db->from('seminario');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function get_mat_has_pen($pensum)
	{
		$this->db->select(array('id', 'nombre'));
		$this->db->from('list_mat_has_pensum');
		$this->db->where('pensum', $pensum);
		$query = $this->db->get();
		return $query->result_array();
	}

	public function insert_pensum($id_carrera)
	{
		$data = array( 'estatus' => 'ACTIVO' ,
					   'carrera_id' => $id_carrera);

		$statusInsert = $this->db->insert('pensum', $data);
		return $statusInsert;
	}

	public function get_last_pensum()
	{
		$this->db->select_max('id');
		$query = $this->db->get('pensum');
		return $query->result_array();
	}

	public function get_pensum($id)
	{
		$this->db->from('pensum');
		$this->db->where('id', $id);
		$query = $this->db->get();
		return $query->result_array();
	}

	public function update_pensum($id, $arrayUpdate)
	{
		$this->db->where('id', $id);
		$statusUpdate = $this->db->update('pensum', $arrayUpdate);
		return $statusUpdate; 
	}

	public function consultar_mat_a()
	{
		$this->db->select('*, nombre as value, nombre as label');
		$this->db->from('materia');
		$query = $this->db->get();
		$result = array();
		if($query->num_rows() > 0)
		{
			foreach ($query->result() as $row)
			{
				$result[]= $row;
			}
		}
		return $result;
	}

	public function insertar_semestre($pensum_id, $materia_codigo, $semestre)
    {	
    	$data = array('materia_codigo' => $materia_codigo, 'pensum_id' => $pensum_id, 'semestre' => $semestre);
    	return $this->db->insert('materia_has_pensum',$data);
    }

    public function eliminar_semestre($pensum_id, $materia_codigo)
    {
    	$array = array('pensum_id' => $pensum_id, 'materia_codigo' => $materia_codigo);
    	$this->db->where($array);
		return $this->db->delete('materia_has_pensum');
    }

}
?>