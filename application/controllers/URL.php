<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class URL extends CI_Controller {

	    public function __construct() {
        parent::__construct(); 
        $this->load->model('url'); 
    }

	public function index()
	{
		$this->output
		->set_status_header(201) 
             ->set_content_type('application/json')
             ->set_output(json_encode(["hello" => 'hello']));
	}

	public function create($url){
		$this->url->create();
	}

	public function listURLs(){

	}

	public function URLdetails(){

	}

	public function r($code){

	}
}