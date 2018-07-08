<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Publication_Media_model extends CI_Model {

    public function get_publications() {

        $result = $this->db->order_by('sort_order', 'ASC')
                ->get( DB_PREFIX .'publication');
        if ($result->num_rows()) {
            return $result->result_array();
        }else{
            return array();
        }
    }

    public function get_publication($p_id) {

        $result = $this->db->where('id', $p_id)->get(DB_PREFIX.'publication');
        if ($result->num_rows()) {
            return json_decode(json_encode($result->first_row()), True);
        }else{
            return array();
        }
        
    }

    public function add_edit_publication($p_arr) {
        $tmp_date = explode("/", $p_arr['Date']);
        
        $my_data = array(
            "Description"=>$p_arr['Description'],
            "Date"=> $tmp_date[2]."-".$tmp_date[1]."-".$tmp_date[0],
            "sort_order"=>$p_arr['sort_order'],
        );
        
        $config['upload_path'] = 'assets/publications/';
        $config['allowed_types'] = 'pdf';
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if($this->upload->do_upload('Link')){
            $fileData = $this->upload->data();
            $my_data['Link'] = $fileData['file_name'];
        }else{
            if(empty($p_arr['p_id'])){
                return array("error"=>"Select only pdf file");
            }
        }
        
        $config['upload_path'] = 'assets/images/publication/';
        $config['allowed_types'] = 'jpg|jpeg|png|gif';
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if($this->upload->do_upload('image')){
            $fileData = $this->upload->data();
            $my_data['image'] = $fileData['file_name'];
        }
        
        if(!empty($p_arr['p_id'])){
            $this->db->where('id', $p_arr['p_id']);
            $this->db->update(DB_PREFIX.'publication', $my_data); 
            return TRUE;
        }else{  
            $this->db->insert(DB_PREFIX.'publication', $my_data);
            if($this->db->affected_rows() > 0) {
                return TRUE;
            }
        }
        
        return FALSE;
        
    }
    
    public function delete_publication($p_id) {

        $this->db->where('id', $p_id);
        $this->db->delete(DB_PREFIX.'publication'); 
        return TRUE;
        
    }
    
    public function get_medias() {

        $result = $this->db->order_by('sort_order', 'ASC')
                ->get( DB_PREFIX .'media');
        if ($result->num_rows()) {
            return $result->result_array();
        }else{
            return array();
        }
    }

    public function get_media($p_id) {

        $result = $this->db->where('id', $p_id)->get(DB_PREFIX.'media');
        if ($result->num_rows()) {
            return json_decode(json_encode($result->first_row()), True);
        }else{
            return array();
        }
        
    }

    public function add_edit_media($p_arr) {
        $tmp_date = explode("/", $p_arr['Date']);
        $config['upload_path'] = 'assets/images/media/';
        
        $my_data = array(
            "Link"=>$p_arr['Link'],
            "Description"=>$p_arr['Description'],
            "Date"=> $tmp_date[2]."-".$tmp_date[1]."-".$tmp_date[0],
            "sort_order"=>$p_arr['sort_order'],
        );
        
        $config['allowed_types'] = 'jpg|jpeg|png|gif';
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if($this->upload->do_upload('image')){
            $fileData = $this->upload->data();
            $my_data['image'] = $fileData['file_name'];
        }
        
        if(!empty($p_arr['p_id'])){
            $this->db->where('id', $p_arr['p_id']);
            $this->db->update(DB_PREFIX.'media', $my_data); 
            return TRUE;
        }else{  
            $this->db->insert(DB_PREFIX.'media', $my_data);
            if($this->db->affected_rows() > 0) {
                return TRUE;
            }
        }
        
        return FALSE;
        
    }
    
    public function delete_media($p_id) {

        $this->db->where('id', $p_id);
        $this->db->delete(DB_PREFIX.'media'); 
        return TRUE;
        
    }

}

?>
