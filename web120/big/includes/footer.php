
<!--Footer include starts here. Add/cut bottom to add to footer.php-->
<!-- START Footer -->               
<footer>
  <ul>
    <li>&copy; 2020- <?=date('Y')?></li>
    <li>All Rights Reserved</li>
    <li><a href="../contactme.php">Hanna Negash</a></li>
    <li><a href="http://validator.w3.org/check/referer">Valid HTML5</a></li>
    <li><a href="http://jigsaw.w3.org/css-validator/check?uri=referer">Valid CSS</a></li>
   </ul>
</footer> 
        
<!-- END Footer -->  
</div> 
<!-- END WRAPPER -->

<!--  The code is from https://www.tutorialspoint.com/how-to-create-a-responsive-navigation-bar-with-dropdown-in-css-->
    
<script>
            function myFunction() {
                var x = document.getElementById("myTopnav");
                if (x.className === "topnav") {
                    x.className += " responsive";
                } else {
                    x.className = "topnav";
                }
            }
        </script>
</body>
</html>



