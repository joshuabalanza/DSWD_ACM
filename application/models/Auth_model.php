<?php

class Auth_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function viewuserlist()
    {
        $query = $this->db->select('*')->from('users')->get();
        return $query->result();
    }
}

?>