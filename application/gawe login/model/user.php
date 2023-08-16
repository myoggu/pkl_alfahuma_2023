<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Model {
	
	public function login($username,$password)
	{
		$this->db->select('id,username,password');
		$this->db->from('user');
		$this->db->where('username', $username);
		$this->db->where('password', MD5($password));
		$query = $this->db->get();
		if ($query->num_rows()==1) {
			return $query->result();
		}else{
			return false;
		}
	}

public function cek_user($data) {
			$query = $this->db->get_where('user', $data);
			return $query;
		}





	public function insertUser()
		{
			$username = $this->input->post('username');
		    $password = $this->input->post('password');
		    
		    $data = array(
		      'username'=>$username,
		      'password'=>md5($password)
		    );
		    $this->db->insert('user',$data);
		}

	public function cekInsert ($username)
	{
		$this->db->select('id,username,password');
		$this->db->from('user');
		$this->db->where('username', $username);
		$query = $this->db->get();
		if ($query->num_rows()>=1) {
			return $query->result();
		}else{
			return false;
		}	
	}
	
}

/* End of file user.php */
/* Location: ./application/models/user.php */