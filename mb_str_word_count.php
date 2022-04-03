<?php
/*
این تابع توسط طاها امین غفوری برنامه نویسی شده است!
هرگونه حذف نام صاحب اثر پیگرد قانونی و شرعا حرام است.
https://github.com/tahaghafuri/mb_str_word_count-php-function/
https://tagteach.ir/
*/
if(!function_exists("mb_str_word_count")){
function mb_str_word_count($str='ERR',$f=0) {
	if ($str === null OR $str == '' OR $str == 'ERR') {
		return "Error, value can't be empty!";
                exit;
	} else {
            $as = explode(" ", $str);

            switch ($f) {
                case 0:
                    $r = count($as);
                    break;
                case 1:
                    $r = array_values($as);
                    break;
                case 2:
                    $r = array_values($as);
                    break;
                default:
                    $r = "Please Enter Correct Number!";
                    break;
            }

            return $r;
	}
}
} ?>
