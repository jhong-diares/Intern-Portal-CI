<?php

class Login_mod extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    function REGISTER_ACCOUNT($username, $password)
    {
        $sql = "INSERT INTO tbl_user_acct_list (col_emai_addr, col_user_pass, col_acnt_crea) VALUES (?,?,NOW())";
        $query = $this->db->query($sql, array($username, $password));
    }

    function GET_USER($username)
    {
        $sql = "SELECT * FROM tbl_user_acct_list WHERE col_emai_addr = ?";
        $query = $this->db->query($sql, array($username));
        if ($query->result() > 0) {
            return $query->row();
        }
    }
}
