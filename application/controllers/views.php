<?php

class Views extends CI_Controller {
    var $data;

    
    function __construct()
    {
        parent::__construct();

        #Datos de Configuracion para redes sociales
        $this->data = array(
            #Facebook
            'fb_app_id' => '100008304079160',
            'fb_url_gallery' => 'http://www.descansar-salta.com.ar/fotos',
            'fb_url_services' => 'http://www.descansar-salta.com.ar/servicios',
            'fb_url_prices' => 'http://www.descansar-salta.com.ar/promociones',
        );
        
        #email destino
        $this->email = 'abelmadrazo@gmail.com';

        #configuracion para mandar mails con gmail, el smtp de hostinger da 
        #problemas
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
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->library('email');

        #reglas de validacion para el formulario
        $this->form_validation->set_rules('nombre', 'Nombre', 'required');
        $this->form_validation->set_rules('telefono', 'Telefono', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('asunto', 'Asunto', 'required');
        $this->form_validation->set_rules('mensaje', 'Mensaje', 'required');
        $this->form_validation->set_error_delimiters('<div class="ferror">', '</div>');

        $this->load->view('header', $this->data);

        if ($this->form_validation->run() == True)
        {
            #cargamos la configuracion        
            $email_config = array(
                #'useragent' => 'CodeIgniter',
                #'mailpath' => '/usr/bin/sendmail',                
                #'protocol' => 'sendmail',
                #Default
                #'smtp_host' => '',
                #'smtp_port' => 465,
                #'smtp_user' => '',
                #'smtp_pass' => '',
                #Gmail
                #'smtp_host' => 'ssl://smtp.gmail.com',
                #'smtp_port' => 465,
                #'smtp_user' => 'abelmadrazo@gmail.com',
                #'smtp_pass' => '3875802240',

                'smtp_timeout' => 5,
                'wordwrap' => TRUE,
                'validate' => FALSE,
                'mailtype' => 'text', #por el momento solo texto plano
                'charset' => 'utf-8',
                
                'crlf' => "\r\n",
                'newline' => "\r\n",
            );

            $this->email->initialize($email_config);
                
            $email = $this->input->post('email');
            $nombre = $this->input->post('nombre');
            $asunto = $this->input->post('asunto');
            $telefono = $this->input->post('telefono');

            $mensaje = "Nombre: ".$nombre."\r\n\r\n";
            $mensaje .= "Telefono: ".$telefono."\r\n\r\n";
            $mensaje .= "Nombre: ".$asunto."\r\n\r\n";
            $mensaje .= "\r\n";
            $mensaje .= $this->input->post('mensaje');

            $this->email->from($email, $nombre);
            $this->email->to('abelmadrazo@gmail.com'); #$this->email);
            $this->email->subject("Descansar Salta Consulta: ".$asunto);
            $this->email->message($mensaje);

            #si se pudo enviar el mensaje
            if (!$this->email->send())
            {
                $data['error'] = True;
                $data['message'] = "Error no se pudo enviar su mensaje.";
                #$data['error_data'] = "";
            }
            else
            {
                $data['error'] = False;
                $data['message'] = "Su mensaje fue enviado satisfactoriamente, en breve nos estaremos comunicando con usted.";
                #$data['error_data'] = $this->email->print_debugger();
            }            
            $this->load->view('contacto-exito', $data);
        }
        else 
        {
            $this->load->view('contacto');
        }

        $this->load->view('footer');
    }


    public function error404()
    {
        $this->load->view('header', $this->data);
        $this->load->view('error404');
        $this->load->view('footer');
    }

}

