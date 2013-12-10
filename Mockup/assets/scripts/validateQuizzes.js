function validateQuestions() {
		// get all radio inputs
		var answers = document.getElementsByTagName("input");
		var answersRight = 0;
		var numQuestions = answers.length/4;
		
		// loop through all input besides submit button (last input element)
		for (var i=0; i<answers.length; i++){
			// reset values
			answers[i].parentNode.parentNode.style.backgroundColor="#FAFAFA";
			answers[i].parentNode.parentNode.style.border ="none";
			answers[i].parentNode.parentNode.style.boxShadow ="none";
			if (answers[i].checked){
				if(answers[i].value=='correct'){
					// set color green, stylize
					answers[i].parentNode.parentNode.style.backgroundColor ="#66CD00";
					answers[i].parentNode.parentNode.style.border ="1px gray";
					answers[i].parentNode.parentNode.style.boxShadow ="2px 2px 10px black";
					answersRight++;
				} else {
					//set color to red, stylize
					answers[i].parentNode.parentNode.style.backgroundColor="red";
					answers[i].parentNode.parentNode.style.border ="1px gray";
					answers[i].parentNode.parentNode.style.boxShadow ="2px 2px 10px black";
				}
			} 
		}
		// display score
		document.getElementById('results').innerHTML="You scored a <b>"+answersRight+"/"+numQuestions+"</b>!";
}