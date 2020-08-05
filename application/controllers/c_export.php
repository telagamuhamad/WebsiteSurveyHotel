<?php defined('BASEPATH') OR die('No direct script access allowed');

require('./application/third_party/phpoffice/vendor/autoload.php');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class c_export extends CI_Controller {

     public function __construct()
     {
          parent::__construct();
         $this->load->model('m_export');
     }

     public function index()
     {
          $data['semua_hotel'] = $this->m_export->getAll()->result();
          $this->load->view('daftarhotel', $data);
     }

     public function export()
     {
          $semua_hotel = $this->m_export->getAll()->result();

          $spreadsheet = new Spreadsheet;

          $spreadsheet->setActiveSheetIndex(0)
                      ->setCellValue('A1', 'No')
                      ->setCellValue('B1', 'Nama Responden')
                      ->setCellValue('C1', 'Nama Hotel')
                      ->setCellValue('D1', 'Username')
                      ->setCellValue('E1', 'Password')
                      ->setCellValue('F1', 'Kode Rahasia');


          $kolom = 2;
          $nomor = 1;
          foreach($semua_hotel as $hotel) {

               $spreadsheet->setActiveSheetIndex(0)
                           ->setCellValue('A' . $kolom, $nomor)
                           ->setCellValue('B' . $kolom, $hotel->nama_responden)
                           ->setCellValue('C' . $kolom, $hotel->nama_hotel)
                           ->setCellValue('D' . $kolom, $hotel->user)
                           ->setCellValue('E' . $kolom, $hotel->password)
                           ->setCellValue('F' . $kolom, $hotel->kode);

               $kolom++;
               $nomor++;

          }

          $writer = new Xlsx($spreadsheet);

          header('Content-Type: application/vnd.ms-excel');
	  header('Content-Disposition: attachment;filename="DataHotelVHTS.xlsx"');
	  header('Cache-Control: max-age=0');

	  $writer->save('php://output');
     }
}