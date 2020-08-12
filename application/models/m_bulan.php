<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class m_bulan extends CI_model
{
	public function getAll($bulan)
    {
        
        return $this->db->get_where('berkas',array('bulan'=> $bulan))->result_array();


    }
    
    public function countAlluser()
    {
        return $this->db->get('berkas')->num_rows();
        
    }
    
}