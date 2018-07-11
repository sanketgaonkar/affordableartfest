<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home_Banners_model extends CI_Model {
    
    public function get_banners() {

        $result = $this->db->order_by('sort_order', 'ASC')
                ->get(DB_PREFIX .'home_banners');
        if ($result->num_rows()) {
            return $result->result_array();
        }else{
            return array();
        }
    }

    public function get_banner($b_id) {

        $result = $this->db->where('id',$b_id)
                ->get(DB_PREFIX .'home_banners');
        if ($result->num_rows()) {
            return json_decode(json_encode($result->first_row()), True);
        }else{
            return array();
        }

    }
    
    public function add_edit_home_banner($b_arr){
        
        $my_data = array(
            "Link"=>$b_arr['Link'],
            "Active"=>$b_arr['Active'],
            "sort_order"=>$b_arr['sort_order'],
        );
        
        $config['upload_path'] = 'assets/images/home_banners';
        $config['allowed_types'] = 'jpg|jpeg|png|gif';
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if($this->upload->do_upload('image')){
            $fileData = $this->upload->data();
            $my_data['image'] = $fileData['file_name'];
        }
        
        if(!empty($b_arr['b_id'])){
            $this->db->where('id', $b_arr['b_id']);
            $this->db->update(DB_PREFIX.'home_banners', $my_data); 
            return TRUE;
        }else{  
            $this->db->insert(DB_PREFIX.'home_banners', $my_data);
            if($this->db->affected_rows() > 0) {
                return TRUE;
            }
        }
        
        return FALSE;
    }
    
    public function delete_banner($b_id) {

        $this->db->where('id', $b_id);
        $this->db->delete(DB_PREFIX.'home_banners'); 
        return TRUE;
        
    }

}

?>
