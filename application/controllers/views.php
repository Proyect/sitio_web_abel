<?php

class Views extends CI_Controller {
    var $data;

    
    function __construct()
    {
        parent::__construct();

        #Datos de Configuracion para redes sociales
        $this->data = array(
            #Facebook
            'fb_app_id' => '119574448056995',
            'fb_url_gallery' => 'http://www.infrasoft.com.ar',
            'fb_url_services' => 'http://www.infrasoft.com.ar',
            'fb_url_prices' => 'http://www.infrasoft.com.ar',
        );
    }

    
    public function index()
    {
        $this->load->view('header', $this->data);
        $this->load->view('home');
        $this->load->view('footer');
    }

    
    public function nosotros()
    {
        $this->load->view('header', $this->data);
        $this->load->view('nosotros');
        $this->load->view('footer');
    }


    public function fotos()
    {
        $this->load->view('header', $this->data);
        $this->load->view('galeria');
        $this->load->view('footer');
    }


    public function servicios()
    {
        $this->load->view('header', $this->data);
        $this->load->view('servicios');
        $this->load->view('footer');
    }


    public function promociones()
    {
        $this->load->view('header', $this->data);
        $this->load->view('promociones');
        $this->load->view('footer');
    }
    
    
    public function contacto()
    {
        $this->load->view('header', $this->data);
        $this->load->view('contacto');
        $this->load->view('footer');
    }


    public function error404()
    {
        $this->load->view('header', $this->data);
        $this->load->view('error404');
        $this->load->view('footer');
    }

}

