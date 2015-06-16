<?php
/**
 * Created by PhpStorm.
 * User: xeme
 * Date: 2015/6/4
 * Time: 11:28
 */

class Item extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('item_model');
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['item_detail'] = $this->item_model->get_item_detail();
        $data['rand_number'] = rand(10000,100000);
        $this->load->view('item.php', $data);
    }

    public function add()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');


        //$this->form_validation->set_rules('id', 'ID', 'required');
        $this->form_validation->set_rules('title', 'Title', 'required');
        //$this->item_model->add_item();


        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('item/add');

        }
        else
        {
            $this->item_model->add_item();
            $this->load->view('item/success');
        }
    }
}