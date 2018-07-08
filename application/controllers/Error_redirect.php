<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Error_redirect extends CI_Controller {

    public function index() {
        if ($this->router->fetch_class() == "Mog_admin" || $this->router->fetch_class() == "mog_admin")
            return redirect(base_url() . "Mog_admin");
        else if ($this->router->fetch_class() == "home")
            return redirect(base_url() . "home");
        else
            return redirect(base_url());
    }

}
