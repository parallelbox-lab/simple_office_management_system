<?php
class LoginModel extends CI_Model{
    function login($username, $password)
    {
        $match = array(
            'username'=>$username,
            'password' =>md5($password),

        );

        $this->db->select()->from('users')->where($match);
        $query = $this->db->get();
        return $query->first_row('array');
    }
}