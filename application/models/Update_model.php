<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Update_model extends CI_Model {
    public function UpdateRecent($count) {
        $url = 'https://api.instagram.com/v1/users/self/media/recent/?access_token=7387140897.1677ed0.dc7b60ff409d441a91f2b103755dd359&count='.$count;
        $output = file_get_contents($url);
        $manage = json_decode($output, true);
        $id = 0;
        foreach ($manage['data'] as $value) {
            $id += 1;
            $cars = explode("#", $value['caption']['text']);
            $car = $cars[1].$cars[2];
            $this->db->select('*');
            $this->db->from('instagram_api');
            $this->db->where('car_id', $id);
            $query = $this->db->get();
            $data = array(
                'car_id' => $id,
                'car_name' => $car,
                'car_description' => $cars[0],
                'car_image_link' => $value['images']['standard_resolution']['url'],
                'car_instagram_link' => $value['link']
            );
            if ($query->num_rows() == 0) $this->db->insert('instagram_api', $data);
            else {
                $this->db->where('car_id', $id);
                $this->db->update('instagram_api', $data);
            }
        }
        $this->db->select('*');
        $this->db->from('instagram_api');
        $query = $this->db->get();
        foreach ($query->result_array() as $row) {
            if ($row['car_id'] > $count) $this->db->delete('instagram_api', array('id' => $row['id']));
        }
        $User['Count'] = $count;
        return $User;
    }
}
