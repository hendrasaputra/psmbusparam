<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Template_model extends CI_Model {

    function get_services()
    {
        $query = $this->db->get('service');
        if($query->num_rows() > 0){
            $result = $query->result_array();
            return $result;
        }else{
            return false;
        }
    }
	
	function get_categories()
    {
        $query = $this->db->get('category');
        if($query->num_rows() > 0){
            $result = $query->result_array();
            return $result;
        }else{
            return false;
        }
    }
	
	function get_l3m()
    {
        $query = $this->db->get('l3_m');
        if($query->num_rows() > 0){
            $result = $query->result_array();
            return $result;
        }else{
            return false;
        }
    }
	
	function get_l4m()
    {
        $query = $this->db->get('l4_m');
        if($query->num_rows() > 0){
            $result = $query->result_array();
            return $result;
        }else{
            return false;
        }
    }
	
	function get_zones()
    {
        $query = $this->db->get('zone');
        if($query->num_rows() > 0){
            $result = $query->result_array();
            return $result;
        }else{
            return false;
        }
    }
}