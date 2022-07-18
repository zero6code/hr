<?php 
session_start();
	require_once("../../db/connect_db.php");
	$va = isset($_GET["value"])? !empty($_GET["value"])? $_GET["value"] : "null1" : "null2";

	// echo $user."|".$pass;

	class CHACK_LOGIN extends CONNECT_DATABASE {

		public function getvalue($user, $pass){
			return $this->select_name_admin($user, $pass);
		}

		private function chack_admin($user, $pass){
			$username = mysqli_real_escape_string($this->p_connect(), $user);
			$password = mysqli_real_escape_string($this->p_connect(), $pass);
			$result = $this->p_connect()->query(sprintf("SELECT * FROM admin where cid = '%s' and pass = '%s'", $username, $password));
			return $result -> fetch_object();
		}

		private function chack_user($user, $pass){
			$username = mysqli_real_escape_string($this->p_connect(), $user);
			$password = mysqli_real_escape_string($this->p_connect(), $pass);
			$result = $this->p_connect()->query(sprintf("SELECT * FROM person where cid = '%s' and pass = '%s'", $username, $password));
			return $result -> fetch_object();
		}

		private function session_data($id, $pname, $fname, $lname){
			session_id();
			$_SESSION['id_user'] = $id;
			$_SESSION['pname'] = $pname;
			$_SESSION['fname'] = $fname;
			$_SESSION['lname'] = $lname;
		}

		private function select_name_admin($user, $pass){
			$obj = $this->chack_admin($user, $pass);
			$obj2 = $this->chack_user($user, $pass);
			if(!empty($obj)){	
				$this->session_data(
					$obj->cid,
					$obj->pname,
					$obj->fname,
					$obj->lname
				);
				return "admin";
			}else if($obj2){
				$this->session_data(
					$obj2->cid,
					$obj2->pname,
					$obj2->fname,
					$obj2->lname
				);
				return "user";
			}else{
				return "error";
			}
			
			//return mamery and close connect database.
			$obj->free_result();        
			$obj2->free_result();
			$this->p_connect()->close();

		}
	}

	if(($va === "null1") || ($va === "null2")){
		null;
	}else{
		$subs = explode("aswe", $va);
		$user = $subs[0];
		$pass = $subs[1];
		$select = new CHACK_LOGIN();
		$showTextReturn = $select->getvalue($user, $pass);
		echo $showTextReturn;
		printf("%s",session_id());
	}

 ?>