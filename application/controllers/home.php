<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {


	public function index()
    {
        $this->load->model('home_model','model');
        $data['advert']  = $this->model->getAdvert();
        $this->load->view('home', $data);

    }
}

