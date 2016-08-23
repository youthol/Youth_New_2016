<?php

class Ratio_model extends CI_Model {

    public function get_num($field, $name, $gender) {
        $this->db->where($field, $name);
        $this->db->where('gender', $gender);
        $this->db->from('students');
        return $this->db->count_all_results();
    }

}