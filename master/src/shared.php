<?php
	namespace JQPhp\Shared;

	class All
	{
		protected $scriptOpen = "<script>";
		protected $scriptClose = "</script>";
		protected function __construct()
		{
		}

		protected function JQEcho($string, $return = false)
		{
			if ($return)
			{
				echo ($this->scriptOpen.$string.$this->scriptClose);
			}
			else
			{
				echo ($this->scriptOpen.$string.$this->scriptClose);
			}
		}

		protected function JQSrc($location)
		{
			echo ("<script src='".$location."'></script>");
		}
	}