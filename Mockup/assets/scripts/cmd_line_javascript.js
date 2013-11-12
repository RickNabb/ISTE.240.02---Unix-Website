function init() {
		if(localStorage.log)
		{
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
			document.getElementById('cmd_line_p_content').innerHTML= ("<p> $ "+value+" returned: "+window.location.pathname+"</p>" +document.getElementById("cmd_line_p_content").innerHTML);
			localStorage.log= document.getElementById('cmd_line_p_content').innerHTML;
			txtbox.value='';
			txtbox.focus();
			
    	}
    	else if(value.substring(0,3) == "cd ")
    	{
			document.getElementById('cmd_line_p_content').innerHTML = ("<p> $ " + value+"</p>" + document.getElementById("cmd_line_p_content").innerHTML);
			localStorage.log= document.getElementById('cmd_line_p_content').innerHTML;
    		window.location.replace(value.substring(3) + "");
            txtbox.value='';
            txtbox.focus();
    	}
    	else if (value.substring(0,2) == "ls")
    	{
			var ls= window.location.pathname;
			var numIndex = ls.lastIndexOf("/");
			
			document.getElementById('cmd_line_p_content').innerHTML= ("<p> $ " + value+"  returned: "+ files +"</p>" +document.getElementById("cmd_line_p_content").innerHTML);
			localStorage.log= document.getElementById('cmd_line_p_content').innerHTML;
            txtbox.value='';
            txtbox.focus();
    	}
		else
		{
			document.getElementById('cmd_line_p_content').innerHTML= ("<p> $ Invalid Syntax: " + value + "</p>" +document.getElementById("cmd_line_p_content").innerHTML);
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
		}
		else if(document.getElementById("cmd_line").className=="shown")
		{
			document.getElementById("cmd_line").className="invisible";
			document.getElementById("cmd_line_show").className="collapsed";
		}
	}