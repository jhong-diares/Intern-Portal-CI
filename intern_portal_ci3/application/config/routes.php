<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'Login';
$route['logout']['get'] = 'login/logout';
$route['download_company_profile']['get'] = 'internview/download_company_profile';
$route['download_internship_program']['get'] = 'internview/download_internship_program';
$route['download_agreement']['get'] = 'internview/download_agreement';


$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


