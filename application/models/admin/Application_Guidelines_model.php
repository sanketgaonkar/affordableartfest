<<<<<<< HEAD
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
    
    public function get_application_guideline($ag_id){
        $query1 = $this->db->where('id',1)
                ->get(DB_PREFIX .'application_guidelines');
            if ($query1->num_rows())
                return json_decode(json_encode($query1->first_row()), True);
            else
                return array();
    }
    
    public function edit_application_guideline($post){
        $mydata = array(
            'description' => $post['description']
        );
        $query = $this->db->where('id',1)
                ->update(DB_PREFIX .'application_guidelines',$mydata);
        if($query)
            return TRUE;
        else
            return false;
    }
    
    public function get_guidelines_to_apply($ag_id){
        $query1 = $this->db->where('id',$ag_id)
                ->where('deleted',0)
                ->get(DB_PREFIX .'application_guidelines');
            if ($query1->num_rows())
                return json_decode(json_encode($query1->first_row()), True);
            else
                return array();
    }
    
    public function edit_guidelines_to_apply($post){
        $mydata = array(
            'description' => $post['description'],
            'sort_order' => $post['sort_order'],
            'type' => 2
        );
        
        if($post['ag_id']){
            $query = $this->db->where('id',$post['ag_id'])
                    ->update(DB_PREFIX .'application_guidelines',$mydata);
        }else{
            $query = $this->db->insert(DB_PREFIX .'application_guidelines',$mydata);
        }
        if($query)
            return TRUE;
        else
            return false;
    }
    
    public function get_terms_and_condition($ag_id){
        $query1 = $this->db->where('id',$ag_id)
                ->where('deleted',0)
                ->get(DB_PREFIX .'application_guidelines');
            if ($query1->num_rows())
                return json_decode(json_encode($query1->first_row()), True);
            else
                return array();
    }
    
    public function edit_terms_and_condition($post){
        $mydata = array(
            'description' => $post['description'],
            'sort_order' => $post['sort_order'],
            'type' => 3
        );
        
        if($post['ag_id']){
            $query = $this->db->where('id',$post['ag_id'])
                    ->update(DB_PREFIX .'application_guidelines',$mydata);
        }else{
            $query = $this->db->insert(DB_PREFIX .'application_guidelines',$mydata);
        }
        if($query)
            return TRUE;
        else
            return false;
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
=======
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
    
    public function get_application_guideline($ag_id){
        $query1 = $this->db->where('id',1)
                ->get(DB_PREFIX .'application_guidelines');
            if ($query1->num_rows())
                return json_decode(json_encode($query1->first_row()), True);
            else
                return array();
    }
    
    public function edit_application_guideline($post){
        $mydata = array(
            'description' => $post['description']
        );
        $query = $this->db->where('id',1)
                ->update(DB_PREFIX .'application_guidelines',$mydata);
        if($query)
            return TRUE;
        else
            return false;
    }
    
    public function get_guidelines_to_apply($ag_id){
        $query1 = $this->db->where('id',$ag_id)
                ->where('deleted',0)
                ->get(DB_PREFIX .'application_guidelines');
            if ($query1->num_rows())
                return json_decode(json_encode($query1->first_row()), True);
            else
                return array();
    }
    
    public function edit_guidelines_to_apply($post){
        $mydata = array(
            'description' => $post['description'],
            'sort_order' => $post['sort_order'],
            'type' => 2
        );
        
        if($post['ag_id']){
            $query = $this->db->where('id',$post['ag_id'])
                    ->update(DB_PREFIX .'application_guidelines',$mydata);
        }else{
            $query = $this->db->insert(DB_PREFIX .'application_guidelines',$mydata);
        }
        if($query)
            return TRUE;
        else
            return false;
    }
    
    public function get_terms_and_condition($ag_id){
        $query1 = $this->db->where('id',$ag_id)
                ->where('deleted',0)
                ->get(DB_PREFIX .'application_guidelines');
            if ($query1->num_rows())
                return json_decode(json_encode($query1->first_row()), True);
            else
                return array();
    }
    
    public function edit_terms_and_condition($post){
        $mydata = array(
            'description' => $post['description'],
            'sort_order' => $post['sort_order'],
            'type' => 3
        );
        
        if($post['ag_id']){
            $query = $this->db->where('id',$post['ag_id'])
                    ->update(DB_PREFIX .'application_guidelines',$mydata);
        }else{
            $query = $this->db->insert(DB_PREFIX .'application_guidelines',$mydata);
        }
        if($query)
            return TRUE;
        else
            return false;
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
>>>>>>> 3594818211d26df6bb0aa71de1de9df3dd215f94
