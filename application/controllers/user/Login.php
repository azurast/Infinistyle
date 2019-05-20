<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
  public function __construct(){
      parent::__construct();
      //load helper library
    $this->load->helper('form');

    //load validation library
    $this->load->library('form_validation');

    //load session library
    $this->load->library('Session');
  }
  
  public function index(){
    $params = $this->session->flashdata('login_fail');
    $data['message'] = $params != false ? $params : null; 
    $data['css'] = $this->load->view('includes/css.php', NULL, TRUE);
    $data['js'] = $this->load->view('includes/js.php', NULL, TRUE);
    $data['nav'] = $this->load->view('includes/shop/nav.php', NULL, TRUE);
    $data['footer'] = $this->load->view('includes/shop/footer.php', NULL, TRUE);
    $data['login'] =  $this->load->view('includes/shop/login.php', NULL, TRUE);
    
    $this->load->view('pages/shop/signIn_view', $data);
  }

  public function check_is_login($role){
    if(!(isset($this->session->userdata['logged_in_infinistyle']))){
      redirect('user/login'); 
    }
    $session_data = $this->session->userdata['logged_in_infinistyle'];
    if($session_data['role'] != $role){
      //kirim param message :  mesti login dulu sebagai $role
      redirect('user/login');
    }
  }

  public function generate_session($username, $role ){
    $session_data = array(
      'username' => $username,
      'status' => 'login',
      'role' => $role,
      );

    // add data user ke session
    $this->session->set_userdata('logged_in_infinistyle', $session_data);
  }

  public function login_validation(){
    $this->form_validation->set_rules('username', 'Username', 'trim|required');
    $this->form_validation->set_rules('password', 'Password', 'trim|required');
    
    if ($this->form_validation->run() == FALSE) {
      // checking if there is no session in local storage
      $this->check_is_login();
    }else {
      $data = array(
        'username'=> $this->input->post('username'),
        'password'=> md5($this->input->post('password'))
      );

      $this->load->model('Admin_model');
      $result_admin = $this->Admin_model->get_admin($data);
      if($result_admin){
        $this->generate_session($result_admin->username, 'admin');
        $this->session->set_flashdata('admin_param', 'Login as Admin success!');
        redirect('admin/dashboard');
      }

      $this->load->model('Customer_model');
      $result_customer = $this->Customer_model->get_customer($data);
      if($result_customer){
        $this->generate_session($result_customer->username, 'customer');
        $this->session->set_flashdata('collections_param', 'Login as Customer success!');
        redirect('shop/collections');
        // TODO : mau ngapain
      }

      if(!$result_customer && !$result_admin){
        $this->session->set_flashdata('login_fail', 'Username atau Password Salah!!');
        redirect('user/login');
      }
    }
  }
    
  public function logout(){
    //hancurin session
    $sess_array = array(
      'username' => ''
    );
    // session_destroy();
    $this->session->unset_userdata('logged_in_infinistyle', $sess_array);
    $this->session->set_flashdata('logout_success', 'Logout berhasil!');
    $data['message_display'] = 'Successfully Logout';
    redirect('shop/collections');
  }  
}
?>
