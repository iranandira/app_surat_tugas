<?php 

class M_surat extends CI_Model
{
    public function data_surat()
    {
        return $this->db->get('tbl_surat')->result();
    }

    public function save_surat()
    {
        // $no_surat = $this->input->post('no_surat');
        $nama = $this->input->post('nama');
        $nuptk = $this->input->post('nuptk');
        $jabatan = $this->input->post('jabatan');
        $tujuan = $this->input->post('tujuan');
        $tanggal = $this->input->post('tanggal');
        $tempat = $this->input->post('tempat');
        // $kepala_sekolah = $this->input->post('kepala_sekolah');

        $data= array(
            // 'no_surat' => $no_surat,
            'nama' => $nama,
            'nuptk' => $nuptk,
            'jabatan' => $jabatan,
            'tujuan' => $tujuan,
            'tanggal' => $tanggal,
            'tempat' =>$tempat
            // 'kepala_sekolah' =>$kepala_sekolah
        );
        $this->db->insert('tbl_surat',$data);
    }

    function hapus($id_surat)
    {
        $this->db->delete('tbl_surat', array('id_surat' => $id_surat));
    }

    function edit_surat($id_surat)
    {
       return $this->db->get_where('tbl_surat', array('id_surat' => $id_surat))->result();
    }

    function simpan_editsurat()
    {
        // $nosurat = $this->input->post('no_surat');
        $nama = $this->input->post('nama');
        $nuptk = $this->input->post('nuptk');
        $jabatan = $this->input->post('jabatan');
        $tujuan = $this->input->post('tujuan');
        $tanggal = $this->input->post('tanggal');
        $tempat = $this->input->post('tempat');
        // $kepala_sekolah = $this->input->post('kepala_sekolah');
        $id_surat = $this->input->post('id_surat');

        $data= array(
            // 'no_surat' => $nosurat,
            'nama' => $nama,
            'nuptk' => $nuptk,
            'jabatan' => $jabatan,
            'tujuan' => $tujuan,
            'tanggal' => $tanggal,
            'tempat' => $tempat,
            // 'kepala_sekolah' => $kepala_sekolah,
        );
        $this->db->where('id_surat', $id_surat);
        $this->db->update('tbl_surat', $data);
    }

    function dataprint($id_surat)
    {
        return $this->db->get_where('tbl_surat', array('id_surat' => $id_surat))->result();
    }

    function hisrotysurat()
    {
        $this->db->select('*');
        $this->db->from('tbl_surat');
        $this->db->group_by('nama'); 
        $query = $this->db->get(); 
        return $query->result();
    }

    function hitungSuratKeluar()
    {
        $this->db->select('nama, COUNT(id_surat) as total');
        $this->db->group_by('nama'); 
        $this->db->order_by('total', 'desc'); 
        $this->db->get('tbl_surat');
     }
}