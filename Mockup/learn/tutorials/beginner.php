<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="UTF-8">
	
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
            <h2>Beginner Unix User Guide <small>For those with little experience</small></h2>
            <!-- Command Summary Table -->
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
                            <td>Display information about current directory</td>
                        </tr>
                        <tr>
                            <td>cd</td>
                            <td>Navigate to different directory</td>
                        </tr>
                        <tr>
                            <td>pwd</td>
                            <td>Display path from home directory to current directory</td>
                        </tr>
                        <tr>
                            <td>mkdir</td>
                            <td>Make a new file in current directory</td>
                        </tr>
                    </tbody>
                </table>
            </div>
			<!-- Main tutorial content -->
            <div class="row-fluid">
				<!-- Intro, ls command -->
                <div class="lh-2" style="margin-top: 25px;">
					<h2>Welcome to UNIX!</h2>
					<p>
					Time to dive right in!
					</p>
					
					<p>
					After booting up a computer running Unix, go to the applications 
					menu and click terminal. You should see a $ and a blinking 
					rectangle next to it. This is where your commands are typed. 
					When you log in, you're automatically put in your home directory. 
					To display information about your current directory, type 'ls' 
					and press enter. The contents of your home directory, non-hidden 
					files and directories, will be printed on the line(s) below '$ ls'.
					It is important to remember that ls by itself only shows 
					NON-hidden files and folders (Those without "." as the first 
					character in their name). To display all files and folders, 
					type 'ls -a'. The 'ls -1' can also be used to display 1 
					result per line.
					</p>
				</div>               
            </div>
			<!-- ls example -->
            <div class="well" style="margin-top: 50px;">
                <p>
					Example of <b>ls</b> command with output below
				</p>                
                <code>$ ls -1</code><br />
				<code>apple.img</code><br />
                <code>Folder1</code><br />
				<code>Folder2</code><br />
                <code>someFile.txt</code><br />
				<code>stuff</code><br />
            </div>
			<!-- cd command -->
            <div class="row-fluid">
                <div class="lh-2" style="margin-top: 25px;">
					<h2>The Basics</h2>
					<p>
					Now that you have an idea of where you are, you can move to 
					another directory by type ' cd directory_name '. For instance, 
					if there is a subfolder called ' stuff ' within your current 
					directory, typing ' cd stuff ' will make ' stuff ' your current 
					working directory. To move up to the parent directory 
					(the one above your current directory) type ' cp .. '. 
					For future reference one-dot/period ' . ' means your current working directory, 
					while two-dots/periods ' .. ' means the parent directory. 
					</p>
				</div>               
            </div> 
			<!-- cd example -->
			<div class="well" style="margin-top: 50px;">
                <p>
					Examples of <b>cd</b> command
				</p>                
                <code>$ cd stuff</code><br />
				<code>$ cd ../</code><br />
                <code>$ cd stuff/sub_stuff/sub_sub_stuff</code><br />
				<code>$ cd ../super_stuff/stuff/sub_stuff</code><br />
            </div>
			<!-- pwd command -->
			<div class="row-fluid">
                <p class="lh-2" style="margin-top: 25px;">
					It's easy to get lost while traversing through your file-system. 
					A good command to know is 'pwd' which prints the absolute pathname
					of your current working directory. for instance, if you were in 
					the 'IT' director, whose parent is home, whose parent is 'stuff', 
					'pwd' would print '/stuff/home/IT' or something along those lines.
				</p>               
            </div> 
			<!-- pwd exmaple -->
			<div class="well" style="margin-top: 50px;">
                <p>
					Example of <b>pwd</b> command and output
				</p>                
                <code>$ pwd</code><br />
				<code>/stuff/home/IT</code><br />
            </div>
			<!-- mkdir command -->
			<div class="row-fluid">
                <div class="lh-2" style="margin-top: 25px;">
					<h2>Making New Directories</h2>
					<p>
					Making a new directory is very simple. The mkdir accomplishes
					this task. 'mkdir test' will create a new directory 'test' in the 
					current working directory. A bit of a side note: ~ is another 
					way of stating 'home directory'. So, 'mkdir ~/test' will make 
					a new directory 'test' in your home directory, no matter where 
					your current working directory is.
					</p>
				</div>               
            </div> 
			<!-- mkdir example -->
			<div class="well" style="margin-top: 50px;">
                <p>
					Example of <b>mkdir</b> command and output
				</p>                
                <code>$ mkdir test</code><br />
				<code>$ ls -1</code><br />
				<code>apple.img</code><br />
                <code>Folder1</code><br />
				<code>Folder2</code><br />
                <code>someFile.txt</code><br />
				<code>stuff</code><br />
				<code>test</code><br />
            </div>
			<!-- ';' usage, finding out command functionality -->
			<div class="row-fluid">
                <div class="lh-2" style="margin-top: 25px;">
					<h2>Additonal Notes</h2>
					<p>
					In order to call multiple comamnds on the same line, separate each
					with a semi-colon. For instance: 'ls -1; mkdir test' will first call
					the 'ls' command and then the 'mkdir' command. Handy if you want to perform
					multiple operations in a row, quickly.
					</p>
					<p>
					One last thing: All commands often have a wide range of functions
					or variations which they can perform by 'adding' thing to them.
					For instance, typing 'ls -l filename' will display the file
					permissions for that file (more on that later). To display a list
					explaining the full functionality for <b>most</b> commands, simply type the
					command by itself (e.g. 'ls').
					</p>
				</div>               
            </div> 
        </div>
    </div>
    <div class="row-fluid">
        <div class="clear100"></div>
    </div>
</body>

</html>