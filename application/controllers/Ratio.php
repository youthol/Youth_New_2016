<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ratio extends CI_Controller {

    public function index() {
        $this->load->view('ratio');
    }

    public function res() {
        $this->load->model('ratio_model');
        $field = $_POST['field'];
        $name = $_POST['name'];
        $male = $this->ratio_model->get_num($field, $name, '男');
        $famale = $this->ratio_model->get_num($field, $name, '女');
        $bili = $male / $famale;
        $data['info'] = [$name, $male, $famale, $bili];
        if($male == 0 && $famale == 0) {
            $this->load->view('ratio_err', $data);
        }
        else {
            $this->load->view('ratio_res', $data);
        }
    }

}