$(document).ready(function(){


	function disableF5(e) {
		if(e.keyCode == 116 || e.keyCode == 82 || e.keyCode == 17) e.preventDefault(); 
	};
	
	
	$(document).on("keydown", disableF5);

 });
 
 