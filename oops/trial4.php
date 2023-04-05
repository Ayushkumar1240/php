<?php
class ParentClass
	{
		function __construct()
		{
			print "Parent class constructor.\n";
		}
	}

class ChildClass extends Parentclass
	{
		function __construct()
		{
			parent::__construct();
			print "Child Class constructor";
		}
	}
$obj = new ParentClass();
$obj = new ChildClass();

?>
