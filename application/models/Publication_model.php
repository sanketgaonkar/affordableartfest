<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Publication_model extends CI_Model {
    
    public function get_publications() {

        $result = $this->db->order_by('sort_order', 'ASC')
                ->get(DB_PREFIX .'publications');
        if ($result->num_rows()) {
            return $result->result_array();
        }else{
            return array();
        }
    }

}

?>
