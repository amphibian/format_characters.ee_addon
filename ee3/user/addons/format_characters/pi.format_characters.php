<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Format_characters {

    var $return_data;
    
    function __construct($str = '')
    {
        if(empty($str))
        {
	        $str = ee()->TMPL->tagdata;
        }
        ee()->load->library('typography');
        $this->return_data = ee()->typography->format_characters($str);                           
    }
}