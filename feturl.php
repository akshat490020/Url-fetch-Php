<?php
/*
Fetch Url

 * Version: 1.0.0
 * Date: 2013-10-13
 * Onkesh Upadhyay (omi2991@gmail.com)
 * No License
 */

class fetch
{

protected $myvar;

public function fetchURL()
	{
	$this ->myvar='http';
	
	/*if($_SERVER["HTTPS"]=="on")
		{
		$myvar.= "s";
		}
	*/
	$this->myvar .= "://";
	
	if($_SERVER['SERVER_PORT']!= "80")
		{
			$this->myvar .= $_SERVER['SERVER_NAME'].":".$_SERVER['SERVER_PORT'].$_SERVER['REQUEST_URI'];
		}
	else
		{
			$this->myvar .=$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
		
		}
	
	
	}

	public function displayURL()
	{
	echo $this->myvar;
	}

}

$myobject = new fetch();
$myobject -> fetchURL();
$myobject -> displayURL();

?>
