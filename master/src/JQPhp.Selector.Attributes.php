<?php
	namespace JQPhp\Selector\Attributes;
	use \JQPhp\Shared\All as Shared;


	/*-----------------------------------------------------------------------------------------------------------
	 |	@CLASS: 		JQPhp\Selector\Attributes\Prefix
	 |	@INHERITS: 		JQPhp\Shared\All
	 |	@DESCRIPTION:	Contains method that impersonates the
	 |					prefix element selector object in jquery.
	 |	@CONSTRUCTOR:	Accepts three methods:
	 |					Param 1) The Element To Select (a, p, h3, div)
	 |					Param 2) Specifies that the method should select
	 |							 only elements (param 1) that contains
	 |							 a particular attribute. For Instance:
	 |							 (href, data-val, id, class) and so on
	 |					Param 3) Value of the specified attribute (Param 2)
	 |	@INSTANTIATION:	$prefix-class = new Prefix("a", "href", "http://samshal.users.phpclasses.org");
	 |	@EXPLANATION:	The Example instantiation of the prefix class above simply selects all anchor
	 |					(link, a) elements where their href attributes is equal to http://samshal.users.phpclasses.org
	 |
	 *-----------------------------------------------------------------------------------------------------------------*/
	
	class Prefix
	{
		protected $attr;
		protected $val;
		protected $elem;
		protected $jq;

		/*----------------CONSTRUCTOR----------------*/
		public function __construct($elem, $attr, $val, \JQPhp\jquery $jq)
		{
			$this->attr = $attr;
			$this->val = $val;
			$this->elem = $elem;
			$this->jq = $jq;
		}

		/*-----------------------------------------------------------------------------------------------------------
		 |	@METHOD: 		setElement
		 |	@VISIBILITY: 	Public
		 |	@DESCRIPTION:	Changes the current $elem variable in memory
		 |	@PARAMETERS:	Accepts just one parameter:
		 |					Param 1) The value to replace the $elem variable provided by the constructor
		 *------------------------------------------------------------------------------------------------------------*/
		public function setElement($value)
		{
			$this->elem = $value;
		}

		/*-----------------------------------------------------------------------------------------------------------
		 |	@METHOD: 		setValue
		 |	@VISIBILITY: 	Public
		 |	@DESCRIPTION:	Changes the current $val variable in memory
		 |	@PARAMETERS:	Accepts just one parameter:
		 |					Param 1) The value to replace the $val variable provided by the constructor
		 *------------------------------------------------------------------------------------------------------------*/
		public function setValue($value)
		{
			$this->val = $value;
		}

		/*-----------------------------------------------------------------------------------------------------------
		 |	@METHOD: 		setAttribute
		 |	@VISIBILITY: 	Public
		 |	@DESCRIPTION:	Changes the current $attr variable in memory
		 |	@PARAMETERS:	Accepts just one parameter:
		 |					Param 1) The value to replace the $attr variable provided by the constructor
		 *------------------------------------------------------------------------------------------------------------*/
		public function setAttribute($value)
		{
			$this->attr = $value;
		}

		private function selector()
		{
			$selector = "$(\"$this->elem[$this->attr|='$this->val']\")";
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


	class StartsWith extends Prefix
	{
		public function __construct($elem, $attr, $val, \JQPhp\jquery $jq)
		{
			parent::__construct($elem, $attr, $val, $jq);
		}

		private function selector()
		{
			$selector = "$(\"$this->elem[$this->attr^='$this->val']\")";
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

	class Has extends Prefix
	{
		public function __construct($elem, $attr, \JQPhp\jquery $jq)
		{
			parent::__construct($elem, $attr, $val = null, $jq);
		}

		private function selector()
		{
			$selector = "$(\"$this->elem[$this->attr]\")";
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

	class Contains extends Prefix
	{
		public function __construct($elem, $attr, $val, \JQPhp\jquery $jq)
		{
			parent::__construct($elem, $attr, $val, $jq);
		}

		private function selector()
		{
			$selector = "$(\"$this->elem[$this->attr*='$this->val']\")";
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

	class Equals extends Prefix
	{
		public function __construct($elem, $attr, $val, \JQPhp\jquery $jq)
		{
			parent::__construct($elem, $attr, $val, $jq);
		}

		private function selector()
		{
			$selector = "$(\"$this->elem[$this->attr='$this->val']\")";
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

	class EndsWith extends Prefix
	{
		public function __construct($elem, $attr, $val, \JQPhp\jquery $jq)
		{
			parent::__construct($elem, $attr, $val, $jq);
		}

		private function selector()
		{
			$selector = "$(\"$this->elem[$this->attr$='$this->val']\")";
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

	class NotEqual extends Prefix
	{
		public function __construct($elem, $attr, $val, \JQPhp\jquery $jq)
		{
			parent::__construct($elem, $attr, $val, $jq);
		}

		private function selector()
		{
			$selector = "$(\"$this->elem[$this->attr!='$this->val']\")";
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