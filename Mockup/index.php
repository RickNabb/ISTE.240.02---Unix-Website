<!DOCTYPE HTML>
<html lang="en">
<head>
	<title>Unix Survival Guide</title>

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link type="text/css" href="./assets/css/bootstrap.min.css" rel="stylesheet" />
    <link type="text/css" href="./assets/css/bootstrap-responsive.min.css" rel="stylesheet" />
    <script type="text/javascript" src="./assets/scripts/jquery-1.9.1.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>
    <link href="./assets/css/site.css" type="text/css" rel="stylesheet"/>
	<link href="./assets/css/header.css" type="text/css" rel="stylesheet"/>

    <script type="text/javascript">
        window.onload = function () {
            /*$("#icons div").hover(function () {
                $("#labels span[id*='" + this.id.substr(0, this.id.indexOf("_")) + "_label']").addClass("icon_visible");
                $("#labels span[id*='" + this.id.substr(0, this.id.indexOf("_")) + "_label']").removeClass("hidden");
            });*/
            $("#console_open").click(function () {
                $("#console").slideToggle();
                
            });
        }
    </script>
	<?php include('include_head.php'); ?>
</head>

<body onload="init();">
    <div id="header" class="row-fluid">
        <div class="centerBlock">
            <img class='img-responsive' src='./assets/images/logo_600.png'/>
        </div>
        <p id="index_text">
            Learn Unix. Master Unix. Use Unix.
        </p>
    </div>
	<?php include('include/include_cmd.php'); ?>
<!--	
	<div class="clear"></div>
    <div id="header" class="row-fluid">
	    <div class="offset1 span5" style="width: 320px;">
            <ul class="nav-pills">
                <li class=""><a href="index.html"><div class="nav_icon" id="nav_home"></div>Home</a></li>
                <li><a href="learn.html"><div class="nav_icon" id="nav_learn_unix"></div>Learn Unix</a></li>        
            </ul>
	    </div>
        <div class="span1"><p class="title">Unix</p></div>
        <div class="span5 offset1" style="width: 340px;">
            <ul class="nav-pills">
                <li><a href="history.html"><div class="nav_icon" id="nav_about_unix"></div>About Unix</a></li>
                <li><a href="about.html"><div class="nav_icon" id="nav_about_us"></div>About Us</a></li>        
            </ul>
	    </div>
    </div>
-->
    <div class="separator" style="margin-bottom: 50px;"></div>

    <div id="index_content" class="row-fluid">
        <div id="icons" class="row">
            <a href="learn.html" >
                <div class="span2 offset2 ">
                    <div class="icon_background green">
                        <div class="icon" id="unix"></div>
                        <p class="index_iconLabel">&nbspUnix</p>
                    </div>
                </div>
            </a>
            
            <a href="history.html">
                <div class="span2 offset1">
                    <div class="icon_background blue">
                        <div class="icon" id="history"></div>
                        <p class="index_iconLabel">History</p>
                    </div>
                </div>
            </a>

            <a href="about.html">
                <div class="span2 offset1">
                    <div class="icon_background purple">
                        <div class="icon" id="about"></div>
                        <p class="index_iconLabel" style="margin-left: -2%;">About</p>
                    </div>
                </div>
            </a>
        </div>
    </div>
	<div id="collapse-div"></div>
    <!--<div id="console_clear"></div>-->

    <!--<div id="console_open" style="cursor:pointer;">Click to pop up the console</div>

    <div id="console">
        <p id="console_history">
            $ cd home<br />
            $ pwd<br />
              &nbsp&nbsp./home/<br />
            $ ls <br />
              &nbsp&nbsp ./ ../ unix &nbsp aboutUnix &nbsp aboutUs 
        </p>
        <span id="console_start">$</span><input type="text" id="console_input"/>
    </div>-->
</body>

</html>
