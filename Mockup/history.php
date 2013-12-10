<!DOCTYPE HTML>
<html lang="en">
<head>
	<title>Unix Survival Guide</title>
    <link type="text/css" href="./assets/css/bootstrap.min.css" rel="stylesheet" />
    <link type="text/css" href="./assets/css/bootstrap-responsive.min.css" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>
    <link href="./assets/css/site.css" type="text/css" rel="stylesheet"/>
    <link href="./assets/css/header.css" type="text/css" rel="stylesheet"/>
	<link href="./assets/css/sideNav.css" type="text/css" rel="stylesheet"/>
	<script type="text/javascript" src="./assets/scripts/sideNav.js"></script>
	<?php include('include_head.php'); ?>
</head>

<body onload="init();">
<?php include('include/include_cmd.php'); ?>
<div class="sideNav_trigger" id="sideNav_trigger"></div>
<div class="sideNav" id="sideNav">
	<ul>
		<li class="home_icon icon"><a href="index.php" class="icon_background"></a><p>Home</p></li>            
		<li class="unix_icon icon"><a href="learn.php" class="icon_background"></a><p>Unix</p></li>
		<li class="history_icon icon current"><a href="#" class="icon_background"></a><p>History</p></li>
		<li class="about_icon icon"><a href="about.php" class="icon_background"></a><p>About</p></li>
	</ul>        
</div>
<!--These is the icons that are consistent throughout the site-->
    <!--div id="header" class='row-fluid'>
        <div class="span3 offset1">
            <ul id="left">
                <li><a href="index.php"><div class="nav_icon" id="nav_home"></div>Home</a></li>
                <li><a href="learn.php"><div class="nav_icon" id="nav_learn_unix"></div>Learn Unix</a></li>
            </ul>     
        </div>
        <div class="span4">
            <img src='./assets/images/logo_600.png'/>
        </div>
        <div class="span3">
            <ul id="right" style="float: right;">
                <li><a href="about.php"> <div class="nav_icon" id="nav_about_us"></div>About Us</a></li>
                <li><a href="#" class="curPage"><div class="nav_icon" id="nav_about_unix"></div>About Unix </a></li>       
            </ul> 
        </div>
    </div-->
    <?php 
        $thisPage="history"; 
        $direct="."; 
        include('include/header.php');
    ?>

    <div class="separator clear50"></div>
<!--Information about the history of unix-->
    <div id="content" class="row-fluid clear50">
        <div class="span10 offset1">
            <h2>The History of Unix</h2>
            <h4 class="clear25">Multics</h4>
            <p>
               Initially, the Massachussets Institute of Technology and AT&T Bell Labs were conducting a research initiative to develop and experimental time sharing operating system. This system was called "Multics" and would be used for GE's mainframe. Through its many innovations, Multics also surfaced many problems. Out of frustration from the project not gaining traction and not having enough focus, Bell Labs pulled from the project slowly but surely. The last researchers from Bell Labs to leave the Multics project, Ken Thompson, Dennis Ritchie, M. D. McIlroy, and J. F. Ossanna, decided to being working on their own project that was very similar to Multics but on a much smaller scale. 
            </p>
            <h4 class='clear25'>Unics</h4>
            <p>
               Peter Neumann in the year 1970 first coined the project name as UNiPlexed Information and Computing Service, shortened as Unics. This was intended to be a pun on the previous system they worked on, Multics, which conversely stood for Multiplexed Information and Computer Services. In eventuality, the Unic system began supporting multiple numbers of users simultanously, and thus the name was changed to be Unix.
           </p>
           <h4 class='clear25'>Unix</h4>
           <p>
               In the commercial market, Unix first came into existence early in the year 1972. Ney York Telephone Co. Systems Development Center, via control of Dan Gielan, put it on the market. That same year it was rewritten from the original programming language of Assembly to the C programming langauge. This switch allowed for software to be created that was much more portable since C is a much higher-level language than Assembly. The code only required a small amount of machine-dependent code to be replaced when porting Unix to other computing platforms when compared to the amount of machine-dependent code that was needed when Unix was written in Assembly. Three years later, in 1975, for the first time in its history UNIX was licensed to an outside institution, the University of Illinois at Urbana Champaign, by Greg Chesson and Donald B. Gillies. In the late 1970s and early 1980s, Unix had begun a large influence in academic circles, which eventually lead to a large-scale adoption of Unix by commercial startups. Of these large scale adaptations, the most notable were Sequence, HP-UX, Solaris, and AIX, Xenix. 
            </p>
            <h4 class='clear25'>Impact</h4>
            <p>
                The Unix system had significant impact on other operating systems. It won its success by:
            </p>
            <ul>
                <li>&middot; Direct interaction.</li>
                <li>&middot; Moving away from the total control of businesses like IBM and DEC.</li>
                <li>&middot; AT&T giving the software away at no cost.</li>
                <li>&middot; Running on inexpensive hardware.</li>
                <li>&middot; Being easy to adopt and move to different machines.</li>
            </ul>
        </div>
    </div>
	<div id="collapse-div"></div>
	<script>
		new sideNav(document.getElementById("sideNav"));
	</script>
</body>

</html>
