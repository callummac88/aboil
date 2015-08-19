<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Search extends CI_Controller {


	public function index()
    {
    	$this->load->helper('url');
        /*$this->load->model('search_model','model');*/
       /* $data['advert']  = $this->model->getAdvert();*/
        
        $this->load->view('search');

    }
}

