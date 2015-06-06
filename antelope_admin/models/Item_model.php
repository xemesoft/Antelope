<?php
/**
 * Created by PhpStorm.
 * User: xeme
 * Date: 2015/6/5
 * Time: 15:55
 */

class Item_model extends CI_Model {

    Public function __construct()
    {
        $this->load->database();
    }

    public function get_item_detail()
    {
        $query = $this->db->get('item_detail');
        return $query->result_array();
    }

    public function add_item()
    {
        $data = array(
            'uid' => rand(0,1000000),
            'title' => $this->input->post('title'),
        );

        return $this->db->insert('item_detail', $data);
    }
}