<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Art_model extends CI_Model {
    
    public function get_artists() {

        $result = $this->db->order_by('sort_order', 'ASC')
                ->get(DB_PREFIX.'artist');
        if ($result->num_rows()) {
            return $result->result_array();
        }else{
            return array();
        }
    }
    
    public function get_categories() {

        $result = $this->db->order_by('sort_order', 'ASC')
                ->get(DB_PREFIX.'category');
        if ($result->num_rows()) {
            return $result->result_array();
        }else{
            return array();
        }
    }
    
    public function get_arts() {

        $result = $this->db->order_by('sort_order', 'ASC')
                ->get(DB_PREFIX.'artist_images');
        if ($result->num_rows()) {
            return $result->result_array();
        }else{
            return array();
        }
    }
    
    public function get_artist($a_id) {

        $result = $this->db->order_by('sort_order', 'ASC')
                ->get(DB_PREFIX.'artist');
        if ($result->num_rows()) {
            return json_decode(json_encode($result->first_row()), True);
        }else{
            return array();
        }
    }
    
    public function get_category($c_id) {

        $result = $this->db->order_by('sort_order', 'ASC')
                ->get(DB_PREFIX.'category');
        if ($result->num_rows()) {
            return json_decode(json_encode($result->first_row()), True);
        }else{
            return array();
        }
    }
    
    public function get_art($a_id) {

        $result = $this->db->order_by('sort_order', 'ASC')
                ->get(DB_PREFIX.'artist_images');
        if ($result->num_rows()) {
            return json_decode(json_encode($result->first_row()), True);
        }else{
            return array();
        }
    }
    
    public function delete_artist($a_id) {

        $this->db->where('id', $a_id);
        $this->db->delete(DB_PREFIX.'artist'); 
        return TRUE;
    }
    
    public function delete_category($c_id) {

        $this->db->where('id', $c_id);
        $this->db->delete(DB_PREFIX.'category'); 
        return TRUE;
    }
    
    public function delete_art($a_id) {

        $this->db->where('id', $a_id);
        $this->db->delete(DB_PREFIX.'artist_images'); 
        return TRUE;
    }

}

?>
