<?php
	require_once("JQPhp.php");	
	use JQPhp\Selector\Attributes as Attributes;
	use JQPhp\Selector\Basics as Basics;
	require_once("html.html");	
?>
<?php
/*	echo "<a id='vi' href='#'>Hi, I'm Samuel</a><br/>";
	echo "<a id='vim' href='#'>Hi, I'm Samuel</a><br/>";
	echo "<p class='small'>I am a very small text</p>";*/
	$enable = new JQPhp\Enable("jquery.js");
	$prefix = new Attributes\Contains("a", "hreflang", "en" new JQPhp\jquery());
	$prefix->css("border", "3px dotted green");

?>