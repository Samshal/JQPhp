<?php 
	namespace JQPhp;
	require_once("shared.php");
	require_once("JQPhp.Selector.Attributes.php");
	require_once("JQPhp.Selector.Basics.php");
	require_once("JQPhp.Selector.Filters.php");
	
	use JQPhp\Shared\All as Shared;

	class Enable extends Shared
	{
		public function __construct($script)
		{
			parent::JQSrc($script);
		}
	}	

	class Alert extends Shared
	{
		public function __construct($message)
		{
			parent::JQEcho("alert('".$message."')");
		}
	}

	class jquery extends Shared
	{
		
		public function __construct()
		{
		}
		/*-----------------------------------------------------------------------------------------------------------
		 |	@METHOD: 		css
		 |	@VISIBILITY: 	Public
		 |	@DESCRIPTION:	Manipulate the css properties of the selected elements defined by the constructor
		 |	@PARAMETERS:	Accepts two parameters:
		 |					Param 1) The CSS Property to set or alter
		 |					Param 2) A value for the css property that's been altered or set.
		 *------------------------------------------------------------------------------------------------------------*/
		public function css($selector, $feature, $value)
		{
			$string = $selector.".css('$feature', '$value')";
			parent::JQEcho($string);
		}
	}


?>