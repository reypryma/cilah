<?php


class Projects_model extends CI_Model
{
	public function get_project($id)
	{
		$this->db->where('id', $id);
		$query = $this->db->get('projects');
		return $query->row();

	}
	public function get_projects()
	{
		//add database to autoload model
		$query = $this->db->get('projects');
		return $query->result();
	}
}
