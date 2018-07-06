<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Team_model extends CI_Model {

    public function get_team() {

        $result = $this->db->order_by('sort_order', 'ASC')->get('mog_team');
        if ($result->num_rows()) {
            return $result->result_array();
        }else{
            return array();
        }
    }

    public function get_team_member($team_id) {

        $result = $this->db->where('id', $team_id)->get('mog_team');
        if ($result->num_rows()) {
            return json_decode(json_encode($result->first_row()), True);
        }else{
            return array();
        }
        
    }

    public function add_edit_team_member($team_arr) {

        $my_data = array(
            "Name"=>$team_arr['Name'],
            "Designation"=>$team_arr['Designation'],
            "Description"=>$team_arr['Description'],
            "sort_order"=>$team_arr['sort_order'],
        );
        
        $config['upload_path'] = 'assets/images/team/';
        $config['allowed_types'] = 'jpg|jpeg|png|gif';
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if($this->upload->do_upload('image')){
            $fileData = $this->upload->data();
            $my_data['image'] = $fileData['file_name'];
        }
        
        if(!empty($team_arr['team_id'])){
            $this->db->where('id', $team_arr['team_id']);
            $this->db->update(DB_PREFIX.'team', $my_data); 
            return TRUE;
        }else{  
            $this->db->insert(DB_PREFIX.'team', $my_data);
            if($this->db->affected_rows() > 0) {
                return TRUE;
            }
        }
        
        return FALSE;
        
    }
    
    public function delete_team_member($team_id) {

        $this->db->where('id', $team_id);
        $this->db->delete(DB_PREFIX.'team'); 
        return TRUE;
        
    }

}

?>
