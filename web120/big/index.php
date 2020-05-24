<?php include "includes/header.php";?>     
<main>
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
        $website = "Welcome";  //place NAME of your client's website

//        echo loadContact('simple.php');#demonstrates a simple contact form
        echo loadContact('multiple.php');#demonstrates multiple form elements

	?>
</main>

<aside>
 <h3>Resources of Website Design Cycle: </h3>    
    
    <p><a href="https://www.techuz.com/blog/web-development-process-a-guide-to-complete-web-development-life-cycle/">Web Development Process – A Guide to Complete Web Development Life Cycle</a></p>
    
     <p><a href="https://loudprogrammer.net/become-efficient-5-step-web-development-life-cycle/">How to Become Efficient With a 5 Step Web Development Life Cycle</a></p>
    
     <p><a href="https://the-loupe.com/blog/7-phases-of-web-design-and-development-life-cycle">7 Phases of Web Design And Development Life Cycle</a></p>
</aside>
    
<?php
    include "includes/footer.php";
?>
