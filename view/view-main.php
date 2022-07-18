<?php
	require_once("controller/nav-control.php");
	require_once("controller/main/center_main-control.php");

class MAIN {

	public function nav() {
		$class_nav = new NAV();
		$class_nav->_nav_main();
	}

	public function center(){
		return new CENTER_MAIN();
	}

}

$app = new MAIN();
?>

<nav class="navbar navbar-expand-lg bg-light shadow" ><?php $app->nav();?></nav>
<div id="setCenter" class="container-fluid" style="margin-top: 5vh;">
	<div class="row mx-auto fs-6" style="font-size: 32px;">
		<div class="col-sm-12 col-md-3 col-lg-3 col-xl-3 col-xl-3 card">
			<?php $app->center()->menu_center(); ?>
		</div>
		<div class="col-sm-12 col-md-9 col-lg-9 col-xl-9 col-xxl-9 card">
			<?php $app->center()->main_center(); ?>
		</div>
	</div>
</div>