<?php

class Internview_mod extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    function GET_INFO($id)
    {
        $sql = "SELECT * FROM tbl_user_acct_list WHERE id = ?";
        $query = $this->db->query($sql, array($id));
        if ($query->result() > 0) {
            return $query->row();
        }
    }


    function UPDATE_PERSONAL_INFO($id, $last, $first, $middle, $address, $email, $contact, $birthday, $gender, $skill, $img)
    {
        $sql = "UPDATE tbl_user_acct_list SET col_frst_name=?, col_midl_name=?, col_last_name=?,
                                              col_curr_addr=?, col_cell_numb=?, col_birt_date=?,
                                              col_intr_gndr=?, col_intr_skil=?, col_imag_name=? WHERE id=?";
        $this->db->query($sql, array($first, $middle, $last, $address, $contact, $birthday, $gender, $skill, $img, $id));
    }

    function UPDATE_INTERNSHIP_DETAILS($id, $schl_name, $schl_cont, $advs_name, $advs_cont, $intn_cour, $intn_hour)
    {
        $sql = "UPDATE tbl_user_acct_list SET col_scho_name=?, col_schl_cont=?, col_advs_name=?,
                                              col_advs_cont=?, col_intr_cour=?, col_totl_hour=? WHERE id=?";
        $this->db->query($sql, array($schl_name, $schl_cont, $advs_name, $advs_cont, $intn_cour, $intn_hour, $id));
    }

    function UPDATE_SCHEDULE($id, $schedule, $work_hour)
    {
        $sql = "UPDATE tbl_user_acct_list SET col_sche_day=?, col_work_hour=? WHERE id=?";
        $this->db->query($sql, array($schedule, $work_hour, $id));
    }

    function UPDATE_FILENAME($id, $waiver, $resume, $recommendation, $agreement, $step, $status)
    {
        if ($waiver == 'Choose file') {
            $waiver = 'EMPTY';
        }
        if ($resume == 'Choose file') {
            $resume = 'EMPTY';
        }
        if ($recommendation == 'Choose file') {
            $recommendation = 'EMPTY';
        }
        if ($agreement == 'Choose file') {
            $agreement = 'EMPTY';
        }

        $sql = "UPDATE tbl_user_acct_list SET col_reqm_waiv=?, col_reqm_resm=?, col_reqm_endo=?, col_reqm_agre=?, col_date_sbmt= NOW(), col_step_prog=? , col_user_stat=? WHERE id=?";
        $this->db->query($sql, array($waiver, $resume, $recommendation, $agreement, $step, $status, $id));
    }

    function  UPDATE_ESSAY($id, $essay)
    {
        $sql = "UPDATE tbl_user_acct_list SET col_esay_ansr=? WHERE id=?";
        $this->db->query($sql, array($essay, $id));
    }

    function DISPLAY_INFO()
    {
        $sql = "UPDATE tbl_user_acct_list SET name=? WHERE id=?";
        $this->db->query($sql, array());
    }


    function GET_ATTENDANCE($id)
    {
        $sql = "SELECT * FROM tbl_user_attn_list WHERE col_intr_id = ? ORDER BY id DESC";
        $query = $this->db->query($sql, array($id));
        if (count($query->result()) > 0) {
            return $query->result();
        }
    }

    function GET_CURR_DATE($id)
    {
        $sql = "SELECT id, col_time_out, col_time_in FROM tbl_user_attn_list WHERE col_intr_id = ? AND col_date_crea = CURDATE() ORDER BY id DESC LIMIT 1;";
        $query = $this->db->query($sql, array($id));
        if (count($query->result()) > 0) {
            return $query->row();
        }
    }

    function GET_ATTENDANCE_LAST($id)
    {
        $sql = "SELECT `id` FROM tbl_user_attn_list WHERE col_intr_id = ? ORDER BY id DESC LIMIT 1;";
        $query = $this->db->query($sql, array($id));
        $row = $query->row();
        return $row->id;
    }

    function UPDATE_ATTENDANCE($attendID, $time)
    {
        $sql = "UPDATE tbl_user_attn_list SET col_time_out=? WHERE id=?";
        $this->db->query($sql, array($time, $attendID));
    }

    function INSERT_ATTENDANCE($id, $name, $date, $time)
    {
        $sql = "INSERT INTO tbl_user_attn_list (col_intr_id, col_intr_name, col_attn_date, col_time_in, col_date_crea) VALUES (?,?,?,?,NOW())";
        $query = $this->db->query($sql, array($id, $name, $date, $time));
    }
}
