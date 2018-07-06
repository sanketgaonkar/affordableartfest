<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Team_model extends CI_Model {

    public function get_team() {

        $result = $this->db->order_by('sort_order', 'ASC')->get('mog_team');
        if ($result->num_rows()) {
            return $result->result_array();
        }else{
            return array();
        }
    }

}

?>
