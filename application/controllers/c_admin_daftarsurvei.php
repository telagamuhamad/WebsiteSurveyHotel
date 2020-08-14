<?php
defined('BASEPATH') or exit('No direct script access allowed');

class c_admin_daftarsurvei extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("m_daftarsurvei");
        $this->load->model("m_bulan");
        $this->load->library('form_validation');
        $this->load->helper('download');
        $this->load->library('pagination');
        if (!$this->session->userdata('username_admin')) {
            redirect('c_login');
        } else {
            $hotel = $this->db->get('hotel')->row_array();

            if ($this->session->userdata('username_hotel') == $hotel) {
                redirect('c_block');
            }
        }
    }

    public function index()
    {


        $data['admin'] = $this->db->get_where('admin', ['username' => $this->session->userdata('username_admin')])->row_array();

        //fitur searching

        if ($this->input->post('submit')) {
            $data['cariberkas'] = $this->input->post('cariberkas');
            $this->session->set_userdata('cariberkas', $data['cariberkas']);
        } else {
            $data['cariberkas'] = $this->session->userdata('cariberkas');
        }


        //config

        $this->db->like('bulan', $data['cariberkas']);
        $this->db->or_like('pengirim', $data['cariberkas']);
        $this->db->or_like('asal_hotel', $data['cariberkas']);
        $this->db->or_like('tahun', $data['cariberkas']);
        $this->db->from('berkas');
        $config['base_url'] = 'http://localhost/SJAH-Online/c_admin_daftarsurvei/index';
        $config['total_rows'] = $this->db->count_all_results();
        $config['per_page'] = 4;


        //initialize

        $this->pagination->initialize($config);


        if ($data['admin']) {
            $data["start"] = $this->uri->segment(3);
            $data["data_survei"] = $this->m_daftarsurvei->getdata($config['per_page'], $data['start'], $data['cariberkas']);
            $data['konten'] = "admin/daftarsurvei";
            $this->load->view('admin/v_homeadmin', $data);
        } else {
            redirect('c_login');
        }
    }
    public function delete($id_berkas)
    {
        if ($this->session->userdata('username_admin') == "admin1") {

            $data['berkas'] = $this->db->get_where('berkas', ['id_berkas' => $id_berkas])->row_array();

            $berkas = $data['berkas']['file'];

            unlink(FCPATH . 'assets/berkas/' . $berkas);

            $this->db->where('id_berkas', $id_berkas);
            $this->db->delete('berkas');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Data Berhasil di hapus! </div>');
            redirect('c_admin_daftarsurvei');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Maaf,hanya admin utama yang dapat menghapus data! </div>');
            redirect('c_admin_daftarsurvei');
        }
    }
    public function move($bulan)
    {
        $datsa['admin'] = $this->db->get_where('admin', ['username' => $this->session->userdata('username_admin')])->row_array();
        $datsa['tahun'] = $this->m_bulan->getTahun();
        $datsa['bulan'] = $bulan;
        $this->load->view('admin/v_bulan', $datsa);
    }
    public function bulan($bulan)
    {
        $data['admin'] = $this->db->get_where('admin', ['username' => $this->session->userdata('username_admin')])->row_array();

        if ($data['admin']) {
            $search = $_POST['search']['value'];
            $limit = $_POST['length'];
            $start = $_POST['start'];
            $status = $this->input->post('searchStatus');
            $order_index = $_POST['order'][0]['column'];
            $order_field = $_POST['columns'][$order_index]['data'];
            $order_ascdesc = $_POST['order'][0]['dir'];
            $sql_total = $this->m_bulan->getAll($bulan, $status);
            $sql_data = $this->m_bulan->filter($limit, $start, $order_field, $order_ascdesc, $bulan, $status, $search);
            $sql_filter = $this->m_bulan->count_filter($bulan, $status, $search);
            $callback = array(
                'draw' => $_POST['draw'],
                'recordsTotal' => $sql_total,
                'recordsFiltered' => $sql_filter,
                'data' => $sql_data
            );

            header('Content-Type: application/json');
            echo json_encode($callback);
        } else {
            redirect('c_login');
        }
    }
}
