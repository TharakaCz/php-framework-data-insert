<?php
/**
 * Created by IntelliJ IDEA.
 * User: User
 * Date: 5/28/2018
 * Time: 1:52 PM
 */
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods:GET,POST');
header('Access-Control-Allow-Headers, Content-Type');
if (! defined('BASEPATH')) exit('No direct script access allowed');
class Data extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('datatest');
	}

	public function client(){



	}


	public function getClient(){
		$UserName = "Tharaka";
		$Email = "Tharakacz823@gmail.com";
		$PhoneNo = "0779112886";

		$result=$this->datatest->AddClient([
			'UserName'=>$UserName,
			'Email'=>$Email,
			'PhoneNo'=>$PhoneNo,

		]);
		echo $result;
	}
}
