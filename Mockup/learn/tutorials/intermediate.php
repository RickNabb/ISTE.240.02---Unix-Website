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
	<?php include('include_head.php'); ?>
	
</head>

<body onload="init();">
	<?php include('include/include_cmd.php'); ?>
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
            <h2>Intermediate Unix User Guide <small>For those with a bit of experience</small></h2>
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
                            <td>cp</td>
                            <td>Copy files from one directory to another</td>
                        </tr>
                        <tr>
                            <td>mv</td>
                            <td>Move or rename files, depending on syntax</td>
                        </tr>
                        <tr>
                            <td>rm</td>
                            <td>Permanently delete file</td>
                        </tr>
                        <tr>
                            <td>rmdir</td>
                            <td>Permanently delete directory</td>
                        </tr>
						<tr>
                            <td>clear</td>
                            <td>Clear terminal window display</td>
                        </tr>
						<tr>
                            <td>cat</td>
                            <td>Display contents of file</td>
                        </tr>
						<tr>
                            <td>less</td>
                            <td>Display contents of fie in a paged format, additional options to search/display contents of file</td>
                        </tr>
						<tr>
                            <td>grep</td>
                            <td>Search file contents for certain patterns. Very powerful.</td>
                        </tr>
						<tr>
                            <td>wc</td>
                            <td>Display line, word and character count of file, ability to display some or all of these.</td>
                        </tr>
                    </tbody>
                </table>
            </div>
			<!-- Main tutorial content -->
            <div class="row-fluid">
				<!-- cp command -->
                <div class="lh-2" style="margin-top: 25px;">
					<h2>Basic File Changes</h2>
					<p>
					Sometimes you need to copy files from one directory to another. 
					The 'cp' command accomplishes this task. The syntax is 
					cp file1 file2. File1 is moved to the location specified in file2.
					For instance 'cp text.txt stuff/text_files' will move file 
					'text.txt' in the current directory to folder 'text_files' 
					in subfolder 'stuff' of the current directory. 
					</p>
				</div>               
            </div>
            <div class='clear25'></div>
            <div class="well">
				<!-- cp example -->
                <p>
					Example of <b>cp</b> command with output below
				</p>                
                <code>$ ls -1</code><br />
				<code>$ cp text.txt stuff/text_files</code><br />
                <code>$ cd text_files </code><br />
				<code>$ ls -1</code><br />
                <code>text.txt</code><br />
            </div>
            <div class="row-fluid">
				<!-- mv command - move files -->
                <p class="lh-2" style="margin-top: 25px;">
					Moving a file has a similar syntax. the 'mv file1 file2' moves 
					the file specified to the location/path indicated. 'mv info.cfg 
					config' would move info.cfg to subfolder 'config' in the current 
					directory.  
				</p>               
            </div> 
            <div class='clear25'></div>
			<div class="well">
				<!-- mv example - move files -->
                <p>
					Examples of <b>mv</b> command
				</p>                
                <code>$ ls -1</code><br />
				<code>info.cfg</code><br />
				<code>extra.txt</code><br />
                <code>$ mv info.cfg config</code><br />
				<code>$ ls -1</code><br />
				<code>extra.txt</code><br />
				<code>$ cd config</code><br />
				<code>$ ls -1</code><br />
				<code>info.cfg</code><br />
            </div>
			<div class="row-fluid">
				<!-- mv command - rename files-->
                <p class="lh-2" style="margin-top: 25px;">
					Another useful feature of mv is that it can rename files. 
					The command 'mv old_stuff.txt new_stuff.txt' will rename old_stuff.
					txt to new_stuff.txt. Notice in the command syntax that both files
					are in the same directory. Assuming that both files are in the 
					home directory, 'mv ./oldstuff.txt ./new_stuff.txt' would have 
					the same effect.
				</p>               
            </div> 
            <div class='clear25'></div>
			<div class="well" >
				<!-- mv example - rename files-->
                <p>
					Example of <b>mv</b> command and output
				</p>                
                <code>$ ls -1</code><br />
				<code>info.cfg</code><br />
				<code>extra.txt</code><br />
                <code>$ mv info.cfg new_info.cfg</code><br />
				<code>$ ls -1</code><br />
				<code>new_info.cfg</code><br />
				<code>extra.txt</code><br />
            </div>
			<div class="row-fluid">
				<!-- rm and rmdir commands -->
                <p class="lh-2" style="margin-top: 25px;">
					If you want to remove files or folders instead of moving them, 
					you would use the 'rm' and 'rmdir' commands. 'rm' removes the 
					specified file while 'rmdir' removes the specified folder. Be 
					careful though: These actions are permanent and are executed 
					immediately, without any warning prompt.
				</p>               
            </div> 
			<div class="well" style="margin-top: 50px;">
				<!-- rm and rmdir examples -->
                <p>
					Example of <b>rm</b> and <b>rmdir</b> command and output
				</p>                
                <code>$ ls -1</code><br />
				<code>test</code><br />
				<code>info.cfg</code><br />
				<code>apple.img</code><br />
                <code>$ rm info.cfg</code><br />
				<code>$ ls -1</code><br />
				<code>test</code><br />
				<code>apple.img</code><br />
				<code>$ rmdir test</code><br />
				<code>$ ls -1</code><br />
				<code>apple.img</code><br />
            </div> 
			<div class="row-fluid">
				<!-- cat command -->
                <div class="lh-2" style="margin-top: 25px;">
					<h2>Displaying File Contents</h2>
					<!-- CAT function-->
					<p>
					There are numerous commands to display file contents. 'cat' is 
					the most basic of these commands. 'cat file_name' 
					displays the contents of the specified file on screen, but only 
					as much fits in the terminal window. Any extra text in simply 
					not displayed. 
					</p>
					<!--Clear command-->
					<p>
					At this point, you may find that thethe terminal window is
					becoming congested with information that you don't necessarily need.
					output and information. A simple command to remember is 
					'clear', which clears the terminal window. 
					</p>
				</div>               
            </div> 
			<div class="well" style="margin-top: 50px;">
				<!-- cat example-->
                <p>
					Example of <b>cat</b> command and output.
					File 'hello_world.txt' contains the text 'Hello, World!'
				</p>                
                <code>$ ls -1</code><br />
				<code>hello_world.txt</code><br />
				<code>$ cat hello_world.txt</code><br />
				<code>Hello, World!</code><br />
            </div>   
			<div class="row-fluid">
				<!-- advanced file reading commands -->
                <p class="lh-2" style="margin-top: 25px;">
					<!-- less command -->
					A better command to display a whole file is 'less'. 'less' 
					displays the specified file like 'cat' but writes the content 
					onto the window a page at a time, parsing all of the content 
					of a file. By pressing the space bar, you can go onto the next 
					page. You can also press 'q' to quit reading.
					<!-- head, tail commands -->
					The 'head' and 'tail' commands display the first and last 10 
					lines of the specified file respectively. These are used where 
					you only want to see header or footer information in a document
					, such as a title(s) or citation information.
					<!-- less command - search functionality -->
					The 'less' command can also be used to search a file for a keyword 
					(literal matching pattern). For instance, after inputting 'less stuff.txt', 
					press forward slash ' / ' and then the word you wish to search for. 
					So: 'less stuff.txt' and then '/math' would search stuff.txt for 'math'. 
					Press 'n' to search for the next occurrence of the word.
				</p>               
            </div> 
			<div class="well" style="margin-top: 50px;">
				<!-- less example -->
                <p>
					Example of <b>less</b> command and output
				</p>                
                <code>$ ls -1</code><br />
				<code>hello_world_v2.txt</code><br />
				<code>$ less hello_world_v2.txt</code><br />
				<code>Hello, World! Blah blah blah filler text  blah filler text</code><br />
				<code>Hello, World! Blah blah blah filler text  blah filler text</code><br />
				<code>Hello, World! Blah blah blah filler text  blah filler text</code><br />
				<code>Hello, World! Blah blah blah filler text  blah filler text</code><br />
				<code>Hello, World! Blah blah blah filler text  blah filler text</code><br />
				<code>Something different! Blah blah blah filler text  blah filler text</code><br />
				
				<p>After typing '/Something'</p>
				<code>Something different! Blah blah blah filler text  blah filler text</code><br />
            </div> 
			<div class="row-fluid">
				<!-- GREP and WC-->
                <div class="lh-2" style="margin-top: 25px;">
					<h2> GREP and WC</h2>
					<!-- Grep Command -->
					<p>
					A more powerful command to search for keywords is 'grep'. Grep searches 
					for specified words or patterns from the specified file. for instance, 
					'grep math stuff.txt' searches for the word 'math' within file 'stuff.txt'. 
					It is important to note that grep is case sensitive. In the above example, 
					grep will return matching instances of 'math' but NOT 'Math' or 'MATH', etc. 
					'grep -i' performs a case-INsensitive search. Grep is much more flexible then 
					less. Other options besides '-i' are '-v', which returns lines that DON'T 
					Match, '-n' which return line numbers along with the matching lines and '-c' 
					which only returns the total number of matched lines.
					</p>

					<!-- wc command -->
					<p>
					Another useful command is 'wc' which returns the total word count of a file. 
					'wc -w' returns the word count of a file, while 'wc -l' returns the line count 
					of a file.'wc' returns the word, line and character count of a file.
					</p>
				</div>               
            </div> 
			<div class="well" style="margin-top: 50px;">
				<!-- example of wc -->
                <p>
					Example of <b>wc</b> command and output
				</p>   
				<code>$ ls -1</code><br />
				<code>hello_world.txt</code><br />
				<code>hello_world_v2.txt</code><br />
				<code>$ less hello_world.txt</code><br />
				<code>Hello, World!</code><br />
				<code>$ wc hello_world.txt</code><br />
				<code>1  2  13  hello_world.txt</code><br />
				<p>1 = Lines</p>
				<p>2 = Words</p>
				<p>13 = Characters</p>
				<code>$ wc hello_world.txt hello_world_v2.txt</code><br />
				<code>1   2    13    hello_world.txt</code><br />
				<code>30  175  1000  hello_world_v2.txt</code><br />
				<code>31  172  1013  total</code><br />
            </div>   
        </div>
    </div>
    <div class="row-fluid">
        <div class="clear100"></div>
    </div>
	<div id="collapse-div"></div>
</body>

</html>