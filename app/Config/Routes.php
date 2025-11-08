<?php
// namespace App\Controllers\admin;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->setAutoRoute(true); 

$routes->get('/', 'Home::index');
$routes->get('about-us', 'Home::about');
$routes->get('alumini', 'Home::alumini');
$routes->get('terms-and-conditions', 'Home::term_and_conditions');
$routes->get('privacy-policy', 'Home::privacy_policy');
$routes->get('course', 'Home::course');
$routes->get('course/(:segment)', 'Home::course_detail/$1');
$routes->get('video', 'Home::video');
$routes->match(['get','post'], 'contact', 'Home::contact');
$routes->get('blog', 'Home::blog');
$routes->get('blog/(:segment)', 'Home::blog_detail/$1');
$routes->post('newsletter-subscribe', 'Home::newsletter');
$routes->get('mailtest', 'Courses::mailtest');

/*-------------Code updated for design purpose By Harman------------*/
$routes->get('newhome', 'Home::newhome');
$routes->get('akpiscourse/(:segment)', 'Courses::course/$1');
$routes->match(['get','post'], 'akpiscourse/form_submit', 'Courses::form_submit');
$routes->match(['get','post'], 'akpiscourse/form_submit_data', 'Courses::form_submit_data');
$routes->match(['get','post'], 'akpiscourse/submit_enquiryfooter', 'Courses::submit_enquiryfooter');
$routes->match(['get','post'], 'akpiscourse/form_data', 'Courses::form_data');




/* ------------------------ Admin Route ------------------------ */
$routes->get('admin', 'admin\Admin::index');
$routes->match(['get','post'],'admin/admin/profile', 'admin\Admin::profile');
$routes->match(['get','post'], 'admin/login', 'Auth::login');
$routes->get('logout', 'Auth::logout');
$routes->get('admin/logout', 'Auth::logout');

$routes->get('admin/alumini/for', 'admin\Alumini::for');
$routes->match(['get','post'], 'admin/alumini/add_for', 'admin\Alumini::add_for');
$routes->match(['get','post'], 'admin/alumini/edit_for/(:num)', 'admin\Alumini::edit_for/$1');
$routes->match(['get','post'], 'admin/alumini/status_for/(:num)', 'admin\Alumini::status_for/$1');
$routes->match(['get','post'], 'admin/alumini/delete_for/(:num)', 'admin\Alumini::delete_for/$1');

$routes->get('admin/blog', 'admin\Blog::index');
$routes->match(['get','post'], 'admin/blog/add', 'admin\Blog::add');
$routes->match(['get','post'], 'admin/blog/edit/(:num)', 'admin\Blog::edit/$1');
$routes->match(['get','post'], 'admin/blog/status/(:num)', 'admin\Blog::status/$1');
$routes->match(['get','post'], 'admin/blog/delete/(:num)', 'admin\Blog::delete/$1');

$routes->get('admin/course', 'admin\Course::index');
$routes->match(['get','post'], 'admin/course/add', 'admin\Course::add');
$routes->match(['get','post'], 'admin/course/edit/(:num)', 'admin\Course::edit/$1');
$routes->match(['get','post'], 'admin/course/status/(:num)', 'admin\Course::status/$1');
$routes->post('admin/course/set_course', 'admin\Course::set_course');
$routes->match(['get','post'], 'admin/course/featured/(:num)', 'admin\Course::featured/$1');
$routes->match(['get','post'], 'admin/course/delete/(:num)', 'admin\Course::delete/$1');
$routes->match(['get','post'], 'admin/course/details/(:num)', 'admin\Course::details/$1');
$routes->match(['get','post'], 'admin/course/details_add/(:num)', 'admin\Course::details_add/$1');
$routes->match(['get','post'], 'admin/course/details_edit/(:num)/(:num)', 'admin\Course::details_edit/$1/$2');
$routes->match(['get','post'], 'admin/course/details_status/(:num)', 'admin\Course::details_status/$1');
$routes->match(['get','post'], 'admin/course/details_delete/(:num)', 'admin\Course::details_delete/$1');
$routes->match(['get','post'], 'admin/course/videos/(:num)', 'admin\Course::videos/$1');
$routes->match(['get','post'], 'admin/course/video_add/(:num)', 'admin\Course::video_add/$1');
$routes->match(['get','post'], 'admin/course/video_edit/(:num)/(:num)', 'admin\Course::video_edit/$1/$2');
$routes->match(['get','post'], 'admin/course/video_status/(:num)', 'admin\Course::video_status/$1');
$routes->match(['get','post'], 'admin/course/featured_status/(:num)', 'admin\Course::featured_status/$1');
$routes->match(['get','post'], 'admin/course/video_delete/(:num)', 'admin\Course::video_delete/$1');

$routes->get('admin/page', 'admin\Page::index');
$routes->match(['get','post'], 'admin/page/add', 'admin\Page::add');
$routes->match(['get','post'], 'admin/page/edit/(:num)', 'admin\Page::edit/$1');
$routes->match(['get','post'], 'admin/page/status/(:num)', 'admin\Page::status/$1');
$routes->match(['get','post'], 'admin/page/delete/(:num)', 'admin\Page::delete/$1');

$routes->get('admin/testimonial', 'admin\Testimonial::index');
$routes->match(['get','post'], 'admin/testimonial/add', 'admin\Testimonial::add');
$routes->match(['get','post'], 'admin/testimonial/edit/(:num)', 'admin\Testimonial::edit/$1');
$routes->match(['get','post'], 'admin/testimonial/status/(:num)', 'admin\Testimonial::status/$1');
$routes->match(['get','post'], 'admin/testimonial/delete/(:num)', 'admin\Testimonial::delete/$1');

$routes->get('admin/videotestimonial', 'admin\VideoTestimonial::index');
$routes->match(['get','post'], 'admin/videotestimonial/add', 'admin\VideoTestimonial::add');
$routes->match(['get','post'], 'admin/videotestimonial/edit/(:num)', 'admin\VideoTestimonial::edit/$1');
$routes->match(['get','post'], 'admin/videotestimonial/status/(:num)', 'admin\VideoTestimonial::status/$1');
$routes->match(['get','post'], 'admin/videotestimonial/delete/(:num)', 'admin\VideoTestimonial::delete/$1');

$routes->get('admin/newsletter', 'admin\Newsletter::index');
$routes->match(['get','post'], 'admin/newsletter/status/(:num)', 'admin\Newsletter::status/$1');
$routes->match(['get','post'], 'admin/newsletter/delete/(:num)', 'admin\Newsletter::delete/$1');

$routes->get('admin/setting', 'admin\Setting::index');
$routes->match(['get','post'], 'admin/setting/show/(:num)', 'admin\Setting::show/$1');
$routes->match(['get','post'], 'admin/setting/edit/(:num)', 'admin\Setting::edit/$1');
$routes->match(['get','post'], 'admin/setting/status/(:num)', 'admin\Setting::status/$1');
$routes->match(['get','post'], 'admin/setting/update_setting', 'admin\Setting::update_setting');

/**-------New Design admin By Harman---------- */

$routes->get('admin/newcourse', 'admin\CoursesNew::index');
$routes->match(['get','post'], 'admin/akpiscourse/add', 'admin\CoursesNew::add' );
$routes->match(['get','post'], 'admin/newcourse/edit/(:num)', 'admin\CoursesNew::edit/$1');
$routes->match(['get','post'], 'admin/newcourse/delete/(:num)', 'admin\CoursesNew::delete/$1');

$routes->get('admin/owner_desc', 'admin\Owner::index');
$routes->get('admin/webinar', 'admin\Owner::webinars');
$routes->match(['get','post'], 'admin/webinar/add', 'admin\Owner::add' );
$routes->match(['get','post'], 'admin/webinar/edit/(:num)', 'admin\Owner::edit/$1' );
$routes->match(['get','post'], 'admin/webinar/delete/(:num)', 'admin\Owner::delete/$1');

$routes->get('admin/toppers', 'admin\Toppers::index');
$routes->match(['get','post'], 'admin/toppers/add', 'admin\Toppers::add');
$routes->match(['get','post'], 'admin/toppers/delete/(:num)', 'admin\Toppers::delete/$1');
$routes->match(['get','post'], 'admin/toppers/edit/(:num)', 'admin\Toppers::edit/$1');


$routes->get('admin/placements', 'admin\Placements::index');
$routes->match(['get','post'], 'admin/placements/add', 'admin\Placements::add');
$routes->match(['get','post'], 'admin/placements/delete/(:num)', 'admin\Placements::delete/$1');
$routes->match(['get','post'], 'admin/placement/edit/(:num)', 'admin\Placements::edit/$1');
$routes->match(['get','post'], 'admin/partners', 'admin\Placements::partners');
$routes->match(['get','post'], 'admin/addpartner', 'admin\Placements::addpartner');
$routes->match(['get','post'], 'admin/deletepartner/(:num)', 'admin\Placements::deletepartner/$1');

$routes->match(['get','post'], 'admin/department', 'admin\Department::index');

$routes->get('getcities/(:segment)', 'Courses::getcities/$1');
$routes->get('admin/enquiries', 'admin\CoursesNew::enquiries');
$routes->match(['get','post'], 'admin/enquiries/delete_for/(:num)', 'admin\CoursesNew::delete_for/$1');

$routes->get('admin/akpis_aluminies', 'admin\Alumniesakpis::index');
$routes->match(['get','post'], 'admin/aluminiakpis/add_for', 'admin\Alumniesakpis::add_for');
$routes->match(['get','post'], 'admin/aluminiakpis/edit_for/(:num)', 'admin\Alumniesakpis::edit_for/$1');
$routes->match(['get','post'], 'admin/aluminiakpis/delete_for/(:num)', 'admin\Alumniesakpis::delete_for/$1');
