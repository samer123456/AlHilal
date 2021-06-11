<?php

class Database_Model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
	public function login($table,$username,$password){
		$this->db->select("*");
		$this->db->from($table);
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		$this->db->limit(1);

		$query = $this->db->get();

		if($query->num_rows()==1){
			return $query->result();
		}else{
			return false;
		}
	}

	public function getContent($table)
	{
		//$this->db->cache_on();
		$query = $this->db->get($table);
		return $query->result();
	}

	public function getContentWithId($id,$table)
	{
		//$this->db->cache_on();
		$query = $this->db->get_where($table, "lang = $id");
		return $query->result();
	}

	public function getContentId($id,$table,$table_id)
	{
		//$this->db->cache_on();
		$query = $this->db->get_where($table, "$table_id = $id");
		return $query->result();
	}

	public function updateWithId($table, $data, $table_id, $id)
	{
		$this->db->update($table, $data, "$table_id = $id");
		return true;
	}

	public function deleteWithId($table, $table_id, $id)
	{
		//$this->db->cache_delete_all();
		$this->db->delete($table, "$table_id = $id");
		return true;
	}

	public function getContentNews($id)
	{
		//$this->db->cache_on();
		$query = $this->db->get_where('news', "id = $id");
		return $query->result();
	}
}

?>
