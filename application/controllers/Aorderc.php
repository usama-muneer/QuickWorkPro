<?php

/**
 *
 */
class Aorderc extends CI_Controller{

  function __construct(){
    parent::__construct();
    $this->load->model('Aorder_model');
  }

  function update_order(){
    $order_id = $this->input->post('order_id');
    $data['order_status'] = $this->input->post('order_status');
    $this->Aorder_model->update_order($data, $order_id);
    redirect(base_url(). "disputed_orders");
  }

}
 ?>
