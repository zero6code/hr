<?php 
//error_reporting(0);
define("SERVER", "127.0.0.1");
define("DATABASE_USER", "root");
define("DATABASE_PASS", "mysql6101993asd");
define("DATABASE_NAME", "admin_hr");


class CONNECT_DATABASE {

	private $connect;

	public function p_connect(){ return $this->__connect_db(); }
	public function p_connect_close(){ return $this->__connect_db()->close(); } 
	public function testcondb(){echo "testttt";}
	
	private function __connect_db () {

		try {

			$this->connect = new mysqli(SERVER, DATABASE_USER, DATABASE_PASS, DATABASE_NAME);
			$this->connect->set_charset("utf8mb4");
			return $this->connect;

		}catch (Exception $err) {

			 echo "MYSQL CONNECT ERROR!";

		}

	}

}


// $cdb = new CONNECT_DATABASE();


// $result = $cdb->p_connect()->query("SELECT * FROM admin");
// while ($obj = $result -> fetch_object()) {
// 	echo $obj->fname;
// }
// $result->free_result();
// $cdb->p_connect_close();

?>