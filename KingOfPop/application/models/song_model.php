<?php
class song_model extends CI_Model
 {
  public function __construct()
  {
    parent::__construct();
  }

  public function songlist(){
    /*SQL = SELECT album_name, album_image
     FROM `tb_album` */
     $query = $this->db->get('tb_song');
     return $query->result();
   }
}
?>
