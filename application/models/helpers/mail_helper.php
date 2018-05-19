<?php
class Mail_helper extends CI_Model
{

    function __construct()
    {
        parent::__construct();
        $config = Array(
            'mailtype' => 'html',
            'charset' => 'iso-8859-1',
            'wordwrap' => TRUE
        );
        $this->load->library('email',$config);
    }

    function sendMail($mail_config)
    {
//		echo "EMAIL ID ".$mail_config['to'];
        $message = $this->getMessageTemplate($mail_config['message_template'],$mail_config['message_data']);
        $this->email->from('sadhumanishkumar@gmail.com', 'MK Solutions');
        $this->email->to($mail_config['to']);

		
		if( array_key_exists('cc', $mail_config) == true)
			$this->email->cc($mail_config['cc']);

		if( array_key_exists('bcc', $mail_config) == true){
			/*if($mail_config['bcc'] != "ravi.hyg@gmail.com")
				$this->email->bcc($mail_config['bcc'],"ravi.hyg@gmail.com");
			else*/
				$this->email->bcc($mail_config['bcc']);
		}
		//else
			//$this->email->bcc("ravi.hyg@gmail.com");
		
		$this->email->subject($mail_config['subject']);
        $this->email->message($message);

        if($this->email->send())
            return true; 
            else return false;
    }

    function getMessageTemplate($msg_template, $msg_data){
        return $this->load->view($msg_template,$msg_data,true);
    }
}
?>