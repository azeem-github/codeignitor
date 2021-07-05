<?php

class Auth extends CI_Controller
{
   public function login()
   {
      $this->form_validation->set_rules('username', 'Username', 'required');
      $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');
      if($this->form_validation->run() == TRUE) {


         $username = $_POST['username'];
         $password= md5($_POST['password']);

         $this->db->select('*');
         $this->db->from('users');
         $this->db->where(array('email'=>$email, 'password' => $password));
         $query = $this->db->get();

         $user = $query->row();

         if($user->email) {

            $this->session->set_flashdata("success", "you are logged in");

            $_SESSION['user_logged'] = TRUE;
            $_SESSION['username'] = $user->username;

            redirect("user/profile", "refresh");

         } else{
            $this->session->set_flashdata("error", "no such account in database");
            redirect("auth/login", "refresh") ;
         }
      }
    $this->load->view('login');
   }
   public function register()
   {
      if(isset($_POST['register'])){
         $this->form_validation->set_rules('username', 'Username', 'required');
         $this->form_validation->set_rules('email', 'Email', 'required');
         $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');
      if($this->form_validation->run() == TRUE ){

         echo "form validated";
         $data = array(
            'username'=>$_POST ['username'],
            'email'=>$_POST ['email'],
            'password'=>md5($_POST ['password']),
         );
         $this->db->insert('users', $data);
         $this->session->set_flashdata("success", "Your account has been registered. You can Login now");
         redirect("auth/register", "refresh");
      }
   }
$this->load->view('register');
   }
}
?>