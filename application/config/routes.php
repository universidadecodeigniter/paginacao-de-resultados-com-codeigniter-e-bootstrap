<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'Base';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['usuarios/p'] = "Base";
$route['usuarios/p/(:num)'] = "Base";