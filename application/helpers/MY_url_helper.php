<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Set active menu in header-menu
 *
 *
 * @access	public
 * @param	string
 * @param	string
 * @return	string
 */
if ( ! function_exists('set_active_menu'))
{
	function set_active_menu($menu, $active_mnu = '')
	{
		if ($menu == $active_mnu) 
			return 'class="current"';
		return '';
	}
}