<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class GAAF_Gallery_model extends CI_Model {
    
    public function get_arts() {

        $result = $this->db->order_by('sort_order', 'ASC')
                ->get('mog_gaaf');
        if ($result->num_rows()) {
            return $result->result_array();
        }else{
            return array();
        }
    }

}

?>
