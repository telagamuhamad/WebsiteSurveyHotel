<?php defined('BASEPATH') OR die('No direct script access allowed');

class m_export extends CI_Model {

     public function getAll()
     {
          $this->db->select('*');
          $this->db->from('hotel');

          return $this->db->get();
     }

}