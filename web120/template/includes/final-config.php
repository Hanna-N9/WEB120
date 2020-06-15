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
        $title = "ERITREAN Info";
        $PageID = 'Welcome to Learning About Eritrea';
    break;
    
    case 'arts.php':
        $title = "ERITREAN Arts";
        $PageID = 'Eritrean Arts';
    break; 

    case 'culture.php':
    $title = "ERITREAN Culture";
    $PageID = 'Eritrean Culture';
    break;
           
    case 'food.php':
    $title = "ERITREAN Food";
    $PageID = 'Eritrean Food';
    break; 
             
    case 'sites.php':
    $title = "ERITREAN Sites";
    $PageID = 'Places of Eritrea';
    break;  
            
    case 'contact.php':
    $title = "Contact";
    $PageID = 'Contact';
    break;
      
    default:
        $title = THIS_PAGE;
        $PageID = 'Welcome to Learning About Eritrea';
    
}


//place URL & labels in the array here for navigation:
$nav1['index.php'] = "HOME";
$nav1['arts.php'] = "ARTS";
$nav1['culture.php'] = "CULTURE";
$nav1['food.php'] = "FOOD";
$nav1['sites.php'] = "SITES";
$nav1['contact.php'] = "CONTACT";


/*
here we're creating a function to generate
links and keep the highlight on the current page

   <li><a href="index.php" class="selected">HOME</a></li>
   <li><a href="arts.php">ARTS</a></li>
   <li><a href="culture.php">CULTURE</a></li> 
   <li><a href="food.php">FOOD</a></li>
   <li><a href="sites.php">SITES</a></li>
   <li><a href="contact.php">CONTACT</a></li>

*/

/*
makeLinks function will create our dynamic nav when called.
Call like this:
echo makeLinks($nav1); #in which $nav1 is an associative array of links
*/

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




