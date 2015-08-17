<?php
	namespace JQPhp\Selector\Basics;
	use \JQPhp\Shared\All as Shared;

	class Element 
	{
		protected $elem;
		protected $jq;

		/*----------------CONSTRUCTOR----------------*/
		public function __construct($elem, \JQPhp\jquery $jq)
		{
			$this->elem = $elem;
			$this->jq = $jq;
		}

		public function setElement($value)
		{
			$this->elem = $value;
		}

		private function selector()
		{
			$selector = "$('$this->elem')";
			return $selector;
		}

		public function __call($method, $args)
		{
			if (method_exists($this->jq, $method))
			{
				return $this->jq->$method(self::selector(), $args[0], $args[1], $this);
			}
		}
	}

	class All extends Element
	{
		public function __construct(\JQPhp\jquery $jq)
		{
			parent::__construct("*", $jq);
		}

		private function selector()
		{
			$selector = "$('*')";
			return $selector;
		}

		public function __call($method, $args)
		{
			if (method_exists($this->jq, $method))
			{
				return $this->jq->$method(self::selector(), $args[0], $args[1], $this);
			}
		}
	}


	class Id extends Element
	{
		public function __construct($elem, \JQPhp\jquery $jq)
		{
			parent::__construct($elem, $jq);
		}

		private function selector()
		{
			$selector = "$('#".$this->elem."')";
			return $selector;
		}

		public function __call($method, $args)
		{
			if (method_exists($this->jq, $method))
			{
				return $this->jq->$method(self::selector(), $args[0], $args[1], $this);
			}
		}
	}

	class _Class  extends Element
	{
		public function __construct($elem, \JQPhp\jquery $jq)
		{
			parent::__construct($elem, $jq);
		}

		private function selector()
		{
			$selector = "$('.".$this->elem."')";
			return $selector;
		}

		public function __call($method, $args)
		{
			if (method_exists($this->jq, $method))
			{
				return $this->jq->$method(self::selector(), $args[0], $args[1], $this);
			}
		}
	}

