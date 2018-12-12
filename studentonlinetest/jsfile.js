var querydate;
var queryclgnam;
	
$(document).ready(function(){
	$('.addrow').show();
	$('.updaterow').hide();
	$('.tablerow').each(function(){
		$(this).find('.deleteicon').click(function(){
			var collegename=$(this).parent().parent().find('.colname').text();
			var interviewdate=$(this).parent().parent().find('.datetr').text();
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
					xmlhttp.open("GET","deleteclg.php?collegename="+collegename+'&interviewdate='+interviewdate,true);
					xmlhttp.send();
				}
			}else{
				
			}
		});
		
		$(this).find('.editicon').click(function(){
			$('.tablerow').removeClass('updatebg');
			$(this).parent().parent().addClass('updatebg');
			$('.addrow').hide();
			$('.updaterow,.updatebtn').show();
			
			//console.log($(this).parent().parent().find('.colstatus').val());
			querydate=$(this).parent().parent().find('.datetr').text();
			queryclgnam=$(this).parent().parent().find('.colname').text();
			$('.updatecalender').val($(this).parent().parent().find('.datetr').text());
			$('.updateclgname').val($(this).parent().parent().find('.colname').text());
			$('.updatestatus').val($(this).parent().parent().find('.colstatus').text());
		});
	});
});
function cancel(){
	$('.tablerow').removeClass('updatebg');
	$('.addrow').show();
	$('.updaterow').hide();
}
function updatefn(){
	var updateintdate=$('.updatecalender').val();
	var updateclgname=$('.updateclgname').val();
	var updateclgsts=$('.updatestatus').val();
	
	if(updateintdate == '' && updateclgname == '' && updateclgsts == ''  ){
		document.getElementById("responce").innerHTML = "";
		return;
	}else{
		if(updateintdate!='' && updateclgname!='' && updateclgsts!='' ){
				
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
			xmlhttp.open("GET","deleteclg.php?updateclgname="+updateclgname+'&updateintdate='+updateintdate+'&updateclgsts='+updateclgsts+'&querydate='+querydate+'&queryclgnam='+queryclgnam,true);
			xmlhttp.send();
		}else{
			alert('please fill out all fields!!!.');
		}
		
	
}
}

function valuechk(valget){
	if(valget.length > 0){
		$('.updatebtn').show();
	}else{
		$('.updatebtn').hide();
	}
	
}

