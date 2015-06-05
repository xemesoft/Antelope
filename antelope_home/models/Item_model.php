<?php
/**
 * Created by PhpStorm.
 * User: xeme
 * Date: 2015/6/4
 * Time: 13:54
 */

class Item_model extends CI_Model {

    Public function __construct()
    {
        $this->load->database();
    }

    public function get_item()
    {
        $query = $this->db->get('item');
        return $query->result_array();
    }
}