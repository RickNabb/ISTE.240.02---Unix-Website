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
            <h2 style="margin-top: 50px;">Quizzes</h2>
            <ol>
            <!--links for quizzes-->
                <li><a href="beginner.html">Beginner</a></li>
                <li><a href="intermediate.html">Intermediate</a></li>
                <li><a href="advanced.html">Advanced</a></li>
                <li><a href="pro.html">Pro</a></li>
            </ol>
        </div>
	
        <div class="span8"> 
        <!--Intermidate quiz questions-->
            <h2>Intermediate Unix Quiz <small>Test your knowledge</small></h2>
            <h4 class="clear50">Which command can change the permissions on a file?</h4>
            <div class="radio">
	            <label>
		            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1">
			            chgper
	            </label>
            </div>
            <div class="radio">
	            <label>
		            <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
			            chaccess
	            </label>
            </div>
            <div class="radio">
	            <label>
		            <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
			            chmod
	            </label>
            </div>
            <div class="radio">
	            <label>
		            <input type="radio" name="optionsRadios" id="optionsRadios4" value="option4">
			            chper
	            </label>
            </div>


            <h4 class="clear25">When changing the permissions on a file, �a�, �u�, �g�, and �o� mean (respectively):</h4>
            <div class="radio">
	            <label>
		            <input type="radio" name="optionsRadios2" id="Radio1" value="option1">
			            actual, uncommon, group, others

	            </label>
            </div>
            <div class="radio">
	            <label>
		            <input type="radio" name="optionsRadios2" id="Radio2" value="option2">
			            action, ungroup, group, opposite

	            </label>
            </div>
            <div class="radio">
	            <label>
		            <input type="radio" name="optionsRadios2" id="Radio3" value="option3">
			            all users, ungroup, group, others
	            </label>
            </div>
            <div class="radio">
	            <label>
		            <input type="radio" name="optionsRadios2" id="Radio4" value="option4">
			            all users, owner, group, others
	            </label>
            </div>


            <h4 class="clear25">The default mask for most Unix systems is 0022.</h4>
            <div class="radio">
	            <label>
		            <input type="radio" name="optionsRadios3" id="Radio5" value="option1">
			            True
	            </label>
            </div>
            <div class="radio">
	            <label>
		            <input type="radio" name="optionsRadios3" id="Radio4" value="option2">
			            False
	            </label>
            </div>
            
            <button type="submit" class="clear25 btn btn-primary">
               <p style="margin-bottom: 0;  ">Submit</p>
            </button>

        </div>
    </div>
</body>

</html>
