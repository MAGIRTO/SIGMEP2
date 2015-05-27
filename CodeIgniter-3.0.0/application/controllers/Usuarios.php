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
             $this->load->view('usuarios/index');
             $this->load->view('templates/footer');
             $this->load->view('templates/frmRegistroUsuario');
         }
         else
         {
             $this->usuarios_model->set_usuarios();
             $this->index();
        }
        }

        public function delete($slug)
        {
            
                 //$nombre=$this->input->post('nombreUsuario');
                $this->usuarios_model->delete_usuarios($slug);
                $data['usuarios'] = $this->usuarios_model->get_usuarios();                
                
                if (empty($data['usuarios']))
                    {
                             show_404();
                            
                    }
                $this->load->view('templates/header');
                $this->load->view('usuarios/index',$data);
                $this->load->view('templates/footer');
           
        }

        public function update()
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
                 $this->load->view('usuarios/update');
                 $this->load->view('templates/footer');
                
             }
             else
             {

                 $this->usuarios_model->update_usuarios();
                 $this->load->view('usuarios/success');
            }
        }




        public function index()
        {
                $data['usuarios'] = $this->usuarios_model->get_usuarios();                
                
                if (empty($data['usuarios']))
                    {
                             echo "NO EXIXTEN USUARIOS EN LA BASE DE DATOS";

                             
                            
                    }
                $this->load->view('templates/header');
                $this->load->view('usuarios/index',$data);
                $this->load->view('templates/footer');
                $this->load->view('templates/frmRegistroUsuario');
        }



        public function view($slug = NULL)
        {
            $data['usuarios_item'] = $this->usuarios_model->get_usuarios($slug);

            if (empty($data['usuarios_item']))
            {
                     show_404();
                    
            }

           // $data['nombre'] = $data['usuarios_item']['nombre'];
             $this->load->view('templates/header2');
            $this->load->view('usuarios/update',$data);
            $this->load->view('templates/footer');
        }

        



        
}
