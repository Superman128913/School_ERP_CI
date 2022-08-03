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

    public function UpdateSchool($data){
        $this->db->where('sch_id', $data['sch_id'])->update('bz_schools', $data);
    }

    public function UpdateUser($data){
        $this->db->where('use_id', $data['use_id'])->update('bz_users', $data);
    }

    public function DeleteSchool($sch_id){
        $this->db->where('sch_id', $sch_id)->delete('bz_schools');
    }

    public function DeleteUser($use_id){
        $this->db->where('use_id', $use_id)->delete('bz_users');
    }
    
    public function updateState($sch_id){
        $curr_state = $this->db->get_where('bz_schools', array('sch_id' => $sch_id))->row()->sch_status;
        $new_state = ($curr_state == 1) ? 0 : 1;
        $this->db->where('sch_id', $sch_id)->update('bz_schools', array('sch_status' => $new_state));
    }

    
}