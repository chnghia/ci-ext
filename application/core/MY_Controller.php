<?php defined('BASEPATH') OR exit('No direct script access allowed');

// Code here is run before ALL controllers
class MY_Controller extends CI_Controller {

	public function MY_Controller()
	{
		parent::__construct();
		
		$active_mnu = $this->uri->rsegment(1);
		
		// Template configuration
		$this->template
			->set_layout('default')
			->set('active_mnu', $active_mnu)
			->enable_parser(FALSE)
			->set_partial('metadata', 'partials/metadata')
			->set_partial('header', 'partials/header')
			->set_partial('footer', 'partials/footer');

	    //$this->output->enable_profiler(TRUE);
	}

	protected function is_ajax()
	{
		return $this->input->server('HTTP_X_REQUESTED_WITH') == 'XMLHttpRequest';
	}
}

/**
 * Returns the CI object.
 *
 * Example: ci()->db->get('table');
 *
 * @staticvar	object	$ci
 * @return		object
 */
function ci()
{
	return get_instance();
}