<?php
use Restserver\libraries\REST_Controller;

/**
 *
 */
class albums extends REST_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('album_model');
  }

  public function albumlist_get()
  {
    $data = $this->album_model->albumlist();
    $this->response( [ 'albums' => $data ], 200 );
  }

  public function albumsonglist_get()
  {
    $aid = $this->get('id');
    $data = $this->album_model->albumsonglist($aid);
    $this->response( [ 'songs' => $data ], 200 );
  }

  public function albuminfo_get()
  {
    $aid = $this->get('id');
    $data = $this->album_model->albuminfo($aid);
    $this->response( [ 'info' => $data ], 200 );
  }

  public function test_get()
  {
    $msg = $this->get('msg');
    $this->response( [ 'response'  => [
                                        'status' => 'ok',
                                        'msg' => $msg
                                      ]
                      ]);
  }
}
  ?>
