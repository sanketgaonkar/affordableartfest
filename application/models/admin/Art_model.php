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

        $result = $this->db->select(DB_PREFIX."artist_images.*,".DB_PREFIX."category.Name as category,".DB_PREFIX."artist.Name as artist")
                ->from(DB_PREFIX.'artist_images')
                ->join(DB_PREFIX.'category',DB_PREFIX.'category.id='.DB_PREFIX.'artist_images.category_id')
                ->join(DB_PREFIX.'artist',DB_PREFIX.'artist.id='.DB_PREFIX.'artist_images.artist_id')
                ->order_by(DB_PREFIX.'artist_images.sort_order', 'ASC')
                ->get();
        if ($result->num_rows()) {
            return $result->result_array();
        }else{
            return array();
        }
    }
    
    public function get_artist($a_id) {

        $result = $this->db->order_by('sort_order', 'ASC')
                ->where('id='.$a_id)
                ->get(DB_PREFIX.'artist');
        if ($result->num_rows()) {
            return json_decode(json_encode($result->first_row()), True);
        }else{
            return array();
        }
    }
    
    public function get_category($c_id) {

        $result = $this->db->order_by('sort_order', 'ASC')
                ->where('id='.$c_id)
                ->get(DB_PREFIX.'category');
        if ($result->num_rows()) {
            return json_decode(json_encode($result->first_row()), True);
        }else{
            return array();
        }
    }
    
    public function get_art($a_id) {

        $result = $this->db->order_by('sort_order', 'ASC')
                ->where('id='.$a_id)
                ->get(DB_PREFIX.'artist_images');
        if ($result->num_rows()) {
            return json_decode(json_encode($result->first_row()), True);
        }else{
            return array();
        }
    }
    
    public function add_edit_arts($art_arr) {

        $my_data = array(
            "Name"=>$art_arr['Name'],
            "Description"=>$art_arr['Description'],
            "Price"=>$art_arr['Price'],
            "Medium"=>$art_arr['Medium'],
            "Size"=>$art_arr['Size'],
            "Year"=>$art_arr['Year'],
            "Weight"=>$art_arr['Weight'],
            "artist_id"=>$art_arr['artist_id'],
            "category_id"=>$art_arr['category_id'],
            "sort_order"=>$art_arr['sort_order'],
        );
        
        $config['upload_path'] = 'assets/images/artist_gallery/';
        $config['allowed_types'] = 'jpg|jpeg|png|gif';
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if($this->upload->do_upload('image')){
            $fileData = $this->upload->data();
            $my_data['image'] = $fileData['file_name'];
        }
        
        if(!empty($art_arr['a_id'])){
            $this->db->where('id', $art_arr['a_id']);
            $this->db->update(DB_PREFIX.'artist_images', $my_data); 
            return TRUE;
        }else{  
            $this->db->insert(DB_PREFIX.'artist_images', $my_data);
            if($this->db->affected_rows() > 0) {
                return TRUE;
            }
        }
        
        return FALSE;
        
    }
    
    public function add_edit_category($art_arr) {

        $my_data = array(
            "Name"=>$art_arr['Name'],
            "sort_order"=>$art_arr['sort_order'],
        );
        
        if(!empty($art_arr['c_id'])){
            $this->db->where('id', $art_arr['c_id']);
            $this->db->update(DB_PREFIX.'category', $my_data); 
            return TRUE;
        }else{  
            $this->db->insert(DB_PREFIX.'category', $my_data);
            if($this->db->affected_rows() > 0) {
                return TRUE;
            }
        }
        
        return FALSE;
        
    }
    
    public function add_edit_artist($art_arr) {

        $my_data = array(
            "Name"=>$art_arr['Name'],
            "Description"=>$art_arr['Description'],
            "sort_order"=>$art_arr['sort_order'],
        );
        
        $config['upload_path'] = 'assets/images/artist/';
        $config['allowed_types'] = 'jpg|jpeg|png|gif';
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if($this->upload->do_upload('image')){
            $fileData = $this->upload->data();
            $my_data['image'] = $fileData['file_name'];
        }
        
        if(!empty($art_arr['a_id'])){
            $this->db->where('id', $art_arr['a_id']);
            $this->db->update(DB_PREFIX.'artist', $my_data); 
            return TRUE;
        }else{  
            $this->db->insert(DB_PREFIX.'artist', $my_data);
            if($this->db->affected_rows() > 0) {
                return TRUE;
            }
        }
        
        return FALSE;
        
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
