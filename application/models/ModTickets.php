<?php

class ModTickets extends CI_Model {

    public function getTicketList(){
        $this->db->select('bz_tickets.*, CONCAT(bz_users.use_fname, bz_users.use_mname, bz_users.use_lname) AS use_name, bz_users.use_fname, bz_users.use_image');
        $this->db->from('bz_tickets');
        $this->db->join('bz_users','bz_users.use_id = bz_tickets.use_id');
        $query = $this->db->get();
        $result = $query->result_array();
        return $result;
    }
    

    
}