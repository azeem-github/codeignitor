<?php

class Auth_model extends CI_Model
{
   public function __construct()
   {
      parent::__construct()
      
   }
   public function checUserExist()
       {
          $checUser =  $this->db->where(['users' => 'email'])
          ->get('users');
          if($checUser->num_rows() > 0){
             return $checUser->num_rows();

          }
         }
}

?>