<?php
class Usuarios_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }

        public function get_usuarios($nombre = FALSE)
		{
        	if ($nombre === FALSE)
        	{
                $query = $this->db->get('usuarios');
                	return $query->	result_array();
        	}

        	$query = $this->db->get_where('usuarios', array('nombre' => $nombre	));
        	return $query->row_array();
		}

			

		public function set_usuarios()
		{
		    $data = array(
		        'nombre' => $this->input->post('nombreUsuario'),
		        'email' => $this->input->post('email'),
		        'password' => $this->input->post('password'),
		        'tipo_Usuario' => $this->input->post('tipo_Usuario')
		    );

		    return $this->db->insert('usuarios', $data);
		}
}