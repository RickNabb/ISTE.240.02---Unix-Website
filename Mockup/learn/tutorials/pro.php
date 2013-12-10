<!DOCTYPE HTML>
<html lang="en">
<head>
    <title>Unix Survival Guide</title>
     <link type="text/css" href="../../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link type="text/css" href="../../assets/css/bootstrap-responsive.min.css" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>
    <link href="../../assets/css/site.css" type="text/css" rel="stylesheet"/>
    <link href="../../assets/css/header.css" type="text/css" rel="stylesheet"/>
	<link href="../../assets/css/sideNav.css" type="text/css" rel="stylesheet"/>
	<script type="text/javascript" src="../../assets/scripts/sideNav.js"></script>
	<?php include('include_head.php'); ?>
</head>

<body onload="init();">
	<?php include('include/include_cmd.php'); ?>
    <?php 
        $thisPage="learn"; 
        $direct="../"; 
        include('include/header.php');
    ?>
	<?php include('include/sideNav.php'); ?>
    <div class="separator clear50"></div>
	
    <div id="content" class="row-fluid span10 clear50">
    
        <div class="pull-left well" >
            <h2>Tutorials</h2>
            <ol>
                <li><a href="beginner.html">Beginner</a></li>
                <li><a href="intermediate.html">Intermediate</a></li>
                <li><a href="advanced.html">Advanced</a></li>
                <li><a href="pro.html">Pro</a></li>

            </ol>
            <div class="separator"></div>
            <h2 style="margin-top: 50px;">Quizzes</h2>
            <ol>
                 <li><a href="../quizzes/beginner.html">Beginner</a></li>
                <li><a href="../quizzes/intermediate.html">Intermediate</a></li>
                <li><a href="../quizzes/advanced.html">Advanced</a></li>
                <li><a href="../quizzes/pro.html">Pro</a></li>
            </ol>
        </div>
	
        <div class="span8">
            <h2>Pro Unix User Guide <small>For those who have too much time on their hands</small></h2>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Command</th>
                            <th>Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>ls</td>
                            <td>Lorem ipsum</td>
                        </tr>
                        <tr>
                            <td>ls</td>
                            <td>Lorem ipsum</td>
                        </tr>
                        <tr>
                            <td>ls</td>
                            <td>Lorem ipsum</td>
                        </tr>
                        <tr>
                            <td>ls</td>
                            <td>Lorem ipsum</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="row-fluid">
                <p class="lh-2" style="margin-top: 25px;">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. In facilisis justo eu velit condimentum, quis fermentum tortor posuere. Vestibulum porttitor adipiscing pharetra. Mauris ut suscipit libero. Fusce varius volutpat erat, vitae porttitor felis luctus mattis. Donec facilisis luctus sagittis. Praesent elementum, massa non aliquam euismod, felis sapien rhoncus est, eget lobortis turpis lacus vel nunc. Praesent massa purus, mollis ut faucibus a, facilisis at metus. Morbi id imperdiet nisi, sit amet faucibus ligula. Sed nulla orci, hendrerit eget hendrerit in, facilisis a nisi. Fusce condimentum vulputate hendrerit. Proin tristique, tortor at interdum venenatis, nisl justo porta magna, id tristique nunc mi nec turpis. Suspendisse aliquet, lectus in porttitor dapibus, nisi eros iaculis nibh, ac ornare libero mauris at metus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus a nisl magna.
                </p>               
            </div>
            <div class="well" style="margin-top: 50px;">
                <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. In facilisis justo eu velit condimentum, quis fermentum tortor posuere. Vestibulum porttitor adipiscing pharetra. Mauris ut suscipit libero. Fusce varius volutpat erat, vitae porttitor felis luctus mattis. Donec facilisis luctus sagittis. Praesent elementum, massa non aliquam euismod, felis sapien rhoncus est, eget lobortis turpis lacus vel nunc.
                </p>                
                <code>$ This is a test</code><br />
                <code>$ ../This is a test</code><br />
                <code>$ ls -a This is a test</code><br />
            </div>
            <div class="row-fluid">
                <p class="lh-2" style="margin-top: 25px;">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. In facilisis justo eu velit condimentum, quis fermentum tortor posuere. Vestibulum porttitor adipiscing pharetra. Mauris ut suscipit libero. Fusce varius volutpat erat, vitae porttitor felis luctus mattis. Donec facilisis luctus sagittis. Praesent elementum, massa non aliquam euismod, felis sapien rhoncus est, eget lobortis turpis lacus vel nunc. Praesent massa purus, mollis ut faucibus a, facilisis at metus. Morbi id imperdiet nisi, sit amet faucibus ligula. Sed nulla orci, hendrerit eget hendrerit in, facilisis a nisi. Fusce condimentum vulputate hendrerit. Proin tristique, tortor at interdum venenatis, nisl justo porta magna, id tristique nunc mi nec turpis. Suspendisse aliquet, lectus in porttitor dapibus, nisi eros iaculis nibh, ac ornare libero mauris at metus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus a nisl magna.
                </p>               
            </div>            
        </div>
    </div>
    <div class="row-fluid">
        <div class="clear100"></div>
    </div>
	<div id="collapse-div"></div>
	<script>
		new sideNav(document.getElementById("sideNav"));
	</script>
</body>

</html>