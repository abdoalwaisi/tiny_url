<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class URL extends CI_Controller {

	    public function __construct() {
        parent::__construct(); 
        $this->load->model('url_model');
		$this->load->helper('string');

    }

	public function index()
	{
		$random = random_string('alnum', 16);
		$this->output
		->set_status_header(201) 
             ->set_content_type('application/json')
             ->set_output(json_encode(["hello" => $random]));
	}

	public function create(){  
		$url = $this->input->post('url');

		$random = random_string('alnum', 16);

		$code = $this->url_model->create($url , $random);
		
		$this->output
		->set_status_header(201) 
             ->set_content_type('application/json')
             ->set_output(json_encode(["link" => "https://localhost/r/$random"]));	 
	}

	public function listURLs(){

	}

	public function URLdetails(){

	}

	public function r($code){
		$link = $this->url_model->getURL($code);

				$this->output
		->set_status_header(201) 
             ->set_content_type('application/json')
             ->set_output(json_encode(["link" => "$link"]));	


	}
}