<?php
/*portal-config.php
Used to store all of our WEB120 configuration information*/

//prevents data from being sent early
ob_start();

//this helps us avoid PHP date errors:

date_default_timezone_set('America/Los_Angeles');

//echo basename($_SERVER['PHP_SELF']);

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//echo THIS_PAGE;

//die;

switch(THIS_PAGE){

    case 'index.php':
        $title = "BIG: Homepage";
        $logo = 'logo fa fa-home';
        $PageID = 'Client Questionnaire';
    break;
    
    case 'calendar.php':
        $title = "BIG: Calendar";
        $logo = 'fa fa-fw fa-calendar';
        $PageID = 'Google Calendar';
    break;
        
    case 'map.php':
    $title = "BIG: Map";
    $logo = 'fa fa-fw fa-map-o';
    $PageID = 'Google Map';
    break;
        
    case 'research.php':
    $title = "research";
    $logo = "fas fa-book";
    $PageID = 'Research';
    break;

    case 'youtube.php':
    $title = "Video";
    $logo = "fa fa-fw fa-youtube-square";
    $PageID = 'Youtube (Introduction to Web Accessibility and W3C Standards)';
    break;

    case 'webcam.php':
    $title = "webcam";
    $logo = "fa fa-fw fa-eye";
    $PageID = 'Live Web Cameras';
    break;
  
     case 'responsive.php':
    $title = "Responsive Design vs. Mobile Apps";
    $logo = "fa fa-fw fa-html5";
    $PageID = 'Responsive Design vs. Mobile Apps';
    break;
        
     case 'galleries.php':
    $title = "Galleries";
    $logo = "fa fa-fw fa-camera-retro";
    $PageID = 'Galleries';
    break;
        
     case 'flexbox.php':
    $title = "Flexbox";
    $logo = "fa fa-fw fa-cube";
    $PageID = 'Flexbox';
    break;
                
     case 'carts.php':
    $title = "Shopping Carts";
    $logo = "fa fa-fw fa-shopping-basket";
    $PageID = 'Shopping Carts';
    break;
    

    default:
        $title = THIS_PAGE;
        $logo = 'fa-home';
        $PageID = 'Welcome';
        
   }


//place URL & labels in the array here for navigation:
$nav1['../index.php'] = "WEB120";
$nav1['index.php'] = "HOME";
$nav1['webcam.php'] = "WEB CAM";
$nav1['calendar.php'] = "CALENDAR";
$nav1['map.php'] = "MAP";
$nav1['youtube.php'] = "ACCESSIBILITY";

function makeLinks($linkArray)
    
{
    $myReturn = '';

    foreach($linkArray as $url => $text)
    {
        if($url == THIS_PAGE)
        {//selected page - add class reference
	    	$myReturn .= '<li><a class="selected" href="' . $url . '">' . $text . '</a></li>' . PHP_EOL;
    	}else{
	    	$myReturn .= '<li><a href="' . $url . '">' . $text . '</a></li>'  . PHP_EOL;
    	}    
    }
      
    return $myReturn;    
}
