var querydegname;
var querycrsname;
	
$(document).ready(function(){
	$('.addrow').show();
	$('.updaterow').hide();
	$('.tablerow').each(function(){
		$(this).find('.deleteicon').click(function(){
			var degname=$(this).parent().parent().find('.degname').text();
			var crsname=$(this).parent().parent().find('.crsname').text();
			
			var warn=confirm("Are You Sure You Want to Delete!!!");
			if(warn){
				if(college_name = '' && interview_date == ''){
					 document.getElementById("responce").innerHTML = "";
					return;
				}else{
					if (window.XMLHttpRequest) {
						// code for IE7+, Firefox, Chrome, Opera, Safari
						xmlhttp = new XMLHttpRequest();
					} else {
						// code for IE6, IE5
						xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
					}
					xmlhttp.onreadystatechange = function() {
						if (this.readyState == 4 && this.status == 200) {
							document.getElementById("responce").innerHTML = this.responseText;
							location.reload();
						}
					};
					xmlhttp.open("GET","deletecrs.php?degname="+degname+'&crsname='+crsname,true);
					xmlhttp.send();
				}
			}else{
				
			}
		});
		
		$(this).find('.editicon').click(function(){
			$('.tablerow').removeClass('updatebg');
			$(this).parent().parent().addClass('updatebg');
			$('.addrow').hide();
			$('.updaterow').show();
			console.log($(this).parent().parent().find('.crsstatus').text());
			querydegname=$(this).parent().parent().find('.degname').text();
			
			querycrsname=$(this).parent().parent().find('.crsname').text();
			$('.ucrsname').val($(this).parent().parent().find('.crsname').text());
			$('.updatedegname').val($(this).parent().parent().find('.degname').text());
			$('.updatestatus').val($(this).parent().parent().find('.crsstatus').text());
			$('.updatebtn').show();
		});
	});
});
function cancel(){
	$('.tablerow').removeClass('updatebg');
	$('.addrow').show();
	$('.updaterow').hide();
}
function updatefn(){
	var updatecrsname=$('.ucrsname').val();
	var updatedegname=$('.updatedegname').val();
	var updatestatus=$('.updatestatus').val();
	
	if(updatecrsname == '' && updatestatus == '' && updatedegname == ''  ){
		document.getElementById("responce").innerHTML = "";
		return;
	}else{
		if (window.XMLHttpRequest) {
			// code for IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp = new XMLHttpRequest();
		} else {
			// code for IE6, IE5
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				document.getElementById("responce").innerHTML = this.responseText;
				location.reload();
			}
		};
		xmlhttp.open("GET","deletecrs.php?updatedegname="+updatedegname+'&updatecrsname='+updatecrsname+'&updatestatus='+updatestatus+'&querydegname='+querydegname+'&querycrsname='+querycrsname,true);
		xmlhttp.send();
	}
	
}

function valuechk(valget){
	if(valget.length > 0){
		$('.updatebtn').show();
	}else{
		$('.updatebtn').hide();
	}
	
}



