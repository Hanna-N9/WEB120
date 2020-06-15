<?php include 'final-config.php'?>
<!doctype html>
<html lang="en">
<head>
<title><?=$title?></title>
<meta name="viewport" content="width=device-width" />
<meta name="robots" content="noindex,nofollow" />
<meta charset="utf-8">
<script src="https://use.fontawesome.com/6a71565c22.js"></script>
<link rel="stylesheet" href="css/nav.css" />
<link rel="stylesheet" href="css/final.css" />
<link rel="stylesheet" href="css/form.css" />
    
</head>

<body>
    
<header>
        
<a href="index.php"><img class="logo" src="images/logo.jpeg" alt="Logo"></a>


<nav>
 
<ul class="topnav" id="myTopnav">
    <?=makeLinks($nav1)?> 
    
<!--
   <li><a href="index.php" class="selected">HOME</a></li>
   <li><a href="arts.php">ARTS</a></li>
   <li><a href="culture.php">CULTURE</a></li> 
   <li><a href="food.php">FOOD</a></li>
   <li><a href="sites.php">SITES</a></li>
   <li><a href="contact.php">CONTACT</a></li>
-->
    
    <li class="icon"> <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a> </li>
</ul>

</nav>
</header>

<div id="wrapper">
    
<div id="bcolor">

<div id="container"> 

<h2 class="pageID"><?=$PageID?></h2>
    
    
    
    
    
    