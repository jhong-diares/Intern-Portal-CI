<?php

class Adminview_mod extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    function UPDATE_PERSONAL_INFO($id, $last, $first, $middle, $address, $email, $contact, $birthday, $gender, $skill, $img)
    {
        $sql = "UPDATE tbl_user_acct_list SET col_frst_name=?, col_midl_name=?, col_last_name=?,
                                              col_curr_addr=?, col_cell_numb=?, col_birt_date=?,
                                              col_intr_gndr=?, col_intr_skil=?, col_imag_name=? WHERE id=?";
        $this->db->query($sql, array($first, $middle, $last, $address, $contact, $birthday, $gender, $skill, $img, $id));
    }

    // ================================================== START ONBOARDING ==================================================
    function GET_TOTAL_FOR_INTERVIEW()
    {
        $sql = "SELECT COUNT(ALL col_user_stat) as 'total_for_interview' FROM tbl_user_acct_list WHERE (col_user_stat = ? AND col_step_prog = ?) AND col_user_type= ?";
        $query = $this->db->query($sql, array('FOR INTERVIEW', 2, 'INTERN'));
        if ($query->result() > 0) {
            return $query->row();
        }
    }

    function GET_TOTAL_HIRED()
    {
        $sql = "SELECT COUNT(ALL col_user_stat) as 'total_hired' FROM tbl_user_acct_list WHERE (col_user_stat = ? AND col_step_prog > ?) AND col_user_type= ?";
        $query = $this->db->query($sql, array('ACCEPTED', 2, 'INTERN'));
        if ($query->result() > 0) {
            return $query->row();
        }
    }

    function GET_TOTAL_RESCHEDULED()
    {
        $sql = "SELECT COUNT(ALL col_user_stat) as 'total_rescheduled' FROM tbl_user_acct_list WHERE (col_user_stat = ? AND col_step_prog = ?) AND col_user_type = ?";
        $query = $this->db->query($sql, array('RESCHEDULE', 2, 'INTERN'));
        if ($query->result() > 0) {
            return $query->row();
        }
    }

    function GET_TOTAL_FAILED()
    {
        $sql = "SELECT COUNT(ALL col_user_stat) as 'total_failed' FROM tbl_user_acct_list WHERE (col_user_stat = ? AND col_step_prog = ?) AND col_user_type= ?";
        $query = $this->db->query($sql, array('FAILED', 1, 'INTERN'));
        if ($query->result() > 0) {
            return $query->row();
        }
    }

    function GET_ONBOARDING()
    {
        $sql = "SELECT `id`, `col_acnt_crea`, `col_user_type`, `col_emai_veri`, `col_emai_addr`,
        `col_user_pass`, `col_last_name`, `col_frst_name`, `col_midl_name`, `col_curr_addr`,
        `col_cell_numb`, `col_birt_date`, `col_intr_gndr`, `col_intr_skil`, `col_imag_name`,
        `col_imag_path`, `col_scho_name`, `col_schl_cont`, `col_advs_name`, `col_advs_cont`,
        `col_intr_cour`, `col_totl_hour`, `col_sche_day`, `col_work_hour`, `col_reqm_waiv`,
        `col_reqm_resm`, `col_reqm_endo`, `col_reqm_agre`, `col_esay_ansr`, `col_date_sbmt`,
        `col_step_prog`, `col_user_stat`, `col_date_inte`, `col_inte_resc`,
        `col_star_date`, `col_inte_stat`,SUBSTRING(`col_date_inte`,1,10) AS 'SUB_DATE',col_user_stat,
        STR_TO_DATE(SUBSTRING(`col_date_inte`,11,18),'%l:%i %p') AS 'SUB_TIME' FROM tbl_user_acct_list 
        WHERE (col_user_stat = 'FOR INTERVIEW' OR col_user_stat = 'RESCHEDULE') AND (col_step_prog > 0 AND col_user_type = 'INTERN') 
        ORDER BY `SUB_DATE` ASC, `SUB_TIME`";
        $query = $this->db->query($sql);
        return $query->result();
    }

    function HIRE_INTERN($id)
    {
        $sql = "UPDATE tbl_user_acct_list SET col_step_prog = ?, col_user_stat = ? , col_star_date = NOW(), col_inte_stat = ? WHERE id=?";
        $query = $this->db->query($sql, array(3, 'ACCEPTED', 'PASSED', $id,));
        return $query;
    }

    function RESCHEDULE_INTERN($id, $rescheduleDateTime)
    {
        $sql = "UPDATE tbl_user_acct_list SET col_step_prog = ?, col_user_stat = ?, col_date_inte = ? WHERE id=?";
        $query = $this->db->query($sql, array(2, 'RESCHEDULE', $rescheduleDateTime, $id));
        return $query;
    }

    function FAILED_INTERN($id)
    {
        $sql = "UPDATE tbl_user_acct_list SET col_step_prog = ?, col_user_stat = ?, col_inte_stat = ? WHERE id=?";
        $query = $this->db->query($sql, array(1, 'FAILED', 'FAILED', $id));
        return $query;
    }

    function DETAILS_INTERN($id)
    {
        $sql = "SELECT * FROM tbl_user_acct_list WHERE id = ?";
        $query = $this->db->query($sql, array($id));
        if ($query->result() > 0) {
            return $query->row();
        }
    }

    function GET_FAILED()
    {
        $sql = "SELECT * FROM tbl_user_acct_list WHERE (col_user_stat = ? AND col_step_prog = ?) AND col_user_type= ?";
        $query = $this->db->query($sql, array('FAILED', 1, 'INTERN'));
        if (count($query->result()) > 0) {
            return $query->result();
        }
    }

    function GET_RESCHEDULE()
    {
        $sql = "SELECT * FROM tbl_user_acct_list WHERE (col_user_stat = ? AND col_step_prog = ?) AND col_user_type= ?";
        $query = $this->db->query($sql, array('RESCHEDULE', 2, 'INTERN'));
        if (count($query->result()) > 0) {
            return $query->result();
        }
    }

    function GET_HIRED_INTERN()
    {
        $sql = "SELECT * FROM tbl_user_acct_list WHERE (col_user_stat = ? AND col_step_prog = ?) AND col_user_type= ?";
        $query = $this->db->query($sql, array('ACCEPTED', 3, 'INTERN'));
        if (count($query->result()) > 0) {
            return $query->result();
        }
    }


    // ================================================== END ONBOARDING ==================================================






    // ================================================== START RECRUITMENT ==================================================

    function GET_TOTAL_PENDING()
    {
        $sql = "SELECT COUNT(ALL col_user_stat) as 'total_pending' FROM tbl_user_acct_list WHERE (col_user_stat = ? AND col_step_prog = ?) AND col_user_type= ?";
        $query = $this->db->query($sql, array('PENDING', 1, 'INTERN'));
        if ($query->result() > 0) {
            return $query->row();
        }
    }

    function GET_TOTAL_ACCEPTED()
    {
        $sql = "SELECT COUNT(ALL col_user_stat) as 'total_accepted' FROM tbl_user_acct_list WHERE (col_user_stat = ? AND col_step_prog > ?) AND col_user_type= ?";
        $query = $this->db->query($sql, array('FOR INTERVIEW', 1, 'INTERN'));
        if ($query->result() > 0) {
            return $query->row();
        }
    }

    function GET_TOTAL_QUOTALIMITED()
    {
        $sql = "SELECT COUNT(ALL col_user_stat) as 'total_quota_limit' FROM tbl_user_acct_list WHERE (col_user_stat = ? AND col_step_prog = ?) AND col_user_type= ?";
        $query = $this->db->query($sql, array('QUOTA LIMIT', 1, 'INTERN'));
        if ($query->result() > 0) {
            return $query->row();
        }
    }

    function GET_REJECTED()
    {
        $sql = "SELECT * FROM tbl_user_acct_list WHERE (col_user_stat = ? AND col_step_prog = ?) AND col_user_type= ?";
        $query = $this->db->query($sql, array('REJECTED', 1, 'INTERN'));
        if (count($query->result()) > 0) {
            return $query->result();
        }
    }

    function GET_QUOTA_LIMIT()
    {
        $sql = "SELECT * FROM tbl_user_acct_list WHERE (col_user_stat = ? AND col_step_prog = ?) AND col_user_type= ?";
        $query = $this->db->query($sql, array('QUOTA LIMIT', 1, 'INTERN'));
        if (count($query->result()) > 0) {
            return $query->result();
        }
    }

    function GET_FOR_INTERVIEW()
    {
        $sql = "SELECT * FROM tbl_user_acct_list WHERE (col_user_stat = ? AND col_step_prog = ?) AND col_user_type= ?";
        $query = $this->db->query($sql, array('FOR INTERVIEW', 2, 'INTERN'));
        if (count($query->result()) > 0) {
            return $query->result();
        }
    }

    function GET_PENDING_REQUEST()
    {
        $sql = "SELECT * FROM tbl_user_acct_list WHERE (col_user_stat = ? AND col_step_prog = ?) AND col_user_type= ?";
        $query = $this->db->query($sql, array('PENDING', 1, 'INTERN'));
        if (count($query->result()) > 0) {
            return $query->result();
        }
    }


    function GET_TOTAL_REJECTED()
    {
        $sql = "SELECT COUNT(ALL col_user_stat) as 'total_rejected' FROM tbl_user_acct_list WHERE (col_user_stat = ? AND col_step_prog = ?) AND col_user_type= ?";
        $query = $this->db->query($sql, array('REJECTED', 1, 'INTERN'));
        if ($query->result() > 0) {
            return $query->row();
        }
    }

    function GET_ATTENDANCE()
    {
        $sql = "SELECT INTERN.id, INTERN.col_last_name AS LAST_NAME, INTERN.col_frst_name AS FIRST_NAME,ATTENDANCE.col_intr_id, INTERN.`col_user_type` AS ACCOUNT_TYPE, INTERN.col_user_stat AS STATUS, ATTENDANCE.col_attn_date, ATTENDANCE.col_date_crea, ATTENDANCE.col_time_in AS TIME_IN,ATTENDANCE.col_time_out AS TIME_OUT FROM tbl_user_acct_list INTERN LEFT JOIN tbl_user_attn_list ATTENDANCE ON ATTENDANCE.col_intr_id = INTERN.id WHERE INTERN.col_user_type='INTERN' AND INTERN.col_user_stat='ACCEPTED' ORDER BY ATTENDANCE.col_date_crea DESC;";
        $query = $this->db->query($sql);
        return $query->result();
    }

    function GET_REQUEST()
    {
        $sql = "SELECT * FROM tbl_user_acct_list WHERE (col_user_stat = 'PENDING' OR col_user_stat = 'REJECTED' OR col_user_stat = 'QUOTA LIMIT' ) AND (col_user_type = 'INTERN' AND col_step_prog <= 1) ORDER BY `col_user_stat` ASC, `col_date_sbmt` ASC;";
        $query = $this->db->query($sql);
        return $query->result();
    }

    function GET_ACCEPTED()
    {
        $sql = "SELECT * FROM tbl_user_acct_list WHERE col_user_stat = ? OR col_user_stat =? AND col_step_prog = ?";
        $query = $this->db->query($sql, array('PENDING', 'RESCHEDULE', 1));
        return $query->result();
    }

    function VIEW_INTERN($id)
    {
        $sql = "SELECT * FROM tbl_user_acct_list WHERE id = ?";
        $query = $this->db->query($sql, array($id));
        if ($query->result() > 0) {
            return $query->row();
        }
    }

    function REJECT_REQUEST($id, $rejectBy, $rejectReason)
    {
        $sql = "UPDATE tbl_user_acct_list SET col_step_prog = ?, col_user_stat = ?, col_step_prog = ?, col_reje_by = ? , col_reje_reas = ? WHERE id=?";
        $query = $this->db->query($sql, array(1, 'REJECTED', 1, $rejectBy, $rejectReason, $id));
        return $query;
    }

    function LIMIT_REQUEST($id, $limitBy, $limitReason)
    {
        $sql = "UPDATE tbl_user_acct_list SET col_step_prog = ?, col_user_stat = ?, col_reje_by = ? , col_reje_reas = ? WHERE id=?";
        $query = $this->db->query($sql, array(1, 'QUOTA LIMIT', $limitBy, $limitReason, $id));
        return $query;
    }

    function ACCEPT_REQUEST($id, $interviewSchedule, $acceptBy)
    {
        $sql = "UPDATE tbl_user_acct_list SET col_step_prog = ?, col_user_stat = ?, col_date_inte = ? , col_inte_resc =? , col_inte_name =? WHERE id=?";
        $query = $this->db->query($sql, array(2, 'FOR INTERVIEW', $interviewSchedule, $interviewSchedule, $acceptBy, $id));
        return $query;
    }

    function UPDATE_INFORMATION($id, $lastname, $firstname, $middlename, $address, $email, $contact, $birthday, $gender, $skillset, $course, $schoolname, $schoolcontact, $advisername, $advisercontact, $hours, $schedule)
    {
        $sql = "UPDATE tbl_user_acct_list SET col_frst_name=?, col_midl_name=?, col_last_name=?,
                                              col_curr_addr=?, col_cell_numb=?, col_birt_date=?,
                                              col_intr_gndr=?, col_intr_skil=?, col_intr_cour=?,
                                              col_scho_name=?, col_schl_cont=?, col_advs_name=?,
                                              col_advs_cont=?, col_totl_hour=?, col_sche_day=? WHERE id=?";
        $this->db->query($sql, array($firstname, $middlename, $lastname, $address, $contact, $birthday, $gender, $skillset, $course, $schoolname, $schoolcontact, $advisername, $advisercontact, $hours, $schedule, $id));
    }

    function UPDATE_FILENAME_RESUME($id)
    {
        $sql = "UPDATE tbl_user_acct_list SET col_reqm_resm=? WHERE id=?";
        $this->db->query($sql, array(NULL, $id));
    }

    function UPDATE_FILENAME_WAIVER($id)
    {
        $sql = "UPDATE tbl_user_acct_list SET col_reqm_waiv=? WHERE id=?";
        $this->db->query($sql, array(NULL, $id));
    }

    function UPDATE_FILENAME_ENDORSEMENT($id)
    {
        $sql = "UPDATE tbl_user_acct_list SET col_reqm_endo=? WHERE id=?";
        $this->db->query($sql, array(NULL, $id));
    }

    function UPDATE_FILENAME_AGREEMENT($id)
    {
        $sql = "UPDATE tbl_user_acct_list SET col_reqm_agre=? WHERE id=?";
        $this->db->query($sql, array(NULL, $id));
    }

    // ================================================== END RECRUITMENT ==================================================



    function CREATE_ACCOUNT($username, $password, $accountType, $lastnName, $firstName)
    {
        $sql = "INSERT INTO tbl_user_acct_list (col_emai_addr, col_user_pass, col_user_type, col_last_name, col_frst_name, col_acnt_crea) VALUES (?,?,?,?,?,NOW())";
        $query = $this->db->query($sql, array($username, $password, $accountType, $lastnName, $firstName));
        return $query;
    }


    function GET_USERNAME($username)
    {
        $sql = "SELECT `col_emai_addr` FROM tbl_user_acct_list WHERE `col_emai_addr`= ?";
        $query = $this->db->query($sql, array($username));
        if ($query->result() > 0) {
            return $query->row();
        }
    }
}
