<?php
	namespace JQPhp\Selector\Filters;
	use \JQPhp\Shared\All as Shared;

	class Odd
	{
		protected $jq;
		protected $elem;
		public function __construct($elem, \JQPhp\jquery $jq)
		{
			$this->jq = $jq;
			$this->elem = $elem;
		}

		private function selector()
		{
			$selector = "$('$this->elem:odd')";
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

	class Header extends Odd
	{
		public function __construct(\JQPhp\jquery $jq)
		{
			parent::$jq = $jq;
		}

		private function selector()
		{
			$selector = "$(':header')";
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

	class First extends Odd
	{
		public function __construct($elem, \JQPhp\jquery $jq)
		{
			parent::__construct($elem, $jq);
		}

		private function selector()
		{
			$selector = "$('$this->elem:first')";
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

	class First extends Odd
	{
		public function __construct($elem, \JQPhp\jquery $jq)
		{
			parent::__construct($elem, $jq);
		}

		private function selector()
		{
			$selector = "$('$this->elem:first')";
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

	class Last extends Odd
	{
		public function __construct($elem, \JQPhp\jquery $jq)
		{
			parent::__construct($elem, $jq);
		}

		private function selector()
		{
			$selector = "$('$this->elem:last')";
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

	class Even extends Odd
	{
		public function __construct($elem, \JQPhp\jquery $jq)
		{
			parent::__construct($elem, $jq);
		}

		private function selector()
		{
			$selector = "$('$this->elem:even')";
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

	class _Parent extends Odd
	{
		public function __construct($elem, \JQPhp\jquery $jq)
		{
			parent::__construct($elem, $jq);
		}

		private function selector()
		{
			$selector = "$('$this->elem:parent')";
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

	class Empty extends Odd
	{
		public function __construct($elem, \JQPhp\jquery $jq)
		{
			parent::__construct($elem, $jq);
		}

		private function selector()
		{
			$selector = "$('$this->elem:empty')";
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
?>