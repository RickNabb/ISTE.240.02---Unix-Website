function init() {
		if(localStorage.log)
		{
			console.log("here");
			document.getElementById('cmd_line_p_content').innerHTML+= (localStorage.log);
			var txtbox = document.getElementById('txt');
			txtbox.focus();
		}
	}
	function retrieve() {
    	var txtbox = document.getElementById('txt');
    	var value = txtbox.value;
    	if(value.substring(0,3) == "pwd")
    	{
			document.getElementById('cmd_line_p_content').innerHTML= ("<p> >$~ "+value+" </p>"+"<p id=\"tabbed\">"+window.location.pathname+"</p>" +document.getElementById("cmd_line_p_content").innerHTML);
			localStorage.log= document.getElementById('cmd_line_p_content').innerHTML;
			txtbox.value='';
			txtbox.focus();
			
    	}
    	else if(value.substring(0,3) == "cd ")
    	{
			document.getElementById('cmd_line_p_content').innerHTML = ("<p> >$~ " + value+"</p>" + document.getElementById("cmd_line_p_content").innerHTML);
			localStorage.log= document.getElementById('cmd_line_p_content').innerHTML;
    		window.location.replace(value.substring(3) + "");
            txtbox.value='';
            txtbox.focus();
    	}
        else if(value.substring(0,2) =="cd")
        {
            document.getElementById('cmd_line_p_content').innerHTML= ("<p> >$~ "+value+" </p>"+"<p id=\"tabbed\">proper syntax for change directory is cd \<directory_desired\></p>" +document.getElementById("cmd_line_p_content").innerHTML);
    		localStorage.log= document.getElementById('cmd_line_p_content').innerHTML;
			txtbox.value='';
			txtbox.focus();
        }
    	else if(value.substring(0,2) == "ls")
    	{
			var ls= window.location.pathname;
			var numIndex = ls.lastIndexOf("/");
			
			document.getElementById('cmd_line_p_content').innerHTML= ("<p> >$~ " + value+" </p>"+"<p id=\"tabbed\">"+ files +"</p>" +document.getElementById("cmd_line_p_content").innerHTML);
			localStorage.log= document.getElementById('cmd_line_p_content').innerHTML;
            txtbox.value='';
            txtbox.focus();
    	}
        else if(value.substring(0,2) == "wc") 
        {
            var stringOfText = document.getElementById('content').innerHTML;
            var lengthWithSpaces = stringOfText.length;
            var lengthWithoutSpaces = stringOfText.replace(/ /g,'').length;
            
            document.getElementById('cmd_line_p_content').innerHTML= ("<p> >$~ " + value+" </p>"+"<p id=\"tabbed\">Length With Spaces:"+ lengthWithSpaces + " | Length Without Spaces:" +lengthWithoutSpaces+"</p>" +document.getElementById("cmd_line_p_content").innerHTML);
    		localStorage.log= document.getElementById('cmd_line_p_content').innerHTML;
            txtbox.value='';
            txtbox.focus();
        }
		else if(value.substring(0,8) =="checkin ")
		{
			var nameToSend = value.substring(8) +"";
			$.ajax({
			  type: "POST",
			  url: "assets/scripts/insert.php",
			  data: {"name":nameToSend},
			});
			console.log(nameToSend);
			document.getElementById('cmd_line_p_content').innerHTML = ("<p> >$~ " + value+"</p>" + document.getElementById("cmd_line_p_content").innerHTML);
			localStorage.log= document.getElementById('cmd_line_p_content').innerHTML;
            txtbox.value='';
            txtbox.focus();
			
		}
		else if(value.substring(0,4)=="pull")
		{
			$.ajax({
			type:"GET",
			url:"assets/scripts/pull.php",
			datatype:"html",
			success:function(response){
			document.getElementById('cmd_line_p_content').innerHTML= ("<p> >$~ "+value+" </p>"+ response +document.getElementById("cmd_line_p_content").innerHTML);
			}
			});
			localStorage.log= document.getElementById('cmd_line_p_content').innerHTML;
			txtbox.value='';
    		txtbox.focus();
		}
        else if(value.substring(0,3) == "man")
        {
            if(value.substring(4) =="pwd")
            {
                document.getElementById('cmd_line_p_content').innerHTML= ("<p> >$~ "+value+" </p>"+"<p id=\"tabbed\">lists the current path from root</p>" +document.getElementById("cmd_line_p_content").innerHTML);
        		localStorage.log= document.getElementById('cmd_line_p_content').innerHTML;
    			txtbox.value='';
    			txtbox.focus();
            }
            else if(value.substring(4) == "ls")
            {
                document.getElementById('cmd_line_p_content').innerHTML= ("<p> >$~ "+value+" </p>"+"<p id=\"tabbed\">lists the files within your current dr</p>" +document.getElementById("cmd_line_p_content").innerHTML);
            	localStorage.log= document.getElementById('cmd_line_p_content').innerHTML;
    			txtbox.value='';
    			txtbox.focus();
            }
            else if(value.substring(4) == "cd")
            {
                document.getElementById('cmd_line_p_content').innerHTML= ("<p> >$~ "+value+" </p>"+"<p id=\"tabbed\">changes your current directory within the file structure EX. cd index.php | Changes current page to index.php</p>" +document.getElementById("cmd_line_p_content").innerHTML);
            	localStorage.log= document.getElementById('cmd_line_p_content').innerHTML;
    			txtbox.value='';
    			txtbox.focus();
            }
            else if(value.substring(4) == "wc")
            {
                document.getElementById('cmd_line_p_content').innerHTML= ("<p> >$~ "+value+" </p>"+"<p id=\"tabbed\">Counts characters (with and without space) and number of words in the main content</p>" +document.getElementById("cmd_line_p_content").innerHTML);
            	localStorage.log= document.getElementById('cmd_line_p_content').innerHTML;
    			txtbox.value='';
    			txtbox.focus();
            }
			else if(value.substring(4) == "checkin")
			{
				document.getElementById('cmd_line_p_content').innerHTML= ("<p> >$~ "+value+" </p>"+"<p id=\"tabbed\">This is a non unix command added to add someone who wants to check in to the site.</p>" +document.getElementById("cmd_line_p_content").innerHTML);
            	localStorage.log= document.getElementById('cmd_line_p_content').innerHTML;
    			txtbox.value='';
    			txtbox.focus();
			}
			else if(value.substring(4) == "pull")
			{
				document.getElementById('cmd_line_p_content').innerHTML= ("<p> >$~ "+value+" </p>"+"<p id=\"tabbed\">This is a non unix command added to see who checked into this site through the command line</p>" +document.getElementById("cmd_line_p_content").innerHTML);
            	localStorage.log= document.getElementById('cmd_line_p_content').innerHTML;
    			txtbox.value='';
    			txtbox.focus();
			}
            else
            {
                document.getElementById('cmd_line_p_content').innerHTML= ("<p> >$~ "+value+" </p>"+"<p id=\"tabbed\">Command doesn't exist or hasn't been presented with a help description</p>" +document.getElementById("cmd_line_p_content").innerHTML);
            	localStorage.log= document.getElementById('cmd_line_p_content').innerHTML;
    			txtbox.value='';
    			txtbox.focus();
            }
        }
        else if(value.substring(0,4) == "help")
        {
            document.getElementById('cmd_line_p_content').innerHTML= ("<p> >$~ "+value+" </p>"+"<p id=\"tabbed\">List of usable Commands: pwd | ls | cd | wc | man | help | checkin | pull</p>"+"<p id=\"tabbed\">For more help on each command, type \"man \<command_name\>\"</p>" +document.getElementById("cmd_line_p_content").innerHTML);
            localStorage.log= document.getElementById('cmd_line_p_content').innerHTML;
    		txtbox.value='';
    		txtbox.focus();
        }
		else
		{
			document.getElementById('cmd_line_p_content').innerHTML= ("<p> >$~ Invalid Syntax: " + value + "</p>" +document.getElementById("cmd_line_p_content").innerHTML);
			localStorage.log= document.getElementById('cmd_line_p_content').innerHTML;
			txtbox.value='';
			txtbox.focus();

		}
	}
	function checkKey(e) {
        if(window.event)
        {
            var keyCode = window.event.keyCode;
            if(keyCode==13){
                retrieve();
            }
        }
        else
        {
            var keyCode = e.which;
            if(keyCode==13){
                retrieve();
            }
        }
	}
	function cmd_visible() {
		if(document.getElementById("cmd_line").className=="invisible")
		{
			document.getElementById("cmd_line").className="shown";
			document.getElementById("cmd_line_show").className="expanded";
            document.getElementById("collapse-div").className="expand-empty";
		}
		else if(document.getElementById("cmd_line").className=="shown")
		{
			document.getElementById("cmd_line").className="invisible";
			document.getElementById("cmd_line_show").className="collapsed";
            document.getElementById("collapse-div").className="collapse-empty"
		}
	}