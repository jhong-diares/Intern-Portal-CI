<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Adminview extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Internview_mod');
		$this->load->model('Adminview_mod');
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
		$data = ['title' => 'Erovoutika | Admin'];
		$this->load->view('intern_view/home', $data);
	}


	public function view_intern()
	{
		$viewId = $this->input->post('viewId');
		if ($getView = $this->Adminview_mod->VIEW_INTERN($viewId)) {
			$viewIntern = array('status' => 'SUCCESS', 'view' => $getView);
		}
		echo json_encode($viewIntern);
	}

	public function reject_request()
	{
		$rejectId = $this->input->post('rejectId');
		$rejectBy = $this->input->post('rejectBy');
		$rejectReason = $this->input->post('rejectReason');
		if ($getReject = $this->Adminview_mod->REJECT_REQUEST($rejectId, $rejectBy, $rejectReason)) {
			$rejectRequest = array('status' => 'SUCCESS', 'request' => $getReject);
		} else {
			$rejectRequest = array('status' => 'FAILED');
		}
		echo json_encode($rejectRequest);
	}

	public function limit_request()
	{
		$limitId = $this->input->post('limitId');
		$limitBy = $this->input->post('limitBy');
		$limitReason = $this->input->post('limitReason');
		if ($getLimit = $this->Adminview_mod->LIMIT_REQUEST($limitId, $limitBy, $limitReason)) {
			$limitRequest = array('status' => 'SUCCESS', 'request' => $getLimit);
		} else {
			$limitRequest = array('status' => 'FAILED');
		}
		echo json_encode($limitRequest);
	}

	public function accept_request()
	{
		$acceptId = $this->input->post('acceptId');
		$acceptDateTime = $this->input->post('acceptDateTime');
		$acceptBy = $this->input->post('acceptBy');
		if ($getAccept = $this->Adminview_mod->ACCEPT_REQUEST($acceptId, $acceptDateTime, $acceptBy)) {
			$acceptRequest = array('status' => 'SUCCESS', 'request' => $getAccept, 'time' => $acceptDateTime);
		} else {
			$acceptRequest = array('status' => 'FAILED');
		}
		echo json_encode($acceptRequest);
	}

	public function display_rejected()
	{
		$displayRejected = $this->Adminview_mod->GET_REJECTED();
		echo json_encode($displayRejected);
	}

	public function display_quota_limit()
	{
		$displayQuotaLimit = $this->Adminview_mod->GET_QUOTA_LIMIT();
		echo json_encode($displayQuotaLimit);
	}

	public function display_for_interview()
	{
		$displayForInterview = $this->Adminview_mod->GET_FOR_INTERVIEW();
		echo json_encode($displayForInterview);
	}

	public function display_pending_request()
	{
		$displayPendingRequest = $this->Adminview_mod->GET_PENDING_REQUEST();
		echo json_encode($displayPendingRequest);
	}

	public function display_request()
	{
		$getRequest = $this->Adminview_mod->GET_REQUEST();
		$displayRequest = array('status' => 'SUCCESS', 'request' => $getRequest);
		echo json_encode($displayRequest);
	}

	public function recruitment_list()
	{
		$id = $this->session->userdata('USER_ID');
		$checkStatus = $this->Internview_mod->GET_INFO($id);
		if ($checkStatus->col_user_type !== 'ADMIN' and $checkStatus->col_user_type !== 'HR') {
			redirect('404_override');
		}
		$login_id = $this->session->userdata('USER_ID');
		if ($id == $login_id) {
			$data['title'] = 'Erovoutika | Admin';
			$data['user_id'] = $this->session->userdata('USER_ID');
			$data['page'] = 'Recruitment';
			$data['USER_DATA'] = $this->Internview_mod->GET_INFO($id);

			$this->load->view('admin_view/header', $data);
			$this->load->view('admin_view/recruitment', $data);
			$this->load->view('admin_view/footer');
		}
	}


	function update_view_details()
	{

		$id = $this->input->post('ID');

		$lastname = $this->input->post('LASTNAME');
		$firstname = $this->input->post('FIRSTNAME');
		$middlename = $this->input->post('MIDDLENAME');
		$name = preg_replace("/\s+/", "", $lastname) . '_' .  preg_replace("/\s+/", "", $firstname);

		$address = $this->input->post('ADDRESS');
		$email = $this->input->post('EMAIL');
		$contact = $this->input->post('CONTACT');
		$birthday = $this->input->post('BIRTHDAY');
		$gender = $this->input->post('GENDER');
		$skillset = $this->input->post('SKILLSET');
		$course = $this->input->post('COURSE');
		$schoolname = $this->input->post('SCHOOLNAME');
		$schoolcontact = $this->input->post('SCHOOLCONTACT');
		$advisername = $this->input->post('ADVISERNAME');
		$advisercontact = $this->input->post('ADVISERCONTACT');
		$hours = $this->input->post('HOURS');
		$schedule = $this->input->post('SCHEDULE');


		$uploaded_count = '';
		// // RESUME CONFIG
		$config['upload_path'] = './intern_requirements/';
		$config['allowed_types'] = 'pdf';
		$config['overwrite'] = TRUE;
		$config['file_name'] =  $id . '_' . $name . '_' . 'RESUME';
		$this->load->library('upload', $config);
		$this->upload->initialize($config);


		// 1. UPLOAD RESUME
		$upload_resume = $this->upload->do_upload('add_file_resume');
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
		$config['file_name'] = $id . '_' . $name . '_' . 'ENDORSEMENT';

		$this->load->library('upload', $config);
		$this->upload->initialize($config);

		// 3. UPLOAD ENDORSEMENT LETTER
		$upload_recommendation = $this->upload->do_upload('add_file_recommendation');
		if ($upload_recommendation) {
			$result['status_endorsement'] = 'SUCCESS';
			$uploaded_count++;
		} else {
			$result['status_endorsement'] = 'FAILED';
		}

		// // WAIVER CONFIG
		$config['upload_path'] = './intern_requirements/';
		$config['allowed_types'] = 'pdf';
		$config['overwrite'] = TRUE;
		$config['file_name'] =  $id . '_' . $name . '_' . 'WAIVER';
		$this->load->library('upload', $config);
		$this->upload->initialize($config);

		// 1. UPLOAD WAIVER
		$upload_waiver = $this->upload->do_upload('add_file_waiver');
		if ($upload_waiver) {
			$result['status_waiver'] = 'SUCCESS';
			$uploaded_count++;
		} else {
			$result['status_waiver'] = 'FAILED';
		}

		// AGREEMENT CONFIG
		$config['upload_path'] = './intern_requirements/';
		$config['allowed_types'] = 'pdf';
		$config['overwrite'] = TRUE;
		$config['file_name'] = $id . '_' . $name . '_' . 'AGREEMENT';
		$this->load->library('upload', $config);
		$this->upload->initialize($config);

		// 4. UPLOAD AGREEMENT LETTER
		$upload_agreement = $this->upload->do_upload('add_file_agreement');
		if ($upload_agreement) {
			$result['status_agreement'] = 'SUCCESS';
			$uploaded_count++;
		} else {
			$result['status_agreement'] = 'FAILED';
		}

		if ($uploaded_count == 4) {
			if ($id && $lastname && $firstname && $middlename && $address && $email && $contact && $birthday && $gender && $skillset && $course && $schoolname && $schoolcontact && $advisername && $advisercontact && $hours && $schedule) {
				// SAVE TO DATABASE
				$this->Adminview_mod->UPDATE_INFORMATION($id, $lastname, $firstname, $middlename, $address, $email, $contact, $birthday, $gender, $skillset, $course, $schoolname, $schoolcontact, $advisername, $advisercontact, $hours, $schedule);
				$result['status'] = 'SUCCESS';
			} else {
				$result['status'] = 'INCOMPLETE';
			}
		}
		echo json_encode($result);
	}


	function delete_file()
	{
		$id = $this->input->post('ID');
		$filename = $this->input->post('FILENAME');
		$path = FCPATH . 'intern_requirements/' . $filename . '.pdf';

		if (file_exists($path)) {
			if (unlink($path)) {
				if (strpos($path, 'RESUME') !== false) {
					// update resume
					$this->Adminview_mod->UPDATE_FILENAME_RESUME($id);
					$result['return'] = 'RESUME';
				} else if (strpos($path, 'WAIVER') !== false) {
					// update waiver
					$this->Adminview_mod->UPDATE_FILENAME_WAIVER($id);
					$result['return'] = 'WAIVER';
				} else if (strpos($path, 'ENDORSEMENT') !== false) {
					//  update endorsement
					$this->Adminview_mod->UPDATE_FILENAME_ENDORSEMENT($id);
					$result['return'] = 'ENDORSEMENT';
				} else if (strpos($path, 'AGREEMENT') !== false) {
					// update agreement
					$this->Adminview_mod->UPDATE_FILENAME_AGREEMENT($id);
					$result['return'] = 'AGREEMENT';
				}
				$result['status'] = 'SUCCESS';
			} else {
				$result['status'] = 'FAILED';
			}
			echo json_encode($result);
		} else {
			$result['status'] = 'INVALID';
			echo json_encode($result);
		}
	}

	public function settings()
	{
		$id = $this->session->userdata('USER_ID');
		$checkStatus = $this->Internview_mod->GET_INFO($id);
		if ($checkStatus->col_user_type !== 'ADMIN') {
			redirect('404_override');
		}
		$login_id = $this->session->userdata('USER_ID');
		if ($id == $login_id) {
			$data['title'] = 'Erovoutika | Admin';
			$data['user_id'] = $this->session->userdata('USER_ID');
			$data['page'] = 'Settings';
			$data['USER_DATA'] = $this->Internview_mod->GET_INFO($id);

			$this->load->view('admin_view/header', $data);
			$this->load->view('admin_view/settings', $data);
			$this->load->view('admin_view/footer');
		}
	}

	public function create_account()
	{
		$username = $this->input->post('USERNAME');
		$password = $this->input->post('PASSWORD');
		$accountType = $this->input->post('ACCOUNTYPE');
		$lastnName = $this->input->post('LASTNAME');
		$firstName = $this->input->post('FIRSTNAME');
		if ($getUsername = $this->Adminview_mod->GET_USERNAME($username)) {
			$createAccount = array('status' => 'TAKEN', 'message' => 'Username Already Taken.');
		} else {
			$getAccount = $this->Adminview_mod->CREATE_ACCOUNT($username, $password, $accountType, $lastnName, $firstName);
			$createAccount = array('status' => 'VALID');
		}
		echo json_encode($createAccount);
	}

	public function total_recruitment()
	{
		$getTotalPending =  $this->Adminview_mod->GET_TOTAL_PENDING();
		$getTotalAccepted =  $this->Adminview_mod->GET_TOTAL_ACCEPTED();
		$getTotalQuotaLimit =  $this->Adminview_mod->GET_TOTAL_QUOTALIMITED();
		$getTotalRejected =  $this->Adminview_mod->GET_TOTAL_REJECTED();
		$displayTotalRecruitment = array(
			'pending' => $getTotalPending, 'accepted' => $getTotalAccepted,
			'quota_limited' => $getTotalQuotaLimit, 'rejected' => $getTotalRejected
		);
		echo json_encode($displayTotalRecruitment);
	}

	public function total_onboarding()
	{
		$getTotalHired =  $this->Adminview_mod->GET_TOTAL_HIRED();
		$getTotalForInterview =  $this->Adminview_mod->GET_TOTAL_FOR_INTERVIEW();
		$getTotalRescheduled =  $this->Adminview_mod->GET_TOTAL_RESCHEDULED();
		$getTotalFailed =  $this->Adminview_mod->GET_TOTAL_FAILED();
		$displayTotalOnboarding = array(
			'hired' => $getTotalHired, 'for_interview' => $getTotalForInterview,
			'rescheduled' => $getTotalRescheduled, 'failed' => $getTotalFailed
		);
		echo json_encode($displayTotalOnboarding);
	}

	public function onboarding_list()
	{
		$id = $this->session->userdata('USER_ID');
		$checkStatus = $this->Internview_mod->GET_INFO($id);
		if ($checkStatus->col_user_type !== 'ADMIN' and $checkStatus->col_user_type !== 'HR') {
			redirect('404_override');
		}
		$login_id = $this->session->userdata('USER_ID');
		if ($id == $login_id) {
			$data['title'] = 'Erovoutika | Admin';
			$data['user_id'] = $this->session->userdata('USER_ID');
			$data['page'] = 'Onboarding';
			$data['USER_DATA'] = $this->Internview_mod->GET_INFO($id);

			$this->load->view('admin_view/header', $data);
			$this->load->view('admin_view/onboarding', $data);
			$this->load->view('admin_view/footer');
		}
	}

	public function attendance()
	{
		$id = $this->session->userdata('USER_ID');
		$checkStatus = $this->Internview_mod->GET_INFO($id);
		if ($checkStatus->col_user_type !== 'ADMIN') {
			redirect('404_override');
		}
		$login_id = $this->session->userdata('USER_ID');
		if ($id == $login_id) {
			$data['title'] = 'Erovoutika | Admin';
			$data['user_id'] = $this->session->userdata('USER_ID');
			$data['page'] = 'Daily Attendance';
			$data['USER_DATA'] = $this->Internview_mod->GET_INFO($id);

			$this->load->view('admin_view/header', $data);
			$this->load->view('admin_view/attendance', $data);
			$this->load->view('admin_view/footer');
		}
	}

	public function display_attendance()
	{
		$getAttendance = $this->Adminview_mod->GET_ATTENDANCE();
		$displayAttendance['request'] = $getAttendance;
		echo json_encode($displayAttendance);
	}

	public function display_onboarding()
	{
		$getOnboarding = $this->Adminview_mod->GET_ONBOARDING();
		$displayOnboarding = array('status' => 'VALID', 'request' => $getOnboarding);
		echo json_encode($displayOnboarding);
	}

	public function hire_intern()
	{

		$hireId = $this->input->post('ID');
		if ($getHire = $this->Adminview_mod->HIRE_INTERN($hireId)) {
			$hireIntern = array('status' => 'SUCCESS', 'request' => $getHire);
		} else {
			$hireIntern = array('status' => 'FAILED');
		}
		echo json_encode($hireIntern);
	}

	public function reschedule_intern()
	{
		$rescheduleId = $this->input->post('rescheduleId');
		$rescheduleDateTime = $this->input->post('rescheduleDateTime');
		if ($this->Adminview_mod->RESCHEDULE_INTERN($rescheduleId, $rescheduleDateTime)) {
			$rescheduleIntern = array('status' => 'SUCCESS', 'date_time' => $rescheduleDateTime);
		} else {
			$rescheduleIntern = array('status' => $rescheduleId);
		}
		echo json_encode($rescheduleIntern);
	}

	public function failed_intern()
	{
		$failedId = $this->input->post('failedId');
		if ($this->Adminview_mod->FAILED_INTERN($failedId)) {
			$failedIntern = array('status' => 'SUCCESS');
		} else {
			$failedIntern = array('status' => 'FAILED');
		}
		echo json_encode($failedIntern);
	}

	public function details_intern()
	{
		$detailsId = $this->input->post('detailsId');
		if ($getDetails = $this->Adminview_mod->DETAILS_INTERN($detailsId)) {
			$detailsIntern = array('status' => 'SUCCESS', 'details' => $getDetails);
		}
		echo json_encode($detailsIntern);
	}

	public function display_failed()
	{
		$displayFailed = $this->Adminview_mod->GET_FAILED();
		echo json_encode($displayFailed);
	}


	public function display_reschedule()
	{
		$displayReschedule = $this->Adminview_mod->GET_RESCHEDULE();
		echo json_encode($displayReschedule);
	}


	public function display_hired_intern()
	{
		$displayHiredIntern = $this->Adminview_mod->GET_HIRED_INTERN();
		echo json_encode($displayHiredIntern);
	}


	public function download_requirements()
	{
		$filename = $this->input->get('filename');

		$this->load->helper('download');
		force_download('./intern_requirements/' . $filename . '.pdf', NULL);
	}
}
