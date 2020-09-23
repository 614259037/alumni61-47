<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Control extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('model', 'crud');
	}
	public function index()
	{
		$result['shows'] = $this->crud->showstud();
		$this->load->view('index', $result);
	}
	public function regis()
	{
		$this->load->view('register');
	}
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
	public function showall()
	{
		$result['show'] = $this->crud->showstud();
		$this->load->view('view_menu', $result);
	}
}