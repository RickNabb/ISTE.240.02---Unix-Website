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
	<!--links for tutorials-->
		<div class="pull-left well" >
            <h2>Tutorials</h2>
            <ol>
                <li><a href="../tutorials/beginner.html">Beginner</a></li>
                <li><a href="../tutorials/intermediate.html">Intermediate</a></li>
                <li><a href="../tutorials/advanced.html">Advanced</a></li>
                <li><a href="../tutorials/pro.html">Pro</a></li>
            </ol>
            <div class="separator"></div>
            <!--links for quizzes-->
            <h2 style="margin-top: 50px;">Quizzes</h2>
            <ol>
                <li><a href="beginner.html">Beginner</a></li>
                <li><a href="intermediate.html">Intermediate</a></li>
                <li><a href="advanced.html">Advanced</a></li>
                <li><a href="pro.html">Pro</a></li>
            </ol>
        </div>
	
        <div class="span8">
        <!--Advanced unix quiz questions-->
            <h2>Advanced Unix Quiz <small>Test your knowledge</small></h2>


            <h4 class='clear50'>If I wanted to write a file called output.txt from the Unix shell, line-by-line, which command would I use?</h4>
            <div class="radio">
                <label>
                    <input type="radio" name="optionsRadios4" id="Radio1" class="correct" value="option1">
                        cat > output.txt

                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="optionsRadios4" id="Radio2" value="option2">
                        cat < output.txt

                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="optionsRadios4" id="Radio3" value="option3">
                        cat stdin > output.txt
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="optionsRadios4" id="Radio4" value="option4">
                        cat stdin < output.txt
                </label>
            </div>


            <h4 class="clear25">How would you go about writing messages to that friends console window?</h4>
            <div class="radio">
                <label>
                    <input type="radio" name="optionsRadios5" id="Radio1" class="correct" value="option1">
                        write buddy1234 [tty]

                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="optionsRadios5" id="Radio2" value="option2">
                        write buddy1234 [message]

                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="optionsRadios5" id="Radio3" value="option3">
                        sendmsg buddy1234
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="optionsRadios5" id="Radio4" value="option4">
                        msg buddy1234 [message]
                </label>
            </div>




            <h4 class="clear25">Putting these two symbols next to each other in your command will insert the previous command to the current</h4>
            <div class="radio">
                <label>
                    <input type="radio" name="optionsRadios6" id="Radio1" value="option1">
                        ^^

                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="optionsRadios6" id="Radio2" value="option2">
                        ++
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="optionsRadios6" id="Radio3" value="option3">
                        **
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="optionsRadios6" id="Radio4" class="!!" value="option4">
                        !!
                </label>
            </div>


            <h4 class="clear25">What command will tell me which processes are running?</h4>
            <div class="radio">
                <label>
                    <input type="radio" name="optionsRadios7" id="Radio1" value="option1">
                        runprogs

                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="optionsRadios7" id="Radio2" class="correct" value="option2">
                        ps

                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="optionsRadios7" id="Radio3" value="option3">
                        progs
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="optionsRadios7" id="Radio4" value="option4">
                        mbs
                </label>
            </div>


            <h4 class="clear25">Whats one way to print the first line of a text file?</h4>
            <div class="radio">
                <label>
                    <input type="radio" name="optionsRadios8" id="Radio1" class="correct" value="option1">
                        head -1 file.txt

                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="optionsRadios8" id="Radio2" value="option2">
                        hd -first file.txt
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="optionsRadios8" id="Radio3" value="option3">
                        println -1 file.txt
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="optionsRadios8" id="Radio4" value="option4">
                        echo | println -1 file.txt
                </label>
            </div>


            <h4 class="clear25">How do you unzip a tar.gz file?</h4>
            <div class="radio">
                <label>
                    <input type="radio" name="optionsRadios9" id="Radio1" value="option1">
                        tar -jvef file.tar.gz

                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="optionsRadios9" id="Radio2" class="correct" value="option2">
                        tar -zxvf file.tar.gz

                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="optionsRadios9" id="Radio3" value="option3">
                        tar -arb file.tar.gz
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="optionsRadios9" id="Radio4" value="option4">
                        tar -xqpf file.tar.gz
                </label>
            </div>

            <button type="submit" class="clear25 btn btn-primary">
               <p style="margin-bottom: 0;  ">Submit</p>
            </button>

        </div>
    </div>
	<div id="collapse-div"></div>
	<script>
		new sideNav(document.getElementById("sideNav"));
	</script>
</body>

</html>
