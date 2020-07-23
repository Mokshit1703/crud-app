<?php

    class User_model extends CI_model{

        function Create($formarray){
            $this->db->insert('users',$formarray);
        }

        function all(){
            return $users = $this->db->get('users')->result_array();
        }

        function getuser($userID){
            $this->db->where('user_id',$userID);
            return $user = $this->db->get('users')->row_array();
        }

        function updateUser($userID,$formarray){
            $this->db->where('user_id',$userID);
            $this->db->update('users',$formarray);
        }

        function deleteUser($userID){
            $this->db->where('user_id',$userID);
            $this->db->delete('users');
        }

    }

?>