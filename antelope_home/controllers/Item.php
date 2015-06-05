<?php
/**
 * Created by PhpStorm.
 * User: xeme
 * Date: 2015/6/4
 * Time: 13:31
 */

class Item extends CI_Controller {

    public function __construct ()
    {
        parent::__construct();
        $this->load->model('item_model');
    }


    function index()
    {
        $data['title'] = "Item Detail Page";
        $data['item'] = $this->item_model->get_item();
        $this->load->view('item.php', $data);
    }

}