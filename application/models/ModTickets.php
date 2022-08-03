<?php

class ModTickets extends CI_Model {

    public function getChats($tick_id){
        $query = $this->db->get_where('bz_ticket_chat', array('tick_id' => $tick_id));
        $result = $query->result_array();
        return $result;
    }
    
    public function insertChat($data){
        $time = date('Y-m-d H:i:sa');
        $data['chat_datetime'] = $time;
        $this->db->insert('bz_ticket_chat', $data);
        return $time;
    }
    
}