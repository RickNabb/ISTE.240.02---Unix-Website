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
        $thisPage="learn"; 
        include('include/header.php');
    ?>

    <div class="separator"></div>
	
    <div id="content" class="row-fluid span10">
	
		<div class="pull-left well" >
			<h2>Tutorials</h2>
			<ol>
				<li><a href="learn/tutorials/beginner.html">Beginner</a></li>
				<li><a href="learn/tutorials/intermediate.html">Intermediate</a></li>
				<li><a href="learn/tutorials/advanced.html">Advanced</a></li>
				<li><a href="learn/tutorials/pro.html">Pro</a></li>
			</ol>
			<div class="separator"></div>
			<h2 style="margin-top: 50px;">Quizzes</h2>
			<ol>
				<li><a href="learn/quizzes/beginner.html">Beginner</a></li>
				<li><a href="learn/quizzes/intermediate.html">Intermediate</a></li>
				<li><a href="learn/quizzes/advanced.html">Advanced</a></li>
				<li><a href="learn/quizzes/pro.html">Pro</a></li>
			</ol>
		</div>
	
        <div class="span8">
            <h2>Learn Unix</h2>
            <p>
                If you would like to learn more about Unix the following tutorials and quizzes have been split up into four different sections to help you figure out where you should start. Just simply click on a tutorial and once you feel you have grasped it, try to quiz yourself!
            <p>
                The following tutorials teach you about different commands you can use that will help you move around your directory, make a directory, access/change permisions, tell you how to know what's currently running, and so much more! 
            </p>
            <p>
                By the time you have completed all of the tutorials and aced all of the quizzes, you will be able to know and use unix like a pro!
            </p>
        </div>
    </div>
</body>

</html>
