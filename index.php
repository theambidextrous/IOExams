
<?php
define("APP_ROOT", "iosteps/") ;
require_once('ioclasses/IOExam.class.php');
$currPage = !empty($_REQUEST['currpg'])?$_REQUEST['currpg']:'';
$io = new IOExam(24255,"tre5egdftg443", $currPage, APP_ROOT);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="google-translate-customization" content="839d71f7ff6044d0-328a2dc5159d6aa2-gd17de6447c9ba810-f">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />	
	<title>	Online exams, model exams	</title>
	<meta name="description" content="Online School Examination Portal"/>
	<link href="iothemes/icons/favicon.ico" type="image/x-icon" rel="icon" />
	<link href="iothemes/icons/favicon.ico" type="image/x-icon" rel="shortcut icon" />
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,700" />
	<link rel="stylesheet" type="text/css" href="iothemes/css/font-awesome.min.css" />
	<link rel="stylesheet" type="text/css" href="iothemes/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="iothemes/css/core.css" />
	<link rel="stylesheet" type="text/css" href="iothemes/css/system.css" />
	<link rel="stylesheet" type="text/css" href="iothemes/css/system-responsive.css" />
	<link rel="stylesheet" type="text/css" href="iothemes/css/style.css" />
	<link rel="stylesheet" type="text/css" href="iothemes/css/validationEngine.jquery.css" />
	<link rel="stylesheet" type="text/css" href="iothemes/css/bootstrap-multiselect.css" />
	<link rel="stylesheet" type="text/css" href="iothemes/css/jquery.countdown.css" />
	<script type="text/javascript" src="iothemes/js/jquery-1.8.2.min.js"></script>
	<script type="text/javascript" src="iothemes/js/html5shiv.js"></script>
	<script type="text/javascript" src="iothemes/js/respond.min.js"></script>
	<script type="text/javascript" src="iothemes/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="iothemes/js/jquery.validationEngine-en.js"></script>
	<script type="text/javascript" src="iothemes/js/jquery.validationEngine.js"></script>
	<script type="text/javascript" src="iothemes/js/jquery.metisMenu.js"></script>
	<script type="text/javascript" src="iothemes/js/bootstrap-switch.min.js"></script>
	<script type="text/javascript" src="iothemes/js/jquery.cookie.js"></script>
	<script type="text/javascript" src="iothemes/js/core.js"></script>
	<script type="text/javascript" src="iothemes/js/system-layout.js"></script>
	<script type="text/javascript" src="iothemes/js/jquery-responsive.js"></script>
	<script type="text/javascript" src="iothemes/js/bootstrap-multiselect.js"></script>
	<script type="text/javascript" src="iothemes/js/waiting-dialog.min.js"></script>
	<script type="text/javascript" src="iothemes/js/custom.min.js"></script>
	<script type="text/javascript" src="iothemes/js/langs/en.js"></script>
	<script type="text/javascript" src="iothemes/js/jquery.plugin.min.js"></script>
	<script type="text/javascript" src="iothemes/js/jquery.countdown.min.js"></script>
	<script type="text/javascript">
jQuery(document).ready(function () {
    'use strict';
    JQueryResponsive.init();
    Layout.init();
    document.body.oncopy = function() { return false; }
    document.body.oncut = function() { return false; }
    document.body.onpaste = function() { return false; }
});
function checkTime(i) {
  if (i < 10) {
    i = "0" + i;
  }
  return i;
}

function startTime() {
  var today = new Date();
  var h = today.getHours();
  var m = today.getMinutes();
  var s = today.getSeconds();
  // add a zero in front of numbers<10
  m = checkTime(m);
  s = checkTime(s);
  document.getElementById('iotime').innerHTML = h + ":" + m + ":" + s;
  t = setTimeout(function() {
    startTime()
  }, 500);
}
startTime();

</script>  </head>
  <body>
    <div id="google_translate_element"></div>  
    <div class="col-md-12">
    <div class="col-md-9"> <div class="exam-logo">Finstock Exams</div>
    </div>
      <div class="col-md-3 exam-photo"><img src="<?=$thumb?>" height="75" title="Test" alt=""/></div>
			</div>
    <div class="col-md-12"><div class="exam-border">&nbsp;</div></div>    
    <div>
		<?php 
		$io->ShowExamID();
		require_once($io->GetStep()[1]);
		?>
    <div id="exam-footer">
      <div class="copyright"> <span><strong>  Powered by </strong><a href="https://finstockevarsity.com" target="_blank"> Finstock IT</a></span>
	<div class="pull-left">Copyright &copy; <?=date('Y')?><strong> Finstock Evarsity</strong></div>
	<div class="text-center"><strong>Date &amp; Time </strong><span id="iotime"></span></div>
      </div>
    </div>
		<script>
function startTime() {
    var today = new Date();
    document.getElementById('iotime').innerHTML = today;
    t = setTimeout(function () {
        startTime()
    }, 500);
}
startTime();
		</script>
</body>
</html>