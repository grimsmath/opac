<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

error_reporting(E_ALL);
ini_set('display_errors', '1');

class Home2 extends CI_Controller {

	public function index()
	{
		$this->template->render('framed');
	}

	public function onesearch()
	{
    $this->template->render();
	}

	public function catalog()
	{
    redirect('http://unf.catalog.fcla.edu/nf.jsp');
	}

  public function track($type)
  {
    $u = new Tracking();
    $u->date  = date('Y-m-d', time());
    $u->time  = date('H:i:s', time());
    $u->decal = '99999';
    $u->type  = $type;
    $u->save();

    return json_encode(array('message' => 'success'));
  }
  
  public function group_study()
  {
	  $this->template->render();
  }
}
