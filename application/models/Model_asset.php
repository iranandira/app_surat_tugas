<?php 

class Model_asset extends CI_Model
{
        public function hitungJumlahSurat()
    {   
        $query = $this->db->get('tbl_surat');
        if($query->num_rows()>0)
        {
        return $query->num_rows();
        }
        else
        {
        return 0;
        }
    }
    
        public function hitungjumlahadmin()
    {   
        $query = $this->db->get('admin');
        if($query->num_rows()>0)
        {
        return $query->num_rows();
        }
        else
        {
        return 0;
        }
    }
}