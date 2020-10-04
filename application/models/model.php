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
    function data_users($get_id)
    {
        $result = $this->db->select('*')
            ->from("customer")
            ->join('contact', 'contact.p_id = customer.p_id')
            ->join('workplace', 'workplace.p_id = customer.p_id')
            ->where("customer.p_id", $get_id)
            ->get();
        return $result;
    }
    //search
    function search($key)
    {
        $this->db->like('cname', $key);
        $result = $this->db->get('customer');
        return $result->result();
    }
    //เเก้ไข
    function login($user, $pass)
    {
        $this->db->where('cname', $user);
        $this->db->where('cardid', $pass);
        $result = $this->db->get('customer');
        return $result->row();
    }
    function update_customer($customer, $p_id)
    {
        $this->db->where('p_id', $p_id);
        $this->db->update('customer', $customer);
    }
    function update_contact($contact, $p_id)
    {
        $this->db->where('p_id', $p_id);
        $this->db->update('contact', $contact);
    }
    function update_workplace($workplace, $p_id)
    {
        $this->db->where('p_id', $p_id);
        $this->db->update('workplace', $workplace);
    }
}
