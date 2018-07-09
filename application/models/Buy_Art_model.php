<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Buy_Art_model extends CI_Model {
    
    public function get_arts() {

        $result = $this->db->select(DB_PREFIX."artist_images.*,".DB_PREFIX."category.Name as category,".DB_PREFIX."artist.Name as artist")
                ->from(DB_PREFIX.'artist_images')
                ->join(DB_PREFIX.'category',DB_PREFIX.'category.id='.DB_PREFIX.'artist_images.category_id')
                ->join(DB_PREFIX.'artist',DB_PREFIX.'artist.id='.DB_PREFIX.'artist_images.artist_id')
                ->order_by(DB_PREFIX.'artist_images.sort_order', 'ASC')
                ->order_by(DB_PREFIX.'category.sort_order', 'ASC')
                ->get();
        echo $this->db->last_query();
        if ($result->num_rows()) {
            return $result->result_array();
        }else{
            return array();
        }
    }

}

?>
