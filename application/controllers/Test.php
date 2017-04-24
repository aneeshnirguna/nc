<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {

	
	   
	public function index()
	{
		//echo phpinfo();
		$m = new MongoDB\Driver\Manager("mongodb://localhost:27017/test");
		//$m = new MongoDB\Driver\Manager("mongodb://ncadmin:aneesh123@localhost:27017/nc");
		//$db = $m->selectDB("newschunk");
		$bulk = new MongoDB\Driver\BulkWrite;
		$bulk->insert(['title' => "test title", 'content' => 'test content',
		'cdate' => '24-april-2017',
		'mdate' => '24-april-2017',
			'userInfo' => ['email' => 'test@test.com','uname' => 'aneesh','phone' => '9999999999'],
			'category' => 'entertainment',
			'comments' => 'test comments',
			'likes' => '123',
			'tags' => 'trendy',
		]);
		$m->executeBulkWrite('nc.test', $bulk);
		// $command = new MongoDB\Driver\Command([
    	// 	'title' => 'test title',
		// 	'content' => 'test content',
		// 	'cdate' => '24-april-2017',
		// 	'mdate' => '24-april-2017',
		// 	'userInfo' => ['email' => 'test@test.com','uname' => 'aneesh','phone' => '9999999999'],
		// 	'category' => 'entertainment',
		// 	'comments' => 'test comments',
		// 	'likes' => '123',
		// 	'tags' => 'trendy',
    	// 	//'content' => [
        // 	//['$group' => ['_id' => '$y', 'sum' => ['$sum' => '$x']]],
		// 	//],
    	// 	'cursor' => new stdClass,
		// 	]);
		// $cursor = $m->executeCommand('test', $command);
	  	//	$connection=  new MongoClient($db['connection_string'],array('username'=>$db['username'],'password'=>$db['password']));
			//var_dump($m);
			// foreach ($cursor as $document) {
   			// 	 var_dump($document);
			// 	}

	}
}
