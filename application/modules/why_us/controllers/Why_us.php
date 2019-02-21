<?php
    
    class Why_us extends MY_Controller {
    function index()
    {
        $this->load->model('category/M_category');
        $this->load->model('product/M_product');
        $data['categories'] = $this->M_category->get_all_category();
        $data['products'] = $this->M_product->get_all_items();
        
        $this->load->view('template/header', $data);
        $this->load->view('why_us/why_us_view');
        $this->load->view('template/footer', $data);

    }
  }
?>