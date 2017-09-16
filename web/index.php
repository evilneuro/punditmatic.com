<?php
error_reporting(E_ALL);
ini_set('display_errors','1');
include "assets/inc/page-start.inc";

function showpunditry($punditrytype) {
	switch ($punditrytype) {
		case "rivalcompany":
			$words = array("Samsung","Motorola","Archos","HTC","Sony","Nintendo","Mi&eacute;le","Cisco","Nokia","Microsoft");
			$random = array_rand($words,2);
			return $words[$random[0]];
			break;
		case "product":
			$words = array("iPad","iPad mini","iPhone","iPod","iMac","MacBook Air","MacBook Pro","Mac mini","Mac Pro","Apple TV");
			$random = array_rand($words,2);
			return $words[$random[0]];
			break;
		case "market":
			$words = array("tablet","netbook","ultrabook","smartphone","set-top box","PDA","refridgerator","digital camera","snowcone maker","sunglasses","soda","SUV","lunar landing vehicle","digital clock","sleeping blanket","smell-o-vision","HDTV","LTE dongle","King Charles spaniel","adult diaper","milkshake","in-car entertainment","childrens' book","endoscope");
			$random = array_rand($words,2);
			return $words[$random[0]];
			break;
		case "conference":
			$words = array("the Mobile World Congress in Barcelona","CES in Las Vegas","the AVN Adult Entertainment Expo in Las Vegas","the Chicago Railroad Fair","E3 in Los Angeles","World of Concrete in Las Vegas","the China International Consumer Goods Fair in Ningbo, China","Diggers &amp; Dealers in Kalgoorlie, Australia","BETT at the London Olympia","the Metal-Expo in Moscow");
			$random = array_rand($words,2);
			return $words[$random[0]];
			break;
		case "newproduct":
			$words = array("tablet","netbook","smartphone","laptop","watch","new form of internal combustion engine","snowcone maker","polygraph","MP3 player","reel-to-reel tape player","gramophone","CRT monitor","snowcone maker","laser pistol");
			$random = array_rand($words,2);
			return $words[$random[0]];
			break;
		case "amazingfeature1":
			$words = array("10","11","7","9","14","15","50","120","2.5","1","0.01","250","9.5","3000");
			$random = array_rand($words,2);
			return $words[$random[0]];
			break;
		case "amazingfeature2":
			$words = array("a blast furnace","a wine glass","seventy-two virgins","a retractable antenna","complete Crayola crayon set","a half-smoked pack of cigarettes","a case of Stella Artois Cidre","a sleeping bag","eight 64MB SD cards","a Magic Tree car freshener");
			$random = array_rand($words,2);
			return $words[$random[0]];
			break;
		case "amazingfeature3":
			$words = array("lightsabers","wings","antennae","fins","radomes","pustules","hairs","eyes","fingers","Ethernet cables","vanes","grills","tricorders");
			$random = array_rand($words,2);
			return $words[$random[0]];
			break;
		case "amazingfeature4a":
			$words = array("eight spare batteries","a dual SIM card adapter","French instructions","a protective paper bag","three hardware buttons","a touchpad on the rear","a braille interface","57 varieties","a GD-ROM reader","a lifetime Xbox Music subscription","three HDMI outputs","a plastic bag");
			$random = array_rand($words,2);
			return $words[$random[0]];
			break;
		case "amazingfeature4b":
			$words = array("no discernable function","eighteen different functions","a 2,000 page instruction manual","a free pack of walnuts","a preloaded copy of the My Girl soundtrack","a box of Creme Eggs","kittens","an NFC key finder","a dog-eared, three month old copy of the Washington Post");
			$random = array_rand($words,2);
			return $words[$random[0]];
			break;
		case "amazingfeature5":
			$words = array("ensuring","maintaining","providing","encountering","fondling","designing","branching","entering","wowing","drinking");
			$random = array_rand($words,2);
			return $words[$random[0]];
			break;
		case "amazingfeature6":
			$words = array("future","past","present","legacy","history","franchise","industry","family","government","foreign press","United Nations","web browser developers","24-hour diner","Kool-Aid","band");
			$random = array_rand($words,2);
			return $words[$random[0]];
			break;
		case "amazingfeature6adjective":
			$words = array("overpower","toy","engag","multiply","freshen","soften","quilt","knee","bring","tell","punch","eat","drink","embiggen","choos");
			$random = array_rand($words,2);
			return $words[$random[0]];
			break;
		case "amazingfeature7":
			$words = array("most stunning OLED notification light ever","least capable 3G reception ever","most wonderful aroma","mass of a small man");
			$random = array_rand($words,2);
			return $words[$random[0]];
			break;
		case "amazingfeature8":
			$words = array("mindbullet","heat ray","hamburger","television show","tasty snack","fabulous review","overpowering smell","brazen phone call","inflatable squirrel","picky kid","jaffa cake","soda can");
			$random = array_rand($words,2);
			return $words[$random[0]];
			break;
		case "analysts":
			$words = array("Goldman Sachs","Yuanta Securities","Gartner","Baird","ISI Group","RBC Capital","Susquehanna","Morgan Stanley","Gabelli &amp; Co","UBS","Hudson Square","Pacific Crest","Canaccord Genuity","Needham","Dewey, Cheatem &amp; Howe");
			$random = array_rand($words,2);
			return $words[$random[0]];
			break;
	}
}
?>

<div class="row"><div class="span12" style="height: 100%; vertical-align: middle; padding-top: 200px;">


<div class="row"><div class="span12" style="text-align: center"><h1>Pundit-Matic&trade; 3000</h1><p>Generate your own <em>awesome</em> Apple-related commentary automatically!</div></div>
<div class="row"><div class="span12">
<p>
<?php $rivalcompany = showpunditry("rivalcompany") ?>
Apple's new <?php echo showpunditry("product") ?> is a modest upgrade that has
many who were hoping for more disappointed. Sure, the Apple fanbois will
buy it, but Apple has failed to keep up with the state of the
<?php echo showpunditry("market") ?> market. For example, just the other day
at <?php echo showpunditry("conference") ?>, <?php echo $rivalcompany ?>
unveiled a <?php echo showpunditry("newproduct") ?> with a
<?php echo showpunditry("amazingfeature1") ?>-inch screen and
<?php echo showpunditry("amazingfeature2") ?> with
<?php echo showpunditry("amazingfeature3") ?> that come flying out of the sides
and <?php echo showpunditry("amazingfeature4a") ?> with
<?php echo showpunditry("amazingfeature4b") ?> and
<?php echo showpunditry("amazingfeature5") ?> the
<?php echo showpunditry("amazingfeature6") ?> by
<?php echo showpunditry("amazingfeature6adjective") ?>ing the
<?php echo showpunditry("amazingfeature7") ?> with
<?php echo showpunditry("amazingfeature8") ?>s. And it has a stylus. While it
doesn't get good battery life, Apple will have to respond to this threat as
<?php echo showpunditry("analysts") ?> analysts projects
<?php echo $rivalcompany ?> will sell literally dozens of these devices.
</p>
</div></div>
<div class="row"><div class="span9">
<p><small>Made in <span class="flag-icon flag-icon-gb-sct flag-icon-squared" title="Scotland"></span> with <font color="#f00"><i class="fa fa-heart"></i></font> by <a href="https://wpa.io/">neuro</a>.
Thanks to <a href="http://www.macalope.com/">The Macalope</a>'s sharp and pointy antlers
for the <a href="http://www.macworld.com/article/1165804/the_macalope_weekly_new_ipad_highs_new_coverage_lows.html">idea</a>.</small></p>
</div><div class="span3" style="text-align: right">
<a class="btn btn-primary" href="/">Generate a new opinion</a>
</div></div>


</div></div>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-91192-7']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<?php
include "assets/inc/page-stop.inc";
?>
