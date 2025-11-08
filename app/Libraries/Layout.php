<?php
namespace App\Libraries;
use App\Libraries\Image;

class Layout {

    public static function view($view, $data = array()) {
    	$data['image'] = new Image();
    	$data['view'] = $view;
        return view('admin/layout/layout', $data);
    }

    public static function web($view, $data = array()) {
    	$data['image'] = new Image();
    	$data['view'] = $view;
        return view('web/layout/layout', $data);
    }

}