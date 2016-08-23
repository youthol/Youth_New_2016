<?php

class Sushe_model extends CI_Model {

    public function get_info($name, $class) {
        $query = $this->db->select('*')->from('sushe')
            ->group_start()
            ->where('name', $name)
            ->where('class', $class)
            ->group_end()
            ->get();
        return $query->result_array();
    }

    public function get_mate($room) {
        $query = $this->db->select('*')->from('sushe')
            ->where('room', $room)
            ->order_by('bed ASC')
            ->get();
        return $query->result_array();
    }

}
