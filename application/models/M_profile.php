<?php
    class M_profile extends CI_Model {
        public function tampil_data(){
            return $this->db->get('tabel_profile');
        }
    }
?>