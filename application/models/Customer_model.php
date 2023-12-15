<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer_model extends CI_Model {
    public function __construct()
    {
        parent::__construct();
    }

    public function data()
    {
        $id = get_current_user_id();

        $data = $this->db->where('user_id', $id)->get('customers')->row();
        return $data;
    }

}