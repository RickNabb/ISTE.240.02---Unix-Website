<!DOCTYPE HTML>
<html lang="en">
<head>
    <title>Unix Survival Guide</title>
     <link type="text/css" href="../../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link type="text/css" href="../../assets/css/bootstrap-responsive.min.css" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>
    <link href="../../assets/css/site.css" type="text/css" rel="stylesheet"/>
    <link href="../../assets/css/header.css" type="text/css" rel="stylesheet"/>
</head>

<body>
    <?php 
        $thisPage="learn"; 
        $direct="../"; 
        include('include/header.php');
    ?>
    <div class="separator"></div>
    

    <div id="content" class="row-fluid span10">
    
        <div class="pull-left well" >
            <h2>Tutorials</h2>
            <ol>
                <li><a href="../tutorials/beginner.html">Beginner</a></li>
                <li><a href="../tutorials/intermediate.html">Intermediate</a></li>
                <li><a href="../tutorials/advanced.html">Advanced</a></li>
                <li><a href="../tutorials/pro.html">Pro</a></li>
            </ol>
            <div class="separator"></div>
            <h2 style="margin-top: 50px;">Quizzes</h2>
            <ol>
                <li><a href="beginner.html">Beginner</a></li>
                <li><a href="intermediate.html">Intermediate</a></li>
                <li><a href="advanced.html">Advanced</a></li>
                <li><a href="pro.html">Pro</a></li>
            </ol>
        </div>
	
        <div class="span8">
            <h2>Beginner Unix Quiz <small>Test your knowledge</small></h2>
            
            <h4 class='clear50'>What the command displays information about your current directory?</h4>
            <div class="radio">
	            <label>
		            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1">
			            cp
	            </label>
            </div>
            <div class="radio">
	            <label>
		            <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
			            /
	            </label>
            </div>
            <div class="radio">
	            <label>
		            <input type="radio" name="optionsRadios" id="optionsRadios3" class="correct" value="option3">
			            ls
	            </label>
            </div>
            <div class="radio">
	            <label>
		            <input type="radio" name="optionsRadios" id="optionsRadios4" value="option4">
			            pwd
	            </label>
            </div>


            <h4 class="clear25">What is the command to change to a different working directory?</h4>
            <div class="radio">
	            <label>
		            <input type="radio" name="optionsRadios2" id="Radio1" value="option1">
			             / directory

	            </label>
            </div>
            <div class="radio">
	            <label>
		            <input type="radio" name="optionsRadios2" id="Radio2" value="option2">
			            mkdir directory

	            </label>
            </div>
            <div class="radio">
	            <label>
		            <input type="radio" name="optionsRadios2" id="Radio3" value="option3">
			            pwd directory
	            </label>
            </div>
            <div class="radio">
	            <label>
		            <input type="radio" name="optionsRadios2" id="Radio4" class="correct"value="option4">
			            cd directory
	            </label>
            </div>


            <h4 class="clear25">What is the command to make a new directory?</h4>
            <div class="radio">
                <label>
                    <input type="radio" name="optionsRadios3" id="Radio1" class="correct"value="option1">
                         mkdir directory

                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="optionsRadios3" id="Radio2" value="option2">
                        mv directory

                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="optionsRadios3" id="Radio3" value="option3">
                        cd directory
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="optionsRadios3" id="Radio4" value="option4">
                        pwd
                </label>
            </div>


            <h4 class="clear25">The command to display the path to the current directory is?</h4>
            <div class="radio">
                <label>
                    <input type="radio" name="optionsRadios4" id="Radio1" value="option1">
                         mkdir directory

                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="optionsRadios4" id="Radio2" class="correct"value="option2">
                        pwd

                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="optionsRadios4" id="Radio3" value="option3">
                        cd
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="optionsRadios4" id="Radio4" class="correct"value="option4">
                        mv directory
                </label>
            </div>

            
            <button type="submit" class="clear25 btn btn-primary">
               <p style="margin-bottom: 0;  ">Submit</p>
            </button>

        </div>
    </div>
</body>

</html>