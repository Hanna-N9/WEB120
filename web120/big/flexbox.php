<?php
    include 'includes/header.php';
?>
<main>
<p>Floats and box models may work well for laying out web pages, but for responsive web design, they can be problematic to code for media queries. Hench, flexbox works well to layout, to distribute space, and to align the elements. “A Flexbox layout consists of a flex container that holds flex items. The flex container can be laid out horizontally or vertically. This is referred to as the main axis. The direct children of a flex container are laid out along the main axis. These children can “flex” their sizes, growing to fill unused space in the container, or shrinking to avoid overflowing.” (Vandehey). The image in this website <a href="https://jonibologna.com/flexboxcheatsheet">https://jonibologna.com/flexbox-cheatsheet.</a> explains the structure of flexbox</p><br /> 
       
<p>The way it works is first to declare a flex container. To start is to write out the property and value, display: flex; which is important. After that is to use this code flex-direction, which is to “specifies the direction of the flex items within the flex container.” (Basic Concepts of Flexbox). This allows you to control the direction of flex items. To show flex items in a row as shown on the image is to write out the code, flex-direction: row; or if you want the flex items to be in a column instead, then write this code out, flex-direction: column; You can also add reverse-row and column-reverse to flex-direction as a name state to reverse the flex-items. There are more codes to add, including justify-content that direct the location of flex-items (at start, end, and center), align-items that laid out the flex-items on the cross axis, and so much more. To simply understand how the design look with help, then go to this same link as the first paragraph, <a href="https://jonibologna.com/flexbox-cheatsheet">https://jonibologna.com/flexbox-cheatsheet </a>that explains by showing the images.</p><br /> 
    
    
<p>Overall, you can understand why flex-box can act like a float for the images (flex-items) since it can be faster and easier to use rather than using the regular box models. You can also see how flex-box can be used to develop page layouts for different devices concerning their screen sizes by using the codes which you can find on the link that I stated in the previous paragraph. Modern desktop and mobile browsers support flexbox, but the older version may not support it, so be aware of that.</p> 
</main>   

<aside>
 <h2>Works Cite</h2>
<ul class="citation">
    
     <li>“Basic Concepts of Flexbox.” MDN Web Docs, 2020, <a href="developer.mozilla.org/en-US/docs/Web/CSS/CSS_Flexible_Box_Layout/Basic_Concepts_of_Flexbox.">developer.mozilla.org/en-US/docs/Web/CSS/CSS_Flexible_Box_Layout/Basic_Concepts_of_Flexbox.</a></li>
     
    <li>Bologna, Joni. “Flexbox Cheatsheet Cheatsheet .” – Joni Bologna, 26 Sept. 2014, <a href="jonibologna.com/flexbox-cheatsheet.">jonibologna.com/flexbox-cheatsheet.</a></li>
    
    <li>Vandehey, Scott. “What IS Flexbox?” Space Ninja, Space Ninja, 18 Sept. 2018, <a href="spaceninja.com/2015/08/24/what-is-flexbox/.">spaceninja.com/2015/08/24/what-is-flexbox/.</a></li>
    
</ul>
</aside>

<?php include "includes/footer.php"?>