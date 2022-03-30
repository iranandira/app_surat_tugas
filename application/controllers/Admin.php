<?php 

class Admin extends CI_Controller
{
    function __construct(){
        parent::__construct();
        $this->load->model('M_surat');
        $this->load->model('Login_model','login');
        $this->load->model('Model_asset');

        if($_SESSION['level'] == '' or $_SESSION['level'] != 'admin') 
        {
            redirect('/');
        }  

    }

    function index()
    {
        $data['total_surat'] = $this->Model_asset->hitungJumlahSurat();
        $data['total_admin'] = $this->Model_asset->hitungjumlahadmin();
        $this->load->view('template/header');
        $this->load->view('admin/index',$data);
        $this->load->view('template/footer'); 
        
    }

    function datasurat()
    {
        $surat['datasurat'] = $this->M_surat->data_surat();
        $this->load->view('template/header');
        $this->load->view('admin/datasurat',$surat);
        $this->load->view('template/footer'); 
    }

   public function tambah_surat()
    {
        $this->load->view('template/header');
        $this->load->view('admin/tambah_surat');
        $this->load->view('template/footer'); 
    }

    function simpansurat()
    {
        $this->M_surat->save_surat();
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
        Data baru berhasil ditambahkan !
        </div>');
        redirect('Admin/datasurat');
    }

    function hapussurat($id_surat)
    {
        $this->M_surat->hapus($id_surat);
        $this->session->set_flashdata('hapus','<div class="alert alert-danger" role="alert">
        Data berhasil dihapus !
        </div>');
        redirect('Admin/datasurat');
    }

    function editsurat($id_surat)
    {
        $data['editsurat']= $this->M_surat->edit_surat($id_surat);
        $this->load->view('template/header');
        $this->load->view('admin/editsurat',$data);
        $this->load->view('template/footer');
    }

    function simpan_editsurat()
    {
        $this->M_surat->simpan_editsurat();
        $this->session->set_flashdata('edit','<div class="alert alert-info" role="alert">
        Data berhasil diedit !
        </div>');
        redirect('Admin/datasurat');
    }

    function list_admin()
    {
        $data['listadmin'] = $this->login->list_admin();
        $this->load->view('template/header');
        $this->load->view('admin/listadmin',$data);
        $this->load->view('template/footer');
    }

    function simpan_list()
    {
        $this->login->save_list();
        $this->session->set_flashdata('alert','<div class="alert alert-success" role="alert">
        Data baru berhasil ditambahkan !
        </div>');
        redirect('Admin/list_admin');
    }

    function hapuslist($id)
    {
        $this->login->hapus_list($id);
        $this->session->set_flashdata('hapus','<div class="alert alert-danger" role="alert" >
        Data berhasil dihapus !
        </div>');
        redirect('Admin/list_admin');
    }

    function editlist($id)
    {
        $data['editlist']= $this->login->editlist($id);
        $this->load->view('template/header');
        $this->load->view('admin/editlist',$data);
        $this->load->view('template/footer');
    }

    function simpan_editlist()
    {
        $this->login->save_editlist();
        redirect('Admin/list_admin');
    }


    
    function printsurat($id_surat)
    {
        $data['printsurat'] = $this->M_surat->dataprint($id_surat);
        $this->load->view('print_surat',$data);
    }

    public function kembaliadmin()
    {
        redirect('Admin/list_admin');
    }
    public function kembalisurat()
    {
        redirect('Admin/datasurat');
    }


    function ganti_password()
    {
        $this->load->view('template/header');
        $this->load->view('admin/ganti_password');
        $this->load->view('template/footer');
    }

    function gantipassword_aksi()
    {
        $id = $this->session->userdata('id');
        $passbaru = $this->input->post('passbaru');
        $konpass = $this->input->post('konpass');

        if($passbaru == $konpass){
            $gantipass = array(
                'password' => md5($passbaru)
            );
            $where = array(
                'id' => $id
            );
            $this->login->gantipass($gantipass,$where);
            redirect('Login/logout');
        }else{
            redirect('Home/ganti_password');
        } 
    }
    function Historysurat()
    {
        $this->load->view('template/header');
        $data['surat_keluar'] = $this->M_surat->hitungSuratKeluar();
        $data['hisrotysurat'] = $this->M_surat->hisrotysurat();
        $this->load->view('Historysurat',$data);
        $this->load->view('template/footer');
    }

    
}

