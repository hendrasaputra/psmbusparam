<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Routes extends CI_Controller {

	function index(){
		$this->load->model('template_model');
		
		$data['services'] = $this->template_model->get_services();
		$data['categories'] = $this->template_model->get_categories();
		$data['l3ms'] = $this->template_model->get_l3m();
		$data['l4ms'] = $this->template_model->get_l4m();
		$data['zones'] = $this->template_model->get_zones();
		
		$this->load->view('index', $data);
	}
}