<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Res extends CI_Controller {

    public function index() {
        $this->load->model('res_model');
        $name = $_POST['name'];
        $data['students'] = $this->res_model->get_info($name);
        if(sizeof($data['students']) > 0) {
            $this->load->view('res', $data);
        }
        else {
            $this->load->view('res_err');
        }
    }

}