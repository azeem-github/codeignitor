<?php

class Auth_model extends CI_Model
{
   public function checUserExist()
   {
          $checUser =  $this->db->where('users' => 'email');
      
          if($checUser->num_rows() > 0){
             return $checUser->result();

          }
         }
         $ticketsDetail = $this->common->getWhere('msgs', 'date', $allDate);
         $total = count($attendanceDetail);
         if($total >0 )
         {
            echo "record found";
         }
         else{
             echo "Not Found";
          }
      }

?>