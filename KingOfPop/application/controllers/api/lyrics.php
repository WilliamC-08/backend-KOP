<?php
use Restserver\libraries\REST_Controller;

/**
 *
 */
class lyrics extends REST_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('lyrics_model');
  }

  public function lyrics_get()
  {
    $data = $this->lyrics_model->lyrics();
    $this->response( [ 'lirik' => $data ], 200 );
  }

  public function lyrics1_get()
  {
    $id = $this->get('id');
    $data = $this->lyrics_model->lyricsbyID($id);
    $this->response( [ 'lirik' => $data ], 200 );
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
