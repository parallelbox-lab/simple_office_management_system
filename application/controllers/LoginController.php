<?php 

class LoginController extends CI_Controller{

public function __construct(){
    parent::__construct();

    

    $this->load->model('LoginModel');
  }

    public function login(){
        if($this->session->userdata("user"))
    {
        redirect('dashboard');
    }
        $data['error'] = 0;
  
        $config = array(
            array(
                'field' => 'username',
                'label' => 'Username',
                'rules' => 'trim|required|min_length[5]'
            ),
            array(
                'field' => 'password',
                'label' => 'Password',
                'rules' => 'trim|required|min_length[5]'
            )
            
        );
$this->form_validation->set_rules($config);
$this->form_validation->set_error_delimiters('<p class="text-danger mt-2">', '</p>');
if($this->input->post())//data inputed for login
{
if($this->form_validation->run() == FALSE)
{ } else
{
        $username = $this->input->post('username', TRUE);
        $password = $this->input->post('password', TRUE);

        $user = $this->LoginModel->login($username, $password);
        if(!$user){
          $data['error'] = 1;
        }//when user doesn't exist  
        else //when user exist
        {
            $this->session->set_userdata('user', $user['user_id']);
            $this->session->set_userdata('username', $user['username']);
            $this->session->set_userdata('role', $user['role']);

            redirect('dashboard');
        }
      }
}
        $this->load->view('login',$data);
    }


    public function logout() {
        $this->session->unset_userdata('user');
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('role');
        // $data['message'] = "logout Successfully";
        // $this->session->set_userdata($data);
        redirect('login');    
    }

}