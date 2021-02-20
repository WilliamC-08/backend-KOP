<?php
class lyrics_model extends CI_Model
 {
  public function __construct()
  {
    parent::__construct();
  }

  public function lyrics(){
    /*SELECT t.song_title
    ,	   l.lyrics
    FROM
	  tb_song AS t
    INNER JOIN tb_lyrics AS l
    ON t.lyric_id = l.lyric_id
    WHERE t.song_id = 1 */

     $this->db->select('t.song_id,t.song_title, l.lyrics');
     $this->db->from('tb_song t');
     $this->db->join('tb_lyrics l', 'ON(t.lyric_id = l.lyric_id)');
  //   if ($where != '') $this->db->where($where);
     $query = $this->db->get();
     return $query->result_array();
   }

   public function lyricsbyID($id = ''){
     /*SELECT t.song_title
     ,	   l.lyrics
     FROM
 	  tb_song AS t
     INNER JOIN tb_lyrics AS l
     ON t.lyric_id = l.lyric_id
     WHERE t.song_id = var id */
      $this->db->select('t.song_id, t.song_title, l.lyrics');
      $this->db->join('tb_lyrics l', 'ON(t.lyric_id = l.lyric_id)');
      if ($id != '') $this->db->where('t.song_id = ',$id);
      $query = $this->db->get('tb_song t');
      return $query->result_array();
    }


 }

 ?>
