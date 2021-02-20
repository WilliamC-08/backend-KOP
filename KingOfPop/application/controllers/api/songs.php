<?php
use Restserver\libraries\REST_Controller;

/**
 *
 */
class songs extends REST_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('song_model');
  }

  public function songlist_get()
  {
    $data = $this->song_model->songlist();
    $this->response( [ 'slist' => $data ], 200 );
  }
}
