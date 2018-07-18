<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Application_model extends CI_Model {
    
    public function get_applications() {
        
        $query = $this->db->get(DB_PREFIX .'applications');
        if ($query->num_rows()) {
            return $query->result_array();
        }else{
            return array();
        }
    }
    
    public function get_application($a_id){
        $mydata = array('data' => array(),'images' => array(),'cv' => array(),'others' => array());
        
        $query = $this->db->where('id',$a_id)
                ->get(DB_PREFIX .'applications');
        if ($query->num_rows()) {
            $mydata['data'] = json_decode(json_encode($query->first_row()), True);
            
            $query1 = $this->db->where(array(
                    "application_id" => $a_id,
                    "type" => "cv"
                    ))->get(DB_PREFIX .'application_data');
            if ($query1->num_rows())
                $mydata['cv'] = json_decode(json_encode($query1->first_row()), True);
                
            $query2 = $this->db->where(array(
                    "application_id" => $a_id,
                    "type" => "images"
                    ))->get(DB_PREFIX .'application_data');
            if ($query2->num_rows())
                $mydata['images'] = $query2->result_array();
                
            $query3 = $this->db->where(array(
                    "application_id" => $a_id,
                    "type" => "others"
                    ))->get(DB_PREFIX .'application_data');
            if ($query3->num_rows())
                $mydata['others'] = $query3->result_array();

        }
        
        return $mydata;
    }
    
}

?>
