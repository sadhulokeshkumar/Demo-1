<?php
class Generic_model extends CI_Model
{

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }


    function getDepartments(){
        $result=$this->db->get('department');
        return $result->result_array();
    }


}