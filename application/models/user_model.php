<?php
class User_model extends CI_Model
{

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    function register_user($pwd){
        $userdata = array(
            'CreatedOn' => date('Y-m-d H:i:s'),
            'EmailID' => $this->input->post('email'),
            'FirstName' => $this->input->post('firstname'),
            'LastName' => $this->input->post('lastname'),
			'DisplayName' => $this->input->post('firstname').' '.$this->input->post('lastname'),
            'Gender' => $this->input->post('gender'),
            'Password' => md5($pwd),
            'Phone' => $this->input->post('phone'),
            'Department' =>$this->input->post('department'),
        );
        $this->db->insert('user', $userdata);
        return ($this->db->affected_rows() != 1) ? false : true;
    }

    public function get_user_data($EmailID){
        $this->db->where('EmailID', "$EmailID");
        $query = $this->db->get('user');
        return $query->row_array();
    }

    public function get_user_data_item($EmailID,$item){
        $user_data = $this->get_user_data($EmailID);
        return $user_data[$item];
    }

    public function check_phone_exists($Phone)
    {
		$query = $this->db->query("SELECT * FROM user WHERE Phone=$Phone");
        if ($query->num_rows() == 1)
            return true;
        else
            return false;
    }


      public function check_email_exists($EmailID)
    {
        $this->db->where('EmailID', "$EmailID");
        $query = $this->db->get('user');
        if ($query->num_rows() == 1)
            return true;
        else
            return false;
    }

    function check_credentials($EmailID, $password)
    {
        $this->db->where('EmailID', "$EmailID");
        $this->db->where('Password', md5($password));
        $query = $this->db->get('user');
        if ($query->num_rows() == 1)
            return true;
        else
            return false;
    }

    
    
}