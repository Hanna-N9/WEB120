<?php include 'big-config.php'?>
<!doctype html>
<html lang='en'>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title><?=$title?></title>

   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="https://s3.amazonaws.com/menumaker/menumaker.min.js" type="text/javascript"></script>
   <script src="js/script.js"></script>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="css/big.css" />
   <link rel="stylesheet" href="css/form.css" />
   <link rel="stylesheet" href="css/nav.css" />
</head>

<body>
<div id="wrapper">
<header>
  <h1><a href="index.php"><i class="logo fa fa-home"></i>Hanna's BIG Assignment</a></h1>
  <nav id="cssmenu">
  <ul>
    <li><a href="../index.php"><span><i class="fa fa-fw fa-bank"></i> WEB120 Portal</span></a></li>
     <li><a href="index.php"><span><i class="fa fa-fw fa-home"></i>HOME</span></a></li>
     <li><a href="youtube.php"><span>YOUTUBE</span></a></li>
      <li><a href="webcam.php"><span>WEB CAM</span></a></li>

      <li><a href="#"><span><i class="fa fa-fw fa-chevron-down"></i>RESEARCH</span></a>
        <ul>
           <li><a href="responsive.php"><span>Responsive</span></a></li>
           <li><a href="galleries.php"><span>Galleries</span></a></li>
           <li><a href="flexbox.php"><span>Flexbox</span></a></li>
           <li><a href="carts.php"><span>Shopping Carts</span></a></li>
        </ul>
     </li>
      <li><a href="map.php"><span>MAP</span></a></li>
     <li><a href="calendar.php"><span>CALENDAR</span></a></li>
  </ul>

</nav>

</header>
        
 <h2 class="pageID"><?=$PageID?></h2>
    
    

  