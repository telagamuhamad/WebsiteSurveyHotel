<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_bulan extends CI_model
{
    public function getTahun()
    {
        $this->db->distinct();
        $this->db->order_by('tahun', 'asc');
        $this->db->select('tahun');
        return $this->db->get('berkas')->result_array();
    }
    public function getAll($bulan, $tahun)
    {
        if ($tahun != "") {
            $this->db->where("tahun", $tahun);
        }
        $this->db->where("bulan", $bulan);
        return $this->db->count_all_results("berkas");
    }
    public function filter($limit, $start, $order_field, $order_ascdesc, $bulan, $tahun, $search)
    {
        if ($tahun != "") {
            $this->db->where("tahun", $tahun);
        }
        $this->db->limit($limit, $start);
        $this->db->like('pengirim', $search);
        $this->db->order_by($order_field, $order_ascdesc);

        $this->db->where("bulan", $bulan);
        return $this->db->get('berkas')->result_array();
    }
    public function count_filter($bulan, $tahun, $search)
    {
        if ($tahun != "") {
            $this->db->where("tahun", $tahun);
        }
        $this->db->like('pengirim', $search);
        $this->db->where("bulan", $bulan);
        return $this->db->get('berkas')->num_rows();
    }
}
