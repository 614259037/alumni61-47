<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('index');
	}
	public function reg_menu(){
		$data = array(
			'fname' => $this->input->post("fname"),
			'cname' => $this->input->post("cname"),
			'lname' => $this->input->post("lname"),
			'nname'=> $this->input->post("nname"),
			'dates'=> $this->input->post("dates"),
			'caddress'=> $this->input->post("caddress"),
			'img'=> $this->input->post("img"),
			'province'=> $this->input->post("province"),
			'cardid'=> $this->input->post("cardid"),

		);
		if($this->input->post("fname")!= "" && $this->input->post("lname")!== ""){
			$this->Menu->menu_insert($data);
			$this->load->view('view_insert_successwithmenulink');
		}else {
			echo "ไม่สามารถเพิ่มเมนูได้";
		}
	}
	public function regis()
	{
		$this->load->view('register');
	}
}
