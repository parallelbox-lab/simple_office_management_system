<?php

class HomeModel extends CI_Model{
    function getInfo($user){
     $this->db->select('*');
     $this->db->where($user, 'user_id');
     $query = $this->db->get('users');

     return $query->result_array();
    }

    // save report in db
    function send_report($data){
    return $this->db->insert('report_table',$data);
    }
    // get report with limit
    function getReport(){
        $limit = 3;
        $this->db->select('*');
        $this->db->order_by('date_added','ASC');
        $this->db->where('status','untouched');
        $this->db->limit($limit);
        $query = $this->db->get('report_table');
        return $query->result();
    }

     function updateStatus($id,$data){
        $this->db->where('id', $id);
        $this->db->update('report_table',  $data);
     }

     function update($id,$data){
        $this->db->where('id', $id);
        $this->db->update('list_equipment',  $data);
     }

    //  get reports 
    function getReports(){
        $this->db->select('*');
        $query = $this->db->get('report_table');
        return $query->result();
    }

    // display successful surveys having a limit of 6
    function surveyS(){
        $this->db->select('*');
        $this->db->where('invoice_status','pending');
        $this->db->order_by('date_added','ASC');
        $query = $this->db->get('list_equipment');
        return $query->result();
    }

    function survey(){
        $this->db->select('*');
        $this->db->where('status','success');
        $this->db->limit('6');
        $this->db->order_by('date_added','ASC');
        $query = $this->db->get('report_table');
        return $query->result();
    }

    // function List_eq(){
    //     $this->db->select('*');
    //     $this->db->where('status','success');
    //     $this->db->limit('6');
    //     $this->db->order_by('date_added','ASC');
    //     $query = $this->db->get('list_equipment');
    //     return $query->result();
    // }

     function successful_survey(){
        $this->db->select('*');
        $this->db->where('status','success');
        $query = $this->db->get('report_table');
        return $query->result();
     }

    function deleterecords($id)
    {
        $this->db->where("id", $id);
        $this->db->delete("report_table");
        return true;
    }
    function edit_pro($id){
        $query = $this->db->get_where('report_table',array('id' => $id));
        return $query->row_array();
    }
    
    function view($id){
        $query = $this->db->get_where('list_equipment',array('id' => $id));
        return $query->row_array();
    }
    function add_equipments($data){
        return $this->db->insert('list_equipment',$data);
    }

    function invoice_list(){
        $this->db->select('*');
        $this->db->where('invoice_status','success');
        $query = $this->db->get('list_equipment');
        return $query->result();
    }

    function view_inv($id){
        $query = $this->db->get_where('list_equipment',array('id' => $id));
        return $query->row_array();
    }
 

}