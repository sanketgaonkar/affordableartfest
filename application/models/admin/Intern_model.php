<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Intern_model extends CI_Model {

    public function get_jobs() {

        $result = $this->db->order_by('sort_order', 'ASC')
                ->get(DB_PREFIX .'intern');
        if ($result->num_rows()) {
            return $result->result_array();
        }else{
            return array();
        }
    }
    
    public function get_job($i_id) {

        $result = $this->db->where('id', $i_id)
                ->get(DB_PREFIX.'intern');
        if ($result->num_rows()) {
            return json_decode(json_encode($result->first_row()), True);
        }else{
            return array();
        }
    }

    public function add_edit_intern($i_arr) {
        
        $my_data = array(
            "Vacancy"=>$i_arr['Vacancy'],
            "Description"=>$i_arr['Description'],
            "Job_Role"=>$i_arr['Job_Role'],
            "Requirements"=>$i_arr['Requirements'],
            "Salary"=>$i_arr['Salary'],
            "Application_Process"=>$i_arr['Application_Process'],
            "Working_Hours"=> $i_arr['Working_Hours'],
            "sort_order"=>$i_arr['sort_order'],
        );
        
        $config['upload_path'] = 'assets/images/intern';
        $config['allowed_types'] = 'jpg|jpeg|png|gif';
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if($this->upload->do_upload('image')){
            $fileData = $this->upload->data();
            $my_data['image'] = $fileData['file_name'];
        }
        
        if(!empty($i_arr['i_id'])){
            $this->db->where('id', $i_arr['i_id']);
            $this->db->update(DB_PREFIX.'intern', $my_data); 
            return TRUE;
        }else{  
            $this->db->insert(DB_PREFIX.'intern', $my_data);
            if($this->db->affected_rows() > 0) {
                return TRUE;
            }
        }
        
        return FALSE;
        
    }
    
    public function delete_intern($i_id) {

        $this->db->where('id', $i_id);
        $this->db->delete(DB_PREFIX.'intern'); 
        return TRUE;
        
    }
    
}

?>
