<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home_Banners_model extends CI_Model {
    
    public function get_banners() {

        $result = $this->db->order_by('sort_order', 'ASC')
                ->where('Active=1')
                ->get(DB_PREFIX .'home_banners');
        if ($result->num_rows()) {
            return $result->result_array();
        }else{
            return array();
        }
    }

}

?>
