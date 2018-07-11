<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Artist_Gallery_model extends CI_Model {
    
    public function get_artist() {

        $result = $this->db->order_by('sort_order', 'ASC')
                ->get('mog_artist');
        if ($result->num_rows()) {
            return $result->result_array();
        }else{
            return array();
        }
    }

    public function get_artist_gallery($artist_id) {

        $arr = array('artist_info' => array(),'images' => array());
        
        $result = $this->db->where('id',$artist_id)->get('mog_artist');
        if ($result->num_rows()) {
            $arr['artist_info'] = json_decode(json_encode($result->first_row()), True);
        }
        
        $result1 = $this->db->order_by('sort_order', 'ASC')
                ->where('artist_id', $artist_id)
                ->where('Active=1')
                ->get('mog_artist_images');
        if ($result1->num_rows()) {
            $arr['images'] = $result1->result_array();
        }
        
        return $arr;
    }
    
    public function get_artist_art($artist_id, $art_id) {

        $arr = array('artist_info' => array(),'image' => array());
        
        $result = $this->db->where('id',$artist_id)
                ->get('mog_artist');
        if ($result->num_rows()) {
            $arr['artist_info'] = json_decode(json_encode($result->first_row()), True);
        }
        
        $result1 = $this->db->where(array(
                    'id' => $art_id,
                    'artist_id' => $artist_id,
                ))
                ->get('mog_artist_images');
        if ($result1->num_rows()) {
            $arr['image'] = json_decode(json_encode($result1->first_row()), True);
        }
        
        return $arr;
    }

}

?>
