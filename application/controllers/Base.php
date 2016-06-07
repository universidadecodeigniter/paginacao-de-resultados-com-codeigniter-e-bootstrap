<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Base extends CI_Controller {

	public function index()
	{
		$this->load->model('Usuarios_model');

		$config = array(
			"base_url" => base_url('usuarios/p'),
			"per_page" => 3,
			"num_links" => 3,
			"uri_segment" => 3,
			"total_rows" => $this->Usuarios_model->CountAll(),
			"full_tag_open" => "<ul class='pagination'>",
			"full_tag_close" => "</ul>",
			"first_link" => FALSE,
			"last_link" => FALSE,
			"first_tag_open" => "<li>",
			"first_tag_close" => "</li>",
			"prev_link" => "Anterior",
			"prev_tag_open" => "<li class='prev'>",
			"prev_tag_close" => "</li>",
			"next_link" => "Próxima",
			"next_tag_open" => "<li class='next'>",
			"next_tag_close" => "</li>",
			"last_tag_open" => "<li>",
			"last_tag_close" => "</li>",
			"cur_tag_open" => "<li class='active'><a href='#'>",
			"cur_tag_close" => "</a></li>",
			"num_tag_open" => "<li>",
			"num_tag_close" => "</li>"
		);

		$this->pagination->initialize($config);

		$data['pagination'] = $this->pagination->create_links();

		$offset = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$data['usuarios'] = $this->Usuarios_model->GetAll('nome','asc',$config['per_page'],$offset);

		$this->load->view('home',$data);
	}
}
