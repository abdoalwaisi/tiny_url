<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class URL extends CI_Controller {

	    public function __construct() {
        parent::__construct(); 
        $this->load->model('url_model');
		$this->load->helper('url_helper');

    }

	public function index()
	{
		$random = generate_code(12);
		$this->output
		->set_status_header(201) 
             ->set_content_type('application/json')
             ->set_output(json_encode(["hello" => $random]));
	}

	public function create($url){
		$random = generate_code(12);

		$code = $this->url_model->create($url , $random);
		
		$this->output
		->set_status_header(201) 
             ->set_content_type('application/json')
             ->set_output(json_encode(["link" => "https://localhost/$code"]));
			 
	}

	public function listURLs(){

	}

	public function URLdetails(){

	}

	public function r($code){

	}
}