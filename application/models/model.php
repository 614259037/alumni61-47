<?php defined('BASEPATH') or exit('No direct script access allowed');
class model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function showstud(){
        $this->db->select('p_id, cname, lname');
        $result = $this->db->get('customer');
        return $result;
    }
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
}
