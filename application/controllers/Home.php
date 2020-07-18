<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->helper(array('url'));
		$this->load->model('Employee_model');
    }

	public function v_create() {
		$this->load->view('_partials/v_header');
		$this->load->view('v_create');
		$this->load->view('_partials/v_footer');
	}

	// api gateway
	public function create() {
		$data = json_decode(file_get_contents('php://input'), true);
		$res = $this->Employee_model->insert_employee($data);
		//
		echo $res;
	}

	// api gateway + view of web app
	public function employees($params) {
		$order_by = substr($params, 0, 1);
		$field = substr($params, 1);
		$limit = $this->input->get('limit', TRUE);
		$offset = $this->input->get('offset', TRUE);
		// get data
		$data = $this->Employee_model->get_employee($offset, $limit, [$order_by, $field]);

		$this->load->view('_partials/v_header');
		$this->load->view('v_employee', array('data' => $data));
		$this->load->view('_partials/v_footer');
	}
}
