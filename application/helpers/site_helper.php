<?php
if(!function_exists('url'))
{
	function url(){
	  return sprintf(
	    "%s://%s",
	    isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
	    $_SERVER['SERVER_NAME']
	    //,$_SERVER['REQUEST_URI']
	  );
	}
}

if(!function_exists('viewBuilder'))
{

	function viewBuilder($role){
		$viewString = '<li>
                        <a class="active-menu"  href="/"><i class="fa fa-dashboard fa-3x"></i> Homepage </a>
                    	</li>';
        switch($role){
        	case "Guest":
        		break;
        	case "Worker": //parts
        		$viewString .= '<li><a href="/Inventory"><i class="fa fa-desktop fa-3x"></i>Parts</a></li>';
        		break;
        	case "Supervisor":
        		$viewString .= '<li><a href="/Inventory"><i class="fa fa-desktop fa-3x"></i>Parts</a></li>
        					<li><a  href="/Assembly"><i class="fa fa-qrcode fa-3x"></i>Assembly</a></li>';
        		break;
        	case "Boss":
        		$viewString .= '<li><a href="/Inventory"><i class="fa fa-desktop fa-3x"></i>Parts</a></li>
        					<li><a  href="/Assembly"><i class="fa fa-qrcode fa-3x"></i>Assembly</a></li>
        					<li><a href="/History"><i class="fa fa-book fa-3x"></i>History</a></li>
        					<li><a href="/Manage"><i class="fa fa-cog fa-3x"></i>Manage</a></li>';
        		break;
        	default:
        }
		$viewString .= '<li><a href="/About"><i class="fa fa-info fa-3x"></i> About</a></li>';

		return $viewString;
	}
}