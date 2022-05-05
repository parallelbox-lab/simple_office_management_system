<?php 

class HomeController extends CI_Controller{
    public  function __construct(){
        parent::__construct();

        if(!$this->session->userdata('user')){
          redirect('login');
        }

        $this->load->helper('text');
    }

    public function index(){
   redirect('dashboard');
    }
// dashboard method
    public function home(){
        $user = $this->session->userdata('user');
        $data['getInfo'] = $this->HomeModel->getInfo($user);
        $data['report'] = $this->HomeModel->getReport();
        //getting data for support dep
        $data['surveyS'] = $this->HomeModel->surveyS();
     // getting data for sales department
        $data['survey'] = $this->HomeModel->survey();

        $this->load->view('dashboard/header',$data);
        $this->load->view('dashboard/home');
        $this->load->view('dashboard/footer');
    }
// sales department  method to send report to technical
    public function send_message(){
        $user = $this->session->userdata('user');
        $data['getInfo'] = $this->HomeModel->getInfo($user);
        $data['report'] = $this->HomeModel->getReport();

        // validation and form submission
        $request = $this->input->post('send');
        if(isset($request)){
        $config = array(
      array(
        'field' => 'name',
        'label' => 'Customer Name',
        'rules' => 'trim|required'),
      array(
        'field' => 'phone',
        'label' => 'Customer Phone Number',
        'rules' => 'trim|required'),
      array(
        'field' => 'email',
        'label' => 'Customer Email',
        'rules' => 'trim|required'),
        array(
            'field' => 'address',
            'label' => 'Customer Address',
            'rules' => 'trim|required'),
       array(
        'field' => 'coordinate',
        'label' => 'Customer coordinate',
        'rules' => 'trim|required'),
            array(
                'field' => 'service',
                'label' => 'Plan',
                'rules' => 'trim|required'),         
        );
        $this->form_validation->set_rules($config);
        $this->form_validation->set_error_delimiters('<p class="text-danger mt-2">', '</p>');
    if($this->input->post())//data inputed for login
    {
    if($this->form_validation->run() == FALSE)
    { } 
 else{
    $data = array(
        'name' => $this->input->post('name'),
        'phone' => $this->input->post('phone'),
        'email' => $this->input->post('email'),
        'address' => $this->input->post('address'),
        'coordinate' => $this->input->post('coordinate'),
        'service' => $this->input->post('service')
    );
    
    $this->HomeModel->send_report($data);
    $this->session->set_flashdata('success', 'Report Sent Successfully');
    redirect('dashboard/send-report','refresh');
   }
        }
    }
        $this->load->view('dashboard/header',$data);
        $this->load->view('dashboard/message');
        $this->load->view('dashboard/footer');
    }

    // method for viewing reports

    public function view_report(){
        $user = $this->session->userdata('user');
        $data['getInfo'] = $this->HomeModel->getInfo($user);
        $data['report'] = $this->HomeModel->getReport();
        $data['reports'] = $this->HomeModel->getReports();
        $this->load->view('dashboard/header',$data);
        $this->load->view('dashboard/view_report');
        $this->load->view('dashboard/footer');
    }

    
    public function delete_report(){
        $id = $this->uri->segment(3);
        $response=$this->HomeModel->deleterecords($id);
        if($response==true){
       $this->session->set_flashdata('success','record succesfully deleted');
       redirect('dashboard/view-report');     
        }
        else{
      $this->session->set_flashdata('warning','error unable to process data');
      redirect('dashboard/view-report');     
      
        }
    }
    public function open_message(){
	
        $user = $this->session->userdata('user');
        $data['getInfo'] = $this->HomeModel->getInfo($user);
        $id = $this->uri->segment(3);
        $data['report'] = $this->HomeModel->getReport();
        $data['reports'] = $this->HomeModel->edit_pro($id);
        // $data['reports'] = $this->HomeModel->getReports();
        $request = $this->input->post('send');
        if(isset($request)){
        $data = array(
            'status' => $this->input->post('survey'),
        );
        $this->HomeModel->updateStatus($id,$data);
        $this->session->set_flashdata('success', 'Survey status Updated Successfully');
        redirect("dashboard/view-report");
       }
        $this->load->view('dashboard/header',$data);
        $this->load->view('dashboard/view_message');
        $this->load->view('dashboard/footer');

    }

    public function successfull_survey(){
        $user = $this->session->userdata('user');
        $data['getInfo'] = $this->HomeModel->getInfo($user);
        $data['report'] = $this->HomeModel->getReport();
        $data['successful_survey'] = $this->HomeModel->successful_survey();
        $this->load->view('dashboard/header',$data);
        $this->load->view('dashboard/successfull_S');
        $this->load->view('dashboard/footer');
    }
// method to add equipments needed to sccessful survey
    public function list_equipments(){
        $user = $this->session->userdata('user');
        $data['getInfo'] = $this->HomeModel->getInfo($user);
        $data['report'] = $this->HomeModel->getReport();
        // load customer details
        $id = $this->uri->segment(3);
        $data['reports'] = $this->HomeModel->edit_pro($id);

        $request = $this->input->post('send');
        if(isset($request)){
        $config = array(
      array(
        'field' => 'items',
        'label' => 'Equipments',
        'rules' => 'trim|required'),
      );
      $this->form_validation->set_rules($config);
      $this->form_validation->set_error_delimiters('<p class="text-danger mt-2">', '</p>');
    if($this->input->post())//data inputed for login
    {
    if($this->form_validation->run() == FALSE)
   { } 
    else{
         $data = array(
                'name' => $this->input->post('name'),
                'phone' => $this->input->post('phone'),
                'email' => $this->input->post('email'),
                'address' => $this->input->post('address'),
                'service' => $this->input->post('service'),
                'items' => $this->input->post('items'),
                'items' => $this->input->post('items'),
                'invoice_status' => "pending"
            );
            $this->HomeModel->add_equipments($data);
    }
               
        
        $this->session->set_flashdata('success', 'Report Sent Successfully');
        redirect('dashboard/successfull-survey','refresh');
           }
        }
    
        $this->load->view('dashboard/header',$data);
        $this->load->view('dashboard/list_equipments');
        $this->load->view('dashboard/footer');
    }

    //Successful Surveys with Equipments only for support department
    public function finished_survey(){
        $user = $this->session->userdata('user');
        $data['getInfo'] = $this->HomeModel->getInfo($user);
        $data['report'] = $this->HomeModel->getReport();
        $data['survey_success'] = $this->HomeModel->survey_success();
        $this->load->view('dashboard/header',$data);
        $this->load->view('dashboard/finished_survey');
        $this->load->view('dashboard/footer');
    }

    function view_finished_survey(){
        $user = $this->session->userdata('user');
        $data['getInfo'] = $this->HomeModel->getInfo($user);
        $id = $this->uri->segment(3);
        $data['reports'] = $this->HomeModel->edit_pro($id);
        $this->load->view('dashboard/header',$data);
        $this->load->view('dashboard/view_finished_survey');
        $this->load->view('dashboard/footer');
    }

    function open(){
        $user = $this->session->userdata('user');
        $data['getInfo'] = $this->HomeModel->getInfo($user);
        $id = $this->uri->segment(3);
        $data['reports'] = $this->HomeModel->view($id);
        $request = $this->input->post('send');
        if(isset($request)){
            $data = array(
                'invoice_status' => $this->input->post('status'),
            );
            $this->HomeModel->update($id,$data);
            $this->session->set_flashdata('success', 'Report Sent Successfully');
            redirect("dashboard/view/$id",'refresh');
            

        }
        $this->load->view('dashboard/header',$data);
        $this->load->view('dashboard/view');
        $this->load->view('dashboard/footer');
    }

    public function list_invoice_sent(){
        $user = $this->session->userdata('user');
        $data['getInfo'] = $this->HomeModel->getInfo($user);
        $data['invoice_list'] = $this->HomeModel->invoice_list();
        $this->load->view('dashboard/header',$data);
        $this->load->view('dashboard/sent_invoice_list');
        $this->load->view('dashboard/footer');
    }

    public function view_list(){
        $user = $this->session->userdata('user');
        $data['getInfo'] = $this->HomeModel->getInfo($user);
        $id = $this->uri->segment(3);
        $data['reports'] = $this->HomeModel->view($id);
        $this->load->view('dashboard/header',$data);
        $this->load->view('dashboard/sent_invoice');
        $this->load->view('dashboard/footer');
    }

   
}