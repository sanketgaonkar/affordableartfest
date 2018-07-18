<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Application_model extends CI_Model {
    
    public function apply($data = array(),$cv = "",$images = array(),$others = array()) {
        
        $mydata = array(
            'firstname' => $data['firstname'],
            'lastname' => $data['lastname'],
            'address' => $data['address'],
            'emailid' => $data['emailid'],
            'phone' => $data['phone'],
            'dob' => $data['dob'],
            'age' => $data['age'],
            'gender' => $data['gender'],
            'artist_statement' => $data['artist_statement'],
        );
        
        $result = $this->db->insert(DB_PREFIX .'applications', $mydata);
        if ($result) {

            $insert_id = $this->db->insert_id();
            
            if(!empty($cv)){
                $mydata_cv = array(
                    'application_id' => $insert_id,
                    'image' => $cv,
                    'type' => 'cv'
                );
                $result1 = $this->db->insert(DB_PREFIX .'application_data', $mydata_cv);
            }
            if(!empty($images)){
                foreach ($images as $v){
                    $mydata_img = array(
                        'application_id' => $insert_id,
                        'image' => $v,
                        'type' => 'images'
                    );
                    $result2 = $this->db->insert(DB_PREFIX .'application_data', $mydata_img);
                }
            }
            
            if(!empty($others)){
                foreach ($others as $v1){
                    $mydata_othrs = array(
                        'application_id' => $insert_id,
                        'image' => $v1,
                        'type' => 'others'
                    );
                    $result3 = $this->db->insert(DB_PREFIX .'application_data', $mydata_othrs);
                }
            }
            
            return TRUE;
        }else{
            return FALSE;
        }
    }
    
}

?>
