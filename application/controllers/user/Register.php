<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH.'controllers/user/Login.php';


class Register extends Login {
  public function __construct(){
    parent::__construct();
    //load helper library
    $this->load->helper('form');

    //load validation library
    $this->load->library('form_validation');

    $this->load->library('Session');

    //load session library
    $this->load->library('session');
  }

  public function index(){
    $this->load_signUp_view(false);
  }

  public function load_signUp_view($response){
    $data['response'] = $response == false ? '' : $response;
    $data['css'] = $this->load->view('includes/css.php', NULL, TRUE);
    $data['js'] = $this->load->view('includes/js.php', NULL, TRUE);
    $data['nav'] = $this->load->view('includes/shop/nav.php', NULL, TRUE);
    $data['footer'] = $this->load->view('includes/shop/footer.php', NULL, TRUE);
    $data['register'] =  $this->load->view('includes/shop/register.php', NULL, TRUE);
    
    $this->load->view('pages/shop/signUp_view', $data);
  }

  // TODO!!
  public function register_validation(){
    $this->form_validation->set_rules('fullName','FullName','trim|required');
    $this->form_validation->set_rules('username','Username','trim|required');
    $this->form_validation->set_rules('email','Email','trim|required');
    $this->form_validation->set_rules('password','Password','trim|required');
    $this->form_validation->set_rules('phoneNo','PhoneNo','trim|required');
    $this->form_validation->set_rules('address','Address','trim|required');
    $this->form_validation->set_rules('policy','policy','required');

    if($this->form_validation->run() == FALSE){
      redirect('user/register');
    }else{
      $data = array(
        'fullname' => $this->input->post('fullName'),
        'username' => $this->input->post('username'),
        'email' => $this->input->post('email'),
        'password' => md5($this->input->post('password')),
        'address' => $this->input->post('address'),
        'phone' => $this->input->post('phoneNo'),
      );
      $this->load->model('Customer_model');
      $response = $this->Customer_model->insert_customer($data);
      
      if ($response['code'] == 0) {
          $message = 'Registration as Customer Successfull !';
          
          $login_session_param = array(
            'username' => $this->input->post('username'),
            'password' => md5($this->input->post('password')),
          );
          $this->generate_session($data['username'],$data['password']);
          
          //redirect to collections
          $this->session->set_flashdata('collections_param', $message);
          redirect('shop/collections/');
      } 
      else if ($response['code'] == 1062){
        if (strpos($response['message'], 'username') !== false) {
          $message = 'Username already exist!';
        }
        else if (strpos($response['message'], 'email') !== false) {
          $message = 'Email already exist!';
        }
        else {
          $message = 'Username & Email already exist!';
        }
        print_r($message);
        $this->load_signUp_view($message);
      }
    }
  }
}
?>
