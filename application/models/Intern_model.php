<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Intern_model extends CI_Model {

    public function get_jobs() {

        $result = $this->db->order_by('sort_order', 'ASC')
                ->get(DB_PREFIX . 'intern');
        if ($result->num_rows()) {
            return $result->result_array();
        } else {
            return array();
        }
    }

    public function get_job($j_id) {

        $result = $this->db->where('id', $j_id)
                ->get(DB_PREFIX . 'intern');
        if ($result->num_rows()) {
            return json_decode(json_encode($result->first_row()), True);
        } else {
            return array();
        }
    }

}

?>
