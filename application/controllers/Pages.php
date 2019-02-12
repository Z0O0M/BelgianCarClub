<?php
class Pages extends CI_Controller {
    public function view($page = 'home') {
        if (!file_exists(APPPATH.'views/pages/'.$page.'.php')) {
            show_404();
        }
        
        $data['title'] = ucfirst($page);
        $this->load->helper('url');
        if ($page == "home") {
            $this->load->database();
            $this->db->select('*');
            $this->db->from('instagram_api');
            $query = $this->db->get();
            $data['instagram_feed'] = '';
            foreach ($query->result_array() as $row) {
                $data['instagram_feed'] = $data['instagram_feed'].'<div class="carousel-item white" href="#!"><div class="row"><div class="col s12 m6 offset-l2 l6"><h2 style="text-transform: uppercase;">'.$row['car_name'].'</h2><p>'.$row['car_description'].'</p><a class="btn waves-effect white grey-text darken-text-3" href="'.$row['car_instagram_link'].'" target="_blank">See post</a></div><div class="col s12 m6 l4 hide-on-small-only valign-wrapper" style="height: 400px;"><img class="z-depth-3" style="width: 100%;" src="'.$row['car_image_link'].'"/></div></div></div>';
            }
        }
        if ($page == "events") {
            if(!$this->session->userdata('id'))
            {
                redirect('login/index');
            } else {
                $this->load->view('templates/header', $data);
                $this->load->view('pages/'.$page, $data);
                $this->load->view('templates/footer', $data);
            }
        } else {
            $this->load->view('templates/header', $data);
            $this->load->view('pages/'.$page, $data);
            $this->load->view('templates/footer', $data);
        }
    }
}
?>
