<?php 

class Login_model extends CI_Model
{
    function tambah_data()
    {
        $nama = $this->input->post('nama_lengkap');
        $no_hp = $this->input->post('no_hp');
        $alamat = $this->input->post('alamat_lengkap');
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        //cek apakah email sudah ada
        $cekemail = $this->db->get_where('admin', array('email'=>$email))->result();
        if(empty($cekemail)){
            //insert data user baru
            $data = array(
                'nama_lengkap' => $nama,
                'no_hp' => $no_hp,
                'alamat_lengkap' => $alamat,
                'email' => $email,
                'password' => md5($password),
                'level' => 'admin'
            );

            $data = $this->db->insert('admin', $data);
            return $data;
        }
        
    }

    function cekuser()
    {
        $email = $this->input->post('email');
        $password = md5($this->input->post('password'));

        return $this->db->get_where('admin', array('email' => $email, 'password' => $password))->result();
        
    }

    function list_admin()
    {
        return $this->db->get('admin')->result();
    }

    public function save_list()
    {
        $nama = $this->input->post('nama_lengkap');
        $no_hp = $this->input->post('no_hp');
        $alamat = $this->input->post('alamat_lengkap');
        $email = $this->input->post('email');
        $password = $this->input->post('password');


        $data= array(
            'nama_lengkap' => $nama,
            'no_hp' => $no_hp,
            'alamat_lengkap' => $alamat,
            'email' => $email,
            'password' => md5($password)
        );
        $this->db->insert('admin',$data);
    }

    function hapus_list($id)
    {
        $this->db->delete('admin', array('id' => $id));
    }


    function editlist($id)
    {
       return $this->db->get_where('admin', array('id' => $id))->result();
    }

    function save_editlist()
    {
        $nama = $this->input->post('nama_lengkap');
        $no_hp = $this->input->post('no_hp');
        $alamat = $this->input->post('alamat_lengkap');
        $email = $this->input->post('email');
        $id = $this->input->post('id');

        $data= array(
            'nama_lengkap' => $nama,
            'no_hp' => $no_hp,
            'alamat_lengkap' => $alamat,
            'email' => $email
        );

        $this->db->where('id', $id);
        $this->db->update('admin', $data);
    }

    function gantipass($gantipass,$where)
    {        
        $this->db->update('admin', $gantipass,$where);
    }
}