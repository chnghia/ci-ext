<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Options extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
	}
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
		$this->lang->load('options');
		
		$this->template
			->title('SWA-EXT')
			->build('options/index');
	}
	
	function json_data($item)
	{
		//$json = array();
		//return json_encode($json);
		$json = <<< EOF
{"text":".","children": [
    {
        task:'Project: Shopping',
        duration:13.25,
        user:'Tommy Maintz',
        iconCls:'task-folder',
        expanded: true,
        children:[{
            task:'Housewares',
            duration:1.25,
            user:'Tommy Maintz',
            iconCls:'task-folder',
            children:[{
                task:'Kitchen supplies',
                duration:0.25,
                user:'Tommy Maintz',
                leaf:true,
                iconCls:'task'
            },{
                task:'Groceries',
                duration:.4,
                user:'Tommy Maintz',
                leaf:true,
                iconCls:'task'
            },{
                task:'Cleaning supplies',
                duration:.4,
                user:'Tommy Maintz',
                leaf:true,
                iconCls:'task'
            },{
                task: 'Office supplies',
                duration: .2,
                user: 'Tommy Maintz',
                leaf: true,
                iconCls: 'task'
            }]
        }, {
            task:'Remodeling',
            duration:12,
            user:'Tommy Maintz',
            iconCls:'task-folder',
            expanded: true,
            children:[{
                task:'Retile kitchen',
                duration:6.5,
                user:'Tommy Maintz',
                leaf:true,
                iconCls:'task'
            },{
                task:'Paint bedroom',
                duration: 2.75,
                user:'Tommy Maintz',
                iconCls:'task-folder',
                children: [{
                    task: 'Ceiling',
                    duration: 1.25,
                    user: 'Tommy Maintz',
                    iconCls: 'task',
                    leaf: true
                }, {
                    task: 'Walls',
                    duration: 1.5,
                    user: 'Tommy Maintz',
                    iconCls: 'task',
                    leaf: true
                }]
            },{
                task:'Decorate living room',
                duration:2.75,
                user:'Tommy Maintz',
                leaf:true,
                iconCls:'task'
            },{
                task: 'Fix lights',
                duration: .75,
                user: 'Tommy Maintz',
                leaf: true,
                iconCls: 'task'
            }, {
                task: 'Reattach screen door',
                duration: 2,
                user: 'Tommy Maintz',
                leaf: true,
                iconCls: 'task'
            }]
        }]
    },{
        task:'Project: Testing',
        duration:2,
        user:'Core Team',
        iconCls:'task-folder',
        children:[{
            task: 'Mac OSX',
            duration: 0.75,
            user: 'Tommy Maintz',
            iconCls: 'task-folder',
            children: [{
                task: 'FireFox',
                duration: 0.25,
                user: 'Tommy Maintz',
                iconCls: 'task',
                leaf: true
            }, {
                task: 'Safari',
                duration: 0.25,
                user: 'Tommy Maintz',
                iconCls: 'task',
                leaf: true
            }, {
                task: 'Chrome',
                duration: 0.25,
                user: 'Tommy Maintz',
                iconCls: 'task',
                leaf: true
            }]
        },{
            task: 'Windows',
            duration: 3.75,
            user: 'Darrell Meyer',
            iconCls: 'task-folder',
            children: [{
                task: 'FireFox',
                duration: 0.25,
                user: 'Darrell Meyer',
                iconCls: 'task',
                leaf: true
            }, {
                task: 'Safari',
                duration: 0.25,
                user: 'Darrell Meyer',
                iconCls: 'task',
                leaf: true
            }, {
                task: 'Chrome',
                duration: 0.25,
                user: 'Darrell Meyer',
                iconCls: 'task',
                leaf: true
            },{
                task: 'Internet Exploder',
                duration: 3,
                user: 'Darrell Meyer',
                iconCls: 'task',
                leaf: true
            }]
        },{
            task: 'Linux',
            duration: 0.5,
            user: 'Aaron Conran',
            iconCls: 'task-folder',
            children: [{
                task: 'FireFox',
                duration: 0.25,
                user: 'Aaron Conran',
                iconCls: 'task',
                leaf: true
            }, {
                task: 'Chrome',
                duration: 0.25,
                user: 'Aaron Conran',
                iconCls: 'task',
                leaf: true
            }]
        }]
    }
]}
EOF;
		echo $json;
	}
}

/* End of file types.php */
/* Location: ./application/controllers/Types.php */