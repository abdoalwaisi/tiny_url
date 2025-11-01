<?php

class url_model extends CI_Model {

            public function __construct()
        {
                parent::__construct();
                $this->load->database();       
        }

    public function create($url ,  $random){

        $data = [
            'target_url' =>  $url ,
            'code' => $random
        ];

        $this->db->insert('short_links', $data);

	}

    public function getURL($code){
        $this->db->select('target_url');
        $this->db->from('short_links');
        $this->db->where('code', $code); 

        $query = $this->db->get();
        return $query->row()->target_url;
    }

	public function listURLs(){

	}

	public function URLdetails(){
		
	}

}