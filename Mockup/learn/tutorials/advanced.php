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
            <h2>Advanced Unix User Guide <small>For those with more experience</small></h2>
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
                            <td>chmod</td>
                            <td>Change file permissions</td>
                        </tr>
                        <tr>
                            <td>umask</td>
                            <td>View and Change the default file permission for folders and directories </td>
                        </tr>
                        <tr>
                            <td>alias</td>
                            <td>Replace a word with another string. It is mainly used for abbreviating system command(s).</td>
                        </tr>
						<tr>
                            <td>ps</td>
                            <td>Display running processes</td>
                        </tr>
						<tr>
                            <td>w</td>
                            <td>Display quick summary of every logged on user</td>
                        </tr>
						<tr>
                            <td>tar</td>
                            <td>Used to compress and uncompress files.</td>
                        </tr>
						
                    </tbody>
                </table>
            </div>
			<!-- Main tutorial content -->
            <div class="row-fluid">
                <div class="lh-2" style="margin-top: 25px;">
				<!-- File Permission introduction-->
				<h2>File Permissions</h2>
					<p>
					Every file and folder has permissions set for who can do what with
					them. These three basic groups are users, group and others. 
					By default on most unix based systems, permissions are set as 0022.					
					This is also known as the ' mask '. The first digit denotes special
					permissions, the second user permissions, the third group and the 
					fourth others. '0' designates 'determined by the program' or 'all' 
					permissions or 'read, write, execute'. '2' denotes 'read and execute'
					permissions only. Below is a table with the level of access each 
					digit signifies.
					</p>
				</div>               
            </div>
			<!-- File Permissions definitions -->
            <div class="well" style="margin-top: 50px;">
                <p>
					File Permissions when defining mask
				</p>                
                <code>0 - read, write, execute</code><br />
                <code>1 - read and write</code> <br />
                <code>2 - read and execute</code> <br />
                <code>3 - read only</code> <br />
                <code>4 - write and execute</code> <br />
                <code>5 - write only</code> <br />
                <code>6 - execute only</code> <br />
				<code>7 - no permissions</code> <br />
				
				<p style="margin-top: 10px;">
					File Permissions when defining individual file/folder permissions
				</p>                
                <code>0 - no permissions</code> <br />
                <code>1 - execute only</code> <br />
                <code>2 - write only</code> <br />
                <code>3 - write and execute</code> <br />
                <code>4 - read only</code> <br />
                <code>5 - read and execute</code> <br />
                <code>6 - read and write</code> <br />
				<code>7 - read, write, execute</code> <br />
            </div>
            <div class="row-fluid">
                <div class="lh-2" style="margin-top: 25px;">
					<!-- umask command -->
					<p>
					The umask command can be invoked to display the default mask
					and change it. Normally, it will display '0022' on most systems.
					</p>
					<p>
					Often, individual file or folder permissions will need to be changed.
					The 'chmod' command accomplishes this. 'ls -l' can be used to diplsay 
					the current file permissions of a specified file(s).
					</p>
					<p>
					NOTE: Be EXTREMELY careful when modifying the first or second digit.
					By restricting access, you could lock yourself out of accessing your
					own files/folders.
					</p>
				</div>     
            </div> 
			<div class="well" style="margin-top: 50px;">
				<!--UMASK example-->
                <p>
					Example of <b>umask</b> and <b>chmod</b> commands and outputs
				</p>   
				<code>$ umask</code><br />
				<code>0022</code><br />
				<code>$ umask 0027</code><br />
				<code>$ umask</code><br />
				<code>0027</code><br />
				<p style="margin-top: 10px;"> Above code changes to mask to remove all permissions from 
				'others'</p>
				
				<code>$ ls -l test.txt</code><br />
				<code>-rw-r--r-- 1 root root 8 2013-05-05 15:48 test.txt</code><br />
				<code>$ chmod 755 test.txt</code><br />
				<code>$ ls -l text.txt</code><br />
				<code>-rwer-er-e 1 root root 8 2013-05-05 15:49 test.txt</code><br />			
            </div>
			<div class="row-fluid">
				<!--alias command-->
                <div class="lh-2" style="margin-top: 25px;">
					<h2>Using Aliases</h2>
					<p>
					As you become more adept at using code, you may what to create your
					own 'commands'. The 'alias' command is used to replace a word or words 
					with another user defined string. This command is mainly used to abbreviate
					system commands. By simply inputting 'alias', a list of the current aliases 
					will be displayed.
					</p>
					<p>
					Alias can also be used to overwrite existing commands. For instance:
					"alias ls = 'ls -1'" will change ls so that by default it displays one
					file/directory per line.
					</p>
				</div>     
            </div> 
			<!--alias example-->
			<div class="well" style="margin-top: 50px;">
                <p>
					Example of <b>alias</b> command and output
				</p> 
				<code>$ ls</code><br />
				<code>a_file.txt</code><br />				
				<code>$ alias myCommand = 'ls'</code><br />
				<code>$ alias myCommand</code><br />
				<code>a_file.txt</code><br />
							
				<code>$ alias myOtherCommand = 'ls; cat a_file.txt'</code><br />
				<code>$ alias myOtherCommand</code><br />
				<code>a_file.txt</code><br />
				<code>This is the content of a_file.txt!</code><br />
			</div>
			<div class="row-fluid">
				<!--Redirection Operators-->
				<h2>Redirection Operators</h2>
                <div class="lh-2" style="margin-top: 25px;">
					<!--description of redirection operators-->
					<p>
					Redirection operators changes the normal stream of data so that it comes
					from or goes to a different source besides it's default. There are three
					redirection operators: the input redirection operator ( > ), the
					output redirection operator ( &lt; ) and pipes ( | ).
					</p>
					<!--input redirection operator '<' -->
					<p>
					The input redirection operator is used to point an input to something besides
					the keyboard. For instance: 'less &lt; file1.txt' directs the 'less' command to
					get it's input from 'file1.txt'. The input redirection operator is not often used
					because many commands have similar functionality.
					</p>
					<!--output redirection operator '>' -->
					<p>
					The output redirection operator is used to point an output to something besides
					the terminal display. For instance: 'cat file1.txt > file2.txt' directs the contents
					of 'file1.txt' to 'file2.txt' rather than displaying it on screen. The output must
					exist, or an error will occur.
					</p>
					<!--pipe operator '|' -->
					<p>
					A pipe sends to output of one command to another command. It is mainly used to chain
					commands and their outputs. For instance: 'ls | less' would send
					a list of the contents of the current folder ('ls') to 'less', resulting
					in a paged view of the content with all of the functionality provided 
					by the 'less' command. 
					</p>
				</div>     
            </div> 
			<div class="well" style="margin-top: 50px;">
				<!--PIPE example -->
                <p>
					Example of <b>pipe</b> usage with 'alias'
				</p> 
				<code>$ ls -1</code><br />
				<code>anImage.png</code><br />
				<code>aFile.cfg</code><br />
				<code>aFolder</code><br />
				<code>$ alias displayDirs = 'ls -al | grep ^d'</code><br />
				<code>$ displayDirs</code><br />				
				<code>aFolder</code><br />
			</div>
			<div class="row-fluid">
				<!-- Basic user interaction -->
				<h2>Interacting with Other Users</h2>
                <div class="lh-2" style="margin-top: 25px;">
					<!-- PS command -->
					<p>
					A simple command to display all of the running processes is 'ps'.
					It will display all currently active processes. The option
					'ps -a' will display all active processes of all users.
					</p>
					
					<!-- W command -->
					<p>
					The 'w' commands incorporates 'ps -a' as well as the 'who' and
					'uptime' commands to give a summary of every user logged onto
					a computer. The information displayed usually includes:
					username, the file name of their terminal (tty), login time,
					status and load on computer.
					</p>
				</div>
            </div> 
			<div class="well" style="margin-top: 50px;">
				<!-- W example (includes PS) -->
                <p>
					Example of <b>w</b> command and output
				</p> 
				<code>$ w</code><br />
				<code>11:12am up 608 day(s), 19:56,  6 users,  load average: 0.36, 0.36, 0.37</code><br />
				<code>User     tty       login@  idle  what</code><br />
				<code>smithj   pts/5      8:52am       w</code><br />
				<code>jonesm   pts/23    20Apr10    28 -bash</code><br />
				<code>singh    pts/12    16Apr10  5:29 /usr/bin/perl -w perl/test/program.pl</code><br />				
			</div>
			<div class="row-fluid">
                <div class="lh-2" style="margin-top: 25px;">
					<!-- write command -->
					<p>
					The write command can be used to communicate with other active 
					users. By inputting 'write username', the terminal will begin to
					accept messages which will be sent to the user, assuming they
					exist. Ctrl+D will terminate the write session. In the event that
					the user is logged into multiple terminals, you'll need to specify the
					tty (see below).
					</p>
				</div>
            </div> 
			<div class="well" style="margin-top: 50px;">
				<!-- write example -->
                <p>
					Example of <b>write</b> command and output
				</p> 
				<code>$ write bob pts/bobsterminal</code><br />
				<code>Hi there Bob!</code>
				<p  style="margin-top: 10px;">
					Output on Bob's end will look something like:
				</p>
				<code>Message from yourusername@place on pts/myterminal at 12:00 ...</code><br />
				<code>Hi there Bob!</code>
			</div>
			<div class="row-fluid">
				<h2>Other Commands</h2>
				<!-- other commands -->
                <div class="lh-2" style="margin-top: 25px;">
					<!-- GNU notice -->
					<p>
					<b>NOTE:</b> This tutorial assumes you have the GNU version of the tar 
					archiving utility.
					Other versions may not have the same functionality.
					</p>
					<!-- TAR command -->
					<p>
					The 'tar' command, which stands for 'tape archiving' allows files 
					and file systems to be stored on magnetic tape. However, it's 
					mainly used to compress and uncompress files. 
					</p>
					
					<p>
					To combine multiple files into a single file, the syntax is 
					'tar -cvf file.tar inputfile1 inputfile2...'.
					The options MUST be in the order -cvf, however the
					'v' option is not necessary, it simply displays files
					as they are added to the zip file. Additionally, if the 'f' 
					option is not 
					specified, it will create a tape archive instead of a local 
					compressed file.
					</p>
					
					<p>
					To zip a list of files together instead of just combining them all,
					append the 'z' option in between 'v' and 'f' (i.e. -cvzf). This
					will zip the files as they are created.
					</p>
					
					<p>
					To unzip an archive, specify the options '-xvzf'. The 'x' is 
					the 'extracting' option, designating that the files within the specified
					archive are to be pulled from it.
					</p>
				</div>	
            </div> 
			<div class="well" style="margin-top: 50px;">
				<!-- TAR example -->
                <p>
					Example of <b>tar</b> command syntax
				</p> 
				<code>$ tar -cvzf myArchive.tar.gz this.txt that.cfg</code><br />
				<code>$ tar -xvzf myArchive.tar.gz</code><br />
			</div>
			<div class="row-fluid">
                <div class="lh-2" style="margin-top: 25px;">
					<!-- !! operator -->
					<p>
						A good to know operator is '!!'. It simply calls the last 
						command again wherever it's placed. See below for an example.
					</p>
				</div>	
            </div> 
			<div class="well" style="margin-top: 50px;">
				<!-- !! syntax example -->
                <p>
					Example of <b>!!</b> operator syntax
				</p> 
				<code>$ ls -1</code><br />
				<code>a_file.txt</code><br />				
				<code>a_image.jpg</code><br />	
				<code>a_folder</code><br />	
				<code>$ !! | grep ^d</code><br />
				<code>a_folder</code><br />
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