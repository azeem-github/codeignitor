<?php

class Auth extends CI_Controller

{
   public function index(){

$this->load->model('queries');
$checUserExist = $this->queries->checUserExist();
echo $checUserExist;
exit()
$this->load->view( 'register',['checUserExist'=>$checUserExist]);

   }

   public function logout()
   {
      unset($_SESSION);
      session_destroy();
      redirect("auth/login","refresh");
   }


   public function login()
   {
      $this->form_validation->set_rules('email', 'Email', 'required');
      $this->form_validation->set_rules('password', 'Password', 'required|min_length[20]');
      if($this->form_validation->run() == TRUE) {
         //check user in database


         $email = $_POST['email'];
         $password= md5($_POST['password']);

         $this->db->select('*');
         $this->db->from('users');
         $this->db->where(array('email'=>$email, 'password' => $password));
         $query = $this->db->get();

         $user = $query->row();
      //if user exists
         if($user->email) {
            
            //temporary message
            $this->session->set_flashdata("success", "You are logged in");

            $_SESSION['user_logged'] = TRUE;
            $_SESSION['username'] = $user->username;

            //redirect to profile
            redirect("user/profile", "refresh");

         } else{
            $this->session->set_flashdata("error", "No such account in database");
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
      if($this->form_validation->run() == TRUE){

         echo "form validated";
         $data = array(
            'username'=>$_POST ['username'],
            'email'=>$_POST ['email'],
            'password'=>md5($_POST ['password'])
         );
         $this->db->insert('users', $data);
         $this->session->set_flashdata("success", "Your account has been registered. You can Login now");
         redirect("auth/login", "refresh");

         
       }
       
      //else{
      //    $this->session->set_flashdata("error", "no such account in database");
      //    redirect("auth/register", "refresh") ;
      // }
   }
$this->load->view('register');
   }
}
?>