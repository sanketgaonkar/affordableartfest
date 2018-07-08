<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Publication_Media_model extends CI_Model {
    
    public function get_medias() {

        $result = $this->db->order_by('sort_order', 'ASC')
                ->get(DB_PREFIX .'media');
        if ($result->num_rows()) {
            return $result->result_array();
        }else{
            return array();
        }
    }
    
    public function get_publications() {

        $result = $this->db->order_by('sort_order', 'ASC')
                ->get(DB_PREFIX .'publication');
        if ($result->num_rows()) {
            return $result->result_array();
        }else{
            return array();
        }
    }

}

?>
