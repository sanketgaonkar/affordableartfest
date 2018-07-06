<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class GAAF_Gallery_model extends CI_Model {
    
    public function get_arts() {

        $result = $this->db->order_by('sort_order', 'ASC')
                ->get(DB_PREFIX.'gaaf');
        if ($result->num_rows()) {
            return $result->result_array();
        }else{
            return array();
        }
    }
    
    public function get_art($gaaf_id) {

        $result = $this->db->where('id', $gaaf_id)
                ->get(DB_PREFIX.'gaaf');
        if ($result->num_rows()) {
            return json_decode(json_encode($result->first_row()), True);
        }else{
            return array();
        }
    }
    
    
    public function add_edit_gaaf($gaaf_arr) {

        $my_data = array(
            "Name"=>$gaaf_arr['Name'],
            "sort_order"=>$gaaf_arr['sort_order'],
        );
        
        $config['upload_path'] = 'assets/images/gaaf/';
        $config['allowed_types'] = 'jpg|jpeg|png|gif';
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if($this->upload->do_upload('image')){
            $fileData = $this->upload->data();
            $my_data['image'] = $fileData['file_name'];
        }
        
        if(!empty($gaaf_arr['team_id'])){
            $this->db->where('id', $gaaf_arr['team_id']);
            $this->db->update(DB_PREFIX.'gaaf', $my_data); 
            return TRUE;
        }else{  
            $this->db->insert(DB_PREFIX.'gaaf', $my_data);
            if($this->db->affected_rows() > 0) {
                return TRUE;
            }
        }
        
        return FALSE;
        
    }
    
    public function delete_gaaf($gaaf_id) {

        $this->db->where('id', $gaaf_id);
        $this->db->delete(DB_PREFIX.'gaaf'); 
        return TRUE;
        
    }

}

?>
