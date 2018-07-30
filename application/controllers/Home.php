<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index(){
        $data['page_title'] = 'Home';
        $this->load->model('Home_Banners_model');
        $data['banners'] = $this->Home_Banners_model->get_banners();
        $this->load->view('index',$data);
    }
    
    public function Team(){
        $data['page_title'] = 'Team';
        $this->load->model('Team_model');
        $data['team'] = $this->Team_model->get_team();
        $this->load->view('team',$data);
    }
    
    public function select_artist(){
        $data['page_title'] = 'Select Artist';
        $this->load->model('Artist_Gallery_model');
        $data['artists'] = $this->Artist_Gallery_model->get_artist();
        $this->load->view('select_artist',$data);
    }
    
    public function artist_gallery($artist_id){
        $data['page_title'] = 'Artist Gallery';
        $data['artist_id'] = $artist_id;
        $this->load->model('Artist_Gallery_model');
        $artist_gallery = $this->Artist_Gallery_model->get_artist_gallery($artist_id);
        $data['artist_info'] = $artist_gallery['artist_info'];
        $data['images'] = $artist_gallery['images'];
        $this->load->view('artist_gallery',$data);
    }
    
    public function artist_art($artist_id, $art_id){
        $data['page_title'] = 'Artist Gallery';
        $data['artist_id'] = $artist_id;
        $data['art_id'] = $art_id;
        $this->load->model('Artist_Gallery_model');
        $artist_gallery = $this->Artist_Gallery_model->get_artist_art($artist_id, $art_id);
        $data['artist_info'] = $artist_gallery['artist_info'];
        $data['image'] = $artist_gallery['image'];
        $this->load->view('artist_art',$data);
    }
    
    public function partners_sponsors(){
        $data['page_title'] = 'Partners';
        $this->load->model('Partners_Sponsors_model');
        $data['partners'] = $this->Partners_Sponsors_model->get_partners_sponsors();
        $this->load->view('partners_sponsors',$data);
    }
    public function gaaf_vision(){
        $data['page_title'] = 'GAAF Vision';
        $this->load->view('gaaf_vision');
    }
    public function gaaf_2017(){
        $data['page_title'] = 'GAAF 2017';
        $this->load->model('Gaaf_model');
        $data['gaaf'] = $this->Gaaf_model->get_gaaf();
        $this->load->view('gaaf_2017',$data);
    }
    public function gaaf_2018(){
        $data['page_title'] = 'GAAF 2018';
        $this->load->view('gaaf_2018');
    }
    
    public function supporters(){
        $data['page_title'] = 'Supporters';
        $this->load->view('supporters');
    }
    
    public function media(){
        $data['page_title'] = 'Media';
        $data['page_heading'] = 'Media';
        $this->load->model('Publication_Media_model');
        $data['media'] = $this->Publication_Media_model->get_medias();
        $this->load->view('media',$data);
    }
    
    public function publications(){
        $data['page_title'] = 'Publications';
        $data['page_heading'] = 'Publications';
        $this->load->model('Publication_Media_model');
        $data['publications'] = $this->Publication_Media_model->get_publications();
        $this->load->view('publications',$data);
    }
    
    public function Catalogue(){
        $data['page_title'] = 'Catalogue';
        $data['page_heading'] = 'Catalogue';
        $this->load->model('Buy_Art_model');
        $data['arts'] = $this->Buy_Art_model->get_arts();
        $this->load->view('catalogue',$data);
    }
    
    public function how_to_apply(){
        $data['page_title'] = 'How to apply';
        $data['page_heading'] = 'How to apply';
        $this->load->view('how_to_apply',$data);
    }
    
    public function Application_Guidelines(){
        $data['page_title'] = 'Application Guidelines';
        $data['page_heading'] = 'Application Guidelines';
        $this->load->model('Application_Guidelines_model');
        $data['application_guidelines'] = $this->Application_Guidelines_model->get_application_guidelines();
        $this->load->view('application_guidelines',$data);
    }
    public function Application_Form(){
        $data['page_title'] = 'Application Form';
        $data['page_heading'] = 'Application Form';
        
        if($_POST){
            $this->form_validation->set_rules('firstname', 'First Name', 'trim|required');
            $this->form_validation->set_rules('lastname', 'Last Name', 'trim|required');
            $this->form_validation->set_rules('address', 'Address', 'trim|required');
            $this->form_validation->set_rules('emailid', 'Email Id', 'trim|required|valid_email');
            $this->form_validation->set_rules('phone', 'Mobile No', 'required|trim|min_length[10]|max_length[10]|numeric|regex_match[/^[789]\d{9}$/]',
                                    array('numeric'     => 'Enter Only Numbers',
            				'regex_match'     => 'Invalid Mobile No'));
            $this->form_validation->set_rules('dob', 'Date of Birth', 'trim|required');
            $this->form_validation->set_rules('age', 'age', 'trim|required|numeric');
            $this->form_validation->set_rules('gender', 'Gender', 'trim|required');
            $this->form_validation->set_rules('artist_statement', 'Artist Statement', 'trim|required');
        
            
            //['cv']['images']['attchment']
            if ($this->form_validation->run()){
                $data['cv'] = "";
                $data['images'] = array();
                $data['others'] = array();
                
                $data['cv_error'] = "";
                $data['images_error'] = array();
                $data['others_error'] = array();
                
                
                $config['upload_path'] = 'uploads/applications/';
                $config['allowed_types'] = 'gif|jpg|png';
                
                //images
                $filesCount = count($_FILES['images']['name']);
                for($i = 0; $i < $filesCount; $i++){
                    $_FILES['file']['name']     = $_FILES['images']['name'][$i];
                    $_FILES['file']['type']     = $_FILES['images']['type'][$i];
                    $_FILES['file']['tmp_name'] = $_FILES['images']['tmp_name'][$i];
                    $_FILES['file']['error']     = $_FILES['images']['error'][$i];
                    $_FILES['file']['size']     = $_FILES['images']['size'][$i];
                    
                    $this->load->library('upload', $config);
                    $this->upload->initialize($config);
                    if ($this->upload->do_upload('file')) {
                        $upload_data = $this->upload->data();
                        $data['images'][] = $upload_data['file_name'];
                    } else {
                        $data['images_error'][] = $_FILES['images']['name'][$i]." ".$this->upload->display_errors();
                    }
                }
                
                //cv
                $config['allowed_types'] = 'pdf|doc|docx|xls|xlsx|csv|rtf';
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if ($this->upload->do_upload('cv')) {
                    $upload_data = $this->upload->data();
                    $data['cv'] = $upload_data['file_name'];
                } else {
                    $data['cv_error'] = $this->upload->display_errors();
                }
                
                
                $othrs = 0;
                foreach($_FILES['others']['name'] as $c){
                    if(!empty($c))$othrs = 1;
                }
                
                if(isset($_FILES['others']['name']) && !empty($_FILES['others']['name']) && $othrs){
                    //others
                    $config['allowed_types'] = 'pdf|doc|docx|xls|xlsx|csv|rtf|gif|jpg|png';
                    $filesCount = count($_FILES['others']['name']);
                    for($i = 0; $i < $filesCount; $i++){
                        $_FILES['other']['name']     = $_FILES['others']['name'][$i];
                        $_FILES['other']['type']     = $_FILES['others']['type'][$i];
                        $_FILES['other']['tmp_name'] = $_FILES['others']['tmp_name'][$i];
                        $_FILES['other']['error']     = $_FILES['others']['error'][$i];
                        $_FILES['other']['size']     = $_FILES['others']['size'][$i];

                        $this->load->library('upload', $config);
                        $this->upload->initialize($config);
                        if ($this->upload->do_upload('other')) {
                            $upload_data = $this->upload->data();
                            $data['others'][] = $upload_data['file_name'];
                        } else {
                            $data['others_error'][] = $_FILES['others']['name'][$i]." ".$this->upload->display_errors();
                        }
                    }
                }
                
                if(empty($data['cv_error']) && empty($data['images_error']) && empty($data['others_error'])){
                    $this->load->model('Application_model');
                    if($no = $this->Application_model->apply($_POST, $data['cv'], $data['images'] ,$data['others'])){
                        $data['success'] = "Sucessfully Submitted Application <br> Application No. ".sprintf('%06d', $no);  
                        unset($_POST);unset($_FILES);
                        $this->form_validation->unset_field_data();
                    }else {
                        $data['error'] = "Error Submitting Application";
                    }
                }
            }
        }
        
        $this->load->view('application_form',$data);
    }
    
    public function Intern(){
        $data['page_title'] = 'Intern';
        $data['page_heading'] = 'Intern';
        $this->load->model('Intern_model');
        $data['jobs'] = $this->Intern_model->get_jobs();
        $this->load->view('intern',$data);
    }
    
    public function job($id = 0){
        $data['page_title'] = 'Job';
        $data['page_heading'] = 'Job';
        $this->load->model('Intern_model');
        if($data['job'] = $this->Intern_model->get_job($id)){
            $this->load->view('job',$data);
        }else{
            return('home/intern');
        }
        
    }
    
    public function Volunteer(){
        $data['page_title'] = 'Volunteers';
        $data['page_heading'] = 'Volunteers';
        $this->load->view('volunteer',$data);
    }
    
    public function Vote(){
        $data['page_title'] = 'Vote';
        $data['page_heading'] = 'Vote';
        $this->load->model('Voting_model');
        $data['arts'] = $this->Voting_model->get_arts();
        $this->load->view('vote',$data);
    }
    
    public function about_us(){
        $data['page_title'] = 'About Us';
        $this->load->view('about_us',$data);
    }
    
    public function terms_and_conditions(){
        $data['page_title'] = 'Terms and Conditions';
        $this->load->view('terms_and_conditions',$data);
    }
    
    public function privacy(){
        $data['page_title'] = 'Privacy';
        $this->load->view('privacy',$data);
    }
    
    public function refund(){
        $data['page_title'] = 'Refund';
        $this->load->view('refund',$data);
    }
    
    public function Contact_Us(){
        $data['page_title'] = 'Contact Us';
        $this->load->view('contact_us',$data);
    }
    
}
