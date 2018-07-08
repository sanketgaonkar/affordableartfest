<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index(){
        $data['page_title'] = 'Home';
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
    
    public function gaaf_2017(){
        $data['page_title'] = 'GAAF 2017';
        $this->load->model('GAAF_Gallery_model');
        $data['gaaf'] = $this->GAAF_Gallery_model->get_arts();
        $this->load->view('gaaf_2017',$data);
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
    
    public function buy_art(){
        $data['page_title'] = 'Buy Art';
        $data['page_heading'] = 'Buy Art';
        $this->load->model('Buy_Art_model');
        $data['arts'] = $this->Buy_Art_model->get_arts();
        $this->load->view('buy_arts',$data);
    }
    
    public function hot_to_apply(){
        $data['page_title'] = 'How to apply';
        $data['page_heading'] = 'How to apply';
        $this->load->view('hot_to_apply',$data);
    }
    
    public function Application_Guidelines(){
        $data['page_title'] = 'Application Guidelines';
        $data['page_heading'] = 'Application Guidelines';
        $this->load->view('application_guidelines',$data);
    }
    public function Application_Form(){
        $data['page_title'] = 'Application Form';
        $data['page_heading'] = 'Application Form';
        $this->load->view('application_form',$data);
    }
    public function Intern(){
        $data['page_title'] = 'Intern';
        $data['page_heading'] = 'Intern';
        $this->load->view('intern',$data);
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
