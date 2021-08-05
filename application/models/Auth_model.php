<?php

class Auth_model extends CI_Model
{
   public function checUserExist()
   {
      parent::__construct()
      
   }
   public function checUserExist()
       {
          $checUser =  $this->db->where('users' => 'email');
      
          if($checUser->num_rows() > 0){
             return $checUser->result();

          }
         }
}

?>