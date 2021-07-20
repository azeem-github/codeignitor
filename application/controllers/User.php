<?php

class User extends CI_Controller
{
   public function __construct()
   {

      parent::__construct();
      if($_SESSION['user_logged'] == FALSE) {
         $this->session->set_flashdata("error", "please login First");
         redirect("auth/login");
      }
   }
   public function profile()
   {
      if($_SESSION['user_logged'] == FALSE) {
         $this->session->set_flashdata("error", "please login First");
         redirect("auth/login");
      }
      $this->load->view('profile');
   }

   public function tickets()
   {
      if($_SESSION['user_logged'] == FALSE){
         $this->session->set_flashdata("error", "Please check the tickets");
         redirect("auth/tickets");
      }
      $this->load->view('tickets');
   }

public function accounts()
{
   if($_SESSION['user_logged'] == FALSE){
      $this->session->set_flashdata("error", "Please check the tickets");
      redirect("auth/accounts");
   }
   $this->load->view('accounts');
}

public function category()
{
   if($_SESSION['user_logged'] == FALSE){
      $this->session->set_flashdata("error", "Please check the tickets");
      redirect("auth/category");
   }
   $this->load->view('category');
}
public function create()
{
   if($_SESSION['user_logged'] == FALSE){
      $this->session->set_flashdata("error", "Please check the tickets");
      redirect("auth/create");
   }
   $this->load->view('create');
}
}
?> 