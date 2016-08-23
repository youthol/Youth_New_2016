<?php

class Res_model extends CI_Model {

    public function get_info($name) {
        $query = $this->db->select('*')->from('students')
            ->where('name', $name)
            ->get();
        return $query->result_array();
    }

}
