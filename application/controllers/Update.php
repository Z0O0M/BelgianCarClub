<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Update extends CI_Controller {

  public function recent() {
    $this->output->set_content_type('application/json');
    $count = $this->uri->segment('3');
    if (empty($count)) $count = 4;
    $this->load->model(array('update_model'));
    $Response = $this->update_model->UpdateRecent($count);
    echo json_encode($Response, JSON_FORCE_OBJECT);
  }
}
