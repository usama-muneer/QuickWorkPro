<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller']    = 'homec/index';
$route['dashboard']             = 'adminc/index';
$route['admin_login']           = 'Aloginc/admin_login';
$route['categories']            = 'adminc/categories';
$route['freelancers']           = 'adminc/freelancers';
$route['buyers']                = 'adminc/buyers';
$route['active_gigs']           = 'adminc/active_gigs';
$route['pending_gigs']          = 'adminc/pending_gigs';
$route['deleted_gigs']          = 'adminc/deleted_gigs';
$route['deactivated_gigs']      = 'adminc/deactivated_gigs';
$route['view_gigs']             = 'adminc/view_gigs';
$route['active_orders']         = 'adminc/active_orders';
$route['completed_orders']      = 'adminc/completed_orders';
$route['cancelled_orders']      = 'adminc/cancelled_orders';
$route['disputed_orders']       = 'adminc/disputed_orders';
$route['view_orders']           = 'adminc/view_orders';
$route['active_requests']       = 'adminc/active_requests';
$route['pending_requests']      = 'adminc/pending_requests';
$route['deleted_requests']      = 'adminc/deleted_requests';
$route['view_requests']         = 'adminc/view_requests';
$route['view_flearnings']       = 'adminc/view_flearnings';
$route['view_qwpearnings']      = 'adminc/view_qwpearnings';
$route['services']              = 'adminc/services';
$route['services']              = 'adminc/services';
$route['orderc/(:any)']         = 'orderc/$1';
$route['(:any)']                = 'homec/$1';
$route['404_override']          = '';
$route['translate_uri_dashes']  = FALSE;
$route['gigc/(:any)']           = 'gigc/$1';
