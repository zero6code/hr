<div class="container-fluid fs-6 bg-body" style="z-index:1000;">
    <a class="navbar-brand" href="https://www.suansaranrom.go.th/">SUANSARANROM</a>
    <!-- <img src="img/logo_ssr.png" class="mg-fluid rounded mx-auto d-block " style="width:10vw" alt="..."> -->
     <!-- <div id="demo"></div> -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <?php 
              require_once('show_in_nav.php');
        ?>
      </ul>
         <?php
            (!empty(session_id()))? require_once('btn_logout.php') : null;
         ?>
    </div>
</div>
<?php 
  require_once('model_for_nav.php');
?>