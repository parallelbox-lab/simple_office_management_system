<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'HomeController';
$route['login'] = 'LoginController/login';
$route['logout'] = 'LoginController/logout';

// dashboard route
$route['dashboard'] = 'HomeController/home';
$route['dashboard/send-report'] = 'HomeController/send_message';
$route['dashboard/view-report'] = 'HomeController/view_report';
$route['dashboard/delete-report/(:any)'] = 'HomeController/delete_report/$1';
$route['dashboard/successfull-survey'] = 'HomeController/successfull_survey';
$route['dashboard/list-equipments/(:any)'] = 'HomeController/list_equipments/$1';
$route['dashboard/delete-report/(:any)'] = 'HomeController/delete_report/$1';
$route['dashboard/view-report/(:any)'] = 'HomeController/open_message/$1';
$route['dashboard/view/(:any)'] = 'HomeController/open/$1';

$route['dashboard/finished-survey'] = 'Homecontroller/finished_survey';
// route to add equipments to survey report
$route['dashboard/finished-survey/(:any)/'] = 'Homecontroller/view_finished_survey/$1';
$route['dashboard/sent-invoice-list'] = 'Homecontroller/list_invoice_sent';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
