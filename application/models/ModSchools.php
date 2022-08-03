<?php

class ModSchools extends CI_Model {

    public function AddUser($data){
        $this->db->insert('bz_users', $data);
    }
    
    public function AddSchool($data){
        $this->db->insert('bz_schools', $data);
    }
    
    public function AddAdmin($data){
        $this->db->insert('bz_admins', $data);
    }
    
    public function updateState($sch_id){
        $curr_state = $this->db->get_where('bz_schools', array('sch_id' => $sch_id))->row()->sch_status;
        $new_state = ($curr_state == 1) ? 0 : 1;
        $this->db->where('sch_id', $sch_id)->update('bz_schools', array('sch_status' => $new_state));
    }
    

    
}