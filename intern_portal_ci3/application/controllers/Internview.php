<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Internview extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Internview_mod');
		$this->load->library('session');
		$this->load->helper('form');
		$this->load->helper('file');
		$this->load->helper('url');
		if ($this->session->userdata('USER_ID') == '') {
			redirect('login');
		}
	}
	public function index()
	{
		$data = ['title' => 'Erovoutika | Intern'];
		$this->load->view('intern_view/home', $data);
	}

	public function profile()
	{
		$id = $this->session->userdata('USER_ID');
		$checkStatus = $this->Internview_mod->GET_INFO($id);
		if ($checkStatus->col_user_type == 'ADVISER') {
			// redirect('adviser/' . $id);
		} else {
			if ($checkStatus->col_step_prog == 'PENDING' || $checkStatus->col_step_prog == NULL) {
				// redirect('intern/' . $id);
			}
			if ($checkStatus->col_user_type == 'ADMIN') {
				// redirect('admin/dashboard/' . $id);
			} else {
				$login_id = $this->session->userdata('USER_ID');
				if ($id == $login_id) {
					$data['title'] = 'Erovoutika | Profile';
					$data['user_id'] = $this->session->userdata('USER_ID');
					$data['page'] = 'My Profile';
					$data['USER_DATA'] = $this->Internview_mod->GET_INFO($id);

					$this->load->view('intern_view/header', $data);
					$this->load->view('intern_view/profile', $data);
					$this->load->view('intern_view/footer');
				}
			}
		}
	}

	public function attendance()
	{
		$id = $this->session->userdata('USER_ID');
		$checkStatus = $this->Internview_mod->GET_INFO($id);

		if ($checkStatus->col_user_type == 'ADVISER') {
			// redirect('adviser/' . $id);
		}
		if ($checkStatus->col_user_stat == 'PENDING' || $checkStatus->col_user_stat == NULL) {
			redirect('Internview/intern');
		}
		if ($checkStatus->col_user_type == 'ADMIN') {
			// redirect('admin/dashboard/' . $id);
		} else {
			$login_id = $this->session->userdata('USER_ID');
			if ($id == $login_id) {
				$data['title'] = 'Erovoutika | Attendance';
				$data['user_id'] = $this->session->userdata('USER_ID');
				$data['page'] = 'My Attendance';
				$data['USER_DATA'] = $this->Internview_mod->GET_INFO($id);

				// if ($info['USER_DATA']['status'] == 'PENDING') {
				// 	redirect('intern/' . $id);
				// } else {
				$this->load->view('intern_view/header', $data);
				$this->load->view('intern_view/attendance', $data);
				$this->load->view('intern_view/footer');
				// }
			}
		}
	}

	public function intern()
	{
		$id = $this->session->userdata('USER_ID');
		$checkStatus = $this->Internview_mod->GET_INFO($id);
		if ($checkStatus->col_user_type == 'ADVISER') {
			// redirect('adviser/' . $id);
		} else {
			if ($checkStatus->col_user_type == 'ADMIN' || $checkStatus->col_user_type == 'HR') {
				// redirect('admin/recruitment/' . $id);
			}
			if ($checkStatus->col_user_stat == 'ACCEPTED') {
				redirect('Internview/profile');
			} else {
				$login_id = $this->session->userdata('USER_ID');
				if ($id == $login_id) {

					$data['USER_DATA'] = $this->Internview_mod->GET_INFO($id);
					$data['title'] = 'Erovoutika | Intern';
					$data['page'] = 'My Application';
					$data['user_id'] = $this->session->userdata('USER_ID');

					$this->load->view('intern_view/header_step', $data);
					$this->load->view('intern_view/progress', $data);
					$this->load->view('intern_view/footer');
				}
			}
		}
	}

	public function progress()
	{
		$id = $this->session->userdata('USER_ID');
		// if ($id == $login_id) {
		$info = $this->Internview_mod->GET_INFO($id);
		if ($info->col_user_type == 'ADVISER') {
			// redirect('adviser/' . $id);
		}
		if ($info->col_user_type == 'HR') {
			// redirect('admin/recruitment/' . $id);
		}
		if ($info->col_step_prog == 1 && $info->col_user_type == 'INTERN') {
			redirect('internview/intern');
		}
		if ($info->col_step_prog == 0 && $info->col_user_type == 'INTERN') {
			redirect('internview/intern');
		}
		if ($info->col_step_prog == 2 && $info->col_user_type == 'INTERN') {
			redirect('internview/intern');
		}
	}

	public function display_attendance()
	{
		$id = $this->session->userdata('USER_ID');
		$displayAttendance = $this->Internview_mod->GET_ATTENDANCE($id);
		if ($displayAttendance) {
			$result['status'] = 'SUCCESS';
			$result['displayAttendance'] = $displayAttendance;
			echo json_encode($result);
		} else {
			$result['status'] = 'FAILED';
			echo json_encode($result);
		}
	}

	public function insert_attendance()
	{
		$id = $this->input->post('ID');
		$name = $this->input->post('INTERN_NAME');
		$date = $this->input->post('DATE_TODAY');
		$time = $this->input->post('TIME');
		$phase = $this->input->post('PHASE');

		$getReturn = $this->Internview_mod->GET_CURR_DATE($id);
		if (!$getReturn) {
			$this->Internview_mod->INSERT_ATTENDANCE($id, $name, $date, $time);
			$result = ['status' => 'SUCCESS', 'time' => $time . ' ' . $phase];
			echo json_encode($result);
		} else {
			$result = ['status' => 'FAILED', 'time' => $getReturn->col_time_in . ' ' . $phase];
			echo json_encode($result);
		}
	}

	public function update_attendance()
	{
		$id = $this->input->post('ID');
		$time = $this->input->post('TIME');
		$phase = $this->input->post('PHASE');

		$getReturn = $this->Internview_mod->GET_CURR_DATE($id);

		if (!$getReturn) {
			$TimeOut['status'] = 'NO_TIME_IN';
			echo json_encode($TimeOut);
		} else {
			$getTimeOut = $getReturn->col_time_out;
			$getTimeIn = $getReturn->col_time_in;
			if ($getTimeIn && !$getTimeOut) {
				$getID = $this->Internview_mod->GET_ATTENDANCE_LAST($id);
				$this->Internview_mod->UPDATE_ATTENDANCE($getID, $time);
				$TimeOut = ['status' => 'SUCCESS', 'time' => $time . ' ' . $phase];
			} else {
				$TimeOut = ['status' => 'FAILED', 'time' => $getTimeOut . ' ' . $phase];
			}
			echo json_encode($TimeOut);
		}
	}

	public function update_personal()
	{
		// POSTED FROM formData.append async function SAVE_PERSONAL_INFORMATION()
		$id = $this->input->post('ID');
		$last = $this->input->post('LASTNAME');
		$first = $this->input->post('FIRSTNAME');
		$middle = $this->input->post('MIDDLENAME');
		$address = $this->input->post('ADDRESS');
		$email = $this->input->post('EMAIL');
		$contact = $this->input->post('CONTACT');
		$birthday = $this->input->post('BIRTHDAY');
		$gender = $this->input->post('GENDER');
		$skill = $this->input->post('SKILL');
		$fnam = preg_replace("/\s+/", "", $last) . '_' . preg_replace("/\s+/", "", $first);


		if ($id && $last && $first && $middle && $address && $email && $contact && $birthday && $gender && $skill) {
			// UPLOAD IMG CONFIG

			$config['upload_path'] = './intern_photo/';
			$config['allowed_types'] = 'jpeg|png|jpg';
			$config['overwrite'] = TRUE;
			$extn = $config['file_ext'] = '.jpg'; //temporary
			$img = $config['file_name'] =  $id . '_' . $fnam . '_IMAGE' . $extn;
			$this->load->library('upload', $config);
			$this->upload->initialize($config);

			// $isExist = $this->Internview_mod->GET_INFO($id);
			// if ($isExist->col_imag_name) {
			// 	$this->Internview_mod->UPDATE_PERSONAL_INFO($id, $last, $first, $middle, $address, $email, $contact, $birthday, $gender, $skill, $img);
			// 	$result['status'] = 'SUCCESS';
			// 	echo json_encode($result);
			// } else {
			// // 	//  UPLOAD DISPLAY PHOTO
			if ($this->upload->do_upload('img')) {
				// SAVE TO DATABASE
				$this->Internview_mod->UPDATE_PERSONAL_INFO($id, $last, $first, $middle, $address, $email, $contact, $birthday, $gender, $skill, $img);
				$result['status'] = 'SUCCESS';
				echo json_encode($result);
			} else {
				$result['status_img'] = 'FAILED';
				echo json_encode($result);
			}
			// }
		} else {
			$result['status'] = 'FAILED';
			echo json_encode($result);
		}
	}

	public function update_internship()
	{
		// POSTED FROM formData.append async function SAVE_INTERNSHIP_DETAILS()
		$id = $this->input->post('ID');
		$schl_name = $this->input->post('SCHOOLNAME');
		$schl_cont = $this->input->post('SCHOOLCONTACT');
		$advs_name = $this->input->post('ADVISERNAME');
		$advs_cont = $this->input->post('ADVISERCONTACT');
		$intn_cour = $this->input->post('COURSE');
		$intn_hour = $this->input->post('HOUR');

		if ($id && $schl_name && $schl_cont && $advs_name && $advs_cont && $intn_cour && $intn_hour) {
			// SAVE TO DATABASE
			$this->Internview_mod->UPDATE_INTERNSHIP_DETAILS($id, $schl_name, $schl_cont, $advs_name, $advs_cont, $intn_cour, $intn_hour);
			$result['status'] = 'SUCCESS';
			echo json_encode($result);
		} else {
			$result['status'] = 'FAILED';
			echo json_encode($result);
		}
	}

	public function update_schedule()
	{
		// POSTED FROM formData.append async function SAVE_SCHEDULE()
		$id = $this->input->post('ID');
		$Monday = ($this->input->post('MONDAY') == 'undefined') ? 'Monday - No Work/' : $this->input->post('MONDAY');
		$Tuesday = ($this->input->post('TUESDAY') == 'undefined') ? 'Tuesday - No Work/' : $this->input->post('TUESDAY');
		$Wednesday = ($this->input->post('WEDNESDAY') == 'undefined') ? 'Wednesday - No Work/' : $this->input->post('WEDNESDAY');
		$Thursday = ($this->input->post('THURSDAY') == 'undefined') ? 'Thursday - No Work/' : $this->input->post('THURSDAY');
		$Friday = ($this->input->post('FRIDAY') == 'undefined') ? 'Friday - No Work/' : $this->input->post('FRIDAY');
		$Saturday = ($this->input->post('SATURDAY') == 'undefined') ? 'Saturday - No Work/' : $this->input->post('SATURDAY');
		$work_hour = $this->input->post('WORK_HOUR');
		// SAVE TO 1 COLUMN IN DATABASE
		$schedule = array($Monday .  $Tuesday .   $Wednesday .   $Thursday .   $Friday .   $Saturday);
		$this->Internview_mod->UPDATE_SCHEDULE($id, $schedule, $work_hour);
		$result['status'] = 'SUCCESS';
		echo json_encode($result);
	}

	public function update_essay()
	{
		// POSTED FROM formData.append async function SAVE_ESSAY()
		$id = $this->input->post('ID');
		$essay = $this->input->post('ESSAY');
		if ($essay) {
			// SAVE TO DATABASE
			$this->Internview_mod->UPDATE_ESSAY($id, $essay);
			$result['status'] = 'SUCCESS';
			echo json_encode($result);
		} else {
			$result['status'] = 'FAILED';
			echo json_encode($result);
		}
	}

	function update_requirements()
	{
		// Hidden input field ID
		$id = $this->input->post('INTR_ID_UPLOAD');
		$name = preg_replace("/\s+/", "", $this->input->post('INTERN_NAME'));

		$uploaded_count = '';
		// // WAIVER CONFIG
		$config['upload_path'] = './intern_requirements/';
		$config['allowed_types'] = 'pdf';
		$config['overwrite'] = TRUE;
		$waiver = $config['file_name'] =  $id . '_' . $name . '_' . 'WAIVER';
		$this->load->library('upload', $config);
		$this->upload->initialize($config);

		// 1. UPLOAD WAIVER
		$upload_waiver = $this->upload->do_upload('waiver_attachment');
		if ($upload_waiver) {
			$result['status_waiver'] = 'SUCCESS';
			$uploaded_count++;
		} else {
			$result['status_waiver'] = 'FAILED';
		}

		// RESUME CONFIG
		$config['upload_path'] = './intern_requirements/';
		$config['allowed_types'] = 'pdf';
		$config['overwrite'] = TRUE;
		$resume = $config['file_name'] = $id . '_' . $name . '_' . 'RESUME';
		$this->load->library('upload', $config);
		$this->upload->initialize($config);

		// 2. UPLOAD RESUME
		$upload_resume = $this->upload->do_upload('resume_attachment');
		if ($upload_resume) {
			$result['status_resume'] = 'SUCCESS';
			$uploaded_count++;
		} else {
			$result['status_resume'] = 'FAILED';
		}

		// ENDORSEMENT CONFIG
		$config['upload_path'] = './intern_requirements/';
		$config['allowed_types'] = 'pdf';
		$config['overwrite'] = TRUE;
		$recommendation = $config['file_name'] = $id . '_' . $name . '_' . 'ENDORSEMENT';

		$this->load->library('upload', $config);
		$this->upload->initialize($config);

		// 3. UPLOAD ENDORSEMENT LETTER
		$upload_recommendation = $this->upload->do_upload('endorsement_attachment');
		if ($upload_recommendation) {
			$result['status_endorsement'] = 'SUCCESS';
			$uploaded_count++;
		} else {
			$result['status_endorsement'] = 'FAILED';
		}

		// AGREEMENT CONFIG
		$config['upload_path'] = './intern_requirements/';
		$config['allowed_types'] = 'pdf';
		$config['overwrite'] = TRUE;
		$agreement = $config['file_name'] = $id . '_' . $name . '_' . 'AGREEMENT';
		$this->load->library('upload', $config);
		$this->upload->initialize($config);

		// 4. UPLOAD AGREEMENT LETTER
		$upload_agreement = $this->upload->do_upload('agreement_attachment');
		if ($upload_agreement) {
			$result['status_agreement'] = 'SUCCESS';
			$uploaded_count++;
		} else {
			$result['status_agreement'] = 'FAILED';
		}
		if ($uploaded_count == 4) {
			$step = 1;
			$status = 'PENDING';
			if ($id && $waiver && $resume && $recommendation && $agreement && $step && $status) {
				// SAVE TO DATABASE		
				$this->Internview_mod->UPDATE_FILENAME($id, $waiver, $resume, $recommendation, $agreement, $step, $status);
				$result['status'] = 'SUCCESS';
			}
		}
		echo json_encode($result);
	}

	public function download_requirements()
	{
		$filename = $this->input->post('filename');

		$this->load->helper('download');
		force_download('./intern_requirements/' . $filename . '.pdf', NULL);
	}

	public function download_company_profile()
	{
		$this->load->helper('download');
		force_download('./erovoutika_pdf/2021_Company_Profile_v2.pdf', NULL);
	}

	public function download_internship_program()
	{
		$this->load->helper('download');
		force_download('./erovoutika_pdf/Internship_Program_2021.pdf', NULL);
	}
	public function download_agreement()
	{
		$this->load->helper('download');
		force_download('./erovoutika_pdf/1002_Non_Disclosure_Agreement.pdf', NULL);
	}



	public function test()
	{
		$this->load->view('intern_view/test');
	}
}
