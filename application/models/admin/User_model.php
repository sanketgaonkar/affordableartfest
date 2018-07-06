<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User_model extends CI_Model {
    
    public function login($admin_id, $password) {
        $password = md5($password);
        $result = $this->db->where(array("admin_id"=>$admin_id,"password"=>$password))
                ->get('mog_admin');
        if ($result->num_rows()) {
            $_SESSION['mog_admin_id'] = array("id" => $result->row()->id,"Name" => $result->row()->Name);
            return TRUE;
        }else{
            return FALSE;
        }
    }

}

?>
