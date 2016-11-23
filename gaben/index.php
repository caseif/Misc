<!DOCTYPE HTML>
<html>
<head>
<?php
$i = isset($_GET['i']) ? $_GET['i'] : 1;
if (date("n").' '.date("j") == "4 1" || isset($_GET['rick']))
	$rick = isset($_GET['rick']) ? $_GET['rick'] : (isset($_COOKIE['rick']) ? $_COOKIE['rick'] : 1);
else
	$rick = 0;
if ($rick == 1)
	echo "<title>All Hail Rick Astley</title>";
else
	echo "<title>All Hail Gaben</title>";
?>
<link rel="icon" type="image/png" href="https://gaben.caseif.net/images/gabenicon.png">
<meta property="og:image" content="https://gaben.caseif.net/images/gaben.jpg" />
<meta property="og:type" content="website" />
<meta property='og:url' content="https://gaben.caseif.net/" />
<meta property='og:title' content="All Hail Gaben" />
<meta property='og:description' content="Hail to our Lord!" />
<style>
.gaben, .rick {
	position: fixed;
	display: block;
	top: 0;
	right: 0;
	bottom: 0;
	left: 0;
	width: 100%;
	-o-transition: 30s;
	-ms-transition: 30s;
	-moz-transition: 30s;
	-webkit-transition: 30s;
	transition: 30s;
	outline: none;
	<?php if ($i == 2) echo 'margin-top: -20%'; elseif ($i == 5) echo 'margin-top: -40%'; elseif ($rick == 1) echo 'margin-top: -10%'; ?>
}

.timer {
	bottom: 0;
	right: 5px;
	position: fixed;
	color: white;
}

.socials {
	bottom: 0;
	left: 0;
	position: fixed;
	font-size: 1px;
}

.twitter-share-button {
	padding-top: 3px;
	padding-bottom: 3px;
}

.socials iframe {
	vertical-align: middle;
}

.socials span {
	display: inline-block;
}

.aprilfools {
	position: fixed;
	font-family: Comic Sans MS;
	right: 5px;
	top: 0;
}

.aprilfools a {
	color: white;
}

</style>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
<script>
var seconds = 0;
window.onready = setTimeout(function tick(){
	seconds++;
	$(".timer").html("You've been worshipping for " + seconds + " seconds");
	setTimeout(tick, 1000);
}, 1000);

var i = <?php echo $i; ?>;
var rick = <?php echo $rick; ?> == 1 ? true : false;

window.onload = function zoomIn(){
	//document.getElementById("music").volume = 0.5;
	console.log("Zooming in");
	if (rick){
		$(".rick").css("width", "400%");
		$(".rick").css("margin-left", "-135%");
		$(".rick").css("margin-top", "-95%");
	}
	else if (i == 1){
		$(".gaben").css("width", "400%");
		$(".gaben").css("margin-left", "-147%");
		$(".gaben").css("margin-top", "-55%");
	}
	else if (i == 2){
		$(".gaben").css("width", "400%");
		$(".gaben").css("margin-left", "-153%");
		$(".gaben").css("margin-top", "-122%");
	}
	else if (i == 3){
		$(".gaben").css("width", "350%");
		$(".gaben").css("margin-left", "-100%");
		$(".gaben").css("margin-top", "-55%");
	}
	else if (i == 4){
		$(".gaben").css("width", "500%");
		$(".gaben").css("margin-left", "-210%");
		$(".gaben").css("margin-top", "-72%");
	}
	else if (i == 5){
		$(".gaben").css("width", "300%");
		$(".gaben").css("margin-left", "-50%");
		$(".gaben").css("margin-top", "-140%");
	}
	setTimeout(
		function zoomOut(){
			console.log("Zooming out");
			if (rick){
				$(".rick").css("width", "100%");
				$(".rick").css("margin-left", "0%");
				$(".rick").css("margin-top", "-10%");
			}
			else {
				$(".gaben").css("width", "100%");
				$(".gaben").css("margin-left", "0%");
				if (i == 2)
					$(".gaben").css("margin-top", "-20%");
				else if (i == 5)
					$(".gaben").css("margin-top", "-40%");
				else
					$(".gaben").css("margin-top", "0%");
			}
			setTimeout(zoomIn, 30000);
		}, 30000
	);
}

function back(){
	if (rick)
		document.cookie = 'rick=0;expires=' + new Date(2016, 0, 1, 0, 0, 0, 0).toGMTString() + ';path=/';
	else
		document.cookie = 'rick=1;expires=' + new Date(2016, 0, 1, 0, 0, 0, 0).toGMTString() + ';path=/';
	window.location.replace('/');
}
</script>
</head>
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<?php
if ($rick == 1)
	echo '<img class="rick" src="https://rick.caseif.net/rick.jpg" alt="The Mighty Rick Astley">';
else if ($i == 1)
	echo '<img class="gaben" src="images/gaben1.jpg" alt="The Mighty Gaben">';
elseif ($i == 2)
	echo '<img class="gaben" src="images/gaben2.png" alt="The Mighty Gaben">';
elseif ($i == 3)
	echo '<img class="gaben" src="images/gaben3.jpg" alt="The Mighty Gaben">';
elseif ($i == 4)
	echo '<img class="gaben" src="images/gaben4.jpg" alt="The Mighty Gaben">';
elseif ($i == 5)
	echo '<img class="gaben" src="images/gaben5.jpg" alt="The Mighty Gaben">';
else
	echo '<span style="text-align:center;"><h1>Invalid image!</h1></span>';
if ($rick == 1){
?>
<audio id="music" hidden autoplay loop>
	<source src="https://rick.caseif.net/rick.mp3" type="audio/mpeg">
	<embed src="https://rick.caseif.net/rick/rick.mp3" hidden>
</audio>
<?php
} else {
?>
<audio id="music" hidden autoplay loop>
	<source src="sax.mp3" type="audio/mpeg">
	<embed src="sax.mp3" hidden>
</audio>
<?php
}
?>
<div class="timer">You've been worshipping for 0 seconds</div>
<?php
if (date("n").' '.date("j") == "4 1" || isset($_GET['rick'])){
?>
<div class="aprilfools"><a href="javascript:back();">Back to <?php echo $rick == 1 ? "Gaben" : "Rick"; ?></a></div>
<?php
}
?>
<div class="socials">
<span class="fb-like" data-href="https://gaben.caseif.net/" data-send="true" data-action="like" data-share="false" data-layout="button_count" data-width="50" data-show-faces="false" data-font="arial"></span>
<br>
<a href="https://twitter.com/share" class="twitter-share-button" data-lang="en" data-url="https://gaben.caseif.net" data-text="I just worshipped our Lord and Savior, #<?php echo $rick == 1 ? "RickAstley" : "Gaben"; ?>!">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
<br>
<span class="g-plusone" data-size="standard" data-href="https://gaben.caseif.net/" />
</div>
</body>
</html>
<?php
//include('connect.php'); // simple mysql_connect() call
//$link->select_db('gaben');
//$link->prepare('INSERT INTO access (ip, time) VALUES ("'.$_SERVER['REMOTE_ADDR'].'", "'.time().'")')->execute();
//$link->close();
?>
