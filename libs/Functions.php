<?php 
class Functions {   
    static public function the_excerpt($text, $string = 400) {
        $clean = strip_tags($text);
        if(strlen($clean) > $string) {
            $cutString = substr($clean,0,$string);
            $words = substr($clean, 0, strrpos($cutString, ' '));
            return $words .'...';
        } else {
            return $clean;
        }
       
    } // End the_excerpt//
    static public function the_content($text) {
        $str = str_replace("\r\n\r\n"," ", $text);
        return $str;
    }
}
 
?>