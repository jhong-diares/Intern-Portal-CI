<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Login extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Login_mod');
        $this->load->library('session');
        $this->load->helper(array('form', 'url'));
    }

    // DISPLAY LOGIN FORM
    public function index()
    {
        $this->session->unset_userdata('USER_ID');
        $data['title'] = 'Erovoutika | Login';
        $this->load->view('login/login', $data);
    }

    // DISPLAY REGISTER FORM
    public function register()
    {
        $data['title'] = 'Erovoutika | Register';
        $this->load->view('login/register', $data);
    }

    // DISPLAY FORGOT PASSWORD FORM
    public function forgot_password()
    {
        $data['title'] = 'Erovoutika | Forgot Password';
        $this->load->view('login/forgot-password', $data);
    }

    public function sign_up()
    {
        $username = $this->input->post('USERNAME');
        $password = $this->input->post('PASSWORD');
        $confirm_password = $this->input->post('CONFIRM_PASSWORD');

        if ($username && $password && $confirm_password) {
            if (preg_match('/[\^£$%&*()}{#~?><>,|=+¬-]/', $username) || preg_match('/[\^£$%&*()}{#~?><>,|=+¬-]/', $password)) {
                $result['status'] = 'INVALID';
                echo json_encode($result);
            } else {
                if ($confirm_password == $password) {
                    $data = $this->Login_mod->GET_USER($username);
                    if (!$data) {
                        $this->Login_mod->REGISTER_ACCOUNT($username, $password);
                        $result['status'] = 'SUCCESS';
                        $this->session->set_userdata('REGISTER_SUCCESS', 'Register Account Successfully');
                        $result['return'] = $data;
                        echo json_encode($result);
                    } else {
                        $result['status'] = 'EXISTED';
                        echo json_encode($result);
                    }
                } else {
                    $result['status'] = 'INCORRECT';
                    echo json_encode($result);
                }
            }
        } else {
            $result['status'] = 'FAILED';
            echo json_encode($result);
        }
    }

    public function sign_in()
    {
        $username = $this->input->post('USERNAME');
        $password = $this->input->post('PASSWORD');
        $row = $this->Login_mod->GET_USER($username);

        if ($username == NULL || $password == NULL) {
            $result['status'] = 'MISSING FIELD';
            echo json_encode($result);
        } else if (!$row) {
            $result['status'] = 'LOGIN FAILED';
            echo json_encode($result);
        } else {
            $id = $row->id;
            if ($password == $row->col_user_pass) {
                if ($row->col_user_type == 'ADMIN') {
                    $this->session->set_userdata('USER_ID', $id);
                    $this->session->set_userdata('LOGIN_SUCCESS', ' Admin Account Login Successfully!');
                    $result['status'] = 'AS_ADMIN';
                    echo json_encode($result);
                } else {
                    if ($row->col_user_type == 'ADVISER') {
                        $id = $row->id;
                        $this->session->set_userdata('USER_ID', $id);
                        $this->session->set_userdata('LOGIN_SUCCESS', ' Account Login Successfully!');
                        // redirect('adviser/' . $id);
                    }
                    if ($row->col_user_stat == 'ACCEPTED') {
                        $id = $row->id;
                        $this->session->set_userdata('USER_ID', $id);
                        $this->session->set_userdata('LOGIN_SUCCESS', ' Account Login Successfully!');
                        $result['status'] = 'AS_ACCEPTED';
                        echo json_encode($result);
                    } else {
                        $id = $row->id;
                        $this->session->set_userdata('USER_ID', $id);
                        $this->session->set_userdata('LOGIN_SUCCESS', ' Account Login Successfully!');
                        $result['status'] = 'AS_INTERN';
                        echo json_encode($result);
                        // redirect('internview/progress/');
                    }
                }
            } else {
                $result['status'] = 'LOGIN FAILED';
                echo json_encode($result);
            }
        }
    }

    function logout()
    {
        $this->session->unset_userdata('USER_ID');
        redirect('login');
    }
}
