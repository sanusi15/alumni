<?php
defined('BASEPATH') or exit('No direct script access allowed');


$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['getData'] = 'Welcome/getNim';
$route['about'] = 'Welcome/about';
$route['send'] = 'Welcome/tambahData';
$route['admin'] = 'Admin/login';
$route['dashboard'] = 'Admin';
$route['login'] = 'Admin/login';
$route['signIn'] = 'Admin/cek_login';
$route['signOut'] = 'Admin/logout';
$route['formData'] = 'Admin/listData';
$route['mhsRegist'] = 'Admin/mhsRegistrasi';
$route['validasi'] = 'Admin/validasi';
$route['save'] = 'Admin/save';
$route['report'] = 'Admin/report';
$route['change/(:any)'] = 'Admin/edit/$1';
$route['delete/(:any)'] = 'Admin/destroy/$1';
$route['create'] = 'Admin/setTambah';
$route['update'] = 'Admin/update';


$route['loginmhs'] = 'Welcome/login';
$route['dashboardmhs'] = 'Welcome/dahsboard';
