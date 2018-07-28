<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Application_Guidelines_model extends CI_Model {
    
    public function get_application_guidelines() {
        
        $arr = array("ag"=>"","gta"=>array(),"tac"=>array());
        
        $query = $this->db->where('type',1)
                ->get(DB_PREFIX .'application_guidelines');
        if ($query->num_rows()){
            $get1 = $query->first_row();
            $arr['ag'] = array("id"=>1,"description"=>$get1->description);
        }
        
        $query1 = $this->db->where('type',2)
                ->where('deleted',0)
                ->order_by('sort_order')
                ->get(DB_PREFIX .'application_guidelines');
        if ($query1->num_rows()){
            foreach($query1->result_array() as $v1){
                $arr['gta'][] = array("id"=>$v1['id'],"description"=>$v1['description'],"sort_order"=>$v1['sort_order']);
            }
        }
        
        $query2 = $this->db->where('type',3)
                ->where('deleted',0)
                ->order_by('sort_order')
                ->get(DB_PREFIX .'application_guidelines');
        if ($query2->num_rows()){
            foreach($query2->result_array() as $v2){
                $arr['tac'][] = array("id"=>$v2['id'],"description"=>$v2['description'],"sort_order"=>$v2['sort_order']);
            }
        }
        
        return $arr;
    }
}

?>
