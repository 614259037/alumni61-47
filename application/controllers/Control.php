<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Control extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('model', 'crud');
	}
	//โชหน้าต่างๆ
	public function index()
	{
		//โชข้อมูลทั้งหมด

		$result['shows'] = $this->crud->showstud();
		$this->load->view('index', $result);
	}
	public function regis()
	{
		$this->load->view('register');
	}
	public function login()
	{
		$this->load->view('login');
	}


	//เพิ่มข้อมูล
	public function reg()
	{
		$customer = array(
			'img' => $this->input->post("img"),
			'fname' => $this->input->post("fname"),
			'cname' => $this->input->post("cname"),
			'lname' => $this->input->post("lname"),
			'nname' => $this->input->post("nname"),
			'cardid' => $this->input->post("cardid"),
			'dates' => $this->input->post("dates"),
			'years' => $this->input->post("years"),
			'caddress' => $this->input->post("caddress"),
			'province' => $this->input->post("province"),
		);
		$contact = array(
			'hphone' => $this->input->post("hphone"),
			'email' => $this->input->post("email"),
			'facebook' => $this->input->post("facebook"),
		);
		$workplace = array(
			'joblv' => $this->input->post("joblv"),
			'jobname' => $this->input->post("jobname"),
			'jobaddress' => $this->input->post("jobaddress"),
			'jobprov' => $this->input->post("jobprov"),
		);
		$this->crud->insert_customer($customer);
		$this->crud->insert_workplace($workplace);
		$this->crud->insert_contact($contact);
		$this->load->view('suc');
	}
	//โชข้อมูลทั้งหมด
	// เเสดงข้อมูลเเต่ละคน
	public function show_users()
	{
		$get_id = $this->input->get("user_id");
		$select_user['user_select'] = $this->crud->data_users($get_id);
		$this->load->view('show_user', $select_user);
	}
	//search
	public function keyword()
	{

		$key = $this->input->post('search');
		$data['result'] = $this->crud->search($key);
		$this->load->view('search', $data);
	}

	public function chklogin()
	{ {
			$user = $this->input->post('user');
			$pass = $this->input->post('pass');
			$data = $this->crud->login($user, $pass);
			if ($data == true) {
				$this->session->set_userdata(array('user' => $user));
				redirect("Control/index");
			} else {
				$data['error'] = 'Your Account is Invalid';
				$this->load->view('login', $data);
			}
		}
	}
	public function logout()
	{
		//removing session  
		$this->session->unset_userdata('user');
		redirect("Control/login");
	}
}
