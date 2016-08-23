<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sushe extends CI_Controller {

    public function index() {
        $this->load->view('sushe');
    }

    public function res() {
        $this->load->model('sushe_model');
        $name = $_POST['name'];
        $class = $_POST['class'];
        $data['info'] = $this->sushe_model->get_info($name, $class);
        if(sizeof($data['info']) > 0) {
            $this->load->view('sushe_res', $data);
        }
        else {
            $this->load->view('sushe_err');
        }
    }

    public function mate() {
        $this->load->model('sushe_model');
        $room = $_GET['room'];
        $data['mates'] = $this->sushe_model->get_mate($room);
        $this->load->view('sushe_mate', $data);
    }

}