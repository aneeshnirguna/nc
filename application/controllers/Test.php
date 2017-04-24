<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {

	
	   
	public function index()
	{
		//echo phpinfo();
		$m = new MongoDB\Driver\Manager("mongodb://localhost:27017");
		$db = $m->selectDB("newschunk");
		
	  		$connection=  new MongoClient($db['connection_string'],array('username'=>$db['username'],'password'=>$db['password']));
			echo $connection;

	}
}
