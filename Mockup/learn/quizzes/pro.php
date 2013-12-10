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
            <h2>Pro Unix Quiz <small>Test your knowledge</small></h2>

            <h4 class="clear50">What series of commands would search the entire file directory underneath and including the current folder for files with the extension *.txt, print them to a file called ‘allTextFiles.dat’, and then mail the contents of that file to the email address ‘test@example.com’ with a subject of “All Text Files”?</h4>
            <div class="radio">
                <label>
                    <input type="radio" name="optionsRadios" id="Radio1" value="option1">
                       ls -R *.txt > allTextFiles.dat | mail -s ‘All Text Files’ test@example.com < allTestFiles.dat

                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="optionsRadios" id="Radio2" value="option2">
                        ls -R | grep .txt > allTextFiles.dat; mail -c ‘All Text Files’ test@example.com > allTestFiles.dat

                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="optionsRadios" id="Radio3" value="option3">
                        ls -R | grep .txt < allTextFiles.dat | mail -s ‘All Text Files’ test@example.com > allTestFiles.dat
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="optionsRadios" id="Radio4" class="correct" value="option4">
                        ls -R | grep .txt > allTextFiles.dat; mail -s ‘All Text Files’ test@example.com < allTestFiles.dat
                </label>
            </div>



            <h4 class="clear25">What is the proper command to set the command ‘doSomething’ to list the *.txt files of a directory and all subsequent subdirectories?
            </h4>
            <div class="radio">
                <label>
                    <input type="radio" name="optionsRadios2" id="Radio1" value="option1">
                        set doSomething = ’dir -a -.txt’

                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="optionsRadios2" id="Radio2" class="correct" value="option2">
                        alias doSomething = ‘ls -R | grep .txt’

                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="optionsRadios2" id="Radio3" value="option3">
                        set doSomething = ‘ls -R *.txt’
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="optionsRadios2" id="Radio4" value="option4">
                        alias doSomething = ‘dir -a | grep .txt’
                </label>
            </div>


            <h4 class="clear25">How would I see if my friend, whose username is “buddy1234” is logged into the same Unix system I am by using a search command?</h4>
            <div class="radio">
                <label>
                    <input type="radio" name="optionsRadios3" id="Radio1" value="option1">
                        ls -user ‘buddy1234’
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="optionsRadios3" id="Radio2" class="correct" value="option2">
                        w | grep buddy1234

                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="optionsRadios3" id="Radio3" value="option3">
                        u | match buddy1234
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="optionsRadios3" id="Radio4" value="option4">
                        net -user ‘buddy1234’
                </label>
            </div>
            <button type="submit" class="clear25 btn btn-primary">
               <p style="margin-bottom: 0;  ">Submit</p>
            </button>
        </div>
    </div>
</body>

</html>