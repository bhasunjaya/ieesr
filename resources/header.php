<?php
    $pageName = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Karbon Kalkulator</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="assets/fancybox/jquery.fancybox.css?v=2.0.6" media="screen" />
	<link rel="stylesheet" type="text/css" href="assets/fancybox/helpers/jquery.fancybox-thumbs.css?v=1.0.2" />
	<link rel="stylesheet" type="text/css" href="css/ui-lightness/jquery-ui-1.8.19.custom.css" />
<!--     <link href="assets/css/bootstrap-responsive.css" rel="stylesheet"> -->
    <link href="css/main.css" rel="stylesheet">
    <link href="assets/js/google-code-prettify/prettify.css" rel="stylesheet">
    <link href="assets/css/smart_wizard.css" rel="stylesheet">
    <link href="assets/css/smart_wizard_vertical.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
     <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
<!--     <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script> -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/jquery-ui-1.8.19.custom.min.js"></script>
    <script src="assets/js/google-code-prettify/prettify.js"></script>
    <script src="assets/js/bootstrap-transition.js"></script>
    <script src="assets/js/bootstrap-alert.js"></script>
    <script src="assets/js/bootstrap-modal.js"></script>
    <script src="assets/js/bootstrap-dropdown.js"></script>
    <script src="assets/js/bootstrap-scrollspy.js"></script>
    <script src="assets/js/bootstrap-tab.js"></script>
    <script src="assets/js/bootstrap-tooltip.js"></script>
    <script src="assets/js/bootstrap-popover.js"></script>
    <script src="assets/js/bootstrap-button.js"></script>
    <script src="assets/js/bootstrap-collapse.js"></script>
    <script src="assets/js/bootstrap-carousel.js"></script>
    <script src="assets/js/bootstrap-typeahead.js"></script>
    <script src="assets/js/application.js"></script>
    <script src="assets/js/jquery.smartWizard-2.0.min.js"></script>
     <!-- Add mousewheel plugin (this is optional) -->
	<script type="text/javascript" src="assets/fancybox/jquery.mousewheel-3.0.6.pack.js"></script>

	<!-- Add fancyBox main JS and CSS files -->
	<script type="text/javascript" src="assets/fancybox/jquery.fancybox.js?v=2.0.6"></script>

	<!-- Add Button helper (this is optional) -->
	<link rel="stylesheet" type="text/css" href="assets/fancybox/helpers/jquery.fancybox-buttons.css?v=1.0.2" />
	<script type="text/javascript" src="assets/fancybox/helpers/jquery.fancybox-buttons.js?v=1.0.2"></script>

	<!-- Add Thumbnail helper (this is optional) -->
	<script type="text/javascript" src="assets/fancybox/helpers/jquery.fancybox-thumbs.js?v=1.0.2"></script>

	<!-- Add Media helper (this is optional) -->
	<script type="text/javascript" src="assets/fancybox/helpers/jquery.fancybox-media.js?v=1.0.0"></script>
	<script>
	$(document).ready(function(){
		$('#pop').popover();
		$('.pop').fancybox()
	})
	</script>
  </head>

  <body>

<div class="headerbg">&nbsp;</div>
 <header>
 	<!-- Navbar
    ================================================== -->
    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="./index.html">Karbon Kalkulator</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="">
                <a href="#">Beranda</a>
              </li>
              <li class="">
                <a href="#">Tentang Jejak Karbon</a>
              </li>
              <li class="">
                <a href="#">Panduan</a>
              </li>
              <li class="">
                <a href="dashboard.php">Member Area</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="topbar topbar-fixed">
    	<ul class="nav navBottom nav-pills">
		  <!--
<li class="<?php if($pageName == 'listrik.php'){ echo 'active'; }?>"><a href="listrik.php"><img src="img/icons/homegreen.png" width="40" />&nbsp;&nbsp;&nbsp;Rumah</a></li>
		  <li class="<?php if($pageName == 'sampah.php'){ echo 'active'; }?>"><a href="sampah.php"><img src="img/icons/trash.png" width="40" />&nbsp;&nbsp;&nbsp;Sampah</a></li>
		  <li class="<?php if($pageName == 'darat.php'){ echo 'active'; }?>"><a href="darat.php"><img src="img/icons/delivery.png" width="40" />&nbsp;&nbsp;&nbsp;Transportasi</a></li>
-->
			<li><a href="#">Perhitungan Baseline</a></li>
			<li><a href="#">Pengurangan Emisi</a></li>
			<li><a href="#">Cetak Komitmen</a></li>
			<li><a href="#">Data Profile</a></li>
		</ul>
	</div>
 </header>
  <div id="main" class="container">
<?php if($pageName !== 'dashboard.php' && $pageName !=='index.php' && $pageName !== 'profile.php' && $pageName !== 'profile-change.php' && $pageName !== 'change-pass.php') :?>
 <div class="alert alert-success" style="text-align:center">
   <a class="close" data-dismiss="alert" href="#">×</a>
 Penghitungan baseline emisi pernah anda lakukan pada tanggal 06 May 2012 20:56<br />
Apakah Anda ingin menghapus data ini dan mengisikan ulang perhitungan emisi anda? Hapus data ini</div>
<div class="row buttonRow">
	<div class="span3">
		&nbsp;
	</div>
	
	<div class="span9">	
		<div class="btn-group">
		  <button class="btn btn-large btn-success <?php if($pageName == 'listrik.php'){?>active<?php }?>" onClick="window.location='listrik.php'"><i class="icon-off"></i> Listrik</button>
		  <button class="btn btn-large btn-success <?php if($pageName == 'sampah.php'){?>active<?php }?>" onclick="window.location='sampah.php'"><i class="icon-trash"></i> Sampah</button>
		  <button class="btn btn-large btn-success <?php if($pageName == 'darat.php'){?>active<?php }?>" onclick="window.location='darat.php'"><i class="icon-road"></i> Transportasi</button>
		</div>
	</div>
</div>
<?php endif;?>