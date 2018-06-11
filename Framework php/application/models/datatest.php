<?php
/**
 * Created by IntelliJ IDEA.
 * User: User
 * Date: 6/9/2018
 * Time: 11:38 AM
 */

class datatest extends CI_Model
{

	public function AddClient($data){

	   $this->db->insert('datatest',$data);
		return $this->db->affected_rows();
	}
}
