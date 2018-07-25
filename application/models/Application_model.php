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
            
            $message = '<html>
                    <body style="margin:0 60px 0 60px;outline: 0;background: #fcfcfc;padding-bottom:10px;border-bottom:solid 1px black;">
                    <img src="'.base_url("assets/images/GAAF v1.jpg").'" style="margin-bottom:30px;">
                    <p>Hello, '.$data['firstname'].' '.$data['lastname'].'</p>
                    <p>We Have Recieved your application for the Art Fest.</p>
                    <p>We Will Contact you soon.</p>
                    <br/>
                    <p>Thank You</p>
                    </body>
                    </html>';
            
            $this->phpmailer->From      = 'admin@affordableartfest.com';
            $this->phpmailer->FromName  = "Affordable Art Fest";
            $this->phpmailer->Subject   = "Art Application";
            $this->phpmailer->Body      = $message;
            $this->phpmailer->IsHTML(true);
            $this->phpmailer->AddAddress($data['emailid']);
            $this->phpmailer->Send();
            
            return TRUE;
        }else{
            return FALSE;
        }
    }
    
}

?>
