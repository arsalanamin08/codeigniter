<?php
	class users extends CI_Model
	{
		public function get()
		{
			$query=$this->db->get('records');
			$result=$query->result();
			return $result;
		}
	}
?>