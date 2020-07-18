<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get_employee($offset, $limit = 10, $params = []) {
        $order_by = $params[0] === '-' ? 'ASC' : 'DESC';

        $query = $this->db->select('*')->from('employee')
                        ->order_by($params[1], $order_by)
                        ->limit($limit, $offset)
                        ->get();

        return $query->result();
    }

    public function insert_employee($data) {
        //
        $response['success'] = TRUE;
        //
        $this->db->trans_begin();

        foreach ($data as $key => $value) {
            if($this->isExist($value['login']) < 1) {
                $this->db->set('id', 'UUID()', FALSE);
                $this->db->insert('employee', $value);
            } else {
                //
                $response['success'] = FALSE;
            }
        }
        //

        if($this->db->trans_status() === FALSE || $response['success'] === FALSE) {
            $this->db->trans_rollback();
            //
            $response['success'] = FALSE;
            $response['data'] = 'error inserting data!';
            $response['code'] = 400;
        }
        else {
            $this->db->trans_commit();
            //            
            $response['success'] = TRUE;
            $response['data'] = $data;
            $response['code'] = 200;
        }

        //
        return json_encode($response);
    }

    public function isExist($login) {
        $query = $this->db->get_where('employee', array('login' => $login));        
        $count = $query->num_rows();
        //
        return $count;
    }
}
?>