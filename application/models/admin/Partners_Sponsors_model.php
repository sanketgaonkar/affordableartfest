<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Partners_Sponsors_model extends CI_Model {
    
    public function get_partners_sponsors() {

        $arr = array(
            "level1" => array(),
            "level2" => array(),
            "level3" => array(),
            "level4" => array(),
        );
         $result = $this->db->order_by("level", "asc")
                ->order_by('sort_order', 'ASC')
                ->get(DB_PREFIX.'partners_sponsors');
        if ($result->num_rows()) {
            foreach ($result->result_array() as $k => $v){
                $arr['level'.$v['Level']][] = $v;
            }
        }
        return $arr;
    }
    
    public function get_partner_sponsor($ps_id) {

        $result = $this->db->where('id', $ps_id)
                ->get(DB_PREFIX.'partners_sponsors');
        if ($result->num_rows()) {
            return json_decode(json_encode($result->first_row()), True);
        }else{
            return array();
        }
    }
    
    
    public function add_edit_partners_sponsors($ps_arr) {

        $my_data = array(
            "Name"=>$ps_arr['Name'],
            "Title"=>$ps_arr['Title'],
            "Description"=>(isset($ps_arr['Description'])?$ps_arr['Description']:""),
            "sort_order"=>$ps_arr['sort_order'],
        );
        
        $config['upload_path'] = 'assets/images/partners_sponsors/';
        $config['allowed_types'] = 'jpg|jpeg|png|gif';
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if($this->upload->do_upload('image')){
            $fileData = $this->upload->data();
            $my_data['image'] = $fileData['file_name'];
        }
        
        if(!empty($ps_arr['ps_id'])){
            $this->db->where('id', $ps_arr['ps_id']);
            $this->db->update(DB_PREFIX.'partners_sponsors', $my_data); 
            return TRUE;
        }else{  
            $my_data['Level'] = $ps_arr['level'];
            $this->db->insert(DB_PREFIX.'partners_sponsors', $my_data);
            if($this->db->affected_rows() > 0) {
                return TRUE;
            }
        }
        return FALSE;
        
    }
    
    public function delete_partners_sponsors($ps_id) {
        if($ps_id == 1) return true;
        
        $this->db->where('id', $ps_id);
        $this->db->delete(DB_PREFIX.'partners_sponsors'); 
        return TRUE;
        
    }

}

?>
