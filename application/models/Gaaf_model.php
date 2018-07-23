<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Gaaf_model extends CI_Model {
    
    public function get_gaaf() {

        $result = $this->db->order_by('sort_order', 'ASC')
                ->get(DB_PREFIX. 'gaaf');
        if ($result->num_rows()) {
            return $result->result_array();
        }else{
            return array();
        }
    }

}

?>
