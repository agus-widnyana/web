<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_member extends CI_Model {
	private $table="member";
	private $primary="id_member";

	function semua($limit=10,$offset=0,$order_column='',$order_type='asc'){
        if(empty($order_column) || empty($order_type))
            $this->db->order_by($this->primary,'asc');
        else
            $this->db->order_by($order_column,$order_type);
        return $this->db->get($this->table,$limit,$offset);
    }
	

}

/* End of file m_member.php */
/* Location: ./application/models/m_member.php */