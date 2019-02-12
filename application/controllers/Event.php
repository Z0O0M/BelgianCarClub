<?php
class Event extends CI_Controller {
    public function confirm($page = 'home') {
        $this->output->set_content_type('application/json');
        $this->load->model(array('event_model'));
        $eventInfo = $_POST['eventInfo'];
        $Response = $this->event_model->EventConfirm($eventInfo);
        echo json_encode($Response, JSON_FORCE_OBJECT);
    }
}
?>
