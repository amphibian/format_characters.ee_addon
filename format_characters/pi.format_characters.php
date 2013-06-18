<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$plugin_info = array(
	'pi_name'				=> 'Format Characters',
	'pi_version'			=> '1.0',
	'pi_author'			=> 'Derek Hogee',
	'pi_author_url'		=> 'http://amphibian.info',
	'pi_description'		=> 'This plugin mainly converts double and single quotes to curly entities, but it also converts em-dashes, double spaces, and ampersands.',
	'pi_usage'				=> Format_characters::usage()
);

class Format_characters {

    var $return_data;
    
    function Format_characters($str = '')
    {
		$this->EE =& get_instance();
                
        if ($str == '') $str = $this->EE->TMPL->tagdata;
	  
        $this->EE->load->library('typography');
        $this->return_data = $this->EE->typography->format_characters($str);                           
    }
    
		
	function usage()
	{
		ob_start(); 
		?>
		This plugin mainly converts double and single quotes to curly entities, but it also converts em-dashes, double spaces, and ampersands.
		
		{exp:format_characters}Text you want processed{/exp:format_characters}
		<?php
		$buffer = ob_get_contents();
		ob_end_clean(); 
		return $buffer;
	}
}
?>