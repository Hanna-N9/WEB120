<?php include "includes/header.php";?>    
        
	<?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */

        include 'includes/contact_include.php'; #site keys & code here
    
        $toAddress = "hanna.negash@seattlecentral.edu";  //place your/your client's email address here
        $toName = "Hanna"; //place your client's name here
        $website = "Contact";  //place NAME of your client's website

        echo loadContact('simple.php');#demonstrates a simple contact form
        //echo loadContact('multiple.php');#demonstrates multiple form elements

	?>
    
<?php
    include 'includes/footer.php';
?>
