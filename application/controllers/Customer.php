<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {
    public function __construct()
    {
        parent::__construct();

        verify_session('customer');

        $this->load->model(array(
            'product_model' => 'product',
        ));
    }

    public function index()
    {
        $params['title'] = get_settings('store_tagline');

        $products['products'] = $this->product->get_all_products();
        $products['best_deal'] = $this->product->best_deal_product();
        
        $this->load->view('themes/customer/header', $params);
        get_template_part('customer/customer', $products);
        $this->load->view('themes/customer/footer');
      

    }
}