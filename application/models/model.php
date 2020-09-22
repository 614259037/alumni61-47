<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Model extends CI_Model {
		function __construct(){
            parent::__construct();
        }
        function menu_insert($data){
			$this->db->insert('menu',$data);
        }
    
    }