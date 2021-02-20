<?php
class album_model extends CI_Model
 {
  public function __construct()
  {
    parent::__construct();
  }

  public function albumlist(){
    /*SQL = SELECT album_name, album_image
     FROM `tb_album` */
     $query = $this->db->get('tb_album');
     return $query->result();
   }
 public function albumsonglist($aid=''){
   /*SQL = SELECT t.song_title
            ,	   l.album_name
           FROM
	               tb_song AS t
           INNER JOIN tb_album AS l
           ON t.album_id = l.album_id
   */
  /* $this->db->select('l.album_id, l.album_name, t.song_title');
   $this->db->from('tb_song t');*/

   $this->db->select('l.album_id, t.song_id, t.song_title');
   $this->db->join('tb_album l', 'ON(t.album_id = l.album_id)');
   if ($aid != '') $this->db->where('l.album_id = ',$aid);
   $query = $this->db->get('tb_song t');
   return $query->result_array();
 }
 public function albuminfo($aid=''){
   $this->db->select('l.album_id, l.album_image, l.album_name, l.album_creator, l.album_releasedate');
   if ($aid != '') $this->db->where('l.album_id =',$aid);
   $query = $this->db->get('tb_album l');
   return $query->result_array();
 }
}
 ?>
