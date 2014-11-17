<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {


	public function index()
    {
        $this->load->model('home_model','model');
        $data['advert1']  = $this->model->getAdvert(1);
        $data['advert2']  = $this->model->getAdvert(2);
        $this->load->view('home', $data);

    }
}

