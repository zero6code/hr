<?php 

	// require_once('db/connect_db.php');
	require_once("controller/nav-control.php");
	require_once("controller/index/login-control.php");
	require_once("controller/index/content-control.php");

	class INDEX {

		public function nav() {
			$class_nav = new NAV();
			$class_nav->_nav();
		}

		public function login_card(){
			$class_login_card = new LOGIN_CARD();
			$class_login_card->_login_card();
			$ojb_login = array(
				$class_login_card->_login_card(),
				$class_login_card->_alert()
			);
			return $ojb_login;
		}

		public function content_card(){
			$class_login_card = new CONTENT_CARD();
			$class_login_card->_content_card();
		}

	}


	$app = new INDEX();
?>

<nav class="navbar navbar-expand-lg bg-light shadow" ><?php $app->nav(); ?></nav>
<div id="setCenter" class="container-fluid" style="margin-top: 5vh;">
	<div class="row mx-auto" style="font-size: 32px;">
		<div class="col-sm-12 col-md-1"></div>
		<div class="col-sm-12 col-md-7">
			<?php $app->content_card(); ?>
		</div>
		<div class="col-sm-12 col-md-3">
			<?php $app->login_card(); ?>
		</div>
	</div>
</div>
<!-- <footer style="bottom: 0;">Copyright © HR-SSRH 2022</footer> -->