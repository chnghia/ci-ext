<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

// CodeIgniter i18n library by J�r�me Jaglale
// http://maestric.com/en/doc/php/codeigniter_i18n
// version 6 - April 20, 2009

class MY_Config extends CI_Config {

	function site_url($uri = '')
	{
		if (is_array($uri))
		{
			$uri = implode('/', $uri);
		}

		$CI =& get_instance();
		
		$uri = $CI->lang->localized($uri);
		//$segment =  $CI->uri->segment(1);
		//if(!in_array($segment, $CI->lang->special))
		//$uri = $CI->lang->localized($uri);

		return parent::site_url($uri);
	}
}
// END MY_Config Class

/* End of file MY_Config.php */
/* Location: ./system/application/libraries/MY_Config.php */