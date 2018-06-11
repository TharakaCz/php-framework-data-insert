<?php
/**
 * Created by IntelliJ IDEA.
 * User: User
 * Date: 6/11/2018
 * Time: 3:44 PM
 */
if (! defined('BASEPATH')) exit('No direct script access allowed');

class Test extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('data');
	}
	function index(){
		$data["title"] = $this->data->get_data();
		$this->load->view('index',$data);
	}
	function addnew(){
		$data = array("title"=>"Tharaka");
		$this->load->insert("data",$data);

	}
}
