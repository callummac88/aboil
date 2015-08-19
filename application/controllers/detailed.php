<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Detailed extends CI_Controller {


	public function index()
    {
    	
		$this->load->helper('url');
		$adId = $this->security->xss_clean($this->uri->segment(2, 0));
		
        $this->load->model('detailed_model','model');
        $data['ad_details']  = $this->model->getDetails($adId);
        
        $this->load->view('detailed', $data);

    }
}

