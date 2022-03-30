<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct()
	{
		parent::__construct();

		$this->load->model('Login_model','login');

	}

	public function index()
	{
		$this->load->view('login');
	}

	public function daftar()
	{
		$this->load->view('admin/daftar');
	}

    function proses_login()
	{
		$hasilcek = $this->login->cekuser(); 

		if($hasilcek){
			//data diri
			$sess_data['id'] = $hasilcek[0]->id;
			$sess_data['level'] = $hasilcek[0]->level;
			$sess_data['nama'] = $hasilcek[0]->nama_lengkap;

			$this->session->set_userdata($sess_data);

			if($sess_data['level'] == 'admin'){
				redirect (base_url('admin'));
			}else{
				redirect ('/');
			}

		}else{
			$this->session->set_flashdata('Pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert"> Username atau Password Salah! <button type="button" class="close" data-dismiss="alert" aria-label="Close" <span aria-hidden="true">&times;</span> </button> </div>');
			redirect('Login');
		}
	}

	function logout()
	{
		$this->session->sess_destroy();
		redirect('Login');
	}

	function simpan_daftar()
	{
		if($this->login->tambah_data()){
			
			redirect('/');
		}else{
			redirect(base_url('login/daftar'));
		}
	}

	function daftar_admin()
	{
		$this->load->view('template/header');
		$this->load->view('admin/tambah_admin');
		$this->load->view('template/footer'); 
	}
	
}