<?php
/**
 * Created by PhpStorm.
 * User: richardliu
 * Date: 15/6/16
 * Time: 下午4:27
 */

class Post extends CI_Controller {

    public function index(){
        $this->load->view('blog');
    }

}