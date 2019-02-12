<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event_model extends CI_Model {
    public function EventConfirm($eventInfo) {
        $data = array(
            'attend' => $eventInfo[0],
            'first_name' => $eventInfo[1],
            'last_name' => $eventInfo[2],
            'email' => $eventInfo[3],
            'role' => $eventInfo[4],
            'receive_email' => $eventInfo[5],
            'instagram_name' => $eventInfo[6],
            'facebook_name_page' => $eventInfo[7],
            'brand_car' => $eventInfo[8],
            'model_car' => $eventInfo[9],
            'club' => $eventInfo[10]
        );
        $this->db->insert('summer_meet_2019', $data);
    }
}
