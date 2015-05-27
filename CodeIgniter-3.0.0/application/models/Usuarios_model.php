<?php
class Usuarios_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }

        public function get_usuarios($slug = FALSE)
		{
        	if ($slug === FALSE)
        	{
                $query = $this->db->get(   'usuarios');
                	return $query->	result_array();
        	}

        	$query = $this->db->get_where('usuarios', array('slug' => $slug	));
        	return $query->row_array();
		}

		public function set_usuarios()
		{
			$this->load->helper('url');
		    $slug = url_title($this->input->post('nombreUsuario'), 'dash', TRUE);

		    $data = array(
		        'nombre' => $this->input->post('nombreUsuario'),
		        'email' => $this->input->post('email'),
		        'password' => $this->input->post('password'),
		        'tipo_Usuario' => $this->input->post('tipo_Usuario'),
		        'slug' => $slug
		    );

		    return $this->db->insert('usuarios', $data);
		}

		public function update_usuarios()
		{
			$slug2=$this->input->post('slug');
			$this->load->helper('url');
		    $slug = url_title($this->input->post('nombreUsuario'), 'dash', TRUE);
		    $data = array(
		        'nombre' => $this->input->post('nombreUsuario'),
		        'email' => $this->input->post('email'),
		        'password' => $this->input->post('password'),
		        'tipo_Usuario' => $this->input->post('tipo_Usuario'),
		        'slug' => $slug
		    );
		    $this->db->where('slug', $slug2);
		    return $this->db->update('usuarios', $data);
		}

		public function delete_usuarios($slug)
			{
				$this->db->where('slug',$slug);
				return $this->db->delete('usuarios');
			
			}

		 
}