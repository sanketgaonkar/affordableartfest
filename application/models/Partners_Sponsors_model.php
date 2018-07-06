<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Partners_Sponsors_model extends CI_Model {
    
    public function get_partners_sponsors() {

        $arr = array();
        $result = $this->db->order_by("level", "asc")
                ->order_by('sort_order', 'ASC')
                ->get(DB_PREFIX.'partners_sponsors');
        if ($result->num_rows()) {
            foreach ($result->result_array() as $k => $v){
                $arr[$v['Level']][] = $v;
            }
        }
        return $arr;
    }

}

?>
