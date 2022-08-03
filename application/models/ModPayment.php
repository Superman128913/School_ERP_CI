<?php

class ModPayment extends CI_Model {

    public function UpdatePayment($data){
        $this->db->where('sch_id', $data['sch_id'])->update('bz_schools', $data);
    }

}