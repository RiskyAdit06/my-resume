<?php 

/**
 * 
 */
class Home extends CI_Controller
{
	
	public function index()
	{
		$this->template->load('template/static_home', 'page/content');
	}
}
 ?>