<div id="header" class='row-fluid'>
    <div class="span3 offset1">
        <ul id="left">
            <li><a href="<?php echo $direct?>index.php"><div class="nav_icon" id="nav_home"></div>Home</a></li>
            <li><a href="<?php echo $direct?>learn.php"   <?php if ($thisPage=="learn") echo " id='curPage'"; ?>><div class="nav_icon" id="nav_learn_unix"></div>Learn Unix</a></li>
        </ul>     
    </div>
    <div class="span4">
        <img src='./assets/images/logo_600.png'/>
    </div>
    <div class="span3">
        <ul id="right" style="float: right;">
            <li><a href="<?php echo $direct?>about.php"   <?php if ($thisPage=="about") echo " id='curPage'"; ?>> <div class="nav_icon" id="nav_about_us"></div>About Us</a></li>
            <li><a href="<?php echo $direct?>history.php" <?php if ($thisPage=="history") echo " id='curPage'"; ?>><div class="nav_icon" id="nav_about_unix"></div>About Unix </a></li>       
        </ul> 
    </div>
</div>
