<!DOCTYPE HTML>
<html lang="en">
<head>
	<title>Unix Survival Guide</title>
    <link type="text/css" href="./assets/css/bootstrap.min.css" rel="stylesheet" />
    <link type="text/css" href="./assets/css/bootstrap-responsive.min.css" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>
    <link href="./assets/css/site.css" type="text/css" rel="stylesheet"/>
    <link href="./assets/css/header.css" type="text/css" rel="stylesheet"/>

</head>

<body>

    <!--div id="header" class='row-fluid'>
        <div class="span3 offset1">
            <ul id="left">
                <li><a href="index.html"><div class="nav_icon" id="nav_home"></div>Home</a></li>
                <li><a href="learn.html"><div class="nav_icon" id="nav_learn_unix"></div>Learn Unix</a></li>
            </ul>     
        </div>
        <div class="span4">
            <img src='./assets/images/logo_600.png'/>
        </div>
        <div class="span3">
            <ul id="right" style="float: right;">
                <li><a href="about.html"> <div class="nav_icon" id="nav_about_us"></div>About Us</a></li>
                <li><a href="#" class="curPage"><div class="nav_icon" id="nav_about_unix"></div>About Unix </a></li>       
            </ul> 
        </div>
    </div-->
    <?php 
        $thisPage="about"; 
        $direct="."; 
        include('include/header.php');
    ?>

    <div class="separator"></div>

    <div id="content" class="row-fluid">
        <div class="span4 offset2">
            <h3>Nicholas Rabb</h3>
            <img src='assets/images/nick.jpg'/>
            <p>
                3rd year Information Technoloy major, from Fairport, New York.
            </p>
            <h3>Thomas Boyle</h3>
            <img src='assets/images/tj.jpg'/>
            <p>
                3rd year Information Technology major, from northern New Jersey.
            </p>
        </div>
        <div class="span4">
            <h3>Ben Valentino</h3>
            <img src='assets/images/ben.jpg'/>
            <p>
                3rd year Information Technology major, from Torrance, California.
            </p>
            <h3>Ryan Montgomery</h3>
            <img src='assets/images/ryan.jpg'/>
            <p>
                3rd year Information Technology major, from Manhasset, New York.
            </p>
        </div>
        <div class='span4 offset4'>
            <h3>Jessica Kellner</h3>
            <img src='assets/images/jess.jpg'/>
            <p>
               3rd year Information Technology major, from Honeoye Falls, New York.
            </p>
        </div>
    </div>
</body>

</html>
