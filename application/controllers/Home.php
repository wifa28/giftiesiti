<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index() {

        get_header('header');
        get_template_part('home');
        get_footer();
    }
}