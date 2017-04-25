<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Createarticle extends CI_Controller {

	
	   
	public function index()
	{
		// //echo phpinfo();
		// $m = new MongoDB\Driver\Manager("mongodb://localhost:27017/test");
		// //$m = new MongoDB\Driver\Manager("mongodb://ncadmin:aneesh123@localhost:27017/nc");
		// //$db = $m->selectDB("newschunk");
		// $bulk = new MongoDB\Driver\BulkWrite;
		// $bulk->insert(['title' => "test title", 'content' => 'test content',
		// 'cdate' => '24-april-2017',
		// 'mdate' => '24-april-2017',
		// 	'userInfo' => ['email' => 'test@test.com','uname' => 'aneesh','phone' => '9999999999'],
		// 	'category' => 'entertainment',
		// 	'comments' => 'test comments',
		// 	'likes' => '123',
		// 	'tags' => 'trendy',
		// ]);
		// $m->executeBulkWrite('nc.test', $bulk);
	

	}
	public function article()
	{
		$data='';
		$content = $this->load->view('v_create_article',$data,true);
        // echo base_url();
       echo $content;
        //unset($data);
	}
}
