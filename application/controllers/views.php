<?php

class Views extends CI_Controller {
    
    function __construct()
    {
        parent::__construct();
    }

    
    public function index()
    {
        $this->load->view('header');
        $this->load->view('home');
        $this->load->view('footer');
    }

    
    public function nosotros()
    {
        $this->load->view('header');
        $this->load->view('nosotros');
        $this->load->view('footer');
    }


    public function fotos()
    {
        $this->load->view('header');
        $this->load->view('galeria');
        $this->load->view('footer');
    }


    public function servicios()
    {
        $this->load->view('header');
        $this->load->view('servicios');
        $this->load->view('footer');
    }

    public function error404()
    {
        $this->load->view('header');
        $this->load->view('error404');
        $this->load->view('footer');
    }

}

