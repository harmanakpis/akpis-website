<?php
use App\Models\SettingModel;
use App\Models\CourseModel;
use App\Models\CourseVideoModel;

/**
 * @ return setting data usingtype key 
 * 
 * 
 * @return Object string or array or boolean False
 * @author Divik Prakash
 * */
function isSetting($type) {
    $setting = new SettingModel();
    $result = $setting->where('type', $type)->where('status', 'active')->first();
    if(!empty($result)){
        if(is_array(json_decode($result->description, true))){
            return json_decode($result->description, true);
        }else{
            return $result->description;
        }
    }else{
        return '';
    }
}

/**
 * @ return setting data usingtype key 
 * 
 * 
 * @return Object string or array or boolean False
 * @author Divik Prakash
 * */
function menu_courses() {
    $course = new CourseModel();
    return $course->where('is_menu', 'yes')->where('status', 'active')->findAll();
}

/**
 * @ return setting data usingtype key 
 * 
 * 
 * @return Object string or array or boolean False
 * @author Divik Prakash
 * */
function course_videos($course_id) {
    $courseVideo = new CourseVideoModel();
    return $courseVideo->where('course_id', $course_id)->where('status', 'active')->findAll();
}

/**
 * @description check path, create if not exist
 * 
 * 
 * @return string
 * @author Divik Prakash
 * */
function check_dir($path) {
    if (!is_dir($path)) {
        mkdir($path, 0777, TRUE);
    }
    return $path;
}

/**
 * @description set post field value if exist
 * 
 * 
 * @return string
 * @author Divik Prakash
 * */
function post_value($field) {
    if (isset($_POST[$field])) {
        return $_POST[$field];
    }else{
        return '';
    }
}

/**
 * @description set get field value if exist
 * 
 * 
 * @return string
 * @author Divik Prakash
 * */
function get_value($field) {
    if (isset($_GET[$field])) {
        return $_GET[$field];
    }else{
        return '';
    }
}

/**
 * @ return first charactor of string 
 * 
 * 
 * @return string
 * @author Divik Prakash
 * */
function get_initial($string = NULL) {
    if (!$string) {
        return 'AKPIS';
    }
    $word_array = explode(' ', $string);
    $initial = '';
    foreach ($word_array as $word) {
        $initial .= strtoupper(substr($word, 0, 1));
    }
    return $initial;
}

function generateVideoEmbedUrl($url){
    //This is a general function for generating an embed link of an FB/Vimeo/Youtube Video.
    $finalUrl = '';
    if(strpos($url, 'facebook.com/') !== false) {
        //it is FB video
        $finalUrl.='https://www.facebook.com/plugins/video.php?href='.rawurlencode($url).'&show_text=1&width=200';
    }else if(strpos($url, 'vimeo.com/') !== false) {
        //it is Vimeo video
        $videoId = explode("vimeo.com/",$url)[1];
        if(strpos($videoId, '&') !== false){
            $videoId = explode("&",$videoId)[0];
        }
        $finalUrl.='https://player.vimeo.com/video/'.$videoId;
    }else if(strpos($url, 'youtube.com/') !== false && strpos($url, 'embed') != true) {
        //it is Youtube video
        $videoId = explode("v=",$url)[1];
        if(strpos($videoId, '&') !== false){
            $videoId = explode("&",$videoId)[0];
        }
        $finalUrl.='https://www.youtube.com/embed/'.$videoId;
    }else if(strpos($url, 'youtu.be/') !== false){
        //it is Youtube video
        $videoId = explode("youtu.be/",$url)[1];
        if(strpos($videoId, '&') !== false){
            $videoId = explode("&",$videoId)[0];
        }
        $finalUrl.='https://www.youtube.com/embed/'.$videoId;
    }else{
        $finalUrl.=$url;
    }
    return $finalUrl;
}

function test_fun(){
	$setting = new SettingModel();
    $data['settings'] = $setting->findAll();
    print_r($data);
}