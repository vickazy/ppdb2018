<?php
class M_jmlpoin extends CI_Model {

 function get_total_biaya(){
return $this->db->query("SELECT SUM(poin) as total FROM tb_pelanggaran");
}
   

 }
