<!DOCTYPE HTML>
<html>
	<head>
		<title>Insult Generator</title>
		<style>
			#insult {
				font-size: 108pt;
				font-family: Lato, Calibri, Arial, sans-serif;
				text-align: center;
				margin-left: auto;
				margin-right: auto;
			}
            #gh {
                font-family: monospace;
                font-size: 14pt;
                position: absolute;
                bottom: 5px;
                right: 7px;
            }
		</style>
		<link rel="stylesheet"	type="text/css" href="https://fonts.googleapis.com/css?family=Lato:300">
	</head>
	<body>
		<div id="insult">
			<?php
			$swearArray = explode("\n", file_get_contents('http://pastebin.com/raw.php?i=JzqUgZwj'));
			$nounArray = explode("\n", file_get_contents('http://pastebin.com/raw.php?i=Hm9KmGnS'));
			$swear = $swearArray[rand(0, count($swearArray) - 1)];
			$noun = $nounArray[rand(0, count($nounArray) - 1)];
			$insult = $swear.$noun;
			$insult = preg_replace('/\r|\n/', '', $insult);
			$first = substr($insult, 0, 1);
			$vowels = array('a', 'e', 'i', 'o', 'u');
			if (in_array($first, $vowels)) $an = true;
			else $an = false;
			$insult = 'You\'re a'.($an ? 'n' : '').' <span style="color:#5CADFF;">'.$insult.'</style>';
			echo $insult;
			?>
		</div>
        <div id="gh">
            <a href="https://github.com/caseif/Misc/tree/master/insult-generator" target="_blank">Github</a>
        </div>
		<script>
			function docHeight() {
				// from https://stackoverflow.com/questions/1145850/
				var body = document.body,
						html = document.documentElement;
				return Math.max(body.scrollHeight, body.offsetHeight, 
						html.clientHeight, html.scrollHeight, html.offsetHeight);
			}

			window.addEventListener('DOMContentLoaded', function() {
                var elementId = 'insult';
				function centerText() {
					document.getElementById(elementId).style.marginTop =
							((docHeight() - document.getElementById(elementId).offsetHeight) / 2 * 0.9) + 'px';
				}

				centerText();	

				window.addEventListener('resize', function() {
					centerText();
				}, false);
			}, false);
		</script>
	</body>
</html>
