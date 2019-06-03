<?php 
    include './header.php';
?> 
<div class="banner-div">
    <!-- dynamic should be loaded from WP -->
    <img src="./img/j-hook-1900.png" class="desktop-img"alt="">
    <img src="./img/j-hook-600.png"class="mobile-img" alt="">
</div>
<div id="portfolio-title">
    <h2>Portfolio</h2>
</div>
<div id="portfolio-menu">
    <div class="page-mobile-nav" id="mobile-nav"> 
        <div id="mobile-hamburger" onclick="burger('mobile-hamburger')">
            <h3>Select Categories</h3>
            <i class="fas fa-bars"></i>
        </div>
        <div class="mobile-menu-open" id="page-mobile-menu-open">
            <ul>
                <a href="#"><li>All Categories</li></a>
                <a href="./"><li>Stream and Wetland Restoration</li></a>
                <a href="#"><li>Mitigation</li></a>
                <a href="#"><li>Stream and Wetland Delineations</li></a>
                <a href="#"><li>Environmental Permitting</li></a>
                <a href="#"><li>Innovative Stormwater Solutions</li></a>
                <a href="#"><li>Environmental Site Assessments</li></a>
                <li onclick="burger('mobile-hamburger')">-Close-</li>
            </ul>
        </div>
    </div>
        <div class="portfolio-desktop-nav">
            <div class="portfolio-desktop-menu">
                <ul>
                    <a href="#"><li>-All Categories-</li></a>
                    <a href="./"><li>-Stream and Wetland Restoration-</li></a>
                    <a href="#"><li>-Mitigation</li></a>
                    <a href="#"><li>-Stream and Wetland Delineations-</li></a>
                    <a href="#"><li>-Environmental Permitting-</li></a>
                    <a href="#"><li>-Innovative Stormwater Solutions-</li></a>
                    <a href="#"><li>-Environmental Site Assessments-</li></a>
                </ul>
            </div>
        </div>

</div>

<section id="portfolio-thumb">
    <div id="restoration-thumbs" class="portfolio-thumb-container card-left">
        <h2>Stream and wetland Restoration</h2>
        <div class="portfolio-thumb-item">
            <h3>Title</h3>
            <img src="./img/portfolio-temp/1-600.png" alt="">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis, deserunt error aliquid dolorem perferendis voluptate?</p>
        </div>
    </div>
   
</section>

<?php
    include './footer.php';

?>