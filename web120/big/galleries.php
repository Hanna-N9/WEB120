<?php
    include 'includes/header.php';
?>
<main>
<p>To know how to create an HTML gallery is first to download images that you can find from google images, use your photos that you have, or from other sources. But before you do that, first organize your files by having a directory folder including “our stylesheet “styles.css” [that] goes inside the “css” folder, the images…will go inside “images” folder and our HTML code resides in “gallery.html” file.” (Kunal). On any editor that you have, first start with these codes, which I copied from Kunal. You can change the title.</p> 

<img class="sizing" src="images/gallerycodes1.jpeg" alt="Flexbox" >

<p>Use the images that you have saved already. Check these codes that I copied again from Kunal but with his/her image. Just replace the image with yours and use the description that you want to state in figcaption. The purpose of figcaption is that it acts as a caption for images. Figure and figcaption are always together.</p> 

<img class="sizing" src="images/gallerycodes2.jpeg" alt="Flexbox" >

<p>In the CSS, you can adjust the images' size and the width of the figure as you like. Here is the code that I copied from Kunal, and you can choose to have the same measurements as you want.</p> 

<img class="sizing" src="images/gallerycodes3.jpeg" alt="Flexbox" >

<p>To see how to add another image, which is shown on the code that I copied from Kunal. You can replace the photos with your own. On the local site, you will see that the second image is below the first image. As Kunal said, “the next image is displayed below the first, we want it to be beside it, not below it.” This is because "figure element…is a block element. In HTML, block elements by default don’t allow other elements to display beside it.” How to deal with this issue is to add display: inline-block; to selector figure in CSS. Another option is display: flex” style.  So add div tag, which you can see on the code in which the class is called “gallery.”</p> 

<img class="sizing" src="images/gallerycodes4.jpeg" alt="Flexbox" >

<p>On the CSS, replace the old code with the new code that I copied from Kunal. There is margin: auto; to center it and margin:0; for selector, figure is to center it as well. You can choose to add the border if you want, and you can add border for figure as well. The purpose of adding flex-wrap: wrap; is that without it, the images can shrink to shrink images, and to add it will move the fifth image to the new row.
</p> 

<img src="images/gallerycodes5.jpeg" alt="Flexbox" >

<p>You can play around on the CSS like adding background color in figure, and adjust the padding, margin as you like. This is the complete CSS code that Kunal did, which I copied.</p> 

<img class="sizing" src="images/gallerycodes6.jpeg" alt="Flexbox" >

<p>There are different styles to style the gallery. <a href="https://www.cssscript.com/top-10-javascript-css-gallery-lightbox-libraries/">https://www.cssscript.com/top-10-javascript-css-gallery-lightbox-libraries/</a> has ten different methods for the gallery by using javascript and CSS. For example, “baguetteBox.js is a simple, lightweight, mobile-friendly Javascript library for displaying a gallery of images in a fully responsive and customizable lightbox. You can navigate through the gallery images with arrows navigation or swipe gestures on touch devices.” ( jQuery Plugins). If you want to know how it looks, you can check the demo, and if you like something, you can download to copy the codes without needing to change them. The codes are already prepared for you, and you can use your own images as you like. <a href=" https://uicookies.com/css-image-galleries/"> https://uicookies.com/css-image-galleries/</a> is another good source to see different styles as well and simply use their codes as well. Both sources are for this year. The explanation about the methods are “These examples are a great way to get a head start rather than starting entirely from scratch. Elevate your simple portfolios and galleries with epic scroll, transitions, animations, effects, and more! Get inspirations and implement them on your site today to improve the performance radically.” (Samia Rai).
</p>
</main>

<aside>
 <h2>Works Cite</h2>
<ul class="citation">
    
     <li>“10 Best Gallery Lightbox Libraries In Pure JavaScript (2020 Update).” CSS Script, 16 Feb. 2020, <a href="www.cssscript.com/top-10-javascript-css-gallery-lightbox-libraries/.">www.cssscript.com/top-10-javascript-css-gallery-lightbox-libraries/.</a></li>
     
    <li>Kunal. “How to Make a Polaroid Photo Gallery in HTML and CSS.” Medium, Frontend Shortcut, 19 Mar. 2018, <a href="medium.com/frontendshortcut/how-to-make-a-polaroid-photo-gallery-in-html-and-css-d68f5a306c84.">medium.com/frontendshortcut/how-to-make-a-polaroid-photo-gallery-in-html-and-css-d68f5a306c84.</a></li>
    
    <li>Rai, Samia Rai. “30+ Mesmerising CSS Gallery Examples Crafted To Entice More Users 2020.” UiCookies, 20 Mar. 2020, <a href="uicookies.com/css-image-galleries/.">uicookies.com/css-image-galleries/.</a></li>
    
</ul>
</aside>

<?php include "includes/footer.php"?>