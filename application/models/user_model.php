<?php

    class user_model extends CI_Model {
        public function tambah_data($table, $data){

            return $this->db->insert($table, $data);
        }

        public function get_all_data($table){
            return $this->db->get($table);
        }

        public function get_data($table, $data){
            return $this->db->get_where($table, $data);
        }

        public function update_data($table, $set, $where){
        //melakukan perintah mengubah data tabel
        return $this->db->where($where)
        ->update($table, $set);
        }
        
    }

?>