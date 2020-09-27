<?php defined('BASEPATH') or exit('No direct script access allowed');
class model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    //โชทั้งหมด
    function showstud()
    {
        $this->db->select('p_id, cname, lname,years');
        $result = $this->db->get('customer');
        return $result;
    }
    //เพิ่ม
    function insert_customer($customer)
    {
        $this->db->insert('customer', $customer);
    }
    function insert_contact($contact)
    {
        $this->db->insert('contact', $contact);
    }
    function insert_workplace($workplace)
    {
        $this->db->insert('workplace', $workplace);
    }
    //โชข้อมูลเเต่ละคน
    function data_users($mid)
    {
        $result = $this->db->get_where('customer', array('p_id' => $mid));
        $this->db->select('p_id','years','fname','cname','lname','nname','dates	','caddress','img','province','cardid');
        return $result;
    }
    //search
    public function search($key){
        $this->db->like('cname', $key);
        $result = $this->db->get('customer');
        return $result->result();
    }
}
