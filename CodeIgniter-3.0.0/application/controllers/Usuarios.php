<?php
class Usuarios extends CI_Controller {



        public function __construct()
        {
                parent::__construct();
                $this->load->helper('url');
                $this->load->model('usuarios_model');

        }
        public function create()
        {
        $this->load->helper('form');
        $this->load->library('form_validation');
         $this->form_validation->set_rules('nombreUsuario', 'nombreUsuario', 'required');
         $this->form_validation->set_rules('email', 'email', 'required');
         $this->form_validation->set_rules('password', 'password', 'required');
         $this->form_validation->set_rules('tipo_Usuario', 'tipo_Usuario', 'required');

         if ($this->form_validation->run() === FALSE)
        {
             $this->load->view('templates/header');
             $this->load->view('usuarios/create');
             $this->load->view('templates/footer');
             $this->load->view('templates/frmRegistroUsuario');
         }
         else
         {
             $this->usuarios_model->set_usuarios();
             $this->load->view('pages/home');
        }
        }


        public function index()
        {
                $data['usuarios'] = $this->usuarios_model->get_usuarios();                
                $this->load->view('templates/header');
                $this->load->view('usuarios/index',$data);
                $this->load->view('templates/footer');
        }

        public function view($nombre = NULL)
        {
        $data['usarios_item'] = $this->usuarios_model->get_usuarios($nombre);

        if (empty($data['news_item']))
        {
                 show_404();
                
        }

        $data['nombre'] = $data['usuarios_item']['nombre'];

        $this->load->view('templates/header');
        //$this->load->view('usuarios/view', $data);
        $this->load->view('templates/footer');
        }



        
}
