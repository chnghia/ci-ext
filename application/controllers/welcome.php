<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * DEPRECATED
 * This class for EXT-JS testing purpose
 * @author nghiach
 *
 */
class Welcome extends MY_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		// load language file
		$this->lang->load('default');
		
		$this->template
			->title(lang('header_page_home').' - SWA-EXT')
			->build('welcome');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */