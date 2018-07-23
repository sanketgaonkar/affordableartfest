<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mog_admin extends CI_Controller {

    public function __construct(){
        parent::__construct();
        if(!$this->session->userdata('mog_admin_id') ){
            if($this->router->fetch_method()!=="login"){
                return redirect ('Mog_admin/login');
            }
        }else if($this->router->fetch_method()=="login"){
            redirect ('Mog_admin/');
        }
        
        $data['method'] = $this->router->fetch_method();
    }
    
    public function index(){
        $data['page_title'] = 'Home';
        $data['page_heading'] = 'Dashboard';
        $this->load->view('admin/index',$data);
    }
    
    public function login(){
        $data['page_title'] = 'Login';
        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('admin_id', 'admin_id', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'password', 'trim|required');
        
        if ($this->form_validation->run() == FALSE){
            $this->load->view('admin/login',$data);
        }else{
            $this->load->model('admin/User_model');
            if($this->User_model->login($this->input->post('admin_id'),$this->input->post('password')))
                redirect('Mog_admin/');
            else {
                $data['error'] = 1;
                $this->load->view('admin/login',$data);
            }
        }
        
    }
    
    public function logout(){
        unset($_SESSION['mog_admin_id']);
        redirect('Mog_admin/');
    }
    
    public function Team(){
        $data['page_title'] = 'Team';
        $data['page_heading'] = 'Our Team';
        
        $data['breadcrums'][] = '<li>'.anchor('Mog_admin/team','Team','class="active"').'</li>';
        
        $data['add_new'] = anchor('Mog_admin/edit_team','<i class="fa fa-plus"></i>','class="btn btn-primary" title="Add New"');
        
        $this->load->model('admin/Team_model');
        $data['team'] = $this->Team_model->get_team();
        $this->load->view('admin/team',$data);
    }
    
    public function edit_team($team_id = 0){
        
        $this->load->model('admin/Team_model');
        $data['page_title'] = 'Add Team';
        $data['page_heading'] = 'Add Team';
        $data['team'] = "";
        $data['errors'] = "";
        $data['team_id'] = 0;
        
        $data['breadcrums'][] = '<li>'.anchor('Mog_admin/team','Team').'</li>';
        if($team_id)
            $data['breadcrums'][] = '<li>'.anchor('Mog_admin/edit_team/'.$team_id,'Team Edit','class="active"').'</li>';
        else
            $data['breadcrums'][] = '<li>'.anchor('Mog_admin/edit_team','Team Add','class="active"').'</li>';
            
        //form submit
        if(isset($_POST) && !empty($_POST)){
            if($this->Team_model->add_edit_team_member($_POST)){
                redirect('Mog_admin/team');
            }else{
                $data['errors'] = 1;
            }
        }
        
        if($team_id){       
            $data['team_id'] = $team_id;
            $data['page_title'] = 'Edit Team';
            $data['page_heading'] = 'Edit Team';
            $data['team'] = $this->Team_model->get_team_member($team_id);
        }
        
        $this->load->view('admin/edit_team',$data);
    }
    
    public function delete_team($team_id = 0){
        $this->load->model('admin/Team_model');
        $this->Team_model->delete_team_member($team_id);
        redirect('Mog_admin/team');
    }
    
    public function gaaf(){
        $data['page_title'] = 'GAAF';
        $data['page_heading'] = 'GAAF 2017';
        
        $data['breadcrums'][] = '<li>'.anchor('Mog_admin/gaaf','GAAF','class="active"').'</li>';
        
        $data['add_new'] = anchor('Mog_admin/edit_gaaf','<i class="fa fa-plus"></i>','class="btn btn-primary" title="Add New"');
        
        $this->load->model('admin/GAAF_Gallery_model');
        $data['team'] = $this->GAAF_Gallery_model->get_arts();
        $this->load->view('admin/gaaf',$data);
    }
    
    public function edit_gaaf($gaaf_id = 0){
        
        $this->load->model('admin/GAAF_Gallery_model');
        $data['page_title'] = 'Add GAAF';
        $data['page_heading'] = 'Add GAAF';
        $data['team'] = "";
        $data['errors'] = "";
        $data['gaaf_id'] = 0;
        
        $data['breadcrums'][] = '<li>'.anchor('Mog_admin/gaaf','GAAF').'</li>';
        if($gaaf_id)
            $data['breadcrums'][] = '<li>'.anchor('Mog_admin/edit_gaaf/'.$gaaf_id,'GAAF Edit','class="active"').'</li>';
        else
            $data['breadcrums'][] = '<li>'.anchor('Mog_admin/edit_gaaf','GAAF Add','class="active"').'</li>';
            
        //form submit
        if(isset($_POST) && !empty($_POST)){
            if($this->GAAF_Gallery_model->add_edit_gaaf($_POST)){
                redirect('Mog_admin/gaaf');
            }else{
                $data['errors'] = 1;
            }
        }
        
        if($gaaf_id){       
            $data['gaaf_id'] = $gaaf_id;
            $data['page_title'] = 'Edit GAAF';
            $data['page_heading'] = 'Edit GAAF';
            $data['team'] = $this->GAAF_Gallery_model->get_art($gaaf_id);
        }
        
        $this->load->view('admin/edit_gaaf',$data);
    }
    
    public function delete_gaaf($gaaf_id = 0){
        $this->load->model('admin/GAAF_Gallery_model');
        $this->GAAF_Gallery_model->delete_gaaf($gaaf_id);
        redirect('Mog_admin/gaaf');
    }
    
    public function partners_sponsors(){
        $data['page_title'] = 'Partners & Sponsors';
        $data['page_heading'] = 'Partners & Sponsors';
        $data['table_heading'] = 'Partners & Sponsors List';
        $data['breadcrums'][] = '<li>'.anchor('Mog_admin/partners_sponsors','Partners & Sponsors','class="active"').'</li>';
        
        $data['add_new'] = anchor('Mog_admin/edit_partners_sponsors','<i class="fa fa-plus"></i>','class="btn btn-primary" title="Add New"');
        
        $this->load->model('admin/Partners_Sponsors_model');
        $data['partners_sponsors'] = $this->Partners_Sponsors_model->get_partners_sponsors();
        
        $this->load->view('admin/partners_sponsors',$data);
    }
    
    public function edit_partners_sponsors($ps_id = 0){
        
        $this->load->model('admin/Partners_Sponsors_model');
        $data['page_title'] = 'Add Partners & Sponsors';
        $data['page_heading'] = 'Add Partners & Sponsors';
        $data['team'] = "";
        $data['errors'] = "";
        $data['ps_id'] = 0;
        $data['desc_class'] = "hide";
        
        $data['breadcrums'][] = '<li>'.anchor('Mog_admin/partners_sponsors','Partners & Sponsors').'</li>';
        if($ps_id)
            $data['breadcrums'][] = '<li>'.anchor('Mog_admin/edit_partners_sponsors/'.$ps_id,'Partners & Sponsors Edit','class="active"').'</li>';
        else
            $data['breadcrums'][] = '<li>'.anchor('Mog_admin/edit_partners_sponsors','Partners & Sponsors Add','class="active"').'</li>';
            
        //form submit
        if(isset($_POST) && !empty($_POST)){
            if($this->Partners_Sponsors_model->add_edit_partners_sponsors($_POST)){
                redirect('Mog_admin/partners_Sponsors');
            }else{
                $data['errors'] = 1;
            }
        }
        
        $mid = 0;
        
        if($ps_id){       
            $data['ps_id'] = $ps_id;
            $data['page_title'] = 'Edit Partners & Sponsors';
            $data['page_heading'] = 'Edit Partners & Sponsors';
            if(!$data['partner_sponsor'] = $this->Partners_Sponsors_model->get_partner_sponsor($ps_id)){
                redirect('Mog_admin/partners_sponsors');
            }
        }
        if($ps_id == 0)
            $data['desc_class'] = "show";
        if($ps_id == 1 || (isset($data['partner_sponsor']['Level']) && $data['partner_sponsor']['Level'] == 2)){
            $data['desc_class'] = "show";
            $this->load->view('admin/edit_partners_sponsors_main',$data);
        }else
            $this->load->view('admin/edit_partners_sponsors_main',$data);
            //$this->load->view('admin/edit_partners_sponsors_others',$data);
    }
    
    public function delete_partners_sponsors($ps_id = 0){
        $this->load->model('admin/Partners_Sponsors_model');
        $this->Partners_Sponsors_model->delete_partners_sponsors($ps_id);
        redirect('Mog_admin/partners_sponsors');
    }
    
    public function publications(){
        
        $this->load->model('admin/Publication_Media_model');
        $data['page_title'] = 'Add publication';
        $data['page_heading'] = 'Publication List';
		$data['breadcrums'][] = '<li>'.anchor('Mog_admin/publications','Publications','class="active"').'</li>';
        $data['add_new'] = anchor('Mog_admin/edit_publication','<i class="fa fa-plus"></i>','class="btn btn-primary" title="Add New"');
        $data['publications'] = $this->Publication_Media_model->get_publications();
        $this->load->view('admin/publications',$data);
        
    }
    
    public function edit_publication($p_id = 0){
        
        $this->load->model('admin/Publication_Media_model');
        $data['page_title'] = 'Add publication';
        $data['page_heading'] = 'Add publication';
        $data['team'] = "";
        $data['errors'] = "";
        $data['p_id'] = 0;
        $data['date'] = date('Y/m/d H:i:s');
        
        $data['breadcrums'][] = '<li>'.anchor('Mog_admin/publications','Publications').'</li>';
        if($p_id)
            $data['breadcrums'][] = '<li>'.anchor('Mog_admin/edit_publication/'.$p_id,'Publications Edit','class="active"').'</li>';
        else
            $data['breadcrums'][] = '<li>'.anchor('Mog_admin/edit_publication','Publications Add','class="active"').'</li>';
            
        //form submit
        if(isset($_POST) && !empty($_POST)){
            $result = $this->Publication_Media_model->add_edit_publication($_POST);
            if(isset($result['error'])){
                $data['error_pdf'] = $result['error'];
            }else if($result){
                redirect('Mog_admin/publications');
            }else{
                $data['errors'] = 1;
            }
        }
        
        $mid = 0;
        
        if($p_id){       
            $data['p_id'] = $p_id;
            $data['page_title'] = 'Edit publication';
            $data['page_heading'] = 'Edit publication';
            if(!$data['publication'] = $this->Publication_Media_model->get_publication($p_id)){
                redirect('Mog_admin/publications');
            }
        }
        
        if(isset($data['publication']))
            $data['date'] = date('Y/m/d H:i:s', strtotime($data['publication']['Date']));
        
        $this->load->view('admin/edit_publication',$data);
    }
    
    public function delete_publication($p_id = 0){
        $this->load->model('admin/Publication_Media_model');
        $this->Publication_Media_model->delete_publication($p_id);
        redirect('Mog_admin/publications');
    }
    
    public function media(){
        
        $this->load->model('admin/Publication_Media_model');
        $data['page_title'] = 'Add Media';
        $data['page_heading'] = 'Media List';
		$data['breadcrums'][] = '<li>'.anchor('Mog_admin/media','Media','class="active"').'</li>';
        $data['add_new'] = anchor('Mog_admin/edit_media','<i class="fa fa-plus"></i>','class="btn btn-primary" title="Add New"');
        $data['media'] = $this->Publication_Media_model->get_medias();
        $this->load->view('admin/media',$data);
        
    }
    
    public function edit_media($p_id = 0){
        
        $this->load->model('admin/Publication_Media_model');
        $data['page_title'] = 'Add Media';
        $data['page_heading'] = 'Add Media';
        $data['team'] = "";
        $data['errors'] = "";
        $data['p_id'] = 0;
        $data['date'] = date('Y/m/d H:i:s');
        $data['cancel'] = anchor('Mog_admin/media','<button type="button" class="btn btn-default" title="Cancel"><i class="fa fa-reply"></i></button>');
        
        $data['breadcrums'][] = '<li>'.anchor('Mog_admin/media','Media').'</li>';
        if($p_id)
            $data['breadcrums'][] = '<li>'.anchor('Mog_admin/edit_media/'.$p_id,'Media Edit','class="active"').'</li>';
        else
            $data['breadcrums'][] = '<li>'.anchor('Mog_admin/edit_media','Media Add','class="active"').'</li>';
            
        //form submit
        if(isset($_POST) && !empty($_POST)){
            $result = $this->Publication_Media_model->add_edit_media($_POST);
            if($result){
                redirect('Mog_admin/media');
            }else{
                $data['errors'] = 1;
            }
        }
        
        if($p_id){       
            $data['p_id'] = $p_id;
            $data['page_title'] = 'Edit Media';
            $data['page_heading'] = 'Edit Media';
            if(!$data['media'] = $this->Publication_Media_model->get_media($p_id)){
                redirect('Mog_admin/media');
            }
        }
        
        if(isset($data['media']))
            $data['date'] = date('Y/m/d H:i:s', strtotime($data['media']['Date']));
        
        $this->load->view('admin/edit_media',$data);
    }
    
    public function delete_media($p_id = 0){
        $this->load->model('admin/Publication_Media_model');
        $this->Publication_Media_model->delete_media($p_id);
        redirect('Mog_admin/media');
    }
    
    public function Artist(){
        $data['page_title'] = 'Artist';
        $data['page_heading'] = 'Artist List';
		$data['breadcrums'][] = '<li>'.anchor('Mog_admin/Artist','Artist','class="active"').'</li>';
        $data['add_new'] = anchor('Mog_admin/edit_artist','<i class="fa fa-plus"></i>','class="btn btn-primary" title="Add New"');
        $data['cancel'] = anchor('Mog_admin/Artist', '<button type="button" class="btn btn-default" title="Cancel"><i class="fa fa-reply"></i></button>');
        $this->load->model('admin/Art_model');
        $data['artists'] = $this->Art_model->get_artists();
        $this->load->view('admin/artist',$data);
    }
    public function Category(){
        $data['page_title'] = 'Category';
        $data['page_heading'] = 'Category List';
		$data['breadcrums'][] = '<li>'.anchor('Mog_admin/Category','Category','class="active"').'</li>';
        $data['add_new'] = anchor('Mog_admin/edit_category','<i class="fa fa-plus"></i>','class="btn btn-primary" title="Add New"');
        $data['cancel'] = anchor('Mog_admin/Category', '<button type="button" class="btn btn-default" title="Cancel"><i class="fa fa-reply"></i></button>');
        $this->load->model('admin/Art_model');
        $data['categories'] = $this->Art_model->get_categories();
        $this->load->view('admin/category',$data);
    }
    public function Arts(){
        $data['page_title'] = 'Arts';
        $data['page_heading'] = 'Arts List';
		$data['breadcrums'][] = '<li>'.anchor('Mog_admin/Arts','Arts','class="active"').'</li>';
        $data['add_new'] = anchor('Mog_admin/edit_arts','<i class="fa fa-plus"></i>','class="btn btn-primary" title="Add New"');
        $data['cancel'] = anchor('Mog_admin/Arts', '<button type="button" class="btn btn-default" title="Cancel"><i class="fa fa-reply"></i></button>');
        $this->load->model('admin/Art_model');
        $data['arts'] = $this->Art_model->get_arts();
        $this->load->view('admin/arts',$data);
    }
    public function edit_Artist($a_id = 0){
        $data['page_title'] = 'Artist';
        $data['page_heading'] = 'Artist List';
		$data['breadcrums'][] = '<li>'.anchor('Mog_admin/Artist','Artist','class="active"').'</li>';
		if($a_id)
            $data['breadcrums'][] = '<li>'.anchor('Mog_admin/edit_Artist/'.$a_id,'Artist Edit','class="active"').'</li>';
        else
            $data['breadcrums'][] = '<li>'.anchor('Mog_admin/edit_Artist','Artist Add','class="active"').'</li>';
        $data['a_id'] = $a_id;
        $data['add_new'] = anchor('Mog_admin/edit_artist','<i class="fa fa-plus"></i>','class="btn btn-primary" title="Add New"');
        $data['cancel'] = anchor('Mog_admin/Artist', '<button type="button" class="btn btn-default" title="Cancel"><i class="fa fa-reply"></i></button>');
        $this->load->model('admin/Art_model');
        
        if(isset($_POST) && !empty($_POST)){
            $result = $this->Art_model->add_edit_artist($_POST);
            if($result){
                redirect('Mog_admin/Artist');
            }else{
                $data['errors'] = 1;
            }
        }
        
        $data['artist'] = "";
        if($a_id)
            $data['artist'] = $this->Art_model->get_artist($a_id);
        $this->load->view('admin/edit_artist',$data);
    }
    public function edit_Category($c_id = 0){
        $data['page_title'] = 'Category';
        $data['page_heading'] = 'Category List';
		$data['breadcrums'][] = '<li>'.anchor('Mog_admin/Category','Category','class="active"').'</li>';
		if($c_id)
            $data['breadcrums'][] = '<li>'.anchor('Mog_admin/edit_Artist/'.$c_id,'Artist Edit','class="active"').'</li>';
        else
            $data['breadcrums'][] = '<li>'.anchor('Mog_admin/edit_Artist','Artist Add','class="active"').'</li>';
        $data['c_id'] = $c_id;
        $data['add_new'] = anchor('Mog_admin/edit_category','<i class="fa fa-plus"></i>','class="btn btn-primary" title="Add New"');
        $data['cancel'] = anchor('Mog_admin/Category', '<button type="button" class="btn btn-default" title="Cancel"><i class="fa fa-reply"></i></button>');
        $this->load->model('admin/Art_model');
        
        if(isset($_POST) && !empty($_POST)){
            $result = $this->Art_model->add_edit_category($_POST);
            if($result){
                redirect('Mog_admin/Category');
            }else{
                $data['errors'] = 1;
            }
        }
        
        $data['category'] = "";
        if($c_id)
            $data['category'] = $this->Art_model->get_category($c_id);
        $this->load->view('admin/edit_category',$data);
    }
    public function edit_Arts($a_id = 0){
        $data['page_title'] = 'Add Arts';
        $data['page_heading'] = 'Add Arts';
        $data['breadcrums'][] = '<li>'.anchor('Mog_admin/Arts','Arts','class="active"').'</li>';
	if($a_id)
            $data['breadcrums'][] = '<li>'.anchor('Mog_admin/edit_Artist/'.$a_id,'Artist Edit','class="active"').'</li>';
        else
            $data['breadcrums'][] = '<li>'.anchor('Mog_admin/edit_Artist','Artist Add','class="active"').'</li>';
        $data['a_id'] = $a_id;
        $data['add_new'] = anchor('Mog_admin/edit_arts','<i class="fa fa-plus"></i>','class="btn btn-primary" title="Add New"');
        $data['cancel'] = anchor('Mog_admin/Arts', '<button type="button" class="btn btn-default" title="Cancel"><i class="fa fa-reply"></i></button>');
        $this->load->model('admin/Art_model');
        
        if(isset($_POST) && !empty($_POST)){
            $result = $this->Art_model->add_edit_arts($_POST);
            if($result){
                redirect('Mog_admin/Arts');
            }else{
                $data['errors'] = 1;
            }
        }
        
        $data['artists'] = $this->Art_model->get_artists();
        $data['categories'] = $this->Art_model->get_categories();
        
        $data['arts'] = "";
        if($a_id){
            $data['page_title'] = 'Edit Arts';
            $data['page_heading'] = 'Edit Arts';
            $data['arts'] = $this->Art_model->get_art($a_id);
        }
        $this->load->view('admin/edit_arts',$data);
    }
    public function delete_Artist($a_id = 0){
        $this->load->model('admin/Art_model');
        $data['artist'] = $this->Art_model->delete_artist($a_id);
        redirect('Mog_admin/Artist');
    }
    
    public function delete_Category($c_id = 0){
        $this->load->model('admin/Art_model');
        $data['category'] = $this->Art_model->delete_category($c_id);
        redirect('Mog_admin/Category');
    }
    
    public function delete_Arts($a_id = 0){
        $this->load->model('admin/Art_model');
        $data['arts'] = $this->Art_model->delete_art($a_id);
        redirect('Mog_admin/Arts');
    }
    
    public function Intern(){
        $data['page_title'] = 'Intern';
        $data['page_heading'] = 'Jobs';
        $data['breadcrums'][] = '<li>'.anchor('Mog_admin/Intern','Intern','class="active"').'</li>';
        $data['add_new'] = anchor('Mog_admin/edit_intern','<i class="fa fa-plus"></i>','class="btn btn-primary" title="Add New"');
        $this->load->model('Intern_model');
        $data['interns'] = $this->Intern_model->get_jobs();
        $this->load->view('admin/intern',$data);
    }

    public function edit_Intern($i_id = 0){
        $data['page_title'] = 'Add Intern';
        $data['page_heading'] = 'Add job';
        $data['cancel'] = anchor('Mog_admin/intern', '<button type="button" class="btn btn-default" title="Cancel"><i class="fa fa-reply"></i></button>');
	$data['breadcrums'][] = '<li>'.anchor('Mog_admin/Artist','Artist','class="active"').'</li>';
	if($i_id)
            $data['breadcrums'][] = '<li>'.anchor('Mog_admin/edit_intern/'.$i_id,'Intern Edit','class="active"').'</li>';
        else
            $data['breadcrums'][] = '<li>'.anchor('Mog_admin/edit_intern','Intern Add','class="active"').'</li>';
        $data['intern_id'] = $i_id;
        $data['add_new'] = anchor('Mog_admin/edit_intern','<i class="fa fa-plus"></i>','class="btn btn-primary" title="Add New"');
        $data['cancel'] = anchor('Mog_admin/intern', '<button type="button" class="btn btn-default" title="Cancel"><i class="fa fa-reply"></i></button>');
        $this->load->model('admin/Intern_model');
        
        if(isset($_POST) && !empty($_POST)){
            $result = $this->Intern_model->add_edit_intern($_POST);
            if($result){
                redirect('Mog_admin/Intern');
            }else{
                $data['errors'] = 1;
            }
        }
        
        $data['artist'] = "";
        if($i_id){
            $data['page_title'] = 'Edit Intern';
            $data['page_heading'] = 'Edit job';
            $data['intern'] = $this->Intern_model->get_job($i_id);
        }
        $this->load->view('admin/edit_intern',$data);
    }
    
    public function delete_intern($i_id = 0){
        $this->load->model('admin/Intern_model');
        $data['arts'] = $this->Intern_model->delete_intern($i_id);
        redirect('Mog_admin/intern');
    }
    
    public function home_banner(){
        $data['page_title'] = 'Home Banners';
        $data['page_heading'] = 'Home Banners';
        $data['breadcrums'][] = '<li>'.anchor('Mog_admin/Home_Banners','Home Banners','class="active"').'</li>';
        $data['add_new'] = anchor('Mog_admin/edit_Home_Banner','<i class="fa fa-plus"></i>','class="btn btn-primary" title="Add New"');
        $this->load->model('admin/Home_Banners_model');
        $data['interns'] = $this->Home_Banners_model->get_banners();
        $this->load->view('admin/home_banner',$data);
    }

    public function edit_home_banner($b_id = 0){
        $data['page_title'] = 'Add Home Banner';
        $data['page_heading'] = 'Add Home Banner';
        $data['cancel'] = anchor('Mog_admin/home_banner', '<button type="button" class="btn btn-default" title="Cancel"><i class="fa fa-reply"></i></button>');
	$data['breadcrums'][] = '<li>'.anchor('Mog_admin/home_banner','Home Banners','class="active"').'</li>';
	if($b_id)
            $data['breadcrums'][] = '<li>'.anchor('Mog_admin/edit_home_banner/'.$b_id,'Edit Home Banner','class="active"').'</li>';
        else
            $data['breadcrums'][] = '<li>'.anchor('Mog_admin/edit_home_banner','Add Home Banner','class="active"').'</li>';
        $data['b_id'] = $b_id;
        $data['cancel'] = anchor('Mog_admin/home_banner', '<button type="button" class="btn btn-default" title="Cancel"><i class="fa fa-reply"></i></button>');
        $this->load->model('admin/Home_Banners_model');
        
        if(isset($_POST) && !empty($_POST)){
            $result = $this->Home_Banners_model->add_edit_home_banner($_POST);
            if($result){
                redirect('Mog_admin/home_banner');
            }else{
                $data['errors'] = 1;
            }
        }
        
        $data['banner'] = "";
        if($b_id){
            $data['page_title'] = 'Edit Home Banner';
            $data['page_heading'] = 'Edit Home Banner';
            $data['banner'] = $this->Home_Banners_model->get_banner($b_id);
        }
        $this->load->view('admin/edit_home_banner',$data);
    }
    
    public function delete_home_banner($b_id = 0){
        $this->load->model('admin/Home_Banners_model');
        $data['arts'] = $this->Home_Banners_model->delete_banner($i_id);
        redirect('Mog_admin/home_banner');
    }
    
    public function applications(){
        $data['page_title'] = 'Applications';
        $data['page_heading'] = 'Applications';
        $data['breadcrums'][] = '<li>'.anchor('Mog_admin/Applications','Applications','class="active"').'</li>';
        $this->load->model('admin/Application_model');
        $data['applications'] = $this->Application_model->get_applications();
        $this->load->view('admin/applications',$data);
    }
    
    public function view_application($a_id){
        $data['page_title'] = 'View Applications';
        $data['page_heading'] = 'View Applications';
        $data['breadcrums'][] = '<li>'.anchor('Mog_admin/Applications','Applications','class="active"').'</li>';
        $data['breadcrums'][] = '<li>'.anchor('Mog_admin/view_application/'.$a_id,'View Applications').'</li>';
        $this->load->model('admin/Application_model');
        $data['application'] = $this->Application_model->get_application($a_id);
        $this->load->view('admin/view_application',$data);
    }
    
}
